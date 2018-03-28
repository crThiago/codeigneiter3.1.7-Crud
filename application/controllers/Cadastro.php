<?php
class Cadastro extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('CadastroModel');
        $this->load->helper('url_helper');
    }
    
    public function cliente($page = 'cliente')
    {
        if (! file_exists(APPPATH.'views/cadastro/'.$page.'.php')) {
            show_404();
        }
        $this->load->helper('url','form');
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('txtNome', 'Nome Completo', 'required');

        $data['title'] = ucfirst($page);
        
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('cadastro/'.$page, $data);
            $this->load->view('template/footer');
        } else {
            $this->CadastroModel->insertCadastro();
        }
    }
}