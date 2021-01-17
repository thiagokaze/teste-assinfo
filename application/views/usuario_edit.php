<div class="row">
    <?php print validation_errors('<div class="alert alert-danger">', '</div>');?>
    <?php if ($this->session->flashdata('msg')) : ?>
    <div class="alert alert-<?php print $this->session->flashdata('alerta') ?>">
        <?php print $this->session->flashdata('msg') ?>
    </div>
    <?php endif; ?>
</div>
<?php print form_open('usuario/update/'.$id);?>
        
            <div class="row">
                <div class="col-md-8"><h1>Edição de Usuário - <?php print $usuarios[0]->nome;?></h1></div>
                <div class="col-md-4"><a href="<?php print base_url(); ?>index.php/usuario">Voltar</a></div>
            </div>   
            <div class="row">
                <div class="col-xl-12">
                    <input class="form-control" type="text" value="<?php print $usuarios[0]->nome;?>" placeholder="Nome do Usuário" name="nome">
                    <?php echo form_error('nome'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <input class="form-control" type="text" value="<?php print $usuarios[0]->usuario;?>" placeholder="Usuário" name="usuario">
                    <?php echo form_error('usuario'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <input class="form-control" type="password" value="" placeholder="Senha do Usuário" name="senha">
                    <?php echo form_error('senha'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <input class="form-control" type="text" value="<?php print $usuarios[0]->email;?>" placeholder="E-mail" name="email">
                    <?php echo form_error('email'); ?>
                </div>
            </div>
            <div class="row ">
                <div class="col-xl-12">
                  Nível:
                    <select class="form-control" name="nivel">
                        <option value="1" <?php print ($usuarios[0]->nivel == '1'?'selected':'');?>>Administrador</option>
                        <option value="2" <?php print ($usuarios[0]->nivel == '2'?'selected':'');?>>Coordenador</option>
                        <option value="3" <?php print ($usuarios[0]->nivel == '3'?'selected':'');?>>Usuário Simples</option>
                    </select>
                    <?php echo form_error('nivel'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    Status:
                    <select class="form-control" name="ativo">
                        <option value="1" <?php print ($usuarios[0]->ativo == '1'?'selected':'');?>>Ativo</option>
                        <option value="0" <?php print ($usuarios[0]->ativo == '0'?'selected':'');?>>Bloqueado</option>
                    </select>
                    <?php echo form_error('ativo'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3">
                    <button type="submit">Salvar</button>
                </div>
            </div>

    
    <?php print form_close();?>
