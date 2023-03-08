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
 $mail->SetFrom("contato@williamportfolio.com.br");
 $mail->Subject = $assunto;

 $nome = $dados['nome'];
 $telefone = $dados['telefone'];
 $email = $dados['email'];
 $assunto = $dados['assunto'];
 $mensagem = nl2br($dados['mensagem']);

 $mensagemHtml = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head> <meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Email</title><style type="text/css">#outlook a{padding:0}body{width:100%!important;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;margin:0;padding:0}.ExternalClass{width:100%}.ExternalClass,.ExternalClass div,.ExternalClass font,.ExternalClass p,.ExternalClass span,.ExternalClass td{line-height:100%}#backgroundTable{margin:0;padding:0;width:100%!important;line-height:100%!important}img{outline:0;text-decoration:none;-ms-interpolation-mode:bicubic}a img{border:none}.image_fix{display:block}p{margin:1em 0}h1,h2,h3,h4,h5,h6{color:#000!important}h1 a,h2 a,h3 a,h4 a,h5 a,h6 a{color:#00f!important}h1 a:active,h2 a:active,h3 a:active,h4 a:active,h5 a:active,h6 a:active{color:red!important}h1 a:visited,h2 a:visited,h3 a:visited,h4 a:visited,h5 a:visited,h6 a:visited{color:purple!important}table td{border-collapse:collapse}table{border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0}a{color:orange}@media only screen and (max-device-width:480px){a[href^=tel],a[href^=sms]{text-decoration:none;color:#000;pointer-events:none;cursor:default}.mobile_link a[href^=tel],.mobile_link a[href^=sms]{color:orange!important;pointer-events:auto;cursor:default}}@media only screen and (min-device-width:768px)and (max-device-width:1024px){a[href^=tel],a[href^=sms]{text-decoration:none;color:#00f;pointer-events:none;cursor:default}.mobile_link a[href^=tel],.mobile_link a[href^=sms]{color:orange!important;pointer-events:auto;cursor:default}}</style><!--[if IEMobile 7]><style type="text/css"></style><![endif]--><!--[if gte mso 9]><style>/* Target Outlook 2007 and 2010 */</style><![endif]--></head><body></body></html>';

 $mensagemHtml .= '<!--HEADER--><table width="100%" bgcolor="#f1f1f3" cellpadding="0" cellspacing="0" border="0" ><tr><td>&nbsp;</td></tr><tr><td align="center"><img src="http://williamportfolio.com.br/img/logo.png" width="300px" alt=""/></td></tr><tr><td>&nbsp;</td></tr><tr><td align="center"><font face="Myriad Pro, verdana" color="#000" style="font-size: 16px;">Formulário preenchido em seu site.</font><br><br/><font face="Myriad Pro" color="#175c93" style="font-size: 30px;"> Fale conosco </font><br><br></td></tr></table><!--/HEADER-->';

 $mensagemHtml .= '<table width="95%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td>&nbsp;</td></tr><tr><td><span>&nbsp;</span><span>&nbsp;</span><div><font face="Myriad Pro, verdana" style="font-size:16px"><b>Nome:</b><br>'.$nome.'</font></div><span>&nbsp;</span><div><font face="Myriad Pro, verdana" style="font-size:16px"><b>E-mail:</b><br>'.$email.'</font></div><span>&nbsp;</span><div><font face="Myriad Pro, verdana" style="font-size:16px"><b>Telefone:</b><br>'.$telefone.'</font></div><span>&nbsp;</span><div><font face="Myriad Pro, verdana" style="font-size:16px"><b>Assunto:</b><br>'.$assunto.'</font></div><span>&nbsp;</span><span>&nbsp;</span><div><font face="Myriad Pro, verdana" style="font-size:16px"><b>Mensagem:</b><br>'.$mensagem.'</font></div><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span></td></tr><tr><td>&nbsp;</td></tr></table>';

 $mensagemHtml .= '<table width="100%" bgcolor="#f1f1f3" cellpadding="0" cellspacing="0" border="0"><tr><td><table width="95%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr><tr><td><div><font face="Myriad Pro, verdana" color="#175c93" style="font-size:16px"><b>Data:</b></font> <font face="Myriad Pro, verdana" color="#a4a8ab" style="font-size:16px">'.date('d/m/Y').'</font></div><span>&nbsp;</span><div><font face="Myriad Pro, verdana" color="#175c93" style="font-size:16px"><b>Horario:</b></font> <font face="Myriad Pro, verdana" color="#a4a8ab" style="font-size:16px">'.date('H:i').'</font></div><span>&nbsp;</span><div><font face="Myriad Pro, verdana" color="#175c93" style="font-size:16px"><b>IP:</b></font> <font face="Myriad Pro, verdana" color="#a4a8ab" style="font-size:16px">'.getenv("REMOTE_ADDR").'</font></div></td></tr><tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr></table></td></tr></table>';

 $mensagemHtml .= '<table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td><table width="95%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td>&nbsp;</td></tr><td>&nbsp;</td></tr></table></td></tr></table>';

 $mail->Body = $mensagemHtml;

 $mail->AddAddress("contato@williamportfolio.com.br");
    if(!$mail->Send()) {
       echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
      header('Location: ../resposta-formulario'); 
    }
?>