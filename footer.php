<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
global $APPLICATION;
?>
<table class="table" align="center" cellpadding="0" cellspacing="0" width="600" style="background-color:transparent;">
    <tbody>
    <tr style="border-collapse:collapse;">
        <td width="600" align="center" valign="top" height="5" style="padding:0;Margin:0;padding-bottom:20px;">

        </td>
    </tr>
    </tbody>
</table>
<table class="table" bgcolor="#ffffff" align="center" cellpadding="0" cellspacing="0" width="600"
       style="background-color:#FFFFFF;">
    <tbody>
    <tr style="border-collapse:collapse;">
        <td align="left" style="Margin:0;padding:15px;">
            <table class="table" cellpadding="0" cellspacing="0" align="left" style="float:left;">
                <tbody>
                <tr style="border-collapse:collapse;">
                    <td width="275" align="left" style="padding:0;Margin:0;">
                        <a target="_blank"
                           style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;font-size:14px;text-decoration:underline;color:#3498DB;">
                            <img src="/local/templates/wc_email/images/logo.jpg" alt=""
                                 style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;"
                                 width="250" height="45">
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
            <table class="table" cellpadding="0" cellspacing="0" align="right" style="float:right;">
                <tbody>
                <tr style="border-collapse:collapse;">
                    <td width="275" align="right" style="padding:0;Margin:0;">
                        <span class="button"> <a href="<? $APPLICATION->IncludeFile('/local/templates/wc_email/include/url.php') ?>" target="_blank" class="button">Перейти на сайт магазина</a></span>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    <tr style="border-collapse:collapse;">
        <td align="left" style="Margin:0;padding:15px;padding-top:10px">
            <table class="table" cellpadding="0" cellspacing="0" align="left" style="float:left;">
                <tbody>
                <tr style="border-collapse:collapse;">
                    <td width="275" align="center" bgcolor="#f3f3f3"
                        style="padding:10px;Margin:0;padding-top: 15px; padding-bottom: 15px">

                        <p style="font-size:14px;line-height:160%;">Телефон</p>
                        <p style="font-size:18px;line-height:100%;">
                            <strong><? $APPLICATION->IncludeFile('/local/templates/wc_email/include/phone.php') ?></strong></p>
                    </td>
                    <td width="20"></td>
                    <td width="275" align="center" bgcolor="#f3f3f3"
                        style="padding:10px;Margin:0;padding-top: 15px; padding-bottom: 15px">
                        <p style="font-size:14px;line-height:160%;">Email
                        </p>
                        <p style="line-height:100%;">
                            <strong><a target="_blank" href="mailto:<? $APPLICATION->IncludeFile('/local/templates/wc_email/include/email.php') ?>"
                                       style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;font-size:18px;text-decoration:underline;color:#000000;"><? $APPLICATION->IncludeFile('/local/templates/wc_email/include/email.php') ?></a>
                            </strong>
                        </p>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>
</td>
</tr>
</tbody>
</table>
</div>
</body>
</html>
