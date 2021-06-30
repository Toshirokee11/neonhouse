<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
require_once dirname(dirname(__FILE__)) .'/model/Categoria.php';


if(isset($_GET['accion'])){
    $accion = $_GET['accion'];

    if($accion == ''){
        echo json_encode(['statuscode'=>400, 'response' => 'No existe accion']);
    }else{
/************************************************************************************************************************/
		
		switch ($accion) {
		    
		    case 'listar':
				$items= Categoria::all();
				echo json_encode(['statuscode'    =>200,'items'=>$items]);
    		 break;

			// case 'borrar':
			// 	$respuesta=$users->delete($_GET['id']);
			// 	echo json_encode($respuesta);
			// break;

			// case 'agregar':
			// 	$respuesta = $users->insert(
			// 		[
			// 		'name'                           => $_POST["name"],
			// 		'email'                          => $_POST["email"],
			// 		'password'                       => $_POST["password"],
			// 		]
			// 	);
			// 	echo json_encode($respuesta);
			// break;

			case 'consultar':
                $categoria = new Categoria($_GET['id'],null,null);
				$resultado = $categoria->findById();
				echo json_encode([$resultado]);
			break;
		
			
			// case 'modificar':
			// 	$respuesta = $users->update(
			// 	[
			// 		'id'                             => $_GET["id"],
			// 		'name'                           => $_POST["name"],
			// 		'email'                          => $_POST["email"],
			// 		'password'                       => $_POST["password"],
			// 		]
			// 	);
			// 	echo json_encode($respuesta);
			// break;
			 
			
  		
  		}
/*********************************************************************************************************************/
    }
}else{
    echo json_encode(['statuscode'    =>400, 'response' => 'No existe accion']);
}


?>