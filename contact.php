<?php
$thisPage="contact";
$pagetitle="Contact";
$title="Contactformulier | Paralyzers - Rootsrockers uit Belgisch Limburg";
$description="Contacteer rootsrockband de Paralyzers via dit contactformulier.";
?>

<?php require 'head.inc.php'; ?>

  <body class="container">

    <?php require 'header.inc.php'; ?>
     <main>

        <?php
        function spamcheck($field) {
          // Sanitize e-mail address
          $field=filter_var($field, FILTER_SANITIZE_EMAIL);
          // Validate e-mail address
          if(filter_var($field, FILTER_VALIDATE_EMAIL)) {
            return TRUE;
          } else {
            return FALSE;
          }
        }

      // display form if user has not clicked submit
      if (!isset($_POST["submit"])) {
        ?>
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
          <h2>Contacteer de Paralyzers</h2>
          <fieldset id="invullen">
            <ul>
              <li>
                <label for="naam">Naam</label>
                <input id="naam" name="naam" type="text" placeholder="Naam" required>
              </li>
              <li>
                <label for="email">E-mailadres</label>
                <input id="email" name="email" type="email" placeholder="E-mailadres" required>
              </li>
              <li>
                <label for="message">Je vraag of opmerking</label>
                <textarea id="message" name="message" placeholder="Schrijf hier je vraag of opmerking" rows=5 required></textarea>
              </li>
            </ul>
          </fieldset>
          <fieldset>
            <button type="submit" name="submit" value="Verzenden" title="Verstuur het formulier">Verstuur</button>
          </fieldset>
        </form>

        <?php
      } else {  // the user has submitted the form
        // Check if the "email" input field is filled out
        if (isset($_POST["email"])) {
          // Check if email address is valid
          $mailcheck = spamcheck($_POST["email"]);
          if ($mailcheck==FALSE) {
            echo "Geen geldig e-mailadres!";
          } else {
            $naam = $_POST["naam"]; // sender
            $email = $_POST["email"];
            $message = $_POST["message"];
            // message lines should not exceed 70 characters (PHP rule), so wrap it
            $message = wordwrap($message, 70);
            $subject = "Dit bericht werd gestuurd door een bezoeker van de Paralyzers website";
            // send mail
            mail("rudi.ponthier@telenet.be", $subject, "Van: $naam\r\n$email\r\n\n$message");
            echo "Je bericht werd correct verstuurd. We contacteren je zo spoedig mogelijk.";
          }
        }
      }
      ?>  
     </main>
    <?php require 'footer.inc.php'; ?>
