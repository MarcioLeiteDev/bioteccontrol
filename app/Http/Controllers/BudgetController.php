<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Models\Customer;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Bus;

class BudgetController extends Controller
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

            $budget= Budget::where(
                'name' , 'like' , '%' .$search.  '%' 
                )->orWhere(
                    'company' , 'like' , '%' .$search.  '%' 
                )->get();
        }else{
            $budget = Budget::orderBy('id' , 'desc')->cursorPaginate(10);
        }


        return view('admin/orcamentos' , ['budget' => $budget ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/orcamentos_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $budget = new Budget();
        $budget->name = $request->name;
        $budget->company = $request->company;
        $budget->email = $request->email;
        $budget->phone = $request->phone;
        $budget->cep = $request->cep;
        $budget->street = $request->street;
        $budget->number = $request->number;
        $budget->complement = $request->complement;
        $budget->counter = $request->counter;
        $budget->city = $request->city;
        $budget->state = $request->state;
        $budget->service = $request->service;
        $budget->content = $request->content;
        $budget->price = $request->price;
        $budget->payment_method = $request->payment_method;
        $budget->data = date("Y-m-d");
        $budget->status = 1 ;
        $budget->warranty = $request->warranty;

        $budget->save();

        return redirect('./dashboard/orcamentos')->with('msg' , 'CADASTRADO COM SUCESSO');


        //dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $budget = Budget::findOrFail($id);

       return \PDF::loadView('admin.orcamento_pdf', compact('budget'))
       // Se quiser que fique no formato a4 retrato: ->setPaper('a4', 'landscape')
       ->download('orcamento_bio_control_pragas.pdf');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $budget = Budget::findOrFail($id);
        
        return view('admin/orcamentos_update' , ['budget' => $budget]);
    }

        /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function cad($id)
    {
        $customer = Customer::findOrFail($id);
        
        return view('admin/orcamentos_create2' , ['customer' => $customer]);
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
        $budget =  Budget::find($request->id);

        $budget->name = $request->name;
        $budget->company = $request->company;
        $budget->email = $request->email;
        $budget->phone = $request->phone;
        $budget->cep = $request->cep;
        $budget->street = $request->street;
        $budget->number = $request->number;
        $budget->complement = $request->complement;
        $budget->counter = $request->counter;
        $budget->city = $request->city;
        $budget->state = $request->state;
        $budget->service = $request->service;
        $budget->warranty = $request->warranty;
        $budget->content = $request->content;
        $budget->price = $request->price;
        $budget->payment_method = $request->payment_method;
        $budget->status = $request->status;
        
        $budget->save();

        if($request->status == 2){

            $agora = date('Y-m-d');

            $valor = $request->warranty;

            $resultado = date('Y-m-d', strtotime("+{$valor} months",strtotime($agora)));

            $service = new Service();
            $service->name = $request->name;
            $service->company = $request->company;
            $service->email = $request->email;
            $service->phone = $request->phone;
            $service->cep = $request->cep;
            $service->street = $request->street;
            $service->number = $request->number;
            $service->complement = $request->complement;
            $service->counter = $request->counter;
            $service->city = $request->service;
            $service->state = $request->state;
            $service->service = $request->service;
            $service->warranty = $resultado;
            $service->content = $request->content;
            $service->price = $request->price;
            $service->payment_method = $request->payment_method;
            $service->status = 1;

            $service->save();

        }

        return redirect('./dashboard/orcamentos')->with('msg' , 'EDITADO COM SUCESSO');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $budget = Budget::findOrFail($id)->delete();

        return redirect('./dashboard/orcamentos')->with('msg' , 'DELETADO COM SUCESSO');
    }
}
