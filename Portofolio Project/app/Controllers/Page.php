<?php namespace App\Controllers;

class Page extends BaseController
{
    
    public function contact()
	{
		echo view("contact");
	}

	public function projek()
	{
		echo view("projek");
    }

	public function profil()
	{
		echo view("profil");
    }
}