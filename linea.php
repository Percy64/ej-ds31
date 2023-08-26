<?php 

require_once 'modelo/tasa.php';
require_once 'modelo/demostracion.php';
require_once 'modelo/linea.php';
require_once 'modelo/respuestalinea.php';

header('Content-Type: application/json');

$t = new tasa();
$t->plazodesde=0;
$t->plazohasta=48;
$t->tem=4.7671;
$t->tna=58;
$t->listtasascore=null;

$d = new demostracion();
$d->codigo=1;
$d->descripcion='DNI';

$l = new linea();
$l->id=222;
$l->codigo=752;
$l->demostracion=$d;
$l->tasa=$t;
$l->tope=250000;

$res = new respuestalinea();
$res->linea=$l;
$res->contieneerror=false;
$res->mensaje=null;

echo json_encode($ro);