<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>HoopStreet Investment Platform</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/raleway-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Jquery -->
	<link rel="stylesheet" href="css/site-demos.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
	<nav class="navbar navbar-expand-lg sticky-top navbar-dark justify-content-center" style="background: #005842">
	  <a class="navbar-brand align-center" href="#">Welcome to HoopStreet Investment Portal</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
	    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	      <!-- <li class="nav-item active">
	        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
	      </li> -->
	      
	    </ul>
	    
	</nav>

	<div class="page-content" >
		<div class="wizard-v1-content">
			<div class="wizard-form">
		        <form class="form-register" id="form-register" action="#" method="post">
		        	<div id="form-total">
		        		<!-- SECTION 0 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-account"></i></span>
			            	<span class="step-number">Step 1</span>
			            	<span class="step-text">Investment Range</span>
			            </h2>
			            <section>
			                <div class="inner">
								
								<p>Please Select the amount you want to invest : </p>
								<small>Min Investment : $500</small><br>
								<small>Slide to Select the Amount</small>
							    
								<div class="range-slider">
								  <input id="investment-range" class="range-slider__range" type="range" value="500" min="500" max="50000000" step="50" >
								  <span class="range-slider__value">0</span>
								</div>
								<small>OR</small><br>
								
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="investment-amount">Enter a Custom Amount *</label>
										<input type="number" placeholder="$500" value="500" class="form-control" id="investment" name="investment" required min="500" max="50000000" step="50">
									</div>
								</div>



								  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
								      <script id="rendered-js" >
								var rangeSlider = function () {
								  var slider = $('.range-slider'),
								  range = $('.range-slider__range'),
								  value = $('.range-slider__value');
								  var customInvestment = $('#investment');

								  slider.each(function () {

								    value.each(function () {
								      var value = $(this).prev().attr('value');
								      $(this).html("$"+value);

								    });

								    range.on('input', function () {
								      $(this).next(value).html("$"+this.value);
								      customInvestment.attr('value', this.value);
								      customInvestment.val(this.value);
								      $(this).attr('value', this.value);
								    });



								  });

								  customInvestment.on('input', function () {
								  	

								    
								      var valu = customInvestment.attr('value');
								      $('.range-slider__value').html("$"+valu);
								      $('.range-slider__range').attr('value', valu);
								      $("input[type=range]").val(valu);
								      console.log(valu);

								    

								    



								  
								  });
								      

								     
								};

								rangeSlider();
								//# sourceURL=custom.js
								    </script>

  

								





							</div>
			            </section>
		        		<!-- SECTION 1 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-account"></i></span>
			            	<span class="step-number">Step 2</span>
			            	<span class="step-text">Account Infomation</span>
			            </h2>
			            <section>
			                <div class="inner">
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="name">Name *</label>
										<input type="text" placeholder="name" class="form-control" id="name" name="name" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="email">Postal Address*</label>
										<textarea class="form-control" id="name" name="name" required></textarea>
										<!-- <input type="email" placeholder="Your Email" class="form-control" id="email" name="email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}"> -->
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="name">Phone Number *</label>
										<input type="number" placeholder="phone" class="form-control" id="phone" name="phone" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<label for="password">Password*</label>
										<input type="password" placeholder="Password" class="form-control" id="password" name="password" required >
									</div>
									<div class="form-holder">
										<label for="confirm_password">Confirm Password*</label>
										<input type="password" placeholder="Confirm Password" class="form-control" id="confirm_password" name="confirm_password" required>
									</div>
								</div>

								<div class="form-row">
									<div class="form-group">
							    		<label for="happy" >Are you an Accredited Investor? ?</label>
							    		<div >
							    			<div class="input-group">
							    				<div id="radioBtn" class="btn-group">
							    					<a class="btn btn-success btn-sm active"  data-toggle="happy" data-title="Y">Yes, I am</a>
							    					<a class="btn btn-success btn-sm notActive" data-toggle="happy" data-title="N">NO, I am not</a>
							    				</div>
							    				<input type="hidden" name="happy" id="happy">

							    				<div>
							    					<br>
							    					<br>
							    				Verify your Income <input class="btn " type="file" name="income" value="Choose File">
							    				<br>
							    				Verify Net Worth <input type="file" class="btn "  name="income" value="Choose File">
							    				</div>
							    			</div>
							    		</div>
							    	</div>

        
									
								</div>
							</div>
			            </section>
						<!-- SECTION 2 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-card"></i></span>
			            	<span class="step-number">Step 2</span>
			            	<span class="step-text">Payment Infomation</span>
			            </h2>
			            <section>
			                <div class="inner">
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="card-type">Card Type</label>
										<select name="card-type" id="card-type" class="form-control">
											<option value="" disabled selected>Select Credit Card Type</option>
											<option value="Business Credit Cards">Business Credit Cards</option>
											<option value="Limited Purpose Cards">Limited Purpose Cards</option>
											<option value="Prepaid Cards">Prepaid Cards</option>
											<option value="Charge Cards">Charge Cards</option>
											<option value="Student Credit Cards">Student Credit Cards</option>
										</select>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-3">
										<label for="card-number">Card Number</label>
										<input type="text" name="card-number" class="card-number" id="card-number" placeholder="ex: 489050625008xxxx">
									</div>
									<div class="form-holder">
										<label for="cvc">CVC</label>
										<input type="text" name="cvc" class="cvc" id="cvc" placeholder="xxx">
									</div>
								</div>
								<div class="form-row form-row-2">
									<div class="form-holder">
										<label for="month">Expiry Month</label>
										<select name="month" id="month" class="form-control">
											<option value="" disabled selected>Expiry Month</option>
											<option value="January">January</option>
											<option value="February">February</option>
											<option value="March">March</option>
											<option value="February">February</option>
											<option value="April">April</option>
											<option value="May">May</option>
										</select>
									</div>
									<div class="form-holder">
										<label for="year">Expiry Year</label>
										<select name="year" id="year" class="form-control">
											<option value="" disabled selected>Expiry Year</option>
											<option value="2018">2018</option>
											<option value="2017">2017</option>
											<option value="2016">2016</option>
											<option value="2015">2015</option>
											<option value="2014">2014</option>
											<option value="2013">2013</option>
										</select>
									</div>
								</div>
							</div>
			            </section>
			            <!-- SECTION 3 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-receipt"></i></span>
			            	<span class="step-number">Step 4</span>
			            	<span class="step-text">Agreement</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<h3>Agreement</h3>
								<div class="form-row ">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas varius, est vel blandit finibus, nulla dolor sodales dolor, vitae lobortis nisl ligula ut tellus. Fusce vulputate tempor est in imperdiet. Proin quam nisl, suscipit et tristique nec, interdum et felis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vitae vulputate odio, nec pulvinar sapien. Integer vel varius sem. Vestibulum rutrum lacus eu sapien cursus volutpat vel ac libero. Nam a libero porta, feugiat ipsum a, congue libero. Nulla ac turpis rhoncus, eleifend libero non, pretium orci. Curabitur cursus ante vel neque tristique, convallis ultrices arcu finibus. Praesent id malesuada nibh, vitae tincidunt turpis. Fusce dignissim vitae magna sed convallis. In hac habitasse platea dictumst.

