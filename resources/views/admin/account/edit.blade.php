@extends('admin.layouts.app')

@push('css')

    <!-- Waves Effect Css -->
    <link href="{{asset('backend/plugins/node-waves/waves.css')}}" rel="stylesheet" />
     <!-- Dropzone Css -->
    <link href="{{asset('backend/plugins/dropzone/dropzone.css')}}" rel="stylesheet">

    <!-- Multi Select Css -->
    <link href="{{asset('backend/plugins/multi-select/css/multi-select.css')}}" rel="stylesheet">

    <!-- Bootstrap Spinner Css -->
    <link href="{{asset('backend/plugins/jquery-spinner/css/bootstrap-spinner.css')}}" rel="stylesheet">

    <!-- Bootstrap Tagsinput Css -->
    <link href="{{asset('backend/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="{{asset('backend/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />

    <!-- noUISlider Css -->
    <link href="{{asset('backend/plugins/nouislider/nouislider.min.css')}}" rel="stylesheet" />

  

@endpush

@section('content')



   <div class="container-fluid">
 
<!-- Input -->
<div class="row clearfix">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="card">
<div class="header">
<h2 style="text-align: center; color: teal;" >
ADD NEW PURCHASE

</h2>

</div>
<div class="body">

<div class="row clearfix">
<form action="{{route('admin.account.update', $account->id)}}" method="post">

{{csrf_field()}}
{{ method_field('PUT') }}






                                              <div class="col-sm-12">
                                       <div class="form-group">
                                      <div class="form-line">
                                        <span> <label for="acount_name">Account Name :</label></span>    <input type="text" name="account_name" id="account_name" class="form-control" placeholder="Enter your account name" value="{{$account->account_name}}">
                                        </div>
                                    </div>


                                    
                                     

                                    <div class="row clearfix">
                                <div class="col-sm-6">
                                          <div class="form-group">
                                        <div class="form-line">
                                        <span><label for="account_description">Account Description</label>
                                        </span> <input type="text" name="account_description" id="account_description" class="form-control" placeholder="Give a Description" value="{{$account->account_description}}">
 
                                        </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                        <div class="form-group">
                                        <div class="form-line">
                                          <span><label for="amount">Amount:</label></span> <input type="
                                         text" name="amount" id="amount" class="form-control" placeholder="Enter your amount" value="{{$account->amount}}">
                                        </div>
                                    </div>

                                </div>
                            </div>
                                     


                                  

                                    <div class="form-group">
                                   <a href="{{route('admin.account.index')}}" class="btn btn-danger">Back</a>
                                           <button class="btn btn-info">UPDATE</button>
                                       </div>
                                    
                                </div>
              
</form>

                      

@push('js')

   

    <!-- Slimscroll Plugin Js -->
    <script src="{{asset('backend/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

    <!-- Bootstrap Colorpicker Js -->
    <script src="{{asset('backend/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}"></script>


     <!-- Dropzone Plugin Js -->
    <script src="{{asset('backend/plugins/dropzone/dropzone.js')}}"></script>

    <!-- Input Mask Plugin Js -->
    <script src="{{asset('backend/plugins/jquery-inputmask/jquery.inputmask.bundle.js')}}"></script>

    <!-- Multi Select Plugin Js -->
    <script src="{{asset('backend/plugins/multi-select/js/jquery.multi-select.js')}}"></script>

    <!-- Jquery Spinner Plugin Js -->
    <script src="{{asset('backend/plugins/jquery-spinner/js/jquery.spinner.js')}}"></script>

    <!-- Bootstrap Tags Input Plugin Js -->
    <script src="{{asset('backend/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script>

    <!-- noUISlider Plugin Js -->
    <script src="{{asset('backend/plugins/nouislider/nouislider.js')}}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{asset('backend/plugins/node-waves/waves.js')}}"></script>






   

   




@endpush
@endsection