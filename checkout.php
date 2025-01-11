<html>
<form action="payscript.php" method="post" style="padding: 25px;">

<div=class="row">

<div class="col-25"> <h3 style="text-align: center;margin:20px 10px; font-family: lato;">Checkout Form</h3>



<label for="fname"><i class="fa fa-user"></i> Full Name</label> <input type="text" id="fname" name="name" placeholder="John M. Doe">

<label for "email"><i class="fa fa-envelope"></i> Email</label>
<input type="text" id="email" name="email" placeholder="john@example.com">

<input type="hidden" value="" name "oderid">

<input type="hidden" value="<?php echo 1;?> " name=amount"> <label for= "city"><i class="fa fa-mobile"></i> Mobile</label>

<input type="text" id="city" name="mobile" placeholder ="Mobile Number">

<label for=adr"><i class="fa fa-address-card-o"></i> Address</label>


<input type="text" id="adr" name="address" placeholder="542 W. 15th Street">

</div>
<input type="submit" value="Pay Now shrads" class="btn">
</form>

</html>
