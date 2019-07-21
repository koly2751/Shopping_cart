@extends('admin.layouts.app')

@push('css')

@endpush



@section('content')
<div class="container-fluid">

            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EDIT CATEGORY
                            </h2>
                        </div>

                        <div class="body">

                            <div class="row clearfix">
                                <form action="{{ route('admin.category.update', $category->id ) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input name="name" type="text" class="form-control" placeholder="Enter New Category" value="{{ $category->name }}"/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <a href="{{ route('admin.category.index') }}" class="btn btn-danger">Back</a>
                                        <button type="submit" class="btn btn-info">Submit</button>
                                    </div>
                                </div>
                                </form>
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Input -->
            
        </div>
@endsection

@push('js')

@endpush