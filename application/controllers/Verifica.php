<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verifica extends CI_Controller {

	public function verifica_usuario()
	{
		$usuario =  $this->input->post('Email');
		$senha =  	$this->input->post('Senha');

		$senhaMD5 = "siteUsuCadpass".$senha;
		for($i=0;$i<=100;$i++)
			{
				$senhaMD5 = md5($senhaMD5);			
			}
		$this->load->model('UsuarioModel','Usuario');
		$result = $this->Usuario->verifica_conta($usuario, $senhaMD5);

		if($result == 0)
		{
			require_once('Welcome.php');
			$Welcome = new Welcome();
			$Welcome->index("Usuário ou Senha inválido!");
		} else
		{
			echo "foi";
		}

	}

}
