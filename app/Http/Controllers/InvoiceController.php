<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $search = request('search');

        if($search){

            $start = request('start');
            $end = request('end');

            $entrada = Invoice::whereBetween('day_payment' , [$start , $end])->where('mode' , '1')->get();

            $saida = Invoice::whereBetween('day_payment' , [$start , $end])->where('mode' , '0')->get();


        }else{


            $start = date('Y-m-1');
            $end = date('Y-m-30');
            
            $entrada = Invoice::whereBetween('day_payment' , [$start , $end])->where('mode' , '1')->get();

            $saida = Invoice::whereBetween('day_payment' , [$start , $end])->where('mode' , '0')->get();
           
        }
        
        return view('admin/financeiro' , ['entrada' => $entrada , 'saida' => $saida]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        if($request->tipo == 'unica'){

        if($request->day_payment > $agora ){
            $status = 'unpaid';
        }
        if($request->day_payment < $agora){
            $status = 'paid';
        }

        $invoice = new Invoice();
        $invoice->mode = $request->mode;
        $invoice->type = $request->tipo;
        $invoice->description = $request->description;
        $invoice->price = $request->price;
        $invoice->status = $status;
        $invoice->day_payment = $request->day_payment;

        $invoice->save();

        return redirect('dashboard/financeiro')->with('msg' , 'ENTRADA CADASTRADA COM SUCESSO');

    }

    if($request->tipo == 'parcela'){
     

        $explode = explode('/' , $request->js_parcelas);

        $i = 0;
        foreach($explode as $chave => $valor ){
            $agora = date('Y-m-d');
                $i++;


                $resultado = date('Y-m-d', strtotime("+{$valor} days",strtotime($agora)));


                if($agora > $resultado ){
                    $statuss = 'unpaid';
                }
                if($agora < $resultado){
                    $statuss = 'paid';
                }

                $status = 'unpaid';

                $invoice = new Invoice();
                $invoice->mode = $request->mode;
                $invoice->type = $request->tipo;
                $invoice->description = $request->description;
                $invoice->price = $request->price;
                $invoice->status = $status;
                $invoice->day_payment = $resultado;
        
                $invoice->save();

        }

        return redirect('dashboard/financeiro')->with('msg' , 'ENTRADA CADASTRADA COM SUCESSO');

           
    }

       //dd($request , $agora , $status);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if($_GET['status'] == 'unpaid'){
            $status = 'paid';
            echo $status;
        }
        if($_GET['status'] == 'paid'){
            $status = 'unpaid';

            echo $status;
        }

        $atualiza = Invoice::findOrFail($id);

        $atualiza->status = $status;

        $atualiza->save();

        return redirect('dashboard/financeiro')->with('msg' , 'ENTRADA EDITADA COM SUCESSO');
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Invoice::findOrFail($id)->delete();
        return redirect('dashboard/financeiro')->with('msg' , 'DELETADO COM SUCESSO');
    }
}
