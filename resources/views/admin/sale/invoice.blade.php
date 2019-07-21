<!DOCTYPE html>
<html lang="en" >

<head>
	<meta charset="UTF-8">
	<title>Receipt</title>
	<link rel="stylesheet" href="{{ asset('backend/css/invoice_style.css') }}">

  
</head>

<body>

  
  <div id="invoice-POS">
    
    <center id="top">
      <div class="logo"></div>
      <div class="info"> 
        <h2>TATIGHOR</h2>
      </div><!--End Info-->
    </center><!--End InvoiceTop-->
    
    <div id="mid">
      <div class="info">
        <p> 
            Customer Name: {{ $customer_name }} 

        </p>
        <p>Account Name: {{$account}}</p>
      </div>
    </div><!--End Invoice Mid-->


    
    <div id="bot">
    	
					<div id="table">
						<table>
							<tr class="tabletitle">
								<td class="item"><h2>Item</h2></td>
								<td class="Hours"><h2>Qty</h2></td>
								<td class="amount"><h2>Sub Total</h2></td>
							</tr>

							

							@foreach( $products as $key=>$product)
								<tr class="service">
									<td class="tableitem"><p class="itemtext">{{ $product }}</p></td>
									<td class="tableitem"><p class="itemtext">{{ $quantity[$key] }}</p></td>
									<td class="tableitem amount"><p class="itemtext">{{ $amount[$key] }} TK</p></td>
								</tr>
							@endforeach

						
							

							


							@if( $vat != 0)
								<tr class="tabletitle">
									<td></td>
									<td class="Rate"><h2>Vat({{ $vat_rate }}%)</h2></td>
									<td class="payment"><h2>{{ $vat }} TK</h2></td>
								</tr>
							@endif

							
							@if( $discount != 0)
								<tr class="tabletitle">
									<td></td>
									<td class="Rate"><h2>Discount</h2></td>
									<td class="payment"><h2>{{ $discount }} TK</h2></td>
								</tr>
							@endif

							@if( $due != 0)
								<tr class="tabletitle">
									<td></td>
									<td class="Rate"><h2>Due</h2></td>
									<td class="payment"><h2>{{ $due }} TK</h2></td>
								</tr>
							@endif

							<tr class="tabletitle">
								<td></td>
								<td class="Rate"><h2>Total Amount</h2></td>
								<td class="payment"><h2>{{ $total_amount }} TK</h2></td>
							</tr>

							<tr class="tabletitle">
								<td></td>
								<td class="Rate"><h2>Paid Amount</h2></td>
								<td class="payment"><h2>{{ $paid_amount }} TK</h2></td>
							</tr>

						</table>
					</div><!--End Table-->

					<div id="legalcopy">
						<p class="legal"><strong>Thank you for your Purchase
						</p>
					</div>

				</div><!--End InvoiceBot-->
  </div><!--End Invoice-->
  
  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        
        <script>
        window.jQuery || document.write('<script src="../bower_components/jquery/dist/jquery.min.js"><\/script>')
        </script>
        
        <script src="{{ asset('backend/js/jQuery.print.js') }}"></script>
        
        <script type='text/javascript'>
            
            $(document).ready(function() {
                
                    // jQuery('#invoice-POS').print();
                
            });
        </script>
</body>

</html>
