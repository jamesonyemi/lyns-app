@extends('layouts.master')
@section('content')
<!-- login -->
<div class="login-section">
	<h1 class="agileits-title">order a cake</h1>
	<h2 class="sub-head-w3-agileits">you can design your own cake, exactly as you would like it!</h2>
	<div class="container login-w3l">		
		<div class="login-form">			
			<form action="#" method="post">
				<div class="agileits-location">
					<label>shape</label>
					<select required>
						<option value="">Round</option>
						<option value="1">rectangle</option>
						<option value="2">square</option>
						<option value="2">custom</option>
					</select>
					<div class="clear"></div>
				</div>
				<div class="agileits-location w3ls-1">
					<label>levels</label>
					<select required>
						<option value="">1</option>
						<option value="1">2</option>
						<option value="2">3</option>
						<option value="2">4</option>
					</select>
					<div class="clear"></div>
				</div>
				<div class="agileits-location">
					<label>size</label>
					<select required>
						<option value="">4 inch</option>
						<option value="1">6 inch</option>
						<option value="2">8 inch</option>
						<option value="2">10 inch</option>
					</select>
					<div class="clear"></div>
				</div>
				<div class="agileits-location w3ls-1">
					<label>flavor</label>
					<select required>
						<option value="">strawberry</option>
						<option value="1">vanila</option>
						<option value="2">chocolate</option>
						<option value="2">red velvet</option>
					</select>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
			</form>	
				<!--Horizontal Tab-->
				<div id="parentHorizontalTab_agile">
					<ul class="resp-tabs-list hor_1">
						<li>pickup</li>
						<li>delivery</li>
					</ul>
					<div class="resp-tabs-container hor_1">
					   <div class="agile_its_registration">
							<form action="#" method="post" class="agile_form">
							  <input type="text" name="username" placeholder="Your name" required="required" />	
							  <input type="email" name="username" placeholder="Your email" required="required" />
							  <input type="text" name="username" placeholder="Phone number"  required="required" />
							  <input type="submit" value="order" class="agileinfo" />
							</form>	
						</div>
						<div class="agile_its_registration">
							<form action="#" method="post" class="agile_form">
							  <input type="text" name="username" placeholder="Your name" required="required" />	
							  <input type="email" name="username" placeholder="Your email" required="required" />
							  <input type="text" name="username" placeholder="Phone number"  required="required" />
							  <textarea id="message" name="message" placeholder="Address"></textarea>
							  <input type="submit" value="order" class="agileinfo" />
							</form>	
						</div>
					</div>
				</div>
			 <!-- //Horizontal Tab -->
		</div> 	
	</div>	
</div>	
@endsection