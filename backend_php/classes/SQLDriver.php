<?php
class SQLDriver {
    static $dbHost = 'localhost';
	
	static $dbUser = 'root';
	static $dbPass = '';
	
	static $dbName = 'desafio';
	
	private static $PDOInstance;

	public static function getPDO()
	{
        if (self::$PDOInstance === NULL) {
			try{
				self::$PDOInstance = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName, self::$dbUser, self::$dbPass);
			}
			catch (PDOException $e){
				echo "Erro com banco de dados: ".$e->getMessage();
			}
			catch(Exception $e)
			{
				echo "Erro generico: ".$e->getMessage();
			}
        }
        return self::$PDOInstance;
	}

	public static function selectAllEntities($tableName) {
		$stmt = self::getPDO()->prepare("SELECT * FROM " . $tableName);
    
        if ($stmt->execute()){
          return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
	}

	public static function insertPersonagem($nome, $idade, $interprete, $alinhamento, $biografia){
		$con = SQLDriver::getPDO();
		$con->beginTransaction(); 

		try{			
			$stmt = $con->prepare("INSERT INTO personagens (nome, idade, interprete, alinhamento, biografia) VALUES (:nome, :idade, :interprete, :alinhamento, :biografia)");
					
			$stmt->bindParam(":nome", $nome);
			$stmt->bindParam(":idade", $idade);
			$stmt->bindParam(":interprete", $interprete);
			$stmt->bindParam(":alinhamento", $alinhamento);
			$stmt->bindParam(":biografia", $biografia);

			
			if($stmt->execute()){
				$result = 'Cadastrado com sucesso';
				$con->commit();
			}else{
				$result = 'Erro ao cadastrar!'; 
				$con->rollBack();
			}
		} catch(PDOException $e){
			$con->rollBack();
			echo $e->getMessage();
		}
		$con = null;
		return $result;
	}

}
?>
