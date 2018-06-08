<?php if($models) : ?>

<div class="box">

    <div class="box-header with-border">
        <h3 class="box-title">Dispositivos</h3>

        <a href="/dispositivo/create" class="btn-sm btn-success pull-right" data-toggle="modal" data-target="#modal-default"><i class="fa fa-fw fa-file-o"></i> Incluir dispositivo</a>
    </div>    

    <div class="box-body">

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Hostname</th>
                <th>Ip</th>
                <th>Fabricante</th>
                <th>Tipo</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($models as $model) : ?>
            <tr>
                <td><?= $model['nome'] ?></td>
                <td><?= $model['hostname'] ?></td>
                <td><?= $model['ip'] ?></td>
                <td><?= $model['fabricante']?></td>
                <td><?= $model['tipo']?></td>
                <td>
                    
                    <a href="/dispositivo/update?id=<?= $model['id'] ?>" class="btn-sm btn-info" data-toggle="modal" data-target="#modal-default"><i class="fa fa-fw fa-edit"></i></a>
                    <a href="/dispositivo/delete?id=<?= $model['id'] ?>" class="btn-sm btn-danger"><i class="fa fa-fw fa-trash-o"></i></a>
                    
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
<?php else : ?>
    <p>Nenhum dispositivo encontrado.</p>
<?php endif ?>
    </div>
</div>