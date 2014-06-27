
<?php	
if (    $_POST['nombre']!=NULL && 
        $_POST['email']!=NULL && 
        $_POST['telefono']!=NULL )
{
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $messages = $_POST['mensaje'];
        $to = 'soporte@coinor.com.co ';
        $subject = "Mensaje de Contacto";
        $message = "Nombre:  $nombre\n".
                   "Email: $email\n".
                   "Tel: $telefono\n".
                   "$messages\n";
        
        
        mail($to,$subject,$message);
        echo "<script> window.location.replace('contacto2.html') </script>";
}					
else 
{
echo "<script> window.location.replace('contacto.html') </script>";
}								
?>				
