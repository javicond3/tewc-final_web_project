<?php
include "templates/nav.php";

define('RECEPTOR', 'MGALAXY');
define('RECEPTOR_ADD', '4b3javi@gmail.com');
define('EMAIL_SUBJECT', 'Petición');

//Recuperar valores

$errors = false;
//Validacion valores

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $senderEmail = $_POST['email'];
    $senderName = $_POST['nombre'];
    $position = $_POST['posicion'];
    $message = $_POST['info'];
    $subject = EMAIL_SUBJECT . ': ' . $position;
    if(!isset($senderEmail)){
        $errorEmail= "Debe escribir una dirección de correo";
    }
    else{
        $senderEmail = filter_var($senderEmail, FILTER_SANITIZE_EMAIL);
        if (!filter_var($senderEmail, FILTER_VALIDATE_EMAIL)){
            $errorEmail = "La dirección de correo es incorrecta";
        }

    }
    if(!isset($senderName)){
        $errorName= "Debe escribir su nombre";
    }
    else{
        $senderName = filter_var($senderName, FILTER_SANITIZE_STRING);
        if ($senderName == ""){
            $errorName = "Debe escribir su nombre";
        }
    }
    if(!isset($message)){
        $errorMessage= "Debe escribir su carrera deportiva";
    }
    else{
        $message = filter_var($message, FILTER_SANITIZE_STRING);
        if ($message == ""){
            $errorMessage = "Debe escribir su carrera deportiva";
        }
    }
    if(!isset($position)){
        $errorPosition= "Debe elegir una posición";
    }
    else{
        $position = filter_var($position, FILTER_SANITIZE_STRING);
        if ($position == "Elegir"){
            $errorPosition = "Debe elegir una posición";
        }
    }

//Si existen todos los valores, mando el correo
    $success = false;
    if (!isset($errorEmail) && !isset($errorName) && !isset($errorMessage) && !isset($errorPosition)) {
        $receptor = RECEPTOR . ' <' . RECEPTOR_ADD . ' >';
        $headers = 'From: ' . $senderName . ' <' . $senderEmail . ' >';
        $success = mail($receptor, $subject, $message, $headers);
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "templates/head.php" ?>


</head>
<body>
    <?php require_once 'conectar.php'; ?>
<div class="container">
    <h3>Tus datos:</h3>
    <table class="table">
        <tbody class="table-body">
        <tr>
            <th scope="row">Nombre:</th>
            <td><?php echo "$senderName"; ?></td>
        </tr>
        <tr>
            <th scope="row">Email</th>
            <td><?php echo "$senderEmail"; ?></td>
        </tr>
        <tr>
            <th scope="row">Posición</th>
            <td><?php echo "$position"; ?></td>
        </tr>
        <tr>
            <th scope="row">Mensaje</th>
            <td><?php echo "$message"; ?></td>
        </tr>
        </tbody>
    </table>
    <?php
    if ($success):
        echo "<p align='center'>Tú petición ha sido enviada a " . RECEPTOR . "(<" . RECEPTOR_ADD . ">)</p>";
        echo "<p align='center'>Pronto recibirás una respuesta </p>";

    else:
        echo "<p align='center'>Lo sentimos, ha habido un problema al enviar su petición</p>";


    endif;

    //insertamos en la BBDD
    $sql_insert = "INSERT INTO `peticiones` (nombre, email, posicion, descripcion) " . "
			      VALUES (?, ?, ?, ?)";
    try {
        $sentencia = $db->prepare($sql_insert);
        $sentencia->execute(array($senderName, $senderEmail, $position,$message));
    }catch(PDOException $error) {
        die("Error a insertar " . $error->getMessage())
        or die("Error al redirigir a formulario con error $error->getMessage()");
    }
    ?>
</div>

<!--scripts -->
<?php include "templates/scripts.php" ?>

</body>
</html>