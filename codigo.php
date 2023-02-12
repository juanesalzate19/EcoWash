<?php

include ("conexion.php");


$accion=$_POST ['accion'];
if($accion==1){
    $tabla=$tabla_db3;
    echo 
    ' 
    <table class="table table-hover">
        <tr>
            <th scope="col">CODIGO</th>
            <th scope="col">DOCUMENTO</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">CORREO</th>
            <th scope="col">TELEFONO</th>
            <th scope="col">DIRECCION</th>
            <th scope="col">CONTRASEÑA</th>
            <th scope="col">MODIFICAR</th>
        </tr>

    ';
        $result=mysqli_query($conexion,"SELECT * FROM $tabla");
        while($consulta=mysqli_fetch_array($result)){
            echo
            '
                <tr>
                    <td>'.$consulta["codigo"].'</td>
                    <td>'.$consulta["documento"].'</td>
                    <td>'.$consulta["nombre_e"].'</td>
                    <td>'.$consulta["correo"].'</td>
                    <td>'.$consulta["telefono"].'</td>
                    <td>'.$consulta["direccion"].'</td>
                    <td>'.$consulta["contrasena"].'</td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="eliminar_empleado.php?documento='.$consulta['documento'].'" onclick = "return confirmar()"><img src="IMG/eliminar.jpeg" width="20px" height="20px"></a>||<a href="editar_empleado.php?documento='.$consulta['documento'].'"><img src="IMG/editar.jpeg" width="20px" height="20px"></a></td>
                </tr>
            ';
        }
    }else{
        if($accion==2){
            $tabla=$tabla_db2;
            echo 
                    '
                    <table class="table table-hover">
                        <tr>
                        <th scope="col">DOCUMENTO</th>
                        <th scope="col">USUARIO</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">CORREO</th>
                        <th scope="col">TELEFONO</th>
                        <th scope="col">DIRECCION</th>
                        <th scope="col">CONTRASEÑA</th>
                        <th scope="col">MODIFICAR</th>
                        </tr>
    
                    ';
                $result=mysqli_query($conexion,"SELECT * FROM $tabla");
            while($consulta=mysqli_fetch_array($result)){
            echo
                '
                    <tr>
                    <td>'.$consulta["documento"].'</td>
                    <td>'.$consulta["usuario"].'</td>
                    <td>'.$consulta["nombre"].'</td>
                    <td>'.$consulta["correo"].'</td>
                    <td>'.$consulta["telefono"].'</td>
                    <td>'.$consulta["direccion"].'</td>
                    <td>'.$consulta["contrasena"].'</td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="eliminar_usuario.php?documento='.$consulta['documento'].'" onclick = "return confirmar()"><img src="IMG/eliminar.jpeg" width="20px" height="20px"></a>||<a href="editar_usuario.php?documento='.$consulta['documento'].'"><img src="IMG/editar.jpeg" width="20px" height="20px"></a></td>
                    </tr>
                ';
            }
        }else{
            if($accion==3){
                $tabla=$tabla_db1;
                echo 
                        '
                        <table class="table table-hover">
                            <tr>
                            <th scope="col">PLACA</th>
                            <th scope="col">DIRECCION</th>
                            <th scope="col">COSTO</th>
                            <th scope="col">ESTADO</th>
                            <th scope="col">FECHA</th>
                            <th scope="col">EMPLEADO</th>
                            <th scope="col">CLIENTE</th>
                            <th scope="col">MODIFICAR</th>
                            </tr>
        
                        ';
                $resultados = mysqli_query($conexion,"SELECT *,cliente.documento,citas.direccion FROM citas,cliente,empleado WHERE citas.documento=cliente.documento AND citas.c_empleado=empleado.codigo AND title='realizado' ");
                while($consulta = mysqli_fetch_array($resultados))
                {
                    echo 
                '
                <tr  style="color:black;">
                <td>'.$consulta['placa'].'</td>
                <td>'.$consulta['direccion'].'</td>
                <td>'.$consulta['costo'].'</td>
                <td>'.$consulta['title'].'</td>
                <td>'.$consulta['start'].'</td>
                <td>'.$consulta['nombre_e'].'</td>
                <td>'.$consulta['nombre'].'</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="eliminar_realizadas.php?id='.$consulta['id'].'" onclick = "return confirmar()"><img src="IMG/eliminar.jpeg" width="20px" height="20px"></a>||<a href="editar_citas.php?id='.$consulta['id'].'"><img src="IMG/editar.jpeg" width="20px" height="20px"></a></td>
                </tr>
                ';
        
              }
            }else{
                if($accion==4){
                    $tabla=$tabla_db1;
                    echo 
                        '
                        <table class="table table-hover">
                        <tr>
                        <th scope="col">PLACA</th>
                        <th scope="col">DIRECCION</th>
                        <th scope="col">COSTO</th>
                        <th scope="col">ESTADO</th>
                        <th scope="col">FECHA</th>
                        <th scope="col">EMPLEADO</th>
                        <th scope="col">CLIENTE</th>
                        <th scope="col">MODIFICAR</th>
                        </tr>
            
                            ';
                            $resultados = mysqli_query($conexion,"SELECT *,cliente.documento,citas.direccion FROM citas,cliente,empleado WHERE citas.documento=cliente.documento AND citas.c_empleado=empleado.codigo AND title='cancelado'");
                            while($consulta = mysqli_fetch_array($resultados))
                            {
                                echo 
                            '
                            <tr  style="color:black;">
                                <td>'.$consulta['placa'].'</td>
                                <td>'.$consulta['direccion'].'</td>
                                <td>'.$consulta['costo'].'</td>
                                <td>'.$consulta['title'].'</td>
                                <td>'.$consulta['start'].'</td>
                                <td>'.$consulta['nombre_e'].'</td>
                                <td>'.$consulta['nombre'].'</td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="eliminar_canceladas.php?id='.$consulta['id'].'" onclick = "return confirmar()"><img src="IMG/eliminar.jpeg" width="20px" height="20px"></a>||<a href="editar_citas.php?id='.$consulta['id'].'"><img src="IMG/editar.jpeg" width="20px" height="20px"></a></td>
                              </tr>
                            ';
                    
                          }
                    }else{
                        if($accion==5){
                            $tabla=$tabla_db1;
                            echo 
                                '
                                <table class="table table-hover">
                                <tr>
                                <th scope="col">PLACA</th>
                                <th scope="col">DIRECCION</th>
                                <th scope="col">COSTO</th>
                                <th scope="col">ESTADO</th>
                                <th scope="col">FECHA</th>
                                <th scope="col">EMPLEADO</th>
                                <th scope="col">CLIENTE</th>
                                <th scope="col">MODIFICAR</th>
                                </tr>
                    
                                    ';
                                    $resultados = mysqli_query($conexion,"SELECT *,cliente.documento,citas.direccion FROM citas,cliente,empleado WHERE citas.documento=cliente.documento AND citas.c_empleado=empleado.codigo AND title='espera'");
                                    while($consulta = mysqli_fetch_array($resultados))
                                    {
                                        echo 
                                    '
                                    <tr  style="color:black;">
                                    <td>'.$consulta['placa'].'</td>
                                    <td>'.$consulta['direccion'].'</td>
                                    <td>'.$consulta['costo'].'</td>
                                    <td>'.$consulta['title'].'</td>
                                    <td>'.$consulta['start'].'</td>
                                    <td>'.$consulta['nombre_e'].'</td>
                                    <td>'.$consulta['nombre'].'</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="eliminar_espera.php?id='.$consulta['id'].'" onclick = "return confirmar()"><img src="IMG/eliminar.jpeg" width="20px" height="20px"></a>||<a href="editar_citas.php?id='.$consulta['id'].'"><img src="IMG/editar.jpeg" width="20px" height="20px"></a></td>
                                      </tr>
                                    ';
                            
                                  }
                            }
                    }
                } 
            }
        }
    