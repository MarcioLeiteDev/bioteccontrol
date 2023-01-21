<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;


class CustomerController extends Controller
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

            $customer = Customer::where(
                'name' , 'like' , '%' .$search.  '%' 
                )->orWhere(
                    'company' , 'like' , '%' .$search.  '%' 
                )->get();
        }else{

            $customer = Customer::orderBy('id' , 'desc')->cursorPaginate(10);
        }
        
        return view('admin/clientes' , ['customer' => $customer] );
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        
        $search = request('search');

        if ($search){

            $customer = Customer::where(
                'name' , 'like' , '%' .$search.  '%' 
                )->orWhere(
                    'company' , 'like' , '%' .$search.  '%' 
                )->get();
        }else{

            $customer = Customer::orderBy('id' , 'desc')->cursorPaginate(10);
        }
        
        return view('admin/orcamento_cliente' , ['customer' => $customer]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin/clientes_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $customer = new Customer();
        $customer->company = $request->company;
        $customer->name = $request->name;
        $customer->cnpj = $request->cnpj;
        $customer->cpf = $request->cpf;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->cep = $request->cep;
        $customer->street = $request->street;
        $customer->number = $request->number;
        $customer->complement = $request->complement;
        $customer->counter = $request->counter;
        $customer->city = $request->city;
        $customer->state = $request->state;

        $customer->save();

        return redirect('dashboard/clientes')->with('msg' , 'CADASTRADO COM SUCESSO');


    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        
        return view('admin/clientes_update' , ['customer' => $customer]);
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
       
        $customer = Customer::find($request->id);
        $customer->company = $request->company;
        $customer->name = $request->name;
        $customer->cnpj = $request->cnpj;
        $customer->cpf = $request->cpf;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->cep = $request->cep;
        $customer->street = $request->street;
        $customer->number = $request->number;
        $customer->complement = $request->complement;
        $customer->counter = $request->counter;
        $customer->city = $request->city;
        $customer->state = $request->state;

        $customer->save();

        return redirect('dashboard/clientes')->with('msg' , 'ATUALIZADO COM SUCESSO');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::findOrFail($id)->delete();

        return redirect('dashboard/clientes')->with('msg' , 'DELETADO COM SUCESSO');
    }
}
