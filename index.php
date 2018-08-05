<?php
    $con=mysqli_connect("localhost","root","") or die ("SI CONEXIÓN");
    mysqli_set_charset($con,"utf8");
    mysqli_select_db($con,"examen"); //nombre de la BDD
    $sql="select * from reservaciones";
    $sqlv="select * from vehiculo";
    $datos=array();
    $datav=array();
    $rs=mysqli_query($con,$sql);
    
    $rsv=mysqli_query($con,$sqlv);

    //RESERVACIONES
    echo "[";
    while($row1=mysqli_fetch_object($rs) And $row2=mysqli_fetch_object($rsv))
    {
        
        $datos=$row1;
        $veh= array('placa'=>$row2->placa,'marca'=>$row2->marca,'modelo'=>$row2->modelo,'color'=>$row2->color,'disponibilidad'=>$row2->disponibilidad,'anio'=>$row2->anio );
        //print_r($datos);
        //echo "<br>";
       
        $datav= array('id' => $row1->id,'cliente'=>$row1->cliente,'vehiculo'=>$veh,'fecha_reserva' => $row1->fecha_reserva,'fecha_entrega' => $row1->fecha_entrega);
      
       $json=json_encode($datav).",";
       echo $json;    
    }
   //echo json_encode(array("reservaciones"=>$datos));
    echo "]"
    
    

   
 
?>