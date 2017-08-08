<?php include('includes/index.php'); ?>
<div class="container" style="padding-top:30px">
<form method="post" action="../qb-oauth2/create_another_customer.php">
<div class="col-md-10  col-sm-10  col-xs-10 " style="background:#f6f6f6;padding-top:30px">
  <h3 class="text-center">BILLING ADDRESS</h3>
  <hr>
  <div class="row">
        <div class="col-xs- col-sm-6 col-md-6">
            <div class="form-group">
                <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <input type="text" name="address" id="address" class="form-control input-sm" placeholder="Address">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <input type="text" name="email" id="emial" class="form-control input-sm" placeholder="Email Address">
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-4">
            <div class="form-group">
                <input type="text" name="city" id="city" class="form-control input-sm" placeholder="City">
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-4">
            <div class="form-group">
                <input type="text" name="state" id="state" class="form-control input-sm" placeholder="State">
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-4">
            <div class="form-group">
                <input type="text" name="zip" id="state" class="form-control input-sm" placeholder="Zip">
            </div>
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
              <input class="coupon_question" type="checkbox" name="coupon_question" value="1">
              <span class="item-text">Shipping address same as billing address.</span>
            </div>
        </div>
  </div>
</div>
<div class="col-md-10  col-sm-10  col-xs-10 " style="background:#f6f6f6;padding-top:30px">
  <h3 class="text-center">SHIPPING ADDRESS</h3>
  <hr>
  <div class="row">
        <div class="col-xs- col-sm-6 col-md-6">
            <div class="form-group">
                <input type="text" name="first_name_billing" id="first_name_billing" class="form-control input-sm" placeholder="First Name">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <input type="text" name="last_name_billing" id="last_name_billing" class="form-control input-sm" placeholder="Last Name">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <input type="text" name="address_billing" id="address_billing" class="form-control input-sm" placeholder="Billing Address">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <input type="text" name="email_billing" id="email_billing" class="form-control input-sm" placeholder="Billing Email">
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-4">
            <div class="form-group">
                <input type="text" name="city_billing" id="city_billing" class="form-control input-sm" placeholder="Billing City">
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-4">
            <div class="form-group">
                <input type="text" name="state_billing" id="state_billing" class="form-control input-sm" placeholder="Billing State">
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-4">
            <div class="form-group">
                <input type="text" name="zip_billing" id="zip_billing" class="form-control input-sm" placeholder="Billing Zip">
            </div>
        </div>
  </div>
</div>
<div class="col-md-8  col-sm-8  col-xs-8 " style="background:#fff;padding-top:30px">
  <button class="btn btn-primary pull-right"> Submit</button>
</div>
</form>
</div>
