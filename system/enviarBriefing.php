<?php
require("PHPMailer.php");
require("SMTP.php");
date_default_timezone_set('America/Sao_Paulo');
$dados = $_GET;


 $mail = new PHPMailer\PHPMailer\PHPMailer();
 $mail->IsSMTP(); // enable SMTP
//  $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
 $mail->SMTPAuth = true; // authentication enabled
 $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
 $mail->Host = "smtp.titan.email";
 $mail->Port = 465; // or 587
 $mail->IsHTML(true);
 $mail->Username = "contato@williamportfolio.com.br";
 $mail->Password = "EPM9nxX3vt";
 $mail->SetFrom("contato@williamportfolio.com.br", 'Briefing Site');
 $mail->Subject = $assunto;

 $nome = $dados['nome'];
 $telefone = $dados['telefone'];
 $email = $dados['email'];
 $assunto = $dados['nome_empresa'];
 $nicho = $dados['nicho'];
 $tempo_mercado = $dados['tempo_mercado'];
 $sobre_empresa = $dados['sobre_empresa'];
 $publico_alvo = $dados['publico_alvo'];
 $site = $dados['site'];
 $logotipo_sim = $dados['logotipo_sim'];
 $logotipo_nao = $dados['logotipo_nao'];
 $logotipo_na_mas_sim = $dados['logotipo_na_mas_sim'];
 $objetivo = $dados['objetivo'];
 $referencia = $dados['referencia'];
 $cores = $dados['cores'];
 $cores_nao = $dados['cores_nao'];
 $site_moderno = $dados['site_moderno'];
 $site_serio = $dados['site_serio'];
 $site_extrovestido = $dados['site_extrovestido'];
 $site_conservador = $dados['site_conservador'];
 $site_divertido = $dados['site_divertido'];
 $site_elegante = $dados['site_elegante'];
 $site_nerde = $dados['site_nerde'];
 $acrescentar = $dados['acrescentar'];


 $mensagemHtml = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head> <meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Email</title><style type="text/css">#outlook a{padding:0}body{width:100%!important;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;margin:0;padding:0}.ExternalClass{width:100%}.ExternalClass,.ExternalClass div,.ExternalClass font,.ExternalClass p,.ExternalClass span,.ExternalClass td{line-height:100%}#backgroundTable{margin:0;padding:0;width:100%!important;line-height:100%!important}img{outline:0;text-decoration:none;-ms-interpolation-mode:bicubic}a img{border:none}.image_fix{display:block}p{margin:1em 0}h1,h2,h3,h4,h5,h6{color:#000!important}h1 a,h2 a,h3 a,h4 a,h5 a,h6 a{color:#00f!important}h1 a:active,h2 a:active,h3 a:active,h4 a:active,h5 a:active,h6 a:active{color:red!important}h1 a:visited,h2 a:visited,h3 a:visited,h4 a:visited,h5 a:visited,h6 a:visited{color:purple!important}table td{border-collapse:collapse}table{border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0}a{color:orange}@media only screen and (max-device-width:480px){a[href^=tel],a[href^=sms]{text-decoration:none;color:#000;pointer-events:none;cursor:default}.mobile_link a[href^=tel],.mobile_link a[href^=sms]{color:orange!important;pointer-events:auto;cursor:default}}@media only screen and (min-device-width:768px)and (max-device-width:1024px){a[href^=tel],a[href^=sms]{text-decoration:none;color:#00f;pointer-events:none;cursor:default}.mobile_link a[href^=tel],.mobile_link a[href^=sms]{color:orange!important;pointer-events:auto;cursor:default}}</style><!--[if IEMobile 7]><style type="text/css"></style><![endif]--><!--[if gte mso 9]><style>/* Target Outlook 2007 and 2010 */</style><![endif]--></head><body></body></html>';

 $mensagemHtml .= '<!--HEADER--><table width="100%" bgcolor="#f1f1f3" cellpadding="0" cellspacing="0" border="0" ><tr><td>&nbsp;</td></tr><tr><td align="center"><img src="http://williamportfolio.com.br/img/logo.png" width="300px" alt=""/></td></tr><tr><td>&nbsp;</td></tr><tr><td align="center"><font face="Myriad Pro, verdana" color="#000" style="font-size: 16px;">Formulário preenchido em seu site.</font><br><br/><font face="Myriad Pro" color="#175c93" style="font-size: 30px;"> Fale conosco </font><br><br></td></tr></table><!--/HEADER-->';

 $mensagemHtml .= '<table width="95%" align="center" cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>
            <span>&nbsp;</span>
            <span>&nbsp;</span>

            <div><font face="Myriad Pro, verdana" style="font-size:16px"><b>Nome:</b><br>'.$nome.'</font></div><span>&nbsp;</span>
            <div><font face="Myriad Pro, verdana" style="font-size:16px"><b>E-mail:</b><br>'.$email.'</font></div><span>&nbsp;</span>
            <div><font face="Myriad Pro, verdana" style="font-size:16px"><b>Nome da empresa:</b><br>'.$nome_empresa.'</font></div><span>&nbsp;</span>
            <div><font face="Myriad Pro, verdana" style="font-size:16px"><b>Telefone:</b><br>'.$telefone.'</font></div><span>&nbsp;</span><span>&nbsp;</span>
            <div><font face="Myriad Pro, verdana" style="font-size:16px"><b>Qual é o nicho de atuação da sua empresa?:</b><br>'.$nicho.'</font></div><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span>
            <div><font face="Myriad Pro, verdana" style="font-size:16px"><b>A quanto tempo sua empresa está no mercado?:</b><br>'.$tempo_mercado.'</font></div><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span>
            <div><font face="Myriad Pro, verdana" style="font-size:16px"><b>Conte um pouco sobre sua empresa:</b><br>'.$sobre_empresa.'</font></div><span>&nbsp;</span>
            <div><font face="Myriad Pro, verdana" style="font-size:16px"><b>Conte um pouco sobre seu público alvo:</b><br>'.$publico_alvo.'</font></div><span>&nbsp;</span>
            <div><font face="Myriad Pro, verdana" style="font-size:16px"><b>Já possui site? Se sim, qual?</b><br>'.$site.'</font></div><span>&nbsp;</span>
            <div><font face="Myriad Pro, verdana" style="font-size:16px"><b>Já possui uma identidade visual ou logotipo?</b><br>'.$logotipo_sim.'</font></div><span>&nbsp;</span>
            <div><font face="Myriad Pro, verdana" style="font-size:16px"><b>Já possui uma identidade visual ou logotipo?</b><br>'.$logotipo_nao.'</font></div><span>&nbsp;</span>
            <div><font face="Myriad Pro, verdana" style="font-size:16px"><b>Já possui uma identidade visual ou logotipo?</b><br>'.$logotipo_na_mas_sim.'</font></div><span>&nbsp;</span>
            <div><font face="Myriad Pro, verdana" style="font-size:16px"><b>Qual é o objetivo do site?</b><br>'.$objetivo.'</font></div><span>&nbsp;</span>
            <div><font face="Myriad Pro, verdana" style="font-size:16px"><b>Possui alguma referência de sites que te inspiram?</b><br>'.$referencia.'</font></div><span>&nbsp;</span>
            <div><font face="Myriad Pro, verdana" style="font-size:16px"><b>Possuiu alguma preferência de cores?</b><br>'.$cores.'</font></div><span>&nbsp;</span>
            <div><font face="Myriad Pro, verdana" style="font-size:16px"><b>Existe alguma cor que não queira?</b><br>'.$cores_nao.'</font></div><span>&nbsp;</span>
            <div><font face="Myriad Pro, verdana" style="font-size:16px"><b>Características da sua marca</b><br>'.$site_moderno.'</font></div><span>&nbsp;</span>
            <div><font face="Myriad Pro, verdana" style="font-size:16px"><b>Características da sua marca</b><br>'.$site_serio.'</font></div><span>&nbsp;</span>
            <div><font face="Myriad Pro, verdana" style="font-size:16px"><b>Características da sua marca</b><br>'.$site_extrovestido.'</font></div><span>&nbsp;</span>
            <div><font face="Myriad Pro, verdana" style="font-size:16px"><b>Características da sua marca</b><br>'.$site_conservador.'</font></div><span>&nbsp;</span>
            <div><font face="Myriad Pro, verdana" style="font-size:16px"><b>Características da sua marca</b><br>'.$site_divertido.'</font></div><span>&nbsp;</span>
            <div><font face="Myriad Pro, verdana" style="font-size:16px"><b>Características da sua marca</b><br>'.$site_elegante.'</font></div><span>&nbsp;</span>
            <div><font face="Myriad Pro, verdana" style="font-size:16px"><b>Características da sua marca</b><br>'.$site_nerde.'</font></div><span>&nbsp;</span>
            <div><font face="Myriad Pro, verdana" style="font-size:16px"><b>Deseja acrescentar mais alguma informação</b><br>'.$acrescentar.'</font></div><span>&nbsp;</span>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
