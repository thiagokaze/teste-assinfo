<div class="row">
    <?php print validation_errors('<div class="alert alert-danger">', '</div>');?>
    <?php if ($this->session->flashdata('msg')) : ?>
    <div class="alert alert-<?php print $this->session->flashdata('alerta') ?>">
        <?php print $this->session->flashdata('msg') ?>
    </div>
    <?php endif; ?>
</div>
<div class="row">
<div class="col-md-8"><h1>Usuários</h1></div>
<div class="col-md-4"><a href="<?php print base_url(); ?>index.php/usuario/new/">Novo Usuário</a></div>
</div>
<table class="simple-table" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Login</th>
            <th>Nível</th>
            <th>Ativo</th>
            <th>Data de Cadastro</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($usuario as $usuarios):?>
        <tr>
            <td><?php print $usuarios->nome;?></td>
            <td><?php print $usuarios->usuario;?></td>
            <td>
                <?php switch($usuarios->nivel){
                    case '1': print 'Administrador';
                        break;
                    case '2': print 'Coordenador';
                        break;
                     case '3': print 'Usuário Simples';
                        break;
                }  ?>
            </td>
            <td><?php print ($usuarios->ativo == '1' ? 'Ativo' : 'Inativo');?></td>
            <td><?php print date("d/m/Y - H:i", strtotime($usuarios->cadastro));?></td>
            <td><a href="<?php print base_url(); ?>index.php/usuario/edit/<?php print $usuarios->id;?>">Editar</a></td>
            <td><a href="<?php print base_url(); ?>index.php/usuario/delete/<?php print $usuarios->id;?>">Excluir</a></td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
