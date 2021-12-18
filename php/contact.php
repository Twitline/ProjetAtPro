<h1 class="centre">Contactez moi !</h1>
<form method="post" action="php/mail.php" class="centre">
    <label for="expediteur">Votre nom</label><br>
    <input type="text" id="expediteur" name="expediteur"><br>
    <label for="mailexp">Votre adresse email</label><br>
    <input type="email" id="mailexp" name="mailexp"><br>
    <label for="objet">Objet du message</label><br>
    <input type="text" id="objet" name="objet"><br>
    <label for="message">Votre message</label><br>
    <textarea rows="3" name="message" id="message"></textarea><br>
    <div class="g-recaptcha" data-sitekey="6Ld1168dAAAAAAnPWq5uV92XNomxqCPP7VgyfACk"></div><br>
    <input type="submit" value="valider">
</form>

