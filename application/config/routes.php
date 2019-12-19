<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'login_controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//RUTAS: LOGIN
$route['login']							= 'login_controller';
$route['salir'] 						= 'login_controller/cerrandoSesion';
$route['acreditando']					= 'login_controller/acreditarCuenta';
$route['home']							= 'home_controller';

//RUTAS: HOME
$route['obtenerDataVisita']				= 'home_controller/returnDataVisita';
$route['obtenerDataMedico']				= 'home_controller/returnDataMedico';
$route['obtenerDetalleVisita']			= 'home_controller/returnDetalleVisita';
$route['obtenerDetalleMedico']			= 'home_controller/returnDetalleMedico';

//RUTAS: PEDIDOS
$route['pedidos']						= 'pedidos_controller';
$route['obtenerDataPedidos']			= 'pedidos_controller/returnDataPedido';
$route['obtenerDetallePedido']			= 'pedidos_controller/returnDetallePedido';