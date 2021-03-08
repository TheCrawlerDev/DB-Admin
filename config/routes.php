<?php

// definimos as rotas
$routes['post']['alertas'] = array('set'=>'Ajax@enviar_alerta','params'=>'enviar_alerta');
$routes['post']['kill_process'] = array('set'=>'Ajax@kill_process','params'=>'kill_process');

$routes['get']['index'] = array('set'=>'Cadastro@inicio','params'=>'inicio');
$routes['get'][''] = array('set'=>'Cadastro@inicio','params'=>'inicio');
$routes['get']['inicio'] = array('set'=>'Cadastro@inicio','params'=>'inicio');
$routes['get']['threads'] = array('set'=>'Cadastro@threads','params'=>'threads');
$routes['get']['process'] = array('set'=>'Cadastro@process','params'=>'process');
$routes['get']['size'] = array('set'=>'Cadastro@size','params'=>'size');
$routes['get']['variables'] = array('set'=>'Cadastro@variables','params'=>'variables');
$routes['get']['process_history'] = array('set'=>'Cadastro@process_history','params'=>'process_history');
$routes['get']['process_kill'] = array('set'=>'Cadastro@process_kill','params'=>'process_kill');
$routes['get']['kill_process_list'] = array('set'=>'Ajax@kill_all_process','params'=>'kill_all_process');
?>
