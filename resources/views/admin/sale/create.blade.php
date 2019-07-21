@extends('admin.layouts.app')

@push('css')
<!-- Dropzone Css -->
<link href="{{ asset('backend/plugins/dropzone/dropzone.css') }}" rel="stylesheet">

<!-- Multi Select Css -->
<link href="{{ asset('backend/plugins/multi-select/css/multi-select.css') }}" rel="stylesheet">

<!-- Bootstrap Spinner Css -->
<link href="{{ asset('backend/plugins/jquery-spinner/css/bootstrap-spinner.css') }}" rel="stylesheet">

<!-- Bootstrap Tagsinput Css -->
<link href="{{ asset('backend/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet">

<!-- Bootstrap Select Css -->
<link href="{{ asset('backend/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />

<!-- noUISlider Css -->
<link href="{{ asset('backend/plugins/nouislider/nouislider.min.css') }}" rel="stylesheet" />


<style>
    .invoice{
        border: none;
    }
</style>
@endpush



@section('content')
<div class="container-fluid">

<!-- Input -->
<div class="row clearfix">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="card">
<div class="header">
<h2>
ADD NEW SALE
</h2>
</div>

<div class="body">
<form class="form-horizontal" action="{{ route('admin.sale.store') }}" method="POST">
{{csrf_field()}}

<input type="text" name="count" id="count" style="display: none;" value="0">

<div class="row clearfix">

    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label align-right">
<label for="date">Invoice No: {{$invoice_id}}</label>
<input type="" name="invoice_id" value="{{$invoice_id}}" style="display: none;">
</div>

<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label align-right">
<label for="date">Date: {{date('Y-m-d ')}}</label>
</div>

<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
<label for="time">Time: {{ date('h:i:s')}}</label>
</div>
</div>

<div class="row clearfix" style="margin-top: 50px;">
<div class="col-lg-3 col-md-2 col-sm-4 col-xs-5 form-control-label ">
<label for="product"><span class="col-teal font-20 "> Select Product: * </span></label>
</div>
<div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
<div class="form-group">
<div class="form-line">
<select id="selected_product" name="product_id" class="form-control show-tick" data-live-search="true">
<option value=""></option>
@foreach($stocks as $stock)

<option value="{{$stock->id}}">{{$stock->product_given_id}} ({{$stock->product->name}})


</option>

@endforeach
</select>

</div>
</div>
</div>

<div class="col-md-3 col-sm-5 col-xs-6 form-control-label ">
<label for="product"><span class="col-teal font-20 "> Select Account: * </span></label>
</div>
<div class=" col-md-2 col-sm-5 col-xs-7">
<div class="form-group">
<div class="form-line">
<select name="account_id" class="form-control show-tick" data-live-search="true">

@foreach($accounts as $account)

<option value="{{$account->id}}">{{$account->account_name}}</option>



@endforeach



</select>

</div>
</div>
</div>


</div>





<div class="row clearfix">
<table class="table table-hover table-bordered" >
<thead>
<tr>
<th>SL</th>
<th>Product</th>
<th>Stock</th>
<th>Highest Sale</th>
<th>Lowest Sale</th>
<th>Sale Price</th>
<th>Quantity</th>
<th>Amount</th>
<th>
<button type="button" id="add"  class="btn bg-teal btn-xs"><i class="material-icons">add</i></button>
</th>
</tr>
</thead>
<tbody id="invoice_item">
{{-- <tr>
<td><b id="number">1</b></td>
<td class="col-sm-3">
<input type="text" class="invoice form-control" readonly>
</td>

<td>
<input type="text" class="invoice form-control" readonly>
</td>

<td>
<input type="text" class="form-control" readonly>
</td>

<td>
<input type="text" class="form-control" readonly>
</td>

<td>
<input type="text" class="form-control" readonly>
</td>

<td>
<input type="text" class="form-control" readonly>
</td>

<td>
<input type="text" class="form-control" readonly>
</td>
<td>
<button class="btn bg-red btn-xs"><i class="material-icons">delete</i></button>
</td>
</tr> --}}

</tbody>
</table>
</div>




<br>


<div class="row clearfix">
<div class="col-sm-6" style="margin-top: 20px;">
<table class="table table-bordered table-hover" id="" style="margin-top: 20px;">





