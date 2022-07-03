<?php
    require_once "controladores/admministrador_controlador.php"
?>
<html lang="es">
    <head>
        <title>Gobierno Regional de Huánuco</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
    <div class="d-flex justify-content-center mt-3 mb-3" style="margin-left=30px">
    <span class="h5 text-center">Login De Usuario</span>
    </div>
    <div class="d-flex justify-content-center">
<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
    <input type="text" name="username" placeholder="Ingrese su usuario" class="mb-2"><br>
    <input type="password" name="password" placeholder="Ingrese su contraseña" class="mb-3"><br>
    <div class="text-center">
    <input type="submit" name="submit" Value="Ingresar" class="btn btn-success">
    <button class="btn btn-danger">Cerrar</button>
    </div>
</div>
</div>
</form>

<?php
if(!empty($_POST)){
    $administrador_controlador = new AdministradorControlador();
    $administrador_controlador->login($_POST["username"],$_POST["password"]);
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
