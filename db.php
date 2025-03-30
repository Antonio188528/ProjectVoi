<?php 
require_once '/OSPanel/domains/voi/libs/rb-mysql.php';
R::setup( 'mysql:host=localhost;dbname=voi','root', '' ); 

if ( !R::testconnection() )
{
		exit ('Нет соединения с базой данных');
}

//R::addDatabase( 'voi', 'mysql:localhost', 'root', '', false );
//R::selectDatabase( 'voi' );


session_start();