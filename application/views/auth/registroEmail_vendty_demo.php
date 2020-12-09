<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <style type="text/css">
        /* Estilo generales */
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
        }
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }
        a{
            color: #0981E2 !important;
        }
        div[style*="margin: 16px 0"] {
            margin:0 !important;
        }
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            Margin: 0 auto !important;
        }
        table table table {
            table-layout: auto; 
        }
        img {
            -ms-interpolation-mode:bicubic;
        }
        .mobile-link--footer a,
        a[x-apple-data-detectors] {
            color:inherit !important;
            text-decoration: underline !important;
        }

        /*Estilo de los botones*/
        .button-td,
        .button-a,
        .button-b {
            transition: all 100ms ease-in;
        }

        /* Media Queries */
        @media screen and (max-width: 550px) {

            .email-container {
                width: 100% !important;
                margin: auto !important;
            }
            .fluid,
            .fluid-centered {
                max-width: 100% !important;
                height: auto !important;
                margin-left: auto !important;
                margin-right: auto !important;
            }
            .fluid-centered {
                margin-left: auto !important;
                margin-right: auto !important;
            }
            .stack-column,
            .stack-column-center {
                display: block !important;
                width: 100% !important;
                max-width: 100% !important;
                direction: ltr !important;
            }
            .stack-column-center {
                text-align: center !important;
            }
            .center-on-narrow {
                text-align: center !important;
                display: block !important;
                margin-left: auto !important;
                margin-right: auto !important;
                float: none !important;
            }
            table.center-on-narrow {
                display: inline-block !important;
            }
        }
    </style>

