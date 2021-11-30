<?php
include_once 'basesDeDatos/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM equipos";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$usuarios=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Inventario</title>


	<!-- Stylos para Menu-->
	<link href="css/main.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<!-- Stylos para Menu-->
    <!-- Estilo para texto en movimiento -->
    <link rel="stylesheet" type="text/css" href="css/textoMovimiento.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css">
    <!-- fin -->
    <!-- LINK ICONOS EN MOVIMIENTO -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- _____________________________ -->
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!--    Datatables  -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/> 
        <link href="css/cssinventario.css" rel="stylesheet">

    
    <style>
        table.dataTable thead {
            background: rgb(77, 6, 27);
            color:white;
        }
        body{
            background-image:linear-gradient(to top, #000000 0%, #aaa4a400 1%, #83808052 31%, rgba(240, 240, 240, 0.863) 75%, #c0d7f1 100%), url(images/06.jpg);
            /* background-image:   url(images/universofondo.gif); */
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            margin-left: -5%;
            align-items: center;
            font-size: 90%;
        }
    </style>  

</head>

<body >

	

<!-- Titulo En Movimiento -->
      <h1 id="title-1">
          <div class="wrap icon"> 
          <i class="fa fa-cog fa-spin"></i> <i class="fa fa-spin-reverse fa-cog"></i> <i class="fa fa-cog fa-spin"></i>
          </div>
        <em><span>A</span>NDEAN LODGE<span>S</span></em>
      </h1>
<!--  -->
<br>
<p class="parrafo" id="title-1"><em><span>A</span>lmacen</em></div></h1></p>
<br>
<h1 id="title-1">
	<em><span></span>img<span></span></em>
</h1>  
      
 

<!--____________________________________________________________________________________ Menu -->
<nav class="menu" id="theMenu">
	<div class="menu-wrap">
		<h1 class="logo"><a href="index.php">INICIO</a></h1>
		<i class="fa fa-arrow-right menu-close"></i>
		<a href="../galeria lodges con chat bot y whatsapp/cusco.html">INVENTARIO</a>
		<a href="../galeria lodges con chat bot y whatsapp/cusco.html">Cusco</a>
		<a href="../galeria lodges con chat bot y whatsapp/Huito.html">Huito</a>
		<a href="../galeria lodges con chat bot y whatsapp/Chillca Tambo.html">Chillca</a>
		<a href="../galeria lodges con chat bot y whatsapp/machuracay.html">Machuracay</a>
		<a href="../galeria lodges con chat bot y whatsapp/ananta.html">Ananta</a>
		<a href="../galeria lodges con chat bot y whatsapp/Huampo copy.html">Huampo</a>
		<a href="https://www.facebook.com/andean.lodges.cusco"><i class="fa fa-facebook"></i></a>
		<a href="https://twitter.com/ausangatetrek"><i class="fa fa-twitter"></i></a>
		<a href="mailto:alberto.andeanlodges@gmail.com" ><i class="fa fa-envelope"></i></a>
	</div>
	
	<!-- Menu button -->
	<div id="menuToggle"><img src="images/logomenu.png" alt="" class="" ></div>
	<!-- <em><span><div id="menuToggle"><img src="logomenu.png" alt="" class="fa-spin-reverse"></div></span></em> -->
</nav>
<!--____________________________________________________________________________________ Menu -->




	<!-- Stylos para Menu-->
    <script src="js/main.js"></script>

    
    <div class="container">
       <div class="row">
           <div class="col-lg-12">
            <table id="tablaUsuarios" class="table-striped table-bordered" style="width:100%">
                <thead class="text-centerr">
                    <th>CATEGORIA</th>
                    <th>CODIGO</th>
                    <th>ARTICULO</th>
                    <th>MATERIAL</th>
                    <th>COLOR</th>
                    <th>ESTADO</th>
                    <th>CANTIDAD</th>
                    <th>MARCA</th>
                    <th>PROPIETARIO</th>
                    <th>DESCRIPCION</th>
                    <th>UBICACION</th>
                </thead>
                <tbody>
                    <?php
                        foreach($usuarios as $usuario){
                    ?>
                    <tr class="tr">
                        <td class="categoria"><?php echo $usuario['categoria']?></td>
                        <td><?php echo $usuario['articulo']?></td>
                        <td><?php echo $usuario['tamaño']?></td>
                        <td><?php echo $usuario['material']?></td>
                        <td><?php echo $usuario['color']?></td>
                        <td><?php echo $usuario['estado']?></td>
                        <td><?php echo $usuario['cantidad']?></td>
                        <td><?php echo $usuario['marca']?></td>
                        <td><?php echo $usuario['propietario']?></td>
                        <td class="descripcion"><?php echo $usuario['descripcion']?></td>
                        <td class="ubicacion"><?php echo $usuario['imagen']?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
           </div>
       </div> 
    </div>
   
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      
      
<!--    Datatables-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>  
      
      
    <script>
      $(document).ready(function(){
         $('#tablaUsuarios').DataTable(); 
      });
    </script>

</body>
</html>