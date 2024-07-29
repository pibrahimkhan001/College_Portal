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
			  $sqlqry = "SELECT `name`,`role`,`branch`,`award`,`year`,`govt` FROM `awards` order by `year` asc";
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
	
	
	
	
	

	
	

	public function __destruct(){
		if(!empty($this->myconn)){
		  $this->myconn->close();
		}
	}

}


class vision extends DBCredentials
{
	private $classname = "vision";
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

	


	public function addVision($statement){
		$myname = $this->classname." - addVision - ";
		$res = array();
		$res['status'] = 0;

		if($this->myerr==0 && !empty($this->myconn)){		
			  $sqlqry = "UPDATE `vision` SET `statement`=? where `sno`=0";
			if ($stmt = $this->myconn->prepare($sqlqry)) {
				$stmt->bind_param("s",$statement);
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
	
	
	
	public function getVision(){
		$res = array();
		$res['status'] = 0;
		//$dt=date('Ymd');
        $myname = $this->classname." - getVision - ";
		if($this->myerr==0 && !empty($this->myconn)){
			  $sqlqry = "SELECT `statement` FROM `vision` order by `sno` desc ";
			if ($stmt = $this->myconn->prepare($sqlqry)) {
				if($stmt->execute()){
					$stmt->bind_result($statement);
					$i=0;
					while($stmt->fetch()){
						$res['status'] = 1;
						$res[$i]['statement']=$statement;
						
						
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
	
	
	
	
	

	
	

	public function __destruct(){
		if(!empty($this->myconn)){
		  $this->myconn->close();
		}
	}

}

class mission extends DBCredentials
{
	private $classname = "mission";
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

	


	public function addMission($statement){
		$myname = $this->classname." - addMission - ";
		$res = array();
		$res['status'] = 0;

		if($this->myerr==0 && !empty($this->myconn)){		
			  $sqlqry = "UPDATE `mission` SET `statement`=? where `sno`=0";
			if ($stmt = $this->myconn->prepare($sqlqry)) {
				$stmt->bind_param("s",$statement);
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
	
	
	
	public function getMission(){
		$res = array();
		$res['status'] = 0;
		//$dt=date('Ymd');
        $myname = $this->classname." - getMission - ";
		if($this->myerr==0 && !empty($this->myconn)){
			  $sqlqry = "SELECT `statement` FROM `mission` order by `sno` desc ";
			if ($stmt = $this->myconn->prepare($sqlqry)) {
				if($stmt->execute()){
					$stmt->bind_result($statement);
					$i=0;
					while($stmt->fetch()){
						$res['status'] = 1;
						$res[$i]['statement']=$statement;
						
						
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
	
	
	
	
	

	
	

	public function __destruct(){
		if(!empty($this->myconn)){
		  $this->myconn->close();
		}
	}

}


class roadmap extends DBCredentials
{
	private $classname = "roadmap";
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

	


	public function addRoadmapentry($statement){
		$myname = $this->classname." - addRoadmapentry - ";
		$res = array();
		$res['status'] = 0;

		if($this->myerr==0 && !empty($this->myconn)){		
			  $sqlqry = "INSERT INTO `roadmap`(statement) VALUES(?)";
			if ($stmt = $this->myconn->prepare($sqlqry)) {
				$stmt->bind_param("s",$statement);
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
	
	
	
	public function getRoadmapentry(){
		$res = array();
		$res['status'] = 0;
		//$dt=date('Ymd');
        $myname = $this->classname." - getRoadmapentry - ";
		if($this->myerr==0 && !empty($this->myconn)){
			  $sqlqry = "SELECT `statement` FROM `roadmap` order by `sno`  ";
			if ($stmt = $this->myconn->prepare($sqlqry)) {
				if($stmt->execute()){
					$stmt->bind_result($statement);
					$i=0;
					while($stmt->fetch()){
						$res['status'] = 1;
						$res[$i]['statement']=$statement;
						
						
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
	
	
	
	
	

	
	

	public function __destruct(){
		if(!empty($this->myconn)){
		  $this->myconn->close();
		}
	}

}

class imgchange extends DBCredentials
{
	private $classname = "imgchange";
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

	


	public function addImg($image,$name){
		$myname = $this->classname." - addImg - ";
		$res = array();
		$res['status'] = 0;

		if($this->myerr==0 && !empty($this->myconn)){		
			  $sqlqry = "UPDATE `images` SET `image`=? where `name`=$name";
			if ($stmt = $this->myconn->prepare($sqlqry)) {
				$stmt->bind_param("s",$image);
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
	
	
	
	public function getImg($name){
		$res = array();
		$res['status'] = 0;
		//$dt=date('Ymd');
        $myname = $this->classname." - getImg - ";
		if($this->myerr==0 && !empty($this->myconn)){
			  $sqlqry = "SELECT `image` FROM `images` where `name`= $name  ";
			if ($stmt = $this->myconn->prepare($sqlqry)) {
				if($stmt->execute()){
					$stmt->bind_result($image);
					$i=0;
					while($stmt->fetch()){
						$res['status'] = 1;
						$res[$i]['image']=$image;
						
						
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
	
	
	
	
	

	
	

	public function __destruct(){
		if(!empty($this->myconn)){
		  $this->myconn->close();
		}
	}

}
 ?>
