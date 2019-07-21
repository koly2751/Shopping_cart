<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use\App\Sale;
use\App\Stock;
use\App\Account;
use\App\Invoice;
use Auth;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $stocks =Stock::all();
        $accounts=Account::all();

        if(!Invoice::find(1)){
            $invoice_id=1;

        }
        else{
            $invoice_id=Invoice::latest()->first()->id+1;
        }
    
        return view('admin.sale.create',compact('stocks','accounts','invoice_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         

        $i=0;
        $count=$request->count;
        for ($i=0; $i <$count ; $i++) { 
            

            $product_given_id=$request->product_given_id[$i];
             $stock= Stock::where('product_given_id','=', $product_given_id )->first();
             $sale_price=$request->sale_price[$i];
             $sale_quantity=$request->sale_quantity[$i];
            $sale_amount=$request->sale_amount[$i];

            $stock->sale =  $stock->sale + $sale_quantity;
            $stock['stock']= (float) $stock['stock']-(float)$sale_quantity;
            $stock['total_sale_price']=$stock['total_sale_price']+(float)$sale_amount;

            $stock->save();


            $sale= new Sale;
            $sale->invoice_id=$request->invoice_id;
            $sale->stock_id=Stock::latest()->first()->id;
            $sale->product_name=$stock->product->name;
            $sale->quantity=$sale_quantity;
            $sale->sale_price=$sale_amount;
            $profit=(float)$stock->buy_price-(float)$sale_price;
            $sale->profit=(float)$profit*(float)$sale_quantity;
            $sale->user_id=Auth::user()->id;
            $sale->save();


            $invoice= new Invoice;
            $invoice->total_price=$request->total_price;
            $invoice->vat_amount=$request->vat;
            $invoice->discount=$request->discount;
            $invoice->due=$request->due;
            $invoice->total_amount=$request->total_amount;
            $invoice->paid_amount=$request->paid_amount;
            $invoice->save();

            $invoice=$request->invoice_id;
            $products=$request->product_given_id;
            $quantity=$request->sale_quantity;

            $amount=$request->sale_amount;
            $vat_rate=$request->vat;
            $vat=$request->vat_amount;
            $discount=$request->discount;
            $due=$request->due;
            $total_amount=$request->total_amount;
            $paid_amount=$request->paid_amount; 
            $customer_name=$request->customer_name;
            $account_id=$request->account_id;
            $account=Account::find($account_id)->account_name;

            return view('admin.sale.invoice',compact('invoice','products','quantity','amount','vat_rate','vat','discount','due','total_amount','paid_amount','customer_name','account'));

            

                     }
        
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
