<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller {
    
    function __construct(){
        parent::__construct();
    }

	public function tabela()
	{
		$clientes = $this->db->get('cliente')->result();
		$this->load->view('tabela', array('clientes' => $clientes));           
    }
    
	public function criartabela()
	{   
		$this->load->view('criartabela');      
	}

	public function editartabela($id)
	{
		if(!empty($this->input->post())){
			$this->db->update('cliente', $this->input->post(),"id=$id");
			redirect('tabela');
		}else{
			$cliente = $this->db->get_where('cliente', "id=$id")->row();
	
			$this->load->view('editartabela', $cliente);
		}
	}

	public function cadastrar()
	{
		$data['id'] = $this->input->post('id');
		$data['titulo'] = $this->input->post('titulo');
		$data['data'] = $this->input->post('date');

		if($this->db->insert('cliente',$data)){
			redirect('tabela');
		}
	}

	public function deletar($id)
	{
		$this->db->delete('cliente',"id=$id");
		redirect('tabela');
	}

	public function buscarid()
	{
		$id = $this->input->post('id');
		$cliente = $this->db->get_where('cliente', "id=$id")->row();
		if($id == $cliente -> id){
			$this->load->view('buscarid', $cliente);
		}else{
			redirect('tabela');
		}
	}

	public function buscardata()
	{
		$data = $this->input->post('data'); 
		$cliente = $this->db->get_where('cliente', "data='$data'")->result();
		$this->load->view('buscardata', array('cliente' => $cliente));

	}


}
