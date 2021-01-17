<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

  public function __construct() {
      parent::__construct();
      $this->load->model('usuario_model', 'usuario');
      

  }

  public function index(){
      $dados['usuario'] = $this->usuario->list_user();
      $this->template->load('template', 'index', $dados);
  }

  public function new(){
      $this->template->load('template', 'usuario_new');
  }

  public function record(){

      $this->form_validation->set_rules('nome', 'Nome', 'required');
      $this->form_validation->set_rules('usuario', 'Login', 'required|is_unique[usuarios.usuario]');
      $this->form_validation->set_rules('senha', 'Senha', 'required|valid_email');
      $this->form_validation->set_rules('email', 'E-mail', 'required');
      $this->form_validation->set_rules('nivel', 'Nível do usuario', 'required');
      $this->form_validation->set_rules('ativo', 'Ativo', 'required');


      if ($this->form_validation->run() == FALSE) {
    			$this->session->set_flashdata('msg', 'Falha ao cadastrar usuário.');
    			$this->session->set_flashdata('alerta', 'danger');
          $this->template->load('template', 'usuario_new');
      } else {
          $dados['nome'] = $this->input->post('nome');
          $dados['usuario'] = $this->input->post('usuario');
          $dados['senha'] = sha1($this->input->post('senha'));
          $dados['email'] = $this->input->post('email');
          $dados['nivel'] = $this->input->post('nivel');
          $dados['ativo'] = $this->input->post('ativo');
          $dados['cadastro'] = date("Y-m-d H:i:s");


          if ($this->usuario->create_user($dados)) {
              $usuario_id = $this->db->insert_id();
              if(!empty($usuario_id)){
                $this->session->set_flashdata('msg', 'Usuário cadastrado com sucesso.');
                $this->session->set_flashdata('alerta', 'success');
              }

          } else {
              $this->session->set_flashdata('msg', 'Falha ao cadastrar usuário.');
              $this->session->set_flashdata('alerta', 'danger');
          }

          redirect('usuario/new');
      }
  }

  public function edit($id = NULL){
      if (is_null($id)) {
          redirect('/usuario');
      }
      
      $dados['usuarios'] = $this->usuario->find_user($id);
      $dados['id'] = $id;
      $this->template->load('template', 'usuario_edit', $dados);
  }

  public function delete($id = NULL){
      if (is_null($id)) {
          redirect('/usuario');
      }
      $this->usuario->delete_user($id);
      $this->session->set_flashdata('msg', 'Usuário excluido com sucesso.');
      $this->session->set_flashdata('alerta', 'success');
      redirect('usuario');
  }



  public function update($id = NULL){
      if (is_null($id)) {
          redirect('/usuario');
      }

      $this->form_validation->set_rules('nome', 'Nome', 'required');
      $this->form_validation->set_rules('usuario', 'Login', 'required');
      $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');
      $this->form_validation->set_rules('nivel', 'Nível', 'required');
      $this->form_validation->set_rules('ativo', 'Ativo', 'required');

      if ($this->form_validation->run() == FALSE) {
          $this->session->set_flashdata('msg', 'Erro ao Atualizar usuário');
          $this->session->set_flashdata('alerta', 'danger');
          redirect('usuario/edit/'.$id);
      }

      else {
          $dados['nome'] = $this->input->post('nome');
          $dados['usuario'] = $this->input->post('usuario');
          $dados['senha'] = sha1($this->input->post('senha'));
          $dados['email'] = $this->input->post('email');
          $dados['nivel'] = $this->input->post('nivel');
          $dados['ativo'] = $this->input->post('ativo');

          if ($this->input->post('senha')!=""){ $dados['senha'] = sha1($this->input->post('senha')); }
          //print_r( $dados); exit;
          if ($this->usuario->update_user($id,$dados)) {

              $this->session->set_flashdata('msg', 'Usuário atualizado com sucesso.');
              $this->session->set_flashdata('alerta', 'success');
              redirect('/usuario');

          } else {
              $this->session->set_flashdata('msg', 'Falha ao atualizar  usuario.');
              $this->session->set_flashdata('alerta', 'danger');
               redirect('usuario/edit/'.$id);
          }

          
      }
  }
}
