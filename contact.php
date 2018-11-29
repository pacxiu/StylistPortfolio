<?php require_once './config.php'; 
	$pageTitle = "Contact";
	$pageDescription = "Contact description";
?>

<?php require_once $root.$files.'/partials/header.php'; ?>

<div class="full-height-container">
  <div class="contact-container">
    <h1 class="contact-title">Sylwia Morawska / Fashion&nbsp;Stylist</h1>
    <ul class="contact-data">
      <li><a href="mailto:stylist@smorawska.pl" class="u-bold">stylist@smorawska.pl</a></li>
      <li>+48 534 213 932 </li>
    </ul>

    <div class="social-icons">
      <a target="_blank" href="https://www.facebook.com/Inomodnie/">
        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
           width="49.652px" height="49.652px" viewBox="0 0 49.652 49.652" style="enable-background:new 0 0 49.652 49.652;"
           xml:space="preserve">
          <g>
            <g>
              <path d="M24.826,0C11.137,0,0,11.137,0,24.826c0,13.688,11.137,24.826,24.826,24.826c13.688,0,24.826-11.138,24.826-24.826
                C49.652,11.137,38.516,0,24.826,0z M31,25.7h-4.039c0,6.453,0,14.396,0,14.396h-5.985c0,0,0-7.866,0-14.396h-2.845v-5.088h2.845
                v-3.291c0-2.357,1.12-6.04,6.04-6.04l4.435,0.017v4.939c0,0-2.695,0-3.219,0c-0.524,0-1.269,0.262-1.269,1.386v2.99h4.56L31,25.7z
                "/>
            </g>
          </g>
        </svg>
      </a>

      <a target="_blank" href="https://www.instagram.com/morafka_/">
        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
           width="49.652px" height="49.652px" viewBox="0 0 49.652 49.652" style="enable-background:new 0 0 49.652 49.652;"
           xml:space="preserve">
        <g>
          <g>
            <g>
              <path d="M24.825,29.796c2.739,0,4.972-2.229,4.972-4.97c0-1.082-0.354-2.081-0.94-2.897c-0.903-1.252-2.371-2.073-4.029-2.073
                c-1.659,0-3.126,0.82-4.031,2.072c-0.588,0.816-0.939,1.815-0.94,2.897C19.854,27.566,22.085,29.796,24.825,29.796z"/>
              <polygon points="35.678,18.746 35.678,14.58 35.678,13.96 35.055,13.962 30.891,13.975 30.907,18.762      "/>
              <path d="M24.826,0C11.137,0,0,11.137,0,24.826c0,13.688,11.137,24.826,24.826,24.826c13.688,0,24.826-11.138,24.826-24.826
                C49.652,11.137,38.516,0,24.826,0z M38.945,21.929v11.56c0,3.011-2.448,5.458-5.457,5.458H16.164
                c-3.01,0-5.457-2.447-5.457-5.458v-11.56v-5.764c0-3.01,2.447-5.457,5.457-5.457h17.323c3.01,0,5.458,2.447,5.458,5.457V21.929z"
                />
              <path d="M32.549,24.826c0,4.257-3.464,7.723-7.723,7.723c-4.259,0-7.722-3.466-7.722-7.723c0-1.024,0.204-2.003,0.568-2.897
                h-4.215v11.56c0,1.494,1.213,2.704,2.706,2.704h17.323c1.491,0,2.706-1.21,2.706-2.704v-11.56h-4.217
                C32.342,22.823,32.549,23.802,32.549,24.826z"/>
            </g>
          </g>
        </g>
        </svg>
      </a>
    </div>
    
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