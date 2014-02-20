@extends('layouts.mail')

@section('content')
<tr>
    <td style="color: #153643; font-family: Arial, sans-serif; font-size: 24px;">
        <b>Your package has arrived.</b>
    </td>
</tr>
<tr>
    <td style="padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
        Dear NAME, your package is waiting on you at PLACE.
    </td>
</tr>
<tr>
    <td>
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td width="260">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <td>
                                {{ $tracking }}
                                <!--<img src="http://www.nightjar.com.au/tests/magic/images/left.gif" alt="" width="100%" height="140" style="display: block;"/>-->
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 25px 0 0 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempus adipiscing felis, sit amet blandit ipsum volutpat sed. Morbi porttitor, eget accumsan dictum, nisi libero ultricies ipsum, in posuere mauris neque at erat.
                            </td>
                        </tr>
                    </table>
                </td>
                <td style="font-size: 0; line-height: 0;" width="20">
                    &nbsp;
                </td>
                <td width="260">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <td>
                                <!--<img src="http://www.nightjar.com.au/tests/magic/images/right.gif" alt="" width="100%" height="140" style="display: block;"/>-->
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 25px 0 0 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempus adipiscing felis, sit amet blandit ipsum volutpat sed. Morbi porttitor, eget accumsan dictum, nisi libero ultricies ipsum, in posuere mauris neque at erat.
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </td>
</tr>
@stop