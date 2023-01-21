<?php

namespace App\Http\Controllers;

use App\Models\Service;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
        $search = request('search');

        if ($search){

            $service= Service::where(
                'name' , 'like' , '%' .$search.  '%' 
                )->orWhere(
                    'company' , 'like' , '%' .$search.  '%' 
                )->get();
        }else{
            $service = Service::orderBy('id' , 'desc')->cursorPaginate(10);
        }

        return view('admin/servicos' , ['service' => $service]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

 
        
        return view('admin/servicos_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $agora = date('Y-m-d');

        $valor = $request->warranty;

        $resultado = date('Y-m-d', strtotime("+{$valor} months",strtotime($agora)));

        $service = new Service();
        $service->company = $request->company;
        $service->name = $request->name;
        $service->cpf = $request->cpf;
        $service->rg = $request->rg;
        $service->email = $request->email;
        $service->phone = $request->phone;
        $service->cep = $request->cep;
        $service->street = $request->street;
        $service->number = $request->number;
        $service->complement = $request->complement;
        $service->counter = $request->counter;
        $service->city = $request->city;
        $service->state = $request->state;
        $service->service = $request->service;
        $service->warranty = $resultado;
        $service->data = $agora;
        $service->content = $request->content;
        $service->price = $request->price;
        $service->payment_method = $request->payment_method;
        $service->status = 1;

        $service->save();

        return redirect('dashboard/servicos')->with('msg' , 'CADASTRADO COM SUCESSO');
       // dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = Service::findOrFail($id);

        return \PDF::loadView('admin.contrato_pdf', compact('service'))
        // Se quiser que fique no formato a4 retrato: ->setPaper('a4', 'landscape')
        ->download('contrato_bio_control_pragas.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::findOrFail($id);
       
        return view('admin/servicos_update' , ['service' => $service]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $agora = date('Y-m-d');

        $valor = $request->warranty;

        $resultado = date('Y-m-d', strtotime("+{$valor} months",strtotime($agora)));

        $service = Service::find($request->id);
        $service->company = $request->company;
        $service->name = $request->name;
        $service->cpf = $request->cpf;
        $service->rg = $request->rg;
        $service->email = $request->email;
        $service->phone = $request->phone;
        $service->cep = $request->cep;
        $service->street = $request->street;
        $service->number = $request->number;
        $service->complement = $request->complement;
        $service->counter = $request->counter;
        $service->city = $request->city;
        $service->state = $request->state;
        $service->service = $request->service;
        $service->warranty = $resultado;
        $service->content = $request->content;
        $service->price = $request->price;
        $service->payment_method = $request->payment_method;
        $service->status = $request->status;

        $service->save();

        return redirect('dashboard/servicos')->with('msg' , 'EDITADO COM SUCESSO');

        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id)->delete();

        return redirect('dashboard/servicos')->with('msg' , 'DELETADO COM SUCESSO');


    }
}
