<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsuarioModel extends CI_Model {

	var $id = "";
	var $email = "";
	var $senha = "";
	var $nome = "";
	var $data_cadastro = "";
	var $primeiro_acesso = "";
	var $ativo = "";
	var $caminho_foto = "";
	var $tipo = "";


   function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    

    function insert($email, $senha, $nome, $primeiro_acesso, $ativo, $caminho_foto, $tipo, $data)
    {
        try {
            	$this->email 			= $email;
            	$this->senha 			= $senha;
            	$this->nome 			= $nome;
            	$this->data_cadastro	= $data;
            	$this->primeiro_acesso  = $primeiro_acesso;
            	$this->ativo 			= $ativo;
            	$this->caminho_foto 	= $caminho_foto;
            	$this->tipo 			= $tipo;

            	$this->db->insert('Usuario',$this);
                return 1;
            } catch(Exception $e)
            {
                return 0;
            }
    }

    function verifica_email($email)
    {
        $this->db->select('1');
        $this->db->from('Usuario');
        $this->db->where('email', $email);
        $query = $this->db->get();
        if ($query->num_rows() > 0)
        {
            return 1;
        }
        else{
            return 0;
        }

    }

    function verifica_conta($email,$senha)
    {
        $this->db->select('1');
        $this->db->from('Usuario');
        $this->db->where('email', $email);
        $this->db->where('senha', $senha);
        $query = $this->db->get();
        if ($query->num_rows() > 0)
        {
            return 1;
        }
        else{
            return 0;
        }

    }

}