<tr>
<td class="font-bold align-right col-sm-6" >Customer Name:</td>
<td class="font-bold">
    <input type="text" name="customer_name" id="customer_id" class="form-control" style="width:;">
</td>

</tr> 
</table>


<!-- <div class="row clearfix" style="margin-top: 50px; margin-left: 60px;">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-6 form-control-label ">
<label for="product"><span class="col-teal font-20 "> Select Account: * </span></label>
</div>
<div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
<div class="form-group">
<div class="form-line">
<select name="account_id" class="form-control show-tick" data-live-search="true">

@foreach($accounts as $account)

<option value="{{$account->id}}">{{$account->account_name}}</option>



@endforeach



</select>

</div>
</div>
</div>
</div> -->

</div>





<div class="col-sm-offset-2 col-sm-4">
    <table class="table table-bordered table-hover">
        <tr>
        <td class="font-bold align-right col-sm-6"> Total Price:</td>
        <td class="font-bold">
            <input type="text" name="total_price" id="total_price" placeholder="0" class="invoice align-right" style="width:50%;" readonly value ="0">TK
        </td>
        </tr>

    <tr>
        <td class="font-bold align-right"><span class="align-center">Vat:</span></td>

        <td class="font-bold">
            <input type="text" name="vat" id="vat" placeholder="0" class="invoice align-right" style="width:50%;" >%
            <input type="text" id="vat_amount" name="vat_amount" style="display: none;" >
        </td>
        
    </tr>


    <tr> 

     <td class="font-bold align-right"><span class="align-center">Discount:</span></td>

     <td class="font-bold">
     <input type="text" name="discount" id="discount" value="0" class="invoice align-right" class="" style="width: 50%;">TK
 </td>

    </tr>

    <tr>
        <td class="font-bold align-right"><span class="align-right">Point Discount:</span></td>

          <td class="font-bold">
     <input type="text" name="point_discount" id="point_discount" value="0" class="invoice align-right" class="" style="width:50%;">TK
 </td>
    </tr>


       <tr>
        <td class="font-bold align-right"><span class="align-right">Due:</span></td>

          <td class="font-bold col-pink">
     <input type="text" name="due" id="due" value="0" readonly="" class="invoice align-right" class="" style="width:50%;">TK
 </td>
    </tr>


       <tr>
        <td class="font-bold align-right"><span class="align-right">Total Amount:</span></td>

          <td class="font-bold">
     <input type="text" name="total_amount" id="total_amount" value="0" class="invoice align-right" class="" style="width:50%;">TK
 </td>
    </tr>


       <tr>
        <td class="font-20 col-teal font-bold align-right"><span class="align-right">Paid:</span></td>

          <td class="font-bold font-20 col-teal">
     <input type="text" name="paid_amount" id="paid_amount" value="0" class="invoice align-right" class="" style="width:70%;">TK
 </td>
    </tr>




    </table>
</div>


</div>

<br>

 <a href="{{ route('admin.purchase.index') }}" class="btn btn-danger m-t-15 waves-effect">BACK</a>
<button type="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>



</form>


</div>
</div>
</div>
</div>
<!-- #END# Input -->

</div>
@endsection

@push('js')
<!-- Bootstrap Colorpicker Js -->
<script src="{{ asset('backend/js/order.js') }}"></script>

<script src="{{ asset('backend/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script>

<!-- Dropzone Plugin Js -->
<script src="{{ asset('backend/plugins/dropzone/dropzone.js') }}"></script>

<!-- Input Mask Plugin Js -->
<script src="{{ asset('backend/plugins/jquery-inputmask/jquery.inputmask.bundle.js') }}"></script>

<!-- Multi Select Plugin Js -->
<script src="{{ asset('backend/plugins/multi-select/js/jquery.multi-select.js') }}"></script>

<!-- Jquery Spinner Plugin Js -->
<script src="{{ asset('backend/plugins/jquery-spinner/js/jquery.spinner.js') }}"></script>

<!-- Bootstrap Tags Input Plugin Js -->
<script src="{{ asset('backend/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>

<!-- noUISlider Plugin Js -->
<script src="{{ asset('backend/plugins/nouislider/nouislider.js') }}"></script>

<!-- Custom Js -->
<script src="{{ asset('backend/js/pages/forms/advanced-form-elements.js')"></script>
@endpush