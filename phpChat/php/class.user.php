<?php

require_once ('user_config.php');

class USER {

	private $conn;

	public function __construct($DB_con) {
		$this->conn = $DB_con;
  }

	public function runQuery($sql) {
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}

	public function register($Pseudo,$umail,$upass) {
		try {

			$stmt = $this->conn->prepare("INSERT INTO users(Pseudo,user_email,user_pass)VALUES(:Pseudo, :umail, :upass)");
			$stmt->bindparam(":Pseudo", $Pseudo);
			$stmt->bindparam(":umail", $umail);
			$stmt->bindparam(":upass", $upass);

			$stmt->execute();

			return $stmt;
		} catch(PDOException $e) {
			echo $e->getMessage();
		}
	}


	public function doLogin($Pseudo,$umail,$upass) {
		try {
			$stmt = $this->conn->prepare("SELECT user_id, Pseudo, user_email, user_pass FROM users WHERE Pseudo=:Pseudo OR user_email=:umail ");
			$stmt->execute(array(':Pseudo'=>$Pseudo, ':umail'=>$umail));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			if($stmt->rowCount() == 1) {
				if($upass = $userRow['user_pass']) {
					$_SESSION['user_session'] = $userRow['user_id'];
					return true;
				} else {
					return false;
				}
			}
		} catch(PDOException $e) {
			echo $e->getMessage();
		}
	}

	public function is_loggedin() {
		if(isset($_SESSION['user_session'])) {
			return true;
		}
	}

	public function redirect($url) {
		header("Location: $url");
	}

	public function doLogout() {
		session_destroy();
		unset($_SESSION['user_session']);
		return true;
	}
}

?>
