<?
include("SendMailSmtpClass.php");
require_once(rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/wp-load.php');

function iV($str)
{
	return htmlspecialchars(stripslashes($str));
};

$post_id = $_POST["post_id"];

$to_field = get_field('quiz_mail_to', $post_id);
$from_field = get_field('quiz_mail_from', $post_id);

$to = $to_field;


$mailSMTP = new SendMailSmtpClass('******@yandex.ru', '************', 'ssl://smtp.yandex.ru', 'Burganof', 465); // hide my yandex SMTP for privicy
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: burganof-kuhni.ru <" . $from_field . ">\r\n";
$headers .= "To: $to\r\n"; // от кого письмо

$output = "";
get_post_meta($post_id, 'quiz_rep', true);
if (have_rows('quiz_rep', $post_id)) {
	$i = 0;
	while (have_rows('quiz_rep', $post_id)) {
		the_row();
		$i++;
		$step_count = 'step-' . $i;
		$output .= $i . ") " . iV($_POST[$step_count]) . "<br>";
	}
}
$name = iV($_POST["name"]);
$tel = iV($_POST["tel"]);

// текст письма
$message = "";
$message = $message . "Имя: " . $name;
$message = $message . "<br>Телефон: <a href='tel:" . $tel . "'>" . $tel . '</a>';
$message = $message . "<br>Ответы: <br>" . $output;

$result = $mailSMTP->send($to, "КВИЗ / Заявка с сайта Burganof-kuhni.ru", $message, $headers); // отправляем письмо

if ($result === true) {
	echo "Письмо успешно отправлено";
} else {
	echo "Письмо не отправлено. Ошибка: " . $result;
}
