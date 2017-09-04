<?php
use SendGrid as sendGrid;
//use ReCaptcha\ReCaptcha as ReCaptcha;

require_once $_SERVER['DOCUMENT_ROOT'].'/vendor/google/recaptcha/src/autoload.php';


$fields = array('name' => 'Name', 'email' => 'Email', 'website' => 'Website', 'subject' => 'Subject', 'message' => 'Message');

try{
  if (!empty($_POST)) {
    if (!isset($_POST['g-recaptcha-response'])) {
      throw new \Exception('We failed to verify that you are not a robot');
    }

    //verify recaptcha
    $recaptcha = new \ReCaptcha\ReCaptcha(getenv('GOOGLE_RECAPTCHA_SECRET'));
    $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
    if (!$response->isSuccess()) {
      throw new \Exception('ReCaptcha was not validated.');
    }

    //email
    $mailer = new \sendGrid(env('SENDGRID_API_KEY'));
    //$mailer = new \sendGrid(getenv('SENDGRID_API_KEY'));
    $from = new \SendGrid\Email("Wetaase User", $_POST['email']);
    $subject = $_POST['subject'];
    $emailText = "Name: ".$_POST['name']."<br/>Website: ".(!empty($_POST['website']) ? $_POST['website'] : "Not provided")."Message: ".$_POST['message'];
    $content = new sendGrid\Content("text/html", $emailText);
    $to = new sendGrid\Email(null, getenv('MAIL_FROM_ADDRESS'));
    $mail = new sendGrid\Mail($from, $subject, $to, $content);
    $emailStatusCode = $mailer->client->mail()->send()->post($mail);
  }
}
catch (\Exception $e)
{
    $responseArray = array('type' => 'danger', 'message' => $errorMessage);
}

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);

    header('Content-Type: application/json');

    echo $encoded;
}
else {
    echo $responseArray['message'];
}

?>
