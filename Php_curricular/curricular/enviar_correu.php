<?php
if(!isset($_POST['email'])){
?>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label>
            Nombre:
            <input name="nombre" type="text"/>
        </label>
        <label>
            Email: 
            <input name="email" type="text"/>
        </label>
        <label>
            Mensaje: 
            <textarea name="mensaje" rows="6" cols="50"></textarea>
        </label> 
        <input type="reset" value="borrar"/>  
        <input type="submit" value="Enviar"/>
    </form>
<?php
}else{
    $mensaje="Mensaje desde daupv curricular: ";
    $mensaje.= "\nNombre: ". $_POST['nombre'];
    $mensaje.= "\nEmail: ".$_POST['email'];
    $mensaje.= "\nMensaje: \n".$_POST['mensaje'];
    $destino= "dalumnos@upv.es";
    $remitente = $_POST['email'];
    $asunto = "Mensaje enviado por: ".$_POST['nombre'];
    mail($destino,$asunto,$mensaje,"FROM: $remitente");
?>
  <p><strong>Mensaje enviado.</strong></p>
<?php
}
?>