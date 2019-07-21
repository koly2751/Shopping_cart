    @extends('admin.layouts.app')

    @push('css')


 <!-- Bootstrap Select Css -->
    <link href="{{asset('backend/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />


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

    <form action="{{ route('admin.purchase.update',$purchase->id)}}" method="POST">
{{csrf_field()}}
{{ method_field('PUT') }}

<div class="row-clearfix">
    
 <div class="col-lg-2 col-md-2 col-sm-4 col-xm-5 form-control-label">
<label for="product"> Select A Product: *</label>
</div>


<div class="col-lg-5 col-md-5 col-sm-8">
    <div class="form-group">
        <div class="form-line">

<select name="product_id" class="form-control show-tick" data-live-search="true">

@foreach($products as $product)

<option value="{{$product['id']}}" 

  @if($purchase->product->id == $product['id'])
  selected
  @endif
>{{$product['name']}}</option>



@endforeach

</select>
</div>
</div>
</div>
</div



                                 <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <span> <label for="product_given_id">Add Product ID:</label></span>    <input type="text" name="product_given_id" id="product_given_id" class="form-control" placeholder="" value="{{ $purchase->product_given_id}}">
                                        </div>
                                    </div>


                                    
                                     

                                    <div class="row clearfix">
                                <div class="col-sm-6">
                                          <div class="form-group">
                                        <div class="form-line">
                                          <span>        <label for="product_description">Product Description</label>
                                        </span> <input type="text" name="product_description" id="product_description" class="form-control" placeholder="" value="{{$purchase->product_description}}">
 
                                        </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                        <div class="form-group">
                                        <div class="form-line">
                                          <span><label for="unit">Unit:</label></span> <input type="text" name="unit" id="unit" class="form-control" placeholder="" value="{{$purchase->unit}}">
                                        </div>
                                    </div>

                                </div>
                            </div>

                                   <div class="row clearfix">
                                <div class="col-sm-6">
                                       <div class="form-group">
                                        <div class="form-line">
                                           <span><label for="buy_quantity">Purchase Quantity:</label>
                                            </span><input type="text" name="buy_quantity" id="buy_quantity" class="form-control" placeholder="" value="{{$purchase->buy_quantity}}">
                                        </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                     <div class="row-clearfix">
    
 <div class="col-lg-2 col-md-2 col-sm-4 col-xm-5 form-control-label">
<label for="product">Account:*</label>
</div>


<div class="col-lg-5 col-md-5 col-sm-8">
  <div class="form-group">
  <div class="form-line">

<select name="account_id" class="form-control show-tick" data-live-search="true">

@foreach($accounts as $account)

<option value="{{$account['id']}}">{{$account['account_name']}}</option>



@endforeach
</select>
</div>
</div>
</div>
</div>

                                </div>
                            </div>


                                  
                                     <div class="form-group">
                                        <div class="form-line">
                                         <span><label for="buy_price">Purchase Price:</label></span>
                                         <input type="text" name="buy_price" id="buy_price" class="form-control" placeholder="" value="{{$purchase->buy_price}}">
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <div class="form-line">
                                          <span><label for="total_buy_price"> Total Purchase Price:</label>
                                            </span>  <input type="text" name="total_buy_price" id="total_buy_price" class="form-control" placeholder="" value="{{$purchase->total_buy_price}}">
                                        </div>
                                    </div>


                                    


                                    <div class="form-group">
                                        <div class="form-line">
                                          <span><label for="highest_sale_price"> Highest Sale Price:</label></span><input type="text" name="highest_sale_price" id="highest_sale_price" class="form-control" placeholder="" value="{{$purchase->highest_sale_price}}">
                                        </div>
                                    </div>

                                      <div class="form-group">
                                        <div class="form-line">
                                          <span><label for="lowest_sale_price"> Lowest Sale Price:</label></span><input type="text" name="lowest_sale_price" id="lowest_sale_price" class="form-control" placeholder="" value="{{ $purchase->lowest_sale_price}}">
                                        </div>
                                    </div>

                                      <div class="form-group">
                                        <div class="form-line">
                                            <span><label for="date"> Enter A Date:</label></span><input type="text" name="date" id="date" class="form-control" placeholder="" value="{{date('Y-m-d')}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                   <a href="{{route('admin.purchase.index')}}" class="btn btn-danger">Back</a>
                                           <button class="btn btn-info" type="submit">Update</button>
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