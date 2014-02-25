<h2>User Details</h2>
<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6">
        {{ Form::bt_text('first_name', null, null, array('class' => 'input-lg', 'placeholder' => 'First Name', 'tabindex' => '1')) }}
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6">
        {{ Form::bt_text('last_name', null, null, array('class' => 'input-lg', 'placeholder' => 'Last Name', 'tabindex' => '2')) }}
    </div>
</div>

{{ Form::bt_email('email', null, null, array('class' => 'input-lg', 'placeholder' => 'Email Address', 'tabindex' => '3')) }}

<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6">
        {{ Form::bt_password('password', null, array('class' => 'input-lg', 'placeholder' => 'Password', 'tabindex' => '4')) }}
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6">
        {{ Form::bt_password('password_confirmation', null, array('class' => 'input-lg', 'placeholder' => 'Confirm Password', 'tabindex' => '5')) }}
    </div>
</div>
<hr/>
<h2>Contact details</h2>
{{ Form::bt_text('address', null, null, array('class' => 'input-lg', 'placeholder' => 'Address', 'tabindex' => '6')) }}
<div class="row">
    <div class="col-xs-12 col-md-6">
        {{ Form::bt_text('city', null, null, array('class' => 'input-lg', 'placeholder' => 'City', 'tabindex' => '7')) }}
    </div>
    <div class="col-xs-12 col-md-6">
        {{ Form::bt_text('postal_code', null, null, array('class' => 'input-lg', 'placeholder' => 'Postal Code', 'tabindex' => '8')) }}
    </div>
</div>
<div class="form-group">
    {{ Form::select('country', array('BE' => 'Belgium'), '', array('class' => 'form-control input-lg', 'tabindex' => '9')) }}
</div>
<hr/>
<h2>Working Location</h2>
<hr/>
<div class="form-group">
    {{ Form::select('location', $locations, '', array('class' => 'form-control input-lg', 'tabindex' => '9')) }}
</div>

{{ Form::bt_button('Create Account', array('class' => 'btn-pack btn-block btn-lg', 'tabindex' => '10')) }}