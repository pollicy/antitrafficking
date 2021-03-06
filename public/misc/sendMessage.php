<?php
require_once('./recaptcha/src/autoload.php');
require_once('./sendgrid/lib/loader.php');
require_once('./php-http-client/lib/Client.php');
require_once('./php-http-client/lib/Response.php');

$fields = array('name' => 'Name', 'email' => 'Email', 'website' => 'Website', 'subject' => 'Subject', 'message' => 'Message');
$okMessage = 'Your message was successfully sent. Thanks for your communication! Someone will get back to you within 24-72 hours.';
$errorMessage = 'There was an error while sending your message. Please try again later';
$responseArray = array('type' => 'danger', 'message' => $errorMessage);

try{
  if (!empty($_POST)) {
    if (!isset($_POST['g-recaptcha-response'])) {
      throw new \Exception('We failed to verify that you are not a robot');
    }

    //verify recaptcha
    $recaptcha = new \ReCaptcha\ReCaptcha(getenv('GOOGLE_RECAPTCHA_SECRET'));
    $response = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
    if (!$response->isSuccess()) {
      throw new \Exception('ReCaptcha was not validated.');
    }

    //email
    $mailer = new \sendGrid(getenv('SENDGRID_API_KEY'));
    $from = new \SendGrid\Email($_POST['name']." through Wetaase website", $_POST['email']);
    $subject = $_POST['subject'];
    $emailText = "<b>Name:</b> ".$_POST['name']."<br/><b>Website:</b> ".(!empty($_POST['website']) ? $_POST['website'] : "Not provided")."<br/><b>Message:</b> ".$_POST['message'];
    $content = new sendGrid\Content("text/html", $emailText);
    $to = new sendGrid\Email(null, getenv('MAIL_FROM_ADDRESS'));
    $mail = new sendGrid\Mail($from, $subject, $to, $content);
    $emailStatus = $mailer->client->mail()->send()->post($mail);
    if ($emailStatus->statusCode() === 202) {
      $responseArray = array('type' => 'success', 'message' => $okMessage);
    }
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
