<?php
	
	/**
	* CLASS PARA MANTER OS DADOS IMPORTANTES DO BANCO DE DADOS
	*/
	class Configdb
	{
		// ATRIBUTOS DA CLASS PARA CONEXÃO 
		var $host = 'localhost';
		var $dbname = 'test';
		var $user = 'root';
		var $password = '';


		function __construct()
		{
			$this->conn = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname, $this->user, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		}

	}
?>