<?php
if ($_POST && isset($_POST['telefon']) && !empty($_POST['telefon']))
{
	
	

require_once '../../PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';

// От кого
$mail->setFrom("no-reply@".$_SERVER['HTTP_HOST'], 'Новая заявка');        

// Кому
$mail->addAddress('megaminsk@inbox.ru', '');

// Тема письма
$mail->Subject = "3D Сход-развал";

if (isset($_POST['message']) && !empty($_POST['message']))
{
$message = '<p>Информация о заявке:</p><p>Имя: '.$_POST['name'].'</p><p>E-Mail: '.$_POST['email'].'</p><p>Телефон: '.$_POST['telefon'].'</p><p>Имя: '.$_POST['message'].'</p>';	
} else {

$message = '<p>Информация о заявке:</p><p>Телефон: '.$_POST['telefon'].'</p>';

}

// Тело письма
$body = $message;
$mail->msgHTML($body);


if ($mail->send())
{
?>{"error":0,"formid":"callme","error_text":"<div class=\"form-head\">\u041e\u0442\u043f\u0440\u0430\u0432\u043b\u0435\u043d\u043e<\/div>\n<div class=\"error-report\">\n\t<div class=\"text-report\">\n\t\t<p>\u0421\u043f\u0430\u0441\u0438\u0431\u043e! \u0412\u0430\u0448\u0435 \u0441\u043e\u043e\u0431\u0449\u0435\u043d\u0438\u0435 \u043e\u0442\u043f\u0440\u0430\u0432\u043b\u0435\u043d\u043e.<\/p>\n\t\t<p>\u041e\u0442\u043f\u0440\u0430\u0432\u0438\u0442\u044c <a href=\"#\" class=\"repeatform\">\u043d\u043e\u0432\u043e\u0435<\/a> \u0441\u043e\u043e\u0431\u0449\u0435\u043d\u0438\u0435?<p>\n\t<\/div>\n<\/div>\n\n\n\t  <script>\n\t  dataLayer.push({'event':'form_callback_success'});\n\t  <\/script>"}<?php
exit();
}

}
if (isset($_POST['formid']) && $_POST['formid'] == 'ord_prof_form')
{
?>{"error":0,"error_text":"\n<form id=\"ord_prof_form-form\" action=\"send2.php\" method=\"POST\" enctype=\"multipart\/form-data\" novalidate>\n<div class=\"form-head\">\u0417\u0430\u0434\u0430\u0442\u044c \u0432\u043e\u043f\u0440\u043e\u0441 \u043c\u0430\u0441\u0442\u0435\u0440\u0443<\/div>\n<div class=\"form-notes\">\u041e\u0441\u0442\u0430\u0432\u044c\u0442\u0435 \u0412\u0430\u0448\u0438 \u043a\u043e\u043e\u0440\u0434\u0438\u043d\u0430\u0442\u044b \u0438 \u0432 \u0431\u043b\u0438\u0436\u0430\u0439\u0448\u0435\u0435 \u0432\u0440\u0435\u043c\u044f \u043c\u044b \u043e\u0442\u0432\u0435\u0442\u0438\u043c \u043d\u0430 \u0432\u0441\u0435 \u0432\u043e\u043f\u0440\u043e\u0441\u044b.<\/div><div class=\"form-notes\">\u041f\u043e\u043b\u044f \u043e\u0442\u043c\u0435\u0447\u0435\u043d\u043d\u044b\u0435 * \u043e\u0431\u044f\u0437\u0430\u0442\u0435\u043b\u044c\u043d\u044b \u0434\u043b\u044f \u0437\u0430\u043f\u043e\u043b\u043d\u0435\u043d\u0438\u044f<\/div>\n<div class=\"field-2\">\n<label for = \"name_ask\">\u0412\u0430\u0448\u0435 \u0438\u043c\u044f:<\/label>\n<input id=\"name_ask\"  name=\"name\"  type=\"text\"  placeholder=\"\u0418\u043c\u044f \u043a\u043e\u043d\u0442\u0430\u043a\u0442\u043d\u043e\u0433\u043e \u043b\u0438\u0446\u0430\"  value=\"\" >\n<\/div>\n<div class=\"field-3\">\n<label for = \"youtelefon_ask\">\u0422\u0435\u043b\u0435\u0444\u043e\u043d:<span class=\"req_field\">*<\/span><\/label>\n<input id=\"youtelefon_ask\"  name=\"telefon\"  type=\"text\"  placeholder=\"+375 (__) ___-__-__\"  value=\"\"  required>\n<\/div>\n<div class=\"field-4\">\n<label for = \"email_ask\">\u0410\u0434\u0440\u0435\u0441 \u044d\u043b\u0435\u043a\u0442\u0440\u043e\u043d\u043d\u043e\u0439 \u043f\u043e\u0447\u0442\u044b:<\/label>\n<input id=\"email_ask\"  name=\"email\"  type=\"text\"  placeholder=\"Address@mail.ru\"  value=\"\" >\n<\/div>\n<div class=\"field-5\">\n<label>\u0412\u043e\u043f\u0440\u043e\u0441<\/label>\n<textarea name=\"message\"  type=\"text\"  placeholder=\"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u0412\u0430\u0448 \u0432\u043e\u043f\u0440\u043e\u0441\" ><\/textarea>\n<\/div>\n<div class=\"form_bottom_notice no_margin\">\n                \u041d\u0430\u0436\u0438\u043c\u0430\u044f \u043a\u043d\u043e\u043f\u043a\u0443 \u00ab\u041e\u0442\u043f\u0440\u0430\u0432\u0438\u0442\u044c\u00bb \u0432\u044b \u043f\u043e\u0434\u0442\u0432\u0435\u0440\u0436\u0434\u0430\u0435\u0442\u0435, \u0447\u0442\u043e \u043e\u0437\u043d\u0430\u043a\u043e\u043c\u043b\u0435\u043d\u044b\n                \u0441 \u0441\u043e\u0434\u0435\u0440\u0436\u0430\u043d\u0438\u0435\u043c <a class=\"fancy_notice\" href=\"#soglasie_site\">\u0421\u043e\u0433\u043b\u0430\u0441\u0438\u044f<\/a> \u0438 <a class=\"fancy_notice\" href=\"#politic_site\">\u041f\u043e\u043b\u0438\u0442\u0438\u043a\u043e\u0439<\/a> \u0432 \u043e\u0442\u043d\u043e\u0448\u0435\u043d\u0438\u0438 \u043e\u0431\u0440\u0430\u0431\u043e\u0442\u043a\u0438 \u043f\u0435\u0440\u0441\u043e\u043d\u0430\u043b\u044c\u043d\u044b\u0445 \u0434\u0430\u043d\u043d\u044b\u0445\n                \u0438 \u0434\u0430\u0435\u0442\u0435 \u0441\u043e\u0433\u043b\u0430\u0441\u0438\u0435 \u043d\u0430 \u043e\u0431\u0440\u0430\u0431\u043e\u0442\u043a\u0443 \u0441\u0432\u043e\u0438\u0445 \u043f\u0435\u0440\u0441\u043e\u043d\u0430\u043b\u044c\u043d\u044b\u0445 \u0434\u0430\u043d\u043d\u044b\u0445\n              <\/div>\n<div class=\"field-7 buttonform\">\n<input type=\"submit\"  value=\"\u041e\u0442\u043f\u0440\u0430\u0432\u0438\u0442\u044c\" >\n<\/div>\n<div class=\"error_form\"><\/div>\n\t<script type=\"text\/javascript\" src=\"\/catalog\/view\/javascript\/jquery.maskedinput.js\"><\/script>\n\t<script type=\"text\/javascript\"> $(function($){ $(\"#youtelefon_ask\").mask(\"+375 (99) 999-99-99\"); }); <\/script>\n<\/form>"}<?php
} else {
?>{"error":0,"error_text":"\n<form id=\"callme-form\" action=\"send.php\" method=\"POST\" enctype=\"multipart\/form-data\" novalidate>\n<div class=\"form-head\">\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u0412\u0430\u0448 \u043d\u043e\u043c\u0435\u0440, \u0438 \u043c\u044b \u043f\u0435\u0440\u0435\u0437\u0432\u043e\u043d\u0438\u043c <br \/> \u0432 \u0442\u0435\u0447\u0435\u043d\u0438\u0435 5 \u043c\u0438\u043d\u0443\u0442<\/div>\n<div class=\"field-1\">\n<input id=\"youtelefon\"  name=\"telefon\"  type=\"text\"  placeholder=\"+375 (__) ___-__-__\"  value=\"\"  required>\n<\/div>\n<div class=\"field-2 buttonform\">\n<input type=\"submit\"  value=\"\u0416\u0434\u0443 \u0437\u0432\u043e\u043d\u043a\u0430\" >\n<\/div>\n<div class=\"form_bottom_notice no_margin\">\n                \u041d\u0430\u0436\u0438\u043c\u0430\u044f \u043a\u043d\u043e\u043f\u043a\u0443 \u0412\u044b \u0441\u043e\u0433\u043b\u0430\u0448\u0430\u0435\u0442\u0435\u0441\u044c \u0441 <a class=\"fancy_notice\" href=\"#politic_site\">\u041f\u043e\u043b\u0438\u0442\u0438\u043a\u043e\u0439<\/a> \u0438 <a class=\"fancy_notice\" href=\"#soglasie_site\">\u0421\u043e\u0433\u043b\u0430\u0441\u0438\u0435\u043c<\/a> \u043d\u0430 \u043e\u0431\u0440\u0430\u0431\u043e\u0442\u043a\u0443 \u043f\u0435\u0440\u0441\u043e\u043d\u0430\u043b\u044c\u043d\u044b\u0445 \u0434\u0430\u043d\u043d\u044b\u0445.\n              <\/div>\n<div class=\"error_form\"><\/div>\n\t<script type=\"text\/javascript\" src=\"\/catalog\/view\/javascript\/jquery.maskedinput.js\"><\/script>\n\t<script type=\"text\/javascript\"> $(function($){ $(\"#youtelefon\").mask(\"+375 (99) 999-99-99\"); }); <\/script>\n<\/form>"}<?php } ?>