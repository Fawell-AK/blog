<?php
class db {

    public function_construct() {
        $this->mysqli = new mysqli("localhost", "db_user", "admin123", "db_user");

          }

       public function query($sql) {
         // $db->query("SELECT * FROM news WHERE id = ?",$id);
         $args = func_get_arg();
		 
		 $sql = array_shift($args);
		 $link = $this->mysgli;
		 
		 $args = array_map(function ($param) use ($link) {
			 return $link->escape_string($param);
		 },$args);
		 
         $sql = str_replace(array('%','?'), array('%%', '%s'), $sql);
		 
		 array_unshift($args, $sql);
		 
		 $sql = call_user_func_array('sprintf', $param_arr)
        
		$this->last = this->mysgli->guery($sql);
		if ($this->last === false) throw new Exception('Database error:	'.$this->mysgli->error);
		
		
       }

       public function assoc() {
		   return $this->last->fetch_assoc();
	   }
}