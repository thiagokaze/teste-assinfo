<div class="row">
    <?php print validation_errors('<div class="alert alert-danger">', '</div>');?>
    <?php if ($this->session->flashdata('msg')) : ?>
    <div class="alert alert-<?php print $this->session->flashdata('alerta') ?>">
        <?php print $this->session->flashdata('msg') ?>
    </div>
    <?php endif; ?>
</div>
<?php print form_open('usuario/record');?>
   <div class="row">
                <div class="col-md-8"><h1>Cadastrar Usuário</h1></div>
                <div class="col-md-4"><a href="<?php print base_url(); ?>index.php/usuario">Voltar</a></div>
            </div>    
    <div class="row">
        <div class="col-xl-12">
            <input class="form-control" type="text" value="<?php print set_value('nome')?>" placeholder="Nome" name="nome">
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <input class="form-control" type="text" value="<?php print set_value('usuario')?>" placeholder="Usuário" name="usuario">
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <input class="form-control" type="password" value="<?php print set_value('senha')?>" placeholder="Senha" name="senha">
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <input class="form-control" type="text" value="<?php print set_value('email')?>" placeholder="E-mail" name="email">
        </div>
    </div>
    <div class="row ">
        <div class="col-xl-12">
          Nível:
            <select class="form-control" name="nivel">
                <option value="1" <?php print set_select('nivel', '1');?>>Administrador</option>
                <option value="2" <?php print set_select('nivel', '2');?>>Coordenador</option>
                <option value="3" <?php print set_select('nivel', '3');?>>Usuário Simples</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            Status:
            <select class="form-control" name="ativo">
                <option value="1" <?php print set_select('ativo', '1');?>>Ativo</option>
                <option value="0" <?php print set_select('ativo', '0');?>>Bloqueado</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <button type="submit">Salvar</button>
        </div>
    </div>
<?php print form_close();?>
