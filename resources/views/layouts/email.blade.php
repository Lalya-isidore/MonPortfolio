<!DOCTYPE html>
<html lang="fr" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--[if mso]>
    <xml>
        <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->
    <title>@yield('subject')</title>
    <style>
        /* INLINE STYLES FOR CLIENT COMPATIBILITY */
        body {
            margin: 0;
            padding: 0;
            width: 100% !important;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            background-color: #f0f2f5;
        }

        .ExternalClass {
            width: 100%;
        }

        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
            line-height: 100%;
        }

        table,
        td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            border-collapse: collapse !important;
        }

        /* MODERN SANS-SERIF STACK */
        .font-sans {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif !important;
        }

        @media screen and (max-width: 600px) {
            .mobile-padding {
                padding: 30px 20px !important;
            }

            .mobile-header {
                padding: 40px 20px !important;
            }

            .full-width {
                width: 100% !important;
                display: block !important;
            }
        }
    </style>
</head>

<body
    style="margin:0; padding:0; background-color:#f0f2f5; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;">
    <table border="0" cellpadding="0" cellspacing="0" width="100%"
        style="table-layout: fixed; background-color: #f0f2f5;">
        <tr>
            <td align="center" style="padding: 40px 0;">
                <!--[if mso]>
                <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                <tr>
                <td align="center" valign="top" width="600">
                <![endif]-->
                <table border="0" cellpadding="0" cellspacing="0" width="100%"
                    style="max-width: 600px; background-color: #ffffff; border-radius: 24px; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.05); border: 1px solid #e2e8f0;">
                    <!-- HEADER -->
                    <tr>
                        <td align="center" class="mobile-header"
                            style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); padding: 60px 40px;">
                            @yield('header')
                        </td>
                    </tr>

                    <!-- CONTENT -->
                    <tr>
                        <td class="mobile-padding"
                            style="padding: 50px 45px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; color: #334155; font-size: 16px; line-height: 1.6;">
                            @yield('content')
                        </td>
                    </tr>

                    <!-- FOOTER -->
                    <tr>
                        <td align="center"
                            style="background-color: #f8fafc; padding: 40px; border-top: 1px solid #e2e8f0;">
                            <p
                                style="margin: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; font-size: 13px; color: #94a3b8; line-height: 1.5;">
                                Ce message a été généré automatiquement par le système de contact.<br>
                                &copy; {{ date('Y') }} <strong>ISIDORE LALYA</strong>. Tous droits réservés.
                            </p>
                            <div style="margin-top: 20px;">
                                <a href="https://wa.me/22998201610"
                                    style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; text-decoration: none; color: #6366f1; font-weight: 700; font-size: 13px; margin: 0 15px;">WHATSAPP</a>
                                <a href="mailto:lalyaisidore@gmail.com"
                                    style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; text-decoration: none; color: #6366f1; font-weight: 700; font-size: 13px; margin: 0 15px;">EMAIL</a>
                            </div>
                        </td>
                    </tr>
                </table>
                <!--[if mso]>
                </td>
                </tr>
                </table>
                <![endif]-->
            </td>
        </tr>
    </table>
</body>

</html>