</table>';

 $mensagemHtml .= '<table width="100%" bgcolor="#f1f1f3" cellpadding="0" cellspacing="0" border="0"><tr><td><table width="95%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr><tr><td><div><font face="Myriad Pro, verdana" color="#175c93" style="font-size:16px"><b>Data:</b></font> <font face="Myriad Pro, verdana" color="#a4a8ab" style="font-size:16px">'.date('d/m/Y').'</font></div><span>&nbsp;</span><div><font face="Myriad Pro, verdana" color="#175c93" style="font-size:16px"><b>Horario:</b></font> <font face="Myriad Pro, verdana" color="#a4a8ab" style="font-size:16px">'.date('H:i').'</font></div><span>&nbsp;</span><div><font face="Myriad Pro, verdana" color="#175c93" style="font-size:16px"><b>IP:</b></font> <font face="Myriad Pro, verdana" color="#a4a8ab" style="font-size:16px">'.getenv("REMOTE_ADDR").'</font></div></td></tr><tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr></table></td></tr></table>';

 $mensagemHtml .= '<table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td><table width="95%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td>&nbsp;</td></tr><td>&nbsp;</td></tr></table></td></tr></table>';

 $mail->Body = $mensagemHtml;

 $mail->AddAddress("contato@williamportfolio.com.br");
    if(!$mail->Send()) {
       echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
      header('Location: ../resposta-formulario.html'); 
    }
?>