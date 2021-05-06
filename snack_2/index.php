<!-- 
    
    Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:

    a. name sia più lungo di 3 caratteri,
    b. mail contenga un punto e una chiocciola
    c. age sia un numero.
    Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” 
-->
<!-- PHP -->

<?php
//*tester :  http://localhost/esercizi_php/snack_2/?name=matteo&age=22&mail=mymail@gmail.com
//! tester (name):  http://localhost/esercizi_php/snack_2/?name=Teo&age=22&mail=mymail@gmail.com
//! tester (mail):  http://localhost/esercizi_php/snack_2/?name=matteo&age=22&mail=mymail@gmailcom
//! tester (age ):  http://localhost/esercizi_php/snack_2/?name=matteo&age=potato&mail=mymail@gmail.com

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

//? beta version
/*
$access = "";
$mail_check = "";

if (strpos($mail, '.') && strpos($mail, '@')) {
    $mail_check = true;        
    $access = "Accesso Riuscito";
} else {
    $mail_check = false;
    $access = "Accesso Negato";
}

if (strlen($name) > 3 && $mail_check && is_numeric($age) == true) {
    $access = "Accesso Riuscito";
} else {
    $access = "Accesso Negato";
}
*/

//* Final version
$access = "Accesso Riuscito";
$mail_check = "";

if (!empty($name) && !empty($age) && !empty($mail)) {
    if(strlen($name) <= 4) {
        $access = "Accesso Negato, inserire un nome di almeno 4 caratteri";
    } elseif(strpos($mail, '.') === false || !strpos($mail, '@')) {
        $access = "Accesso Negato, inserire una mail valida";
    } elseif(!is_numeric($age)){
        $access = "Accesso Negato, inserire un età in cifre";
    }
}

?>


<!-- HTML -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - BAD WORD</title>
</head>
<body>
<p>
    name :  <strong> <?php echo $name ?> </strong>
    <br> 
    mail :  <strong> <?php echo $mail ?> </strong>
    <br> 
    age :  <strong> <?php echo $age ?> </strong>
    <br>
    access :  <strong> <?php echo $access ?> </strong>
    


</p>
    
</body>
</html>