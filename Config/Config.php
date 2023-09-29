<?php 
	//http://localhost/Monbez
	//https://monbez.000webhostapp.com
	const BASE_URL = "http://localhost/Monbez";

	//Zona horaria
	date_default_timezone_set('Europe/Madrid');

	//Datos de conexión a Base de Datos
	const DB_HOST = "localhost";
	//id20431640_db_monbez
	const DB_NAME = "db_monbez";
	//id20431640_amontals83
	const DB_USER = "root";
	//Classof2000&
	const DB_PASSWORD = "1234";
	const DB_CHARSET = "charset=utf8";

	//Deliminadores decimal y millar Ej. 24.1989,00
	const SPD = ",";
	const SPM = ".";

	//Simbolo de moneda
	const SMONEY = "€";

	//Datos envio de correo
	const NOMBRE_REMITENTE = "MonBez";
	const EMAIL_REMITENTE = "amontals83@gmail.com";
	const NOMBRE_EMPRESA = "MonBez";
	const WEB_EMPRESA = "www.monbez.000webhostapp.com";
 ?>