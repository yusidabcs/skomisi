<?php

class Agent extends Database{
	private $table = 'agents';
	
	public function all(){
		$conn = $this->connect();
		try {
		    $sth = $conn->query('SELECT * FROM agents');
		    $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
		    return $rows;
		} catch(PDOException $e) {
		    echo $e->getMessage();
		}

	}

	public function store(){
		$conn = $this->connect();
		$columns = array();
		$values = array();
		foreach ($_POST as $key => $value) {

			if($key!='add-agent'){
				array_push($columns,$key);
				array_push($values,$value);	
			}
			
		}

		array_push($columns,'created_at');
		array_push($values,date('Y-m-d H:m:s'));

		array_push($columns,'updated_at');
		array_push($values,date('Y-m-d H:m:s'));
		
		$values = implode("','", $values);
		$values = "'".$values."'";
		$qry = 'INSERT INTO '.$this->table.' ('.implode (", ", $columns).') values ('.$values.')';
		try {
		    $conn->query($qry);
		    $_SESSION['message'] = 'Berhasil menambah agent baru.';
        	header("Location: index.php");
        	exit();
		    
		} catch(PDOException $e) {
			$_SESSION['error'] = 'Ops. terjadi kesalahan:'.$e->getMessage();
			exit();
		}
	}

	public function show($id){
		$conn = $this->connect();
		$rs = $conn->prepare("SELECT * FROM agents WHERE id=$id"); 
		$rs->execute(); 
		$row = $rs->fetch();
		return $row;
	}

	public function update($id){
		$conn = $this->connect();
		$set = array();
		foreach ($_POST as $key => $value) {

			if($key!='edit-agent'){
				array_push($set,$key.'='."'".$value."'");
			}
			
		}

		array_push($set,'updated_at'."='".date('Y-m-d H:m:s')."'");
		
		$values = implode(",", $set);
		$qry = 'UPDATE '.$this->table.' SET '.$values.' WHERE id='.$id;
		try {
		    $conn->query($qry);
		    $_SESSION['message'] = 'Berhasil mengupdate agent.';
        	header("Location: ?page=edit-agent&id=".$id);
		    exit();
		} catch(PDOException $e) {
			$_SESSION['error'] = 'Ops. terjadi kesalahan:'.$e->getMessage();
		}
	}

	public function delete($id){
		try {
		    
			$conn = $this->connect();
			$qry = ("DELETE FROM agents WHERE id=$id");
			$conn->query($qry);
			$_SESSION['message'] = 'Berhasil menghapus agent.';
	    	header("Location: ?page=list-agent");
		    exit();
		} catch(PDOException $e) {
			$_SESSION['error'] = 'Ops. terjadi kesalahan:'.$e->getMessage();
			header("Location: ?page=list-agent");
		    exit();
		}
	}
}