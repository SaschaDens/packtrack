<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Demystifying Email Design</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td style="padding: 0 0 30px 0;">

            <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border: 1px solid #cccccc; border-collapse: collapse;">
                <tr>
                    <td align="center" bgcolor="#3498db" style="padding: 40px 0 30px 0; color: #153643; font-size: 28px; font-weight: bold; font-family: Arial, sans-serif;">
                        {{ HTML::image('assets/img/logo.png', null, array('alt' => 'Pack&Track')) }}
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                            @yield('content')
                        </table>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#ee4c50" style="padding: 30px 30px 30px 30px;">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr>
                                <td style="color: #ffffff; font-family: Arial, sans-serif; font-size: 14px;" width="75%">
                                    &copy; Pack&Track Belgium 2013-2014<br/>

                                </td>
                                <td align="right" width="25%">
                                    <table border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;">
                                                <a href="http://www.twitter.com/" style="color: #ffffff;">
                                                    <img src="http://www.nightjar.com.au/tests/magic/images/tw.gif" alt="Twitter" width="38" height="38" style="display: block;" border="0"/>
                                                </a>
                                            </td>
                                            <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
                                            <td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;">
                                                <a href="http://www.twitter.com/" style="color: #ffffff;">
                                                    <img src="http://www.nightjar.com.au/tests/magic/images/fb.gif" alt="Facebook" width="38" height="38" style="display: block;" border="0"/>
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>

        </td>
    </tr>
</table>
</body>
</html>






