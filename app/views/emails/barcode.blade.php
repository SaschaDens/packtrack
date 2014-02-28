@extends('layouts.mail')

@section('content')
<tr>
    <td style="color: #153643; font-family: Arial, sans-serif; font-size: 24px;">
        <b>Barcode for your package!</b>
    </td>
</tr>
<tr>
    <td style="padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
        Place this barcode on your package so we can track your pack!
    </td>
</tr>
<tr>
    <td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
        <img src="https://chart.googleapis.com/chart?cht=qr&chs=140x140&chl={{ $tracking_code }}" alt={{ $tracking_code }} />
        <img src="http://www.barcodes4.me/barcode/c128a/{{ $tracking_code }}.png?width=250&height=100&istextdrawn=1" alt={{ $tracking_code }} />
    </td>
</tr>
<tr>
    <td style="padding: 40px 0 20px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
        Enjoy your stay! PackAndTrack Team
    </td>
</tr>
@stop