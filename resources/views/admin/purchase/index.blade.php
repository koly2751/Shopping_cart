@extends('admin.layouts.app')

@push('css')

   

 <link href="{{asset('backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css ')}}" rel="stylesheet">
@endpush

@section('content')

    <div class="container-fluid">
            <div class="block-header">
                <h2>
           <a href="{{route('admin.purchase.create')}}" class="btn btn-info" >Add new Category +</a>
                </h2>
            </div>

         <!-- Basic Examples -->
           
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EXPORTABLE TABLE
                            </h2>
                          
</div>
<div class="body">
<div class="table-responsive">
<table class="table table-bordered table-striped table-hover dataTable js-exportable">
<thead>
<tr>
<th>ID</th>
<th>P_ID</th>
<th>Unit</th>
<th>Buy Qtn</th>
<th>Account</th>
<th>Total Price</th>
<th>Highest Sale</th>
<th>Lowest Sale</th>
<th>Date</th>
<th>Action</th>
</tr>
</thead>
<tfoot>
<tr>
<th>ID</th>
<th>P_ID</th>
<th>Unit</th>
<th>Buy Qtn</th>
<th>Account</th>
<th>Total Price</th>
<th>Highest Sale</th>
<th>Lowest Sale</th>
<th>Date</th>
<th>Action</th>
</tr>
</tfoot>
<tbody>

@foreach($purchases as $key=>$purchase)
<tr>

<td>{{$key+1 }} </td>
<td>{{$purchase->product_given_id}} ( {{$purchase->product->name}} )</td> 
<td>{{$purchase->unit}} </td>
<td>{{$purchase->buy_quantity}} </td>
<td>{{$purchase->account->account_name}}</td>

<td>{{$purchase->total_buy_price}} </td>
<td>{{$purchase->highest_sale_price}} </td>
<td>{{$purchase->lowest_sale_price}} </td>
<td>{{$purchase->date}} </td>



<td>
<a href="{{route('admin.purchase.edit', $purchase->id )}}" class="btn btn-info btn-xs"><i class="material-icons">edit</a>
<a href="{{route('admin.purchase.destroy', $purchase->id )}}" class="btn btn-warning btn-xs"><i class="material-icons">delete</a>
</td>
</tr>


@endforeach

</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<!-- #END# Exportable Table -->
</div>






@push('js')


   <script src="{{asset('backend/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
    <script src="{{asset('backend/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('backend/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('backend/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
    <script src="{{asset('backend/plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
    <script src="{{asset('backend/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>
    <script src="{{asset('backend/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
    <script src="{{asset('backend/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
    <script src="{{asset('backend/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{asset('backend/js/pages/tables/jquery-datatable.js')}}"></script>
@endpush
@endsection