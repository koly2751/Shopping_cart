@extends('admin.layouts.app')

@push('css')

   

 <link href="{{asset('backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css ')}}" rel="stylesheet">
@endpush

@section('content')

    <div class="container-fluid">
            <div class="block-header">
                <h2>
           <a href="{{route('admin.account.create')}}" class="btn btn-info" >Add new Category +</a>
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
<th>ID</th>
<th>Account Name</th>
<th>Account Description</th>
<th>Amount</th>

</tr>
</thead>
<tfoot>
<tr>
<th>ID</th>
<th>Account Name</th>
<th>Account Description</th>
<th>Amount</th>
</tr>
</tfoot>
<tbody>

@foreach($accounts as $key=>$account)
<tr>

<td>{{$key+1 }} </td>
<td>{{$account->account_name}}</td>
<td>{{$account->account_description}} </td>
<td>{{$account->amount}} </td>




<td>
    <a href="{{route('admin.account.edit', $account->id )}}" class="btn btn-info btn-xs"><i class="material-icons">edit</a>
<a href="{{route('admin.account.destroy', $account->id )}}" class="btn btn-warning btn-xs"><i class="material-icons">delete</a>
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