</head>
<body bgcolor="#f2f2f2" width="100%" style="margin: 0;">
    <center style="width: 100%; background: #f2f2f2;">

        <!-- Preheader Text: aparece después del asunto en algunos clientes de correo -->
        <div style="display:none;font-size:1px;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;mso-hide:all;font-family: sans-serif;">
            <!--Se puede describir un poco el contenido del email-->
        </div>
        <!-- Preheader Text -->

        <!-- Header (logo) -->
        <table cellspacing="0" cellpadding="0" border="0" align="center" width="550" style="margin: auto;" class="email-container">
            <tr>
                <td style="padding: 15px 5px 5px 5px; text-align: left">
                    <a href="http://vendty.com"><img src="http://vendty.com/wp-content/themes/Simplicity/images/style2/logo_white_bg.png" width="160" height="auto" alt="vendty" border="0"></a>
                </td>
            </tr>
            <tr>
                <td style="border-top-left-radius:5px;border-top-right-radius:5px;vertical-align:top;border-collapse:collapse;padding:2px;background-color:#09CA0E;font-size:4px;text-align:center">
                </td>
            </tr>
        </table>
        <!-- Header -->
        
        <!-- Body -->
        <table cellspacing="0" cellpadding="0" border="0" align="center" bgcolor="#ffffff" width="550" style="margin: auto; " class="email-container">
            
            <!-- Header image -->
            <tr>
                <td>
                    <img src="http://i.imgur.com/5QpqVFK.png" width="100%" height="auto" alt="Prueba gratis por 7 días" border="0" align="center" style="width: 100%; max-width: 550px;">
                </td>
            </tr>
            <!-- Header image -->

            <!-- Texto -->
            <tr>
                <td style="padding:25px 25px 5px 25px; text-align: left; font-family: sans-serif; font-size: 22px; mso-height-rule: exactly; color: #555555;font-weight: lighter;">
                    ¡Hola <b><?php echo $nombre ?>!<b>
                </td>
            </tr>
            <tr>
                <td style="padding: 25px 25px 10px 25px; text-align: left; font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555;font-weight: lighter;">
                    Bienvenido a la <b>prueba gratis de Vendty por 7 días.</b> 
                </td>
            </tr>
            <tr>
                <td style="padding: 0px 25px 15px 25px; text-align: left; font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555;font-weight: lighter;">
                    A continuación encontrarás los datos de acceso a la plataforma y enlaces a algunos recursos útiles.
                </td>
            </tr>
            <tr>
                <td style="padding: 0px 0px 5px 25px; text-align: center; font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555;font-weight: lighter;">
                    <!-- <b>Url:</b> <a href="#">vendty.com/invoice/</a> <br /> -->
                    <img src="http://simpleicon.com/wp-content/uploads/user1.png" width="15px" alt="">&nbsp;<b>Usuario:</b><br>  <?php echo $email ?> <br /><br>
                    <b><img src="http://www.iconsfind.com/wp-content/uploads/2013/10/lock-24-512.png" width="15px" alt="">&nbsp;Contraseña:</b> <br><?php echo $password ?><br><br>
                </td>
            </tr>
            <tr>
                <td style="padding: 0px 0px 25px 25px; text-align: center; font-family: sans-serif;">
                    <table cellspacing="0" cellpadding="0" border="0" class="center-on-narrow" align="center">
                        <tr>
                            <td style="border-radius: 3px; background: #09CA0E; text-align: center;">
                                <a href="http://www.vendty.com/invoice/index.php/auth/login" style="background: #ffffff; border: 1px solid #09CA0E; font-family: sans-serif; font-size: 13px; line-height: 1.1; text-align: center; padding:15px;text-decoration: none; display: block; border-radius: 3px; font-weight: bold;" class="button-b">
                                    <span style="color:#09CA0E">Entra a tu cuenta →&nbsp;</span>
                                </a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td valign="middle" width="100%" bgcolor="#f6f6f6"  style="text-align: center; padding:25px 0px 0px 0px; font-family: sans-serif; font-size: 18px; mso-height-rule: exactly;font-weight: bold; color:#09ca0e">
                   Empieza a usar Vendty hoy:
                </td>
            </tr>
            <tr>
                <td valign="middle" width="100%" bgcolor="#f6f6f6"  style="text-align: center; padding:25px 0px 0px 0px; font-family: sans-serif; font-size: 15px; mso-height-rule: exactly;">
                    <img src="http://i.imgur.com/eSUoroJ.png"  width="250" alt="" border="0" class="center-on-narrow">
                </td>
            </tr>
            <tr>
                <td bgcolor="#f6f6f6" valign="middle" style="text-align: left; padding: 5px 15px ">
                    <div>
                        <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr>
                                <td valign="middle" width="10%" style="text-align: right; padding:0px 10px 0px 0px; font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #4e4e4e;font-weight: lighter;">
                                    <span style="font-size:24px; border: 1px solid #09CA0E; color: #09CA0E; border-radius: 50px;padding: 2px 9px; margin-right: 5px">1</span>
                                </td>
                                <td valign="middle" width="75%" style="text-align: left; font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #4e4e4e;padding: 15px 0px;font-weight: lighter;">
                                    <b><a href="http://www.vendty.com/manual.pdf" target="_blank">Primeros pasos en vendty:</a></b><br> Manual de usuario en pdf de cómo utilizar Vendty
                                </td>
                            </tr>
                            <tr>
                                <td valign="middle" width="10%" style="text-align: right; padding:0px 10px 0px 0px; font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #4e4e4e;font-weight: lighter;">
                                    <span style="font-size:24px; border: 1px solid #09CA0E; color: #09CA0E; border-radius: 50px;padding: 2px 9px; margin-right: 5px">2</span>
                                </td>
                                <td valign="middle" width="75%" style="text-align: left; font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #4e4e4e; padding: 15px 0px;font-weight: lighter;">
                                   <b> <a href="https://www.youtube.com/playlist?list=PL9IVF-H3Eg6yKAJLTnMIJvB19thFyzoCF" target="_blank">Canal de video:</a></b><br> Múltiples videos con los que aprenderás a usar  Vendty
                                </td>
                            </tr>
                            <tr>
                                <td valign="middle" width="10%" style="text-align: right; padding:0px 10px 0px 0px; font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #4e4e4e;">
                                    <span style="font-size:24px; border: 1px solid #09CA0E; color: #09CA0E; border-radius: 50px;padding: 2px 9px; margin-right: 5px">3</span>
                                </td>
                                <td valign="middle" width="75%" style="text-align: left; font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #4e4e4e; padding: 15px 0px;font-weight: lighter;">
                                    <b><a href="http://vendty.com/PropuestaVendTy.pdf" target="_black">Cotización:</a></b><br>Descarga una propuesta comercial de Vendty
                                </td>
                            </tr>
                        </table>
                        <table cellspacing="0" cellpadding="0" border="0" align="center" style="margin: auto">
                            <tr>
                                <td style="border-radius: 3px; background: #f6f6f6; text-align: center;" class="button-td">
                                    <a href="http://www.vendty.com/invoice/index.php/auth/login" style="background: #f5f5f5; border: 1px solid #09CA0E; font-family: sans-serif; font-size: 13px; line-height: 1.1; text-align: center; padding:15px;text-decoration: none; display: block; border-radius: 3px; font-weight: bold;" class="button-a">
                                        <span style="color:#09CA0E">&nbsp;Entra a tu cuenta de Vendty →&nbsp;</span>
                                    </a>
                                </td>
                            </tr>
                        </table><br>
                    </div>
                </td>
            </tr>

            <tr>
                <!-- Background image -->
                <td background="http://i.imgur.com/43mVc8e.png" bgcolor="#EB6D12" valign="middle" style="text-align: center; background-position: center center !important; background-size: cover !important;">
                    <!--[if gte mso 9]>
                    <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width:550px;height:175px; background-position: center center !important;">
                    <v:fill type="tile" src="http://i.imgur.com/43mVc8e.png" color="#EB6D12" />
                    <v:textbox inset="0,0,0,0">
                    <![endif]-->
                    <div>
                        <!--[if mso]>
                        <table border="0" cellspacing="0" cellpadding="0" align="center" width="550">
                        <tr>
                        <td align="center" valign="top" width="550">
                        <![endif]-->
                        <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="max-width:550px; margin: auto;">
                            <tr>
                                <td valign="middle" style="text-align: center; padding: 40px 20px; font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 25px; color: #ffffff;font-weight:lighter">
                                    <span style="font-size: 18px;font-weight:bold">¿No sabes cómo empezar?</span><br>
                                    Te ayudaremos a integrar <b>Vendty</b> en tu empresa.
                                    <br><br>
                                    <table cellspacing="0" cellpadding="0" border="0" class="center-on-narrow" align="center">
                                        <tr>
                                            <td style="border-radius: 3px; text-align: center;">
                                                <a href="http://vendty.com/registro" style=" border: 1px solid #ffffff; font-family: sans-serif; font-size: 13px; line-height: 1.1; text-align: center; padding:15px;text-decoration: none; display: block; border-radius: 3px; font-weight: bold;" class="button-b">
                                                    <span style="color:#ffffff">&nbsp;Contáctanos ahora →&nbsp;</span>
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <!--[if (gte mso 9)|(IE)]>
                        </td>
                        </tr>
                        </table>
                        <![endif]-->
                    </div>
                    <!--[if gte mso 9]>
                    </v:textbox>
                    </v:rect>
                    <![endif]-->
                </td>
            </tr>
            <!-- Background image -->


            <!-- Imagen con texto a la derecha -->
            <tr>
                <td dir="ltr" align="center" valign="top" width="100%" style="padding: 25px; ">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <!-- Imagen -->
                            <td width="30%" class="stack-column-center">
                                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tr>
                                        <td dir="ltr" valign="top" style="padding: 0 10px;">
                                            <a href="#"><img src="http://vendty.com/wp-content/uploads/bantienda-1.jpg" width="160" alt="" border="0" class="center-on-narrow"></a>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <!-- Imagen -->
                            <!-- texto -->
                            <td width="50%" class="stack-column-center">
                                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tr>
                                        <td dir="ltr" valign="top" style="font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; color: #555555; padding: 10px; text-align: left;font-weight: lighter;" class="center-on-narrow">
                                            <b style="color:#09CA0E; font-size:18px;">Tienda online integrada</b><br><br>
                                            Incrementa tus ventas con la tienda virtual integrada y recibe pagos en línea.
                                            <br><br>
                                            <!-- Button : Begin -->
                                            <table cellspacing="0" cellpadding="0" border="0" class="center-on-narrow" align="center">
                                                <tr>
                                                    <td style="border-radius: 3px; background: #09CA0E; text-align: center;">
                                                        <a href="http://vendty.com/registro" style="background: #ffffff; border: 1px solid #09CA0E; font-family: sans-serif; font-size: 13px; line-height: 1.1; text-align: center; padding:15px;text-decoration: none; display: block; border-radius: 3px; font-weight: bold;" class="button-b">
                                                            <span style="color:#09CA0E">Conoce más →&nbsp;</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>
                                            <!-- Button : END -->    
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <!-- texto -->
                        </tr>
                    </table>
                </td>
            </tr>
            <!-- Imagen con texto a la derecha -->

            <!-- Imagen con texto a la derecha -->
            <tr>
                <td dir="ltr" align="center" valign="top" width="100%" style="padding: 25px; " bgcolor="#DFF4DB">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <!-- Imagen -->
                            <td width="33.33%" class="stack-column-center">
                                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tr>
                                        <td dir="ltr" valign="top" style="padding: 0 10px;">
                                            <a href="#"><img src="http://vendty.com/wp-content/uploads/2015/08/Cliente1_home.jpg"  width="150" alt="" border="0" class="center-on-narrow"></a>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <!-- Imagen -->
                            <!-- texto -->
                            <td width="66.66%" class="stack-column-center">
                                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tr>
                                        <td dir="ltr" valign="top" style="font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555; padding: 10px; text-align: left;font-weight: lighter;" class="center-on-narrow">
                                            “Me ayuda muchísimo porque ya puedo saber para donde va la tendencia y que puedo pedirle a mis proveedores.” <br><br>
                                            <b style="color:#09CA0E; font-size:14px">- Julián Medina. CEO de 99% Gafas de Sol</b>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <!-- texto -->
                        </tr>
                    </table>
                </td>
            </tr>
            <!-- Imagen con texto a la derecha -->
            <tr>
                <td style="padding: 25px; text-align: center; font-family: sans-serif; font-size: 12px; mso-height-rule: exactly; line-height: 20px; color: #555555;font-weight: lighter;">
                    <table>
                        <tr>
                            <td width="33.33%" style="padding:10px;border:1px solid #dadada;"><img src="https://image.freepik.com/free-icon/telephone-handle-silhouette_318-41969.png" width="15px" alt=""><br>¿Necesitas ayuda?<br><span style="color:#0981E2">(319) 4751398 - (318) 8018675</span></td>
                            <td width="5%" style="padding:10px;border-radius: 5px;">&nbsp;</td>
                            <td width="33.33%" style="padding:15px;border:1px solid #dadada;border-radius: 5px;"><img src="https://cdn4.iconfinder.com/data/icons/defaulticon/icons/png/256x256/mail.png" width="15px" alt=""><br>Programa una demostración<br><a href="http://vendty.com/registro">Contactanos ahora</a></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <!-- <tr>
                <td style="padding: 25px 25px 40px 25px; text-align: left; font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555;font-weight: lighter;">
                   Gracias, <br>
                   <b>Equipo de Vendty</b>
                </td>
            </tr> -->
            <!-- Texto -->

            <tr>
                <td align="center" bgcolor="#4e4e4e">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tbody><tr>
                            <td align="center" style="padding: 15px 0px 15px 0px;font-family: sans-serif;" >
                                <table border="0" cellspacing="0" cellpadding="0" >
                                    <tbody><tr>
                                        <td align="center" style="padding: 0px;">
                                            <table border="0" cellspacing="0" cellpadding="0" >
                                                <tbody><tr>
                                                    <td align="center">
                                                        <span style="font-size: 12px;color:#808080;">Encuéntranos en nuestras redes sociales<br>
                                                        <a href="#" style="margin: 0px 5px;"><img alt="Facebook" src="https://cdn1.iconfinder.com/data/icons/logotypes/32/square-facebook-128.png" border="0" style="height: 30px; width: 30px; border:none; " title="Facebook"></a>
                                                        <a href="#" style="margin: 0px 5px;"> <img alt="Twitter" src="http://www.coetail.com/seriously/files/2016/04/twitter-logo.png" border="0" style="height: 30px; width: 30px; border:none; " title="Twitter"> </a>
                                                    </td>
                                                </tr></tbody>
                                            </table>
                                        </td>
                                    </tr></tbody>
                                </table>
                            </td>
                        </tr></tbody>
                    </table>
                </td>
            </tr>
        </table>
        <!-- Body -->
          
        <!-- Footer -->
        <table cellspacing="0" cellpadding="0" border="0" align="center" width="450" style="margin: auto;" class="email-container">
            <tr>
                <td style="padding: 40px 10px;width: 100%;font-size: 12px; font-family: sans-serif; mso-height-rule: exactly; line-height:18px; text-align: center; color: #888888;">
                    Este e-mail fue enviado a usted por <a href="mailto:info@vendty.com">info@vendty.com</a>. Si usted ya no desea recibir mas mensajes de correo electrónico, puede <unsubscribe style="color:#0981E2; text-decoration:underline;">darse de baja</unsubscribe>
                </td>
            </tr>
        </table>
        <!-- Footer -->
    </center>
</body>
</html>