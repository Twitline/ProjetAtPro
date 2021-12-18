<?php

$nom=$_POST["expediteur"];

$objet=$_POST["objet"];

$mailexp=$_POST["mailexp"];

if ($_POST["message"]=="") {
    $corp="non fourni";
     }else{
     $corp=$_POST["message"];
 }




 if(isset($_POST['g-recaptcha-response'])){
    $captcha=$_POST['g-recaptcha-response'];
}

// !!! Si on oublie le CAPTCHA !!! //

if(!$captcha){
    echo 'Vous avez oublié le Captcha.';
    exit;
    }

// !!! ON VALIDE LE CAPTCHA !!! //

$secretKey = "6Ld1168dAAAAADkk16bUs4Er2hxkePu3pgfpR4Vb";
$ip = $_SERVER['REMOTE_ADDR'];
// post requête du serveur

$url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
$response = file_get_contents($url);
$responseKeys = json_decode($response,true);


$body="Nouveau message de : ".$nom."<br>adresse courriel de l'expediteur : ".$mailexp."<br> Message : <br>".$corp;


?>

    

<?php

include_once '../vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = 'smtp.gmail.com';               //Adresse IP ou DNS du serveur SMTP
$mail->Port = 587;                          //Port TCP du serveur SMTP
$mail->SMTPAuth = true;                        //Utiliser l'identification
$mail->CharSet = 'UTF-8';

if($mail->SMTPAuth){
    $mail->SMTPOptions = [
        "ssl"=>[
                "verify_peer"=>false,
                "verify_peer_name"=>false,
                "allow_self_signed"=>true
                ]
        ];
    //$mail->SMTPSecure = 'smtp';               //Protocole de sécurisation des échanges avec le SMTP
   $mail->Username   =  'testjojo337@gmail.com';    //Adresse email à utiliser
   $mail->Password   =  'MotDePasse337';         //Mot de passe de l'adresse email à utiliser
}

$mail->From       = trim("testjojo337@gmail.com");                //L'email à afficher pour l'envoi
$mail->FromName   = trim("$nom");          //L'alias de l'email de l'emetteur

$mail->AddAddress(trim("geoffreylaunay02@gmail.com"));

$mail->Subject    = "$objet";                      //Le sujet du mail
$mail->WordWrap   = 50; 			       //Nombre de caracteres pour le retour a la ligne automatique
$mail->Body = $body; 	       //Texte brut
$mail->IsHTML(true);                                  //Préciser qu'il faut utiliser le texte brut

if (!$mail->send()) {
      echo $mail->ErrorInfo;
} else{
    ?>  
    <div> Message bien envoyé
     
    <br>
    <h3>Vous allez bientôt être redirigé vers la page d'accueil</h3></div>

    <meta http-equiv='Refresh' content='3;URL=http://s1-vm516.sts-sio-caen.info/#accueil'>
    <?php

}
?>