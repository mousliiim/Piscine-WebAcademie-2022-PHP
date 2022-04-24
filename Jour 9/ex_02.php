<?php

	class MyAttribute{
	public $name;

		public function __construct($prenom){
			$this->name = $prenom;
    }
		public function display()
		{
			echo $this->name . PHP_EOL;
		}
	}