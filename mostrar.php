<?php
include('conexion.php');
?>

<html>
<head>
    <title>Mostrando datos ingresados</title>
</head>
<body>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Contraseña</th>
            <th>Edad</th>
            <th>Telefono</th>
            <th>Tipo de Documento</th>
            <th>Número de Documento</th>
            <th>Rol</th>
        </tr>

<?php
$sql = "SELECT * FROM registro";
$conectar = mysqli_connect($host, $usuario, $contrasena, $base_de_datos);
$result = mysqli_query($conectar, $sql);
while($mostrar = mysqli_fetch_array($result))
{
?>
<tr>
    <td><?php echo $mostrar ['nombre'] ?></td>
    <td><?php echo $mostrar ['apellido'] ?></td>
    <td><?php echo $mostrar ['correo'] ?></td>
    <td><?php echo $mostrar ['contrasena'] ?></td>
    <td><?php echo $mostrar ['edad'] ?></td>
    <td><?php echo $mostrar ['tipo_documento'] ?></td>
    <td><?php echo $mostrar ['numero_documento'] ?></td>
    <td><?php echo $mostrar ['rol'] ?></td>
</tr>
<?php
}
?>

    </table>
</body>
</html>
