@extends('layouts.mail')

@section('content')
<tr>
    <td style="color: #153643; font-family: Arial, sans-serif; font-size: 24px;">
        <b>Welcome to Pack and Track!</b>
    </td>
</tr>
<tr>
    <td style="padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
        In order to use our service you need to verify your account. You can do this by clicking this URL below.
    </td>
</tr>
<tr>
    <td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
        Activation Link: {{ link_to_action('UsersController@show', action('UsersController@show', $activation), $activation) }}
    </td>
</tr>
<tr>
    <td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
        Copy/Paste this link if the url doesn't work.
    </td>
</tr>
<tr>
    <td style="padding: 40px 0 20px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
        Enjoy your stay! PackAndTrack Team
    </td>
</tr>
@stop