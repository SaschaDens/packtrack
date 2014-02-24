@extends('layouts.mail')

@section('content')
<tr>
    <td style="color: #153643; font-family: Arial, sans-serif; font-size: 24px;">
        <b>Great news! Your package is on its way!</b>
    </td>
</tr>
<tr>
    <td style="padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
        You can now track your package on {{ link_to_action('HomeController@getTracking') }}. Each package has its own
        unique key. <b>Don't share this with anyone.</b> Use the tracking key to find delivery date and location.
    </td>
</tr>
<tr>
    <td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
        Tracking key: <b>{{ $tracking }}</b>
    </td>
</tr>
<tr>
    <td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
        Trackable on {{ link_to_action('HomeController@getTracking') }}
    </td>
</tr>
<tr>
    <td style="padding: 40px 0 20px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
        Enjoy your stay!
    </td>
</tr>
@stop