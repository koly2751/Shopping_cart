    @extends('admin.layouts.app')

    @push('css')




    @endpush

    @section('content')



    <div class="container-fluid">
    <div class="block-header">
    {{-- <h2>BASIC FORM ELEMENTS</h2> --}}
    </div>
    <!-- Input -->
    <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
    <div class="header">
    <h2>
    ADD NEW PRODUCT

    </h2>

    </div>
    <div class="body">

    <div class="row clearfix">

    <form action="{{ route('admin.product.update',$product->id)}}" method="POST">

    {{csrf_field()}}
     {{ method_field('PUT') }}

    <div class="col-sm-12">
    <div class="form-group">
    <div class="form-line">

    <input type="text"  name="name"class="form-control" placeholder="Product Name" value="{{ $product->name}}"/>
    </div>
    </div>
    <div class="form-group">

    <a href="{{route('admin.product.index')}}" class="btn btn-danger"> Back</a>

    <button type="submit" class="btn btn-info"> Submit</button>

    </div>
    </div>
    </form>


    </div>







    @push('js')


    @endpush
    @endsection