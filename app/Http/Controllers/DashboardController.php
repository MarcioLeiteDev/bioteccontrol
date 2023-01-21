<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Models\Service;
use App\Models\Invoice;

use Illuminate\Http\Request;

class DashboardController extends Controller
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

            $start = $search('start');
            $end = $search('end');

            $budget = Budget::whereBetween('data' , [$start , $end])->get();

            $service = Service::whereBetween('data' , [$start, $end])->get();

            $renovacao = Service::whereBetween('warranty', [$start, $end])->get();

            $entrada = Invoice::whereBetween('day_payment' , [$start, $end])->where('status' , 'paid')->where('mode' , '1')->get();

            $saida = Invoice::whereBetween('day_payment' , [$start, $end])->where('status' , 'paid')->where('mode' , '0')->get();


        }else{
           
            $start = date('Y-m-1');
            $end = date('Y-m-30');

            $budget = Budget::whereBetween('data' , [$start, $end])->get();

            $service = Service::whereBetween('data' , [$start , $end])->get();

            $renovacao = Service::whereBetween('warranty', [$start, $end])->get();

            $entrada = Invoice::whereBetween('day_payment' , [$start, $end])->where('status' , 'paid')->where('mode' , '1')->get();

            $saida = Invoice::whereBetween('day_payment' , [$start, $end])->where('status' , 'paid')->where('mode' , '0')->get();

          

        }
       
        return view('admin/home' , [
            'budget' => $budget , 
            'service' => $service , 
            'renovacao' => $renovacao,
            'entrada' => $entrada,
            'saida' => $saida
            ]
        );
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
        //
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
    public function destroy()
    {
        //session();
        //session_destroy();
        return redirect('../');
    }
}
