@extends('admin.layouts.app')

@push('css')
<!-- JQuery DataTable Css -->
    <link href="{{ asset('backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="container-fluid">


            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                ALL SALES LIST
                            </h2>
                            
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Invoice</th>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th>Sale Price</th>
                                            <th>Profit</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>SL</th>
                                            <th>Invoice</th>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th>Sale Price</th>
                                            <th>Profit</th>
                                            <th>Date</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    	@foreach($sales as $key=>$sale)
											<tr>
                                                <td>{{ $key+1 }}</td>
												<td>{{$sale->invoice_id}} </td>
                                                <td>{{$sale->product_name}}</td>
												<td>{{$sale->sale_quantity}}</td>
                                                <td>{{$sale->sale_price}}</td>
                                                <td>{{$sale->profit}}</td>
												<td>{{ date('d-m-Y', strtotime($sale->created_at)) }}</td>
												


											</tr>
                                    	@endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                ALL PURCHASE LIST
                            </h2>
                            
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>P.ID</th>
                                            <th>Unit</th>
                                            <th>Buy Qtn</th>
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
                                            <th>P.ID</th>
                                            <th>Unit</th>
                                            <th>Buy Qtn</th>
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
                                                <td>{{ $key+1 }}</td>
                                                <td>{{$purchase->product_given_id}}</td>
                                                <td>{{$purchase->unit}}</td>
                                                <td>{{$purchase->buy_quantity}}</td>
                                                <td>{{$purchase->total_buy_price}}</td>
                                                <td>{{$purchase->highest_sale_price}}</td>
                                                <td>{{$purchase->lowest_sale_price}}</td>
                                                <td>{{$purchase->date}}</td>
                                                <td>
                                                    <a href="{{ route('admin.product.edit', $purchase->id ) }}" class="btn btn-info">
                                                        <i class="material-icons">edit</i>
                                                    </a>

                                                    <a href="{{ route('admin.product.destroy', $purchase->id ) }}" class="btn btn-danger">
                                                        <i class="material-icons">delete</i>
                                                    </a>

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
@endsection

@push('js')

<!-- Jquery DataTable Plugin Js -->
    <script src="{{ asset('backend/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('backend/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('backend/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
    <script src="{{ asset('backend/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>
    <script src="{{ asset('backend/js/pages/tables/jquery-datatable.js') }}"></script>

@endpush