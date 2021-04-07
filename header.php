<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

Bitrix\Main\Localization\Loc::LoadMessages(__FILE__);

global $APPLICATION;
$buttonColor = '#000000';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="ru"
      style="width:100%;font-family:arial, 'helvetica neue', helvetica, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0;">
<head>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="x-apple-disable-message-reformatting" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="telephone=no" name="format-detection">
    <title><? $APPLICATION->IncludeFile('/local/templates/wc_email/include/company.php') ?></title>
    <style type="text/css">
        .table {
            mso-table-lspace: 0;
            mso-table-rspace: 0;
            border-collapse: collapse;
            border-spacing: 0;
        }

        p, li {
            Margin: 0;
            -webkit-text-size-adjust: none;
            -ms-text-size-adjust: none;
            mso-line-height-rule: exactly;
            font-family: arial, 'helvetica neue', helvetica, sans-serif;
        }

        span.button {
            border-style: solid;
            border-color: <?=$buttonColor?>;
            background: <?=$buttonColor?>;
            border-width: 0;
            display: inline-block;
            border-radius: 2px;
            width: auto;
        }

        a.button {
            mso-style-priority: 100 !important;
            text-decoration: none !important;
            -webkit-text-size-adjust: none;
            -ms-text-size-adjust: none;
            mso-line-height-rule: exactly;
            font-family: arial, 'helvetica neue', helvetica, sans-serif;
            font-size: 14px;
            color: #FFFFFF;
            border-style: solid;
            border-color: <?=$buttonColor?>;
            border-width: 10px 20px 10px 20px;
            display: inline-block;
            background: <?=$buttonColor?>;
            border-radius: 2px;
            font-weight: normal;
            font-style: normal;
            line-height: 150%;
            width: auto;
            text-align: center;
        }
    </style>
</head>
<body style="width:100%;font-family:arial, 'helvetica neue', helvetica, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0;">
<div style="background-color:#F3F3F3;">
    <!--[if gte mso 9]>
    <v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
        <v:fill type="tile" src="" color="#f3f3f3"></v:fill>
    </v:background>
    <![endif]-->
    <table class="table" cellpadding="0" cellspacing="0" width="100%"
           style="padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top;">
        <tbody>
        <tr style="border-collapse:collapse;">
            <td valign="top" style="padding:20px;Margin:0;">
                <table class="table" bgcolor="#ffffff" align="center" cellpadding="0" cellspacing="0" width="600"
                       style="background-color:#FFFFFF;">
                    <tbody>
                    <tr style="border-collapse:collapse;">
                        <td align="left" style="Margin:0;padding:15px;">
                            <table class="table" cellpadding="0" cellspacing="0" align="left" style="float:left;">
                                <tbody>
                                <tr style="border-collapse:collapse;">
                                    <td width="276" align="left" style="padding:0;Margin:0;">
                                        <a href="<? $APPLICATION->IncludeFile('/local/templates/wc_email/include/url.php') ?>" target="_blank"
                                           style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;font-size:14px;text-decoration:underline;color:#3498DB;">
                                            <img src="/local/templates/wc_email/images/logo.png"
                                                 alt=""
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
                                    <td width="274" align="right" style="padding:0;Margin:0;">
                                        <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:20px;line-height:120%;color:#333333;">
                                            <strong>
                                                <? $APPLICATION->IncludeFile('/local/templates/wc_email/include/phone.php') ?>
                                            </strong>
                                        </p>
                                        <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;line-height:100%;color:#333333;">
                                            <strong><a target="_blank" href="mailto:<? $APPLICATION->IncludeFile('/local/templates/wc_email/include/email.php') ?>"
                                                       style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;font-size:14px;text-decoration:underline;color:#000000;"><? $APPLICATION->IncludeFile('/local/templates/wc_email/include/email.php') ?></a>
                                                <span style="color:#000000;"></span></strong>
                                        </p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table class="table" align="center" cellpadding="0" cellspacing="0" width="600"
                       style="background-color:transparent;">
                    <tbody>
                    <tr style="border-collapse:collapse;">
                        <td width="600" align="center" valign="top" height="5"
                            style="padding:0;Margin:0;padding-bottom:20px;">

                        </td>
                    </tr>
                    </tbody>
                </table>
