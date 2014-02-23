<h2>Please Sign Up <small>And you can track your packages.</small></h2>
<hr>
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
<h2>Sending details</h2>
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
    <span class="help-block">We currently only operate in Belgium</span>
</div>
<hr/>

{{ Form::bt_button('Register', array('class' => 'btn-pack btn-block btn-lg', 'tabindex' => '10')) }}

<p>{{ link_to_action('SessionsController@create', 'Already have an account? Sign in here', null, array('class' => '', 'tabindex' => '11')) }}</p>