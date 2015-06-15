<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

	public function cria_conta($mensagem = null)
	{
		$info['mensagem'] = $mensagem;
		$this->load->view('criar_conta', $info);
	}

	public function insere_conta()
	{
		$this->load->model('UsuarioModel','NovoUsu');

		$dataAtual = date("Ymd");
		$nome = $this->input->post('Nome');
		$email = $this->input->post('Email');
		$senha = $this->input->post('Senha');

		$return = $this->NovoUsu->verifica_email($email);

		if($return == 1)
		{
			 
			 $this->cria_conta("Email já está cadastrado, por favor verifique se não esqueceu sua senha.");

		} else
		{

			$md5Senha = "siteUsuCadpass".$senha;
			for($i=0;$i<=100;$i++)
			{
				$md5Senha = md5($md5Senha);			
			}

			
			$return = $this->NovoUsu->insert($email,$md5Senha,$nome,1,1,'','U',$dataAtual);
			if($return == 1)
			{
				 
				 $this->cria_conta("Conta cadastrada com sucesso, acesse seu email para ativar.");
			} else

			{
				$this->cria_conta("Ocoreu um problema ao tentar cadastrar, por favor entre em contato com o administrador do sistema.");
			}
		}
	}
}
