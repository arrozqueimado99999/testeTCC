<?php include 'layout-top.php' ?>

<style>
    body{
        background-image: linear-gradient( <?=_v($data,"cor")?>, white);
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>



<form method='POST' action='<?=route('veiculos/salvar/'._v($data,"id"))?>'>

<label class='col-md-6'>
    Placa
    <input type="text" class="form-control" name="placa" value="<?=_v($data,"placa")?>" >
</label>

<label class='col-md-2'>
   Modelo
    <input type="text" class="form-control" name="modelo" value="<?=_v($data,"modelo")?>" >
</label>


<label class='col-md-6'>
    Cor
    <input type="color" class="form-control" name="cor" value="<?=_v($data,"cor")?>" >
</label>

<label class='col-md-2'>
   Ano
    <input type="text" class="form-control" name="ano" value="<?=_v($data,"ano")?>" >
</label>

<button class='btn btn-primary col-12 col-md-3 mt-3'>Salvar</button>
<a class='btn btn-secondary col-12 col-md-3 mt-3' href="<?=route("veiculos")?>">Novo</a>

</form>

<table class='table'>

    <tr>
        <th>Editar</th>
        <th>Placa</th>
        <th>Modelo</th>
        <th>Cor</th>
        <th>Ano</th>
        <th>Deletar</th>
    </tr>

    <?php foreach($lista as $item): ?>

        <tr>
            <td>
                <a href='<?=route("veiculos/index/{$item['id']}")?>'>Editar</a>
            </td>
            <td><?=$item['placa']?></td>
            <td><?=$item['modelo']?></td>
            <td><?=$item['cor']?></td>
            <td><?=$item['ano']?></td>
            <td>
                <a href='<?=route("veiculos/deletar/{$item['id']}")?>'>Deletar</a>
            </td>
        </tr>

    <?php endforeach; ?>
</table>

<?php include 'layout-bottom.php' ?>