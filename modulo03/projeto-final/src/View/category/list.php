<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
     crossorigin="anonymous">
     <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
<h1>Listagem Categorias</h1>

<table class="table table-hover table-striped">
    <thead class= "table-dark">
        <tr>
            <th>#ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while ($category = $data->fetch(\PDO::FETCH_ASSOC)) {
                extract($category);

                echo '<tr>';
                    echo "<td>{$id}</td>";

                    echo "<td>{$name}</td>";

                    echo "<td>{$description}</td>";
                    echo "<td>
                    <a href='/categorias/editar?id={$id}' class= 'btn btn-warning btn-sm'>Editar</a>
                    <a href='/categorias/excluir?id={$id}' class= 'btn btn-danger btn-sm'>Excluir</a>
                    </td>";
                echo '</tr>';
            }

        ?>
    </tbody>
</table>
    
</body>
</html>
