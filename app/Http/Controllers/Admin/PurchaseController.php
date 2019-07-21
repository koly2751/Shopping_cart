<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use\App\Purchase;
use\App\Product;
use App\Stock;
use App\Account;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $purchases = Purchase::latest()->get();
     
         return view('admin.purchase.index', compact('purchases')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $products= Product::all();
        $accounts=Account::all();

         return view('admin.purchase.create',compact('products','accounts'));
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
   $this->validate($request,[

    'product_given_id'=>'required',
    'buy_quantity'=>'required|integer',
    'buy_price'=>'required|integer',
    'total_buy_price'=>'required|integer',
    'highest_sale_price'=>'required|integer',
    'lowest_sale_price'=>'required|integer',



   ]);

   $purchase= new Purchase();
   $purchase->product_id=$request->product_id;
   $purchase->product_given_id=$request->product_given_id;
   $purchase->product_description=$request->product_description;
   $purchase->unit=$request->unit;
   $purchase->buy_quantity=$request->buy_quantity;
   $purchase->account_id=$request->account_id;

   $purchase->buy_price=$request->buy_price;

     $purchase->total_buy_price = $request->total_buy_price;

     $purchase->highest_sale_price =$request->highest_sale_price;

      $purchase->lowest_sale_price = $request->lowest_sale_price;
       $purchase->date=$request->date;
       $purchase->save();




    $stock= new Stock();

        $stock->product_id=$request->product_id;
        $stock->product_given_id=$request->product_given_id;
        $stock->buy_quantity=$request->buy_quantity;
        $stock->stock=$request->buy_quantity;
        $stock->highest_sale_price =$request->highest_sale_price;

        $stock->lowest_sale_price = $request->lowest_sale_price;

        $stock->save();









       return redirect()->route('admin.purchase.index');
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
                 
         $purchase= Purchase::find($id);

         $products= Product::all();
         $accounts = Account::all();
        
      return view('admin.purchase.edit' , compact('purchase','products','accounts'));
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


      
           $purchase = Purchase::find($id);
   
   $purchase->product_id=$request->product_id;
   $purchase->product_given_id=$request->product_given_id;
   $purchase->product_description=$request->product_description;
   $purchase->unit=$request->unit;
   $purchase->buy_quantity=$request->buy_quantity;
   $purchase->account_id=$request->account_id;

   $purchase->buy_price=$request->buy_price;

     $purchase->total_buy_price = $request->total_buy_price;

     $purchase->highest_sale_price =$request->highest_sale_price;

      $purchase->lowest_sale_price = $request->lowest_sale_price;
       $purchase->date=$request->date;
       $purchase->save();
    
    return redirect()->route('admin.purchase.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy(Request $id)
    {
        //
            $purchase = Purchase::find($id);

            $purchase->delete();
            
            return redirect()->route('admin.purchase.index');

         
         
      

    }
}