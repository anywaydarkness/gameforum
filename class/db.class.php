<?php

	class Db
	{
		private $pdo;
		
		public function __construct($conf)
		{
			$dsn = 'mysql:host='.$conf['host'].';dbname='.$conf['name'].';charset=utf8';
			
			$options = array(
			
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
			
			);
			
			$this->pdo = new PDO($dsn, $conf['user'], $conf['pass'], $options);
		}
		
		public function request($sql, $params = array())
		{
			$req = $this->pdo->prepare($sql);
			$req->execute($params);
			
			$response = $req->fetchAll();
			
			if(empty($response))
				return false;
			else
				return $response;
		}
		
		public function lastInsId()
		{
			return $this->pdo->lastInsertId();
		}
	}

?>