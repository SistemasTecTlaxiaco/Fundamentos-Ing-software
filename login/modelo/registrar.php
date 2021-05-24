<?php
include("Conexion1.php");
if(isset($_POST['registrar'])){
    if(strlen($_POST['nombre'])>=1 && 
strlen($_POST['user'])>=1 && 
strlen($_POST['pass'])>=1 &&
strlen($_POST['tipo_usuario'])>=1 ){
$nombre= trim($_POST['nombre']);
$tipo_usuario= trim($_POST['user']);
$user=trim($_POST['pass']);
$pass=trim($_POST['tipo_usuario']);

$consulta="INSERT INTO usuario( nombreCompleto, Email, contrasena_u,tipo_usuario join ) VALUES (['$nombre','$user','$pass','$tipo_usuario')" ;


$resultado=mysqli_query($conectar,$consulta);
if($resultado){
?>
<h3 class="ok">se ha registrado correctamente!!</h3>
<?php
}else{
    ?>
    <h3 class="bad">a ocurrido un error</h3>
    <?php
}
}else{
    ?>
    <h3 class="bad">por favor complete los datos</h3>
    <?php
}
}

?>
