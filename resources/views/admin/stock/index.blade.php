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
                              Stock Report
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
</div>
<div class="body">
<div class="table-responsive">
<table class="table table-bordered table-striped table-hover dataTable js-exportable">
<thead>
<tr>
<th>SL</th>
<th>P_ID</th>
<th>Buy Qtn</th>
<th>Sale</th>
<th>Stock</th>
<th>Highest Sale</th>
<th>Lowest Sale</th>
<th>Total Sale</th>
</tr>
</thead>
<tfoot>
<tr>
<th>SL</th>
<th>P_ID</th>
<th>Buy Qtn</th>
<th>Sale</th>
<th>Stock</th>
<th>Highest Sale</th>
<th>Lowest Sale</th>
<th>Total Sale</th>
</tr>
</tfoot>
<tbody>

@foreach($stocks as $key=>$stock)
<tr>

<td>{{$key+1 }} </td>
<td>{{$stock->product_given_id}} {{-- {{$purchase->product->name}} --}} </td>
<td>{{$stock->buy_quantity}} </td>
<td>{{$stock->sale}} </td>
<td>{{$stock->stock}} </td>
<td>{{$stock->highest_sale_price}}</td>
<td>{{$stock->lowest_sale_price}} </td>
<td>{{$stock->total_sale_price}} </td>




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