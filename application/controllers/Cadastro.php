<?php
class Cadastro extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');
        $this->load->helper('url_helper');
    }
    
    public function cliente($page = 'cliente')
    {
        if (! file_exists(APPPATH.'views/cadastro/'.$page.'.php')) {
            show_404();
        }
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['estadoCivil'] = $this->db->query('SELECT id, nome FROM estado_civil');
        
        $data['title'] = ucfirst($page);

        $this->load->view('template/header', $data);
        $this->load->view('cadastro/'.$page, $data);
        $this->load->view('template/footer', $data);
    }
}