
<?php
    session_start();
    if($_SESSION["tipo"]!="responsable"){
        header("location: bienvenida.php");
    }
?>
<h1>Formulario</h1>
<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">

    <input type="text" name="nombres" placeholder="Ingrese nombres"><br>
    <input type="text" name="apellidos" placeholder="Ingrese apellidos"><br>
    <input type="text" name="dni" placeholder="Ingrese su dni"><br>
    <input type="text" name="ciudad" placeholder="Ingrese su ciudad"><br>
    <input type="text" name="teléfono" placeholder="Ingrese su número de teléfono"><br>
    <input type="text" name="username" placeholder="Ingrese username"><br>
    <input type="password" name="password" placeholder="Ingrese contraseña"><br>

    <select name="tipo">
        <option value="administrador">Administrador</option>
        <option value="responsable">Responsable</option>
    </select><br>
    <input type="text" name="email" placeholder="Ingrese email"><br>
    <input type="submit" value="Guardar">
</form>
<?php
