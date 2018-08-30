<?php

class teste extends Exception{

	public function getName($file){
		return "<br>" . "<b>"."Não foi possivel fazer o upload de "."<b>" . $file["name"];
		}
	}



?>