Donec nisl lorem, varius sit amet placerat sed, lobortis a ligula. Suspendisse dapibus porttitor lorem ac euismod. Aliquam elementum mi sollicitudin lectus viverra fringilla. Curabitur facilisis sodales odio, sed finibus dolor suscipit non. Nulla facilisi. Sed mi ante, maximus vitae accumsan eu, consequat et tellus. Cras sagittis tincidunt condimentum. Ut sit amet blandit nibh. Maecenas porttitor nec leo luctus iaculis. Nulla a risus velit. Donec venenatis venenatis nisl eget feugiat. Aenean fermentum aliquet pellentesque. Suspendisse maximus, neque et luctus auctor, nulla erat aliquam nulla, et viverra libero nisl sit amet magna. Quisque neque nibh, imperdiet sit amet tempus eu, sagittis dictum libero. Cras nec urna lorem. Ut feugiat nisl eget mi rutrum elementum.

Proin pulvinar libero eros, vitae maximus elit congue scelerisque. Maecenas fermentum augue tristique purus sollicitudin, vitae porta odio fringilla. Cras imperdiet est vitae gravida pellentesque. Nam a vehicula felis. Aliquam porttitor porta tincidunt. Morbi ut porttitor erat. In congue ornare elit, id commodo massa aliquet id.

