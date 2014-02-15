{{ Form::bt_text('address', null, null, array('class' => 'input-lg', 'placeholder' => 'Address', 'tabindex' => '1')) }}
<div class="row">
    <div class="col-xs-12 col-md-6">
        {{ Form::bt_text('city', null, null, array('class' => 'input-lg', 'placeholder' => 'City', 'tabindex' => '2')) }}
    </div>
    <div class="col-xs-12 col-md-6">
        {{ Form::bt_text('postal_code', null, null, array('class' => 'input-lg', 'placeholder' => 'Postal Code', 'tabindex' => '3')) }}
    </div>
</div>
<div class="form-group">
    {{ Form::select('country', array('BE' => 'Belgium'), '', array('class' => 'form-control input-lg', 'tabindex' => '9')) }}
    <span class="help-block">We currently only operate in Belgium</span>
</div>
<hr/>
<h2>Package Information</h2>
<div class="form-group">
    {{ Form::text('reciever_mail', null, array('class' => 'form-control input-lg', 'placeholder' => 'Reciever Email', 'tabindex' => '5')) }}
    <span class="help-block">Reciever email is optional.</span>
</div>

{{ Form::bt_textarea('description', null, null, array('class' => 'input-lg', 'placeholder' => 'Package Description', 'tabindex' => '6')) }}

{{ Form::bt_button('Create', array('class' => 'btn-primary btn-block btn-lg', 'tabindex' => '7')) }}