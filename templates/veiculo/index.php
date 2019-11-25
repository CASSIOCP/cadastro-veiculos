<head>
    <link rel="stylesheet" type="text/css" href=<?php echo WEBROOT . "styles/style.css" ?>>
</head>

<body>
    <h1>Veículos</h1>
    <div class="row col-md-12 centered">
        <table class="table table-striped custab">
            <thead>
                <a href="veiculo/create" class="btn btn-primary btn-xs pull-right">Incluir</a>
                <tr>
                    <th class="text-center">Descrição</th>
                    <th class="text-center">Placa</th>
                    <th class="text-center">Marca</th>
                    <th class="text-center"></th>
                </tr>
            </thead>
            <?php foreach ($veiculos as $veiculo) : ?>
                <tr>
                    <td><?php echo $veiculo["descricao"] ?></td>
                    <td><?php echo $veiculo["placa"] ?></td>
                    <td><?php echo $veiculo["marca"] ?></td>
                    <td class='text-center'>
                        <input type="button" value="Editar" onclick="window.location.href = 'veiculo/edit/<?php echo $veiculo['id'] ?>'">
                        <input type="button" value="Excluir" onclick="window.location.href = 'veiculo/delete/<?php echo $veiculo['id'] ?>'">
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>