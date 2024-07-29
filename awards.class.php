<?php
require_once("dbcredentials.php");
require_once("logs.php");

/**
 * Developed by ,
 */
class awards extends DBCredentials
{
	private $classname = "awards";
	private $logs = "";
	private $myconn = "";
	private $myerr = 0;

	public function __construct()
	{
		$this->logs = new Logs();
		$this->myconn = new mysqli($this->getHost(),$this->getUser(),$this->getPass(),$this->getDb());

		if (mysqli_connect_errno()) {
			$this->myerr = mysqli_connect_errno();
		}
	}

	


	public function addAward($name,$role,$branch,$award,$year,$govt){
		$myname = $this->classname." - addAward - ";
		$res = array();
		$res['status'] = 0;

		if($this->myerr==0 && !empty($this->myconn)){		
			  $sqlqry = "INSERT INTO `awards`(`name`,`role`,`branch`,`award`,`year`,`govt`) VALUES (?,?,?,?,?,?)";
			if ($stmt = $this->myconn->prepare($sqlqry)) {
				$stmt->bind_param("ssssds",$name,$role,$branch,$award,$year,$govt);
				if($stmt->execute()){
					if($this->myconn->affected_rows){
					  $res['status'] = 1;
					  $res['rows_affected'] = $this->myconn->affected_rows;
					}
				}
				else{
					$this->logs->errLog($myname."Statement not executed".$this->myconn->error);
				}
			}
			else{
				$this->logs->errLog($myname."Not prepared");
			}
		}
		else{
			$this->logs->errLog($myname."Mysqli Error or else");
		}

		return $res;
	}
	
	
	
	public function getawards(){
		$res = array();
		$res['status'] = 0;
		//$dt=date('Ymd');
        $myname = $this->classname." - getawards - ";
		if($this->myerr==0 && !empty($this->myconn)){
			  $sqlqry = "SELECT `name`,`role`,`branch`,`award`,`year`,`govt` FROM `awards` order by `year` desc";
			if ($stmt = $this->myconn->prepare($sqlqry)) {
				if($stmt->execute()){
					$stmt->bind_result($name,$role,$branch,$award,$year,$govt);
					$i=0;
					while($stmt->fetch()){
						$res['status'] = 1;
						$res[$i]['name']=$name;
						$res[$i]['role'] = $role;
						$res[$i]['branch'] = $branch;
						$res[$i]['award'] = $award;
						$res[$i]['year'] = $year;
						$res[$i]['govt'] = $govt;
						
						$i++;
					}
					$res['ival']=$i;
				}
				else{
					$this->logs->errLog($myname."Statement not executed".$this->myconn->error);
				}
			}
			else{
				$this->logs->errLog($myname."Not prepared");
			}
		}
		else{
			$this->logs->errLog($myname."Mysqli Error or else");
		}

		return $res;
	}
	
	public function updGrievance($userid,$comment,$oldstat,$newstat){
		$myname = $this->classname." - updGrievance - ";
		$res = array();
		$res['status'] = 0;

		if($this->myerr==0 && !empty($this->myconn)){
			
		  $sqlqry = "UPDATE `grievances` SET `status`=?, `comment`=? WHERE `userid`=? and `status`=?";
		  if ($stmt = $this->myconn->prepare($sqlqry)) {
				$stmt->bind_param("ssss",$newstat,$comment,$userid,$oldstat);
				if($stmt->execute()){
					if($this->myconn->affected_rows){
					  $res['status'] = 1;
					  $res['rows_affected'] = $this->myconn->affected_rows;
					}
				}
				else{
					$this->logs->errLog($myname."Statement not executed".$this->myconn->error);
				}
			}
			else{
				$this->logs->errLog($myname."Not prepared");
			}
		}
		else{
			$this->logs->errLog($myname."Mysqli Error or else");
		}

		return $res;
	}
	
	
	

	
	

	public function __destruct(){
		if(!empty($this->myconn)){
		  $this->myconn->close();
		}
	}

}

 ?>
