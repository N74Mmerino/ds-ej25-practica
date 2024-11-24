<?php

header('Content-Type: application/json');

require_once 'modelosRespuestas/consultarTodosRespuesta.php';
require_once '../../modelo/ejecutivoCuenta.php';

$resp= new ConsultarTodosRespuesta();

$ec1= new EjecutivoCuenta();
$ec1->Id=1;
$ec1->Descripcion="ejecutivo 1";
$ec1->Usuario="comercial";

$ec2= new EjecutivoCuenta();
$ec2->Id=2;
$ec2->Descripcion="ejecutivo 2";
$ec2->Usuario="javkin";

$resp->ListEjecutivosDeCuentas[]=$ec1;
$resp->ListEjecutivosDeCuentas[]=$ec2;






echo json_encode ($resp);