Suspendisse potenti. Nullam quis justo sed diam posuere gravida. Suspendisse eget enim vel ligula vestibulum elementum non eget nisl. Curabitur ante turpis, fringilla in mi non, vehicula maximus metus. In ut viverra leo, a ullamcorper dolor. Fusce vel consequat velit, eget efficitur urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque vehicula, ante nec rhoncus semper, metus nisl dictum mauris, sed cursus orci odio eleifend odio.

Ut ligula velit, dignissim id aliquam in, sollicitudin vel ipsum. Nunc eget consectetur erat, sit amet venenatis dolor. Cras dolor leo, molestie in enim semper, vestibulum volutpat diam. Aenean eleifend tincidunt mauris ut rhoncus. Pellentesque gravida et elit eget sollicitudin. Nulla facilisi. Pellentesque dictum nibh at massa vehicula lobortis. Etiam non tincidunt tellus, sed volutpat nisi. Nulla fermentum purus lacus.

Proin ac dapibus dolor. Vivamus feugiat ante quis nisi pretium, ut auctor purus dignissim. Nullam vel justo in ipsum molestie mattis ut sed nulla. Quisque dictum purus ac feugiat blandit. Aliquam dictum in eros quis aliquam. Suspendisse porttitor commodo ultricies. Nunc ornare, nibh id ornare luctus, sapien libero egestas massa, et finibus sem est vel ipsum. Phasellus at urna id libero facilisis dignissim.

Etiam hendrerit erat quis mauris maximus tincidunt eget quis risus. Praesent a nunc lectus. Integer in volutpat odio. Suspendisse et quam ac massa accumsan aliquam. Nulla ultricies ac risus ac ullamcorper. Curabitur in tempus enim, ut facilisis ipsum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Praesent tellus ex, volutpat eu eleifend ac, volutpat at neque. Nulla vitae tellus quis dui volutpat fermentum porta sit amet dolor. Nam finibus, mauris in iaculis ornare, nisi lectus gravida turpis, ac aliquam elit urna in nisl. Maecenas at orci semper, mattis tortor sit amet, sagittis metus. Mauris nec purus sem.

Nullam viverra nunc justo, facilisis consectetur nisi rhoncus et. Aliquam erat volutpat. Suspendisse ac rhoncus lectus. Praesent luctus eu urna sit amet sagittis. Cras luctus porttitor lectus. Cras posuere rhoncus dui, id posuere urna efficitur nec. Pellentesque non odio egestas, hendrerit dolor eu, finibus magna. Donec in eros quis quam consequat accumsan. Ut rhoncus ex nec erat consequat mollis. Morbi ornare nec purus quis accumsan. Sed vel sapien euismod, facilisis velit at, pretium eros. Duis fermentum ante non orci accumsan, et consectetur tortor mattis. Fusce dictum nisi vitae posuere iaculis. Suspendisse potenti.

<br>
Are you agreed to these terms and conditions?
<input type="radio" name="agree" checked="true">YES <input type="radio" name="agree" >NO 

								</div>

							</div>
			            </section>
			           
		        	</div>
		        </form>
			</div>
		</div>
	</div>
	
	<script src="js/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	<script src="js/jquery.steps.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>



</body>
</html>