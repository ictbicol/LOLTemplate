<div class="footer">
	<div class="inner">
		<div class="col left about">
			<img src="library/images/aboutlol-icon.png" alt=""/>
			<div class="contextright">
				<h5>About LOL</h5>
				
			</div>
		</div>
		
		<div class="col right country">
			<h5>Post your property</h5>
			<div class="flags">
            	<?php
					$img = array('src'=>'library/images/english-flag.jpg');
					echo anchor('',img($img).'English');
				?>				
				<a href="#"><img src="library/images/deutsch-flag.jpg" alt=""/>Deutsch</a>
				<a href="#"><img src="library/images/francais-flag.jpg" alt=""/>Francais</a>
				<a href="#"><img src="library/images/portugues-flag.jpg" alt=""/>Portugues</a>
				<a href="#"><img src="library/images/nederlands-flag.jpg" alt=""/>Nederlands</a>
				<a href="#"><img src="library/images/italinao-flag.jpg" alt=""/>Italiano</a>
				<a href="#"><img src="library/images/pyccknn-flag.jpg" alt=""/>Pyccknn</a>
				<a href="#"><img src="library/images/norsk-flag.jpg" alt=""/>Norsk</a>
				<a href="#"><img src="library/images/espanol-flag.jpg" alt=""/>Español</a>
				<a href="#"><img src="library/images/chinese-flag.jpg" alt=""/>&#26085;&#26412;&#35486; </a>
				<a href="#"><img src="library/images/svenska-flag.jpg" alt=""/>Svenska</a>
			</div>
		</div>
		<div class="bottomfooter">
			<div class="copy">
            	<?php
					$attributes = array('class'=>'first');
					echo anchor('','Copyright 2013 Lightsonlocations.com',$attributes);
					echo anchor('','Terms of use');
				?>
			</div>
			<div class="socials">
            	<?php
					$attributes = array('class'=>'btn tweet');
					echo anchor('','Twitter',$attributes);
					$attributes = array('class'=>'btn fb');
					echo anchor('','fb',$attributes);
					$attributes = array('class'=>'btn googleplus');
					echo anchor('','Google+',$attributes); 				
				?>
			</div>
		</div>
	</div> 
</div>

<!--start signup-->
<div style="display:none;">
	<div class="signup-plan" id="signup">
			<div class="form left">
				<div class="rateprice yellow">
					<p>$25.00</p><br/>
					<span>month</span>
				</div>
				<div class="container">
					<p>Neque porro quisquam est, qui dolorem ipsum quiat enim ad minima.</p>
					<div class="option">
						<a href="#">Neque porro quisquam est</a>
						<a href="#">Sed ut perspiciatis unde</a>
						<a href="#">Neque porro quisquam </a>
						
					</div>
					<a href="#step02" class="btn signupbtn fbox">Sign Up</a>
				</div>
			</div>
			<div class="form right">
				<div class="rateprice blue">
					<p>$25.00</p><br/>
					<span>month</span>
				</div>
				<div class="container">
					<p>Neque porro quisquam est, qui dolorem ipsum quiat enim ad minima.</p>
					<div class="option">
						<a href="#">Neque porro quisquam est</a>
						<a href="#">Sed ut perspiciatis unde</a>
						<a href="#">Neque porro quisquam </a>
						
					</div>
					<a href="#step02" class="btn signupbtn fbox">Sign Up</a>
				</div>
			</div>
		</div><!--end signup-plan-->
	</div>
<!--end signup-->

<div style="display:none">
	<div class="signupform" id="step02">
		<div class="tabs">
			<a href="#" class="active">Sign up</a>
			<a href="#" class="last">Payment</a>
		</div>
		<div class="tcontent">
			<div class="form">
				<p>
					<input type="text" class="text email"/>
				</p>
				<p>
					<input type="text" class="text pass"/>
				</p>
				<p>
					<input type="text" class="text reppass"/>
				</p>
				<p>
					<input type="checkbox" name="condo" value="condo" id="condo"/>
					<label>Send me a copy of terms and services.</label>
				</p>
				<a href="#step03" class="fbox btn submitbtn">Submit</a>
			
			</div>
		</div>
	</div>
</div>
<!-- Jquery Library - Put all your Jquery / Javascript Library Here -->

<div style="display:none">
	<div class="signupform" id="step03">
		<div class="center">
			<div class="tabs">
				<a href="#" >Sign up</a>
				<a href="#" class="last active">Payment</a>
			</div>
			<div class="tcontent">
				<div class="form">
					<div class="textconfirm"><p>Complete your payment!</p></div>
					<div class="btnset">
						<a href="#" class="btn creditbtn">Pay by Credit Card</a>
						<a href="#" class="btn paypalbtn">Pay by Paypal</a>
					</div>
				</div>
			</div>
		</div>
		<div class="paymentmethod">
			<h5>Lol</h5>
			<div class="forms">
				<p>
				<label>Card No.</label>
				<input type="text" class="text cardno"/>
				</p>
				
				<p class="last">
				<label>Card Date.</label>
				<input type="text" class="text carddate"/>
				</p>
				
				<p>
				<label>Name on Card</label>
				<input type="text" class="text cardname"/>
				</p>
				
				<p class="last">
				<label>Card code</label>
				<input type="text" class="text cardcode"/>
				</p>
				<input type="submit" class="btn purchasebtn"/>
			</div>
			<div class="arrowleft"></div>
			<a class="close"></a>
		</div>
	</div>
</div>

<!-- Jquery Library - Put all your Jquery / Javascript Library Here -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.0.js" ></script>
<script type="text/javascript" src="library/js/fancybox/source/jquery.fancybox.pack.js"></script>
<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="library/js/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
<script  type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script type="text/javascript" src="library/js/combox/jquery.selectBox.js"></script>
<script type="text/javascript" src="library/js/jQuery-Custom-Checkboxes.js"></script>
<script type="text/javascript" src="library/js/watermark.js"></script>
<script type="text/javascript" src="library/js/scripts.js"></script>




        