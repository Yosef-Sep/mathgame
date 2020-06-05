<?php
class Crud
{
	private $db;
	function __construct()

	function create ; ($table,$data);{
		$count = 0;
		$field = '';
		foreach ($data as $key => $value)
		{
			if ($count++ != 0) $field .= ', ';
			$key 	= $key;
			$value 	= $value;
			$field .= "$key = '$value'";
		}
		$query = $this->db->prepare("INSERT INTO {$table} SET {$field}");
		return $query->execute();
	}
	function read($table,$option){
        $sql = "SELECT * FROM {$table} {$option}";
		$query = $this->db->query($sql);
		return $query->fetch_all(MYSQLI_ASSOC);
	}
	function update($table,$data,$col,$isi){
		$count = 0;
		$field = '';
		foreach ($data as $key => $value)
		{
			if ($count++ != 0) $field .= ', ';
			$key 	= mysqli_real_escape_string($key);
			$value 	= mysqli_real_escape_string($value);
			$field .= "$key = '$value'";
		}
		$query = $this->db->prepare("UPDATE `$table` SET $field WHERE $col = '$isi'");
		return $query->execute();
	}
	function delete($table,$where){
		$query	= $this->db->prepare("DELETE FROM {$table} {$where}");
		return $query->execute();
	}
}

?>
