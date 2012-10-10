<?php
class Orchestra {

	private $nr_muzicieni;
	public  $muzicieni = array();
	
	public function apelMuzician($nume)
	{
		$this->nr_muzicieni++;
		$this->muzicieni[$this->nr_muzicieni] = new $nume;
	}
	
	public function numarMuzicieni()
	{
		return $this->nr_muzicieni;
	}	
}//end class
?>