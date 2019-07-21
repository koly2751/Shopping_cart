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
@endpush



@section('content')
<div class="container-fluid">

            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                ADD NEW PURCHASE
                            </h2>
                        </div>

                        <div class="body">

                            <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            ALL REPORTS
                        </h2>

                    </div>
                    <form action="{{ route('admin.report.show')}}" method="post">
                        {{csrf_field()}}
                        
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-2">
                                    <p>Select a Month:</p>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select name="month" class="form-control" id="">
                                                <option value="">Select a Month</option>
                                                <option value="01">January</option>
                                                <option value="02">February</option>
                                                <option value="03">March</option>
                                                <option value="04">April</option>
                                                <option value="05">May</option>
                                                <option value="06">June</option>
                                                <option value="07">July</option>
                                                <option value="08">August</option>
                                                <option value="09">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select name="year" class="form-control" id="">
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 block-header">
                                    <button type="submit" class="btn bg-teal" href="">
                                        <i class="material-icons">search</i>
                                        <span>Search by Month</span>
                                    </button>
                                </div>
                                
                            </div>
                        </div>
                    </form>
                        
                
                </div>
                
            </div>
        </div>

                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Input -->
            
        </div>
@endsection

@push('js')
<!-- Bootstrap Colorpicker Js -->
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