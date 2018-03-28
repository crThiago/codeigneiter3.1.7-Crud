<?php
class CadastroModel extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function insertCadastro()
    {
        $this->load->helper('url');

        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'nome' => $this->input->post('txtNome')
        );

        return $this->db->insert('cliente', $data);
    }
}