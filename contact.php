<?php require_once './config.php'; 
	$pageTitle = "Contact";
	$pageDescription = "Contact description";
?>

<?php require_once $root.$files.'/partials/header.php'; ?>

<div class="full-height-container">
  <div class="contact-container">
    <h1 class="contact-title">Sylwia Morawska / Fashion&nbsp;Stylist</h1>
    <ul class="contact-data">
      <li>e-mail: <a href="mailto:stylist@smorawska.pl" class="u-bold">stylist@smorawska.pl</a></li>
      <li>telephone: +48 534213932 </li>
    </ul>
    
    <form method="POST" id="contact-form" data-action="<?php echo $assets; ?>/partials/mailer.php" novalidate>
      <div class="input-grp">
        <input class="input js-form-validate" type="name" name="name" placeholder="name"required="">
        <span class="error-hint">Provide your name</span>
        <input class="input js-form-validate" type="email" name="email" placeholder="e-mail" required="">
        <span class="error-hint">Provide valid e-mail address</span>
        <input class="input " type="tel" name="telephone number" placeholder="telephone number" required="">
      </div>

      <textarea class="textarea js-form-validate" type="text" name="message" placeholder="message" required="" rows="8"></textarea>
      <span class="error-hint">Enter your message</span>

      <div class="send-btn-container">
        <input class="send-btn js-form-send" type="submit" form="contact-form" value="send">
      </div>

      <div id="thank-you" class="u-bold">Thank you for contacting me! I will try to response as fast as I can.</div>
      <div id="sending" class="u-bold">Sending...</div>
      <div id="error" class="u-bold">Something went wrong, try again.</div>
    </form>   
  </div>
</div>

<?php require_once $root.$files.'/partials/footer.php'; ?>