<?php

require_once '../controller/staterController.php';
$redirect = new StaterController();
if(empty($_SESSION['username'])){

    $redirect->redireccionar();    
    
}
if(isset($_SESSION['rol'])){
    switch($_SESSION['rol']){
        case 2:
         header('location: cliente.php');
        break;
 
        case 3:
         header('location: general.php');
        break;
 
        default: 
    } 
 }
require_once "layout/header.php";
?>
<div class="container panel">
    <div class="row ">
        <div class="col-lg-12 panel-t">
            <h1> Bienvenido <?php echo  $_SESSION['username'];?></h1>
            <h2>Zona de Administracion de Categorias</h2>
        </div>
    </div>
</div>
<br>
<div class="container panel">
        <div class="row">
            <div class="col-lg-12">            
            <button id="btnNuevo" type="button" class="btn btnSalir" data-toggle="modal">Agregar Categoria</button>    
            </div>    
        </div>    

        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="datatable" class="table table-striped table-bordered table-condensed" style="width:100%">
                            <thead>
                                <tr id="tabla__head" class="table-h">
                                    <th class="tabla__celda">Id</th>
                                    <th class="tabla__celda">Nombre</th>
                                    <th class="tabla__celda">slug</th>
                                    <th class="tabla__celda">Primera Imagen</th>
                                    <th class="tabla__celda">Modificar</th>
                                </tr>
                            </thead>                      
                                
                       </table>                    
                    </div>
                </div>
        </div>  
</div>



<?php require_once "layout/foother.php";?>

<script>

$(document).ready(function () {
    let tabla1 = $("#datatable").DataTable({
      "ajax": {
        url: "../controller/apiCategoria.php?accion=listar",
        dataSrc: "items"
      },
      "columns": [
        { data: "idModelo" },
        { data: "nombre" },
        { data: "slug" },
        { data: "imagen" },
        { data: null },
      ],
      columnDefs: [
            {
                "targets": -2,
                "data": 'image',
                "render": function (data, type, row, meta) {
                    return '<img src="../../public/imagenes/'+ data + '" alt="' + data + '"height="100"/>';
                }
            },

			{
                defaultContent:
					'<button class="editar_b table-e"><i class="fas fa-edit editar"></i></button>',
	            targets: -1,
			},
		],
      "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },
    });
});

</script>