<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('payment.index', [
            'payments'=>Guitar::all(),
            //'payments'=> self::getData(),
            'userInput'=>'<script>alert("hello")</script>'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('payment'); 
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

        $request->validate([
            'date'=>'required',
            'amount_in_words'=> 'required',
            'department'=> 'required' ,
            'payable_to'=> 'required',
            'discription'=> 'required',
            'initiated_by'=> 'required',
            'amount_in_figures'=>['required', 'integer'],
        ]);
        $payment = new Payment();
        $payment->date = $request->input('date');
        $payment->amount_in_words = $request->input('amount_in_words');
        $payment->amount_in_figures = $request->input('amount_in_words');
        $payment->payable_to = $request->input('full_name');
        $payment->discription = $request->input('discription');
        $payment->initiated_by = $request->input('initiated_by');
        $payment->department = $request->input('department');

        $payment->save();
        
        return redirect()->route('home.index');
        
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
    public function destroy($id)
    {
        //
    }
}
