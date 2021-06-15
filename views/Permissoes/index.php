<?php

require "../../models/Permissoes.php";

$Permissoes = new Permissoes();

$rs = $Permissoes->listar();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <?php include "../includes/head.php"; ?>
</head>

<body>
    <div class="container">
        <div class="row geral">
            <div class="col-md-3">
                <?php include "../includes/menu-lateral.php"; ?>

            </div>
            <div class="col-md-9">
                <h3>Microcontrolador</h3>
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Microcontrolador</th>
                            <th scope="col">Impressao digital</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($obj = $rs->fetch_object()) { ?>

                            <tr>
                                <th scope="row"><?php echo $obj->id; ?></th>
                                <td><?php echo $obj->id_usuario; ?></td>
                                <td><?php echo $obj->id_microcontrolador; ?></td>
                                <td><?php echo $obj->impressao_digital; ?></td>
                                <td>
                                    <a href="editar.php?id=<?php echo $obj->id; ?>" class="btn btn-warning btn-sm">Editar</a>
                                    <a href="#" onclick="excluir(<?php echo $obj->id; ?>)" class="btn btn-danger btn-sm">Apagar</a>
                                </td>
                            </tr>

                        <?php } ?>
                    </tbody>
                </table>
                <a href="adicionar.php" class="btn btn-success">Adicionar</a>
            </div>

        </div>
    </div>
    </div>
    <?php include "../includes/js.php"; ?>

    <script> 
	function excluir(id) {
		if(confirm("Deseja excluir esse usuário")) {
			window.location.href = "../../controllers/Permissoes/del.php?id=" + id; 
}
}
</script> 
    </body>

</html>