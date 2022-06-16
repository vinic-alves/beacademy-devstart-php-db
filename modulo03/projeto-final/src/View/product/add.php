<h1>Novo Produto</h1>

<form action="" method="post">
    <label for="category">Categoria</label>
    <select name="category" id="category" class="form-select mb-3">
        <option selected>--Selecione--</option>
        <?php
            while ($category = $data->fetch(\PDO::FETCH_ASSOC)){
                extract($category);

                echo "<option value='{$id}'>{$name}</option>";
            }
        ?>
    </select>  


    <label for="name">Nome</label>
    <input id="name" name="name" type="text" class="form-control mb-3">

    <label for="description">Descrição</label>
    <textarea id="description" name="description" class="form-control mb-3"></textarea>

    <label for="value">Preço</label>
    <input id="value" name="value" type="text" class="form-control mb-3">

    <label for="quantity">Quantidade</label>
    <input id="quantity" name="quantity" type="text" class="form-control mb-3">

    <label for="photo">Foto</label>
    <input id="photo" name="photo" type="text" class="form-control mb-3">
  

    <button class="btn btn-primary mb-3">Enviar</button>

    
</form>