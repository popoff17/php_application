<? 
	class application{
		
		function start(){
			require_once(__DIR__."/config.php");
			$this->DB_connect($config["DB"]["SERVER"], $config["DB"]["USER"], $config["DB"]["PASSWORD"]);
			
			return $this->html_document();
		}

		private function DB_connect($sever, $user, $password){
			if(intval(str_replace(".","",phpversion())) < 550){ // проверка версии пхп для коннекта к бд
				$connect = @mysql_connect($sever, $user, $password);
			}else{
				$connect = @mysqli_connect($sever, $user, $password);
			}
			if(!$connect){
				exit("Приложение не может быть запущено! Ошибка подключения к базе данных!");
			}
			
			return $connect;
		}
		
		private function html_document(){
				echo "html";
		}
	}
?>