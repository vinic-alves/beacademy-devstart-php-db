<?php
declare(strict_types=1);
namespace App\Controller;
ini_set('display_errors',1);

use App\Connection\Connection;


class CategoryController extends AbstractController
{
    public function listAction(): void
    {
        $con = Connection::getConnection();
        $result = $con->prepare('SELECT * FROM tb_category');
        $result->execute();
        
        //include dirname(__DIR__).'/View/category/list.php';
        parent::render('category/list', $result);
    }
    public function addAction(): void
    {
        if($_POST){
            $name = $_POST['name'];
            $description = $_POST['description'];

            $query = "INSERT INTO tb_category(name,description)VALUEs ('{$name}', '{$description}')";

            $con = Connection::getConnection();

            $result=$con->prepare($query);
            $result->execute();
        }
        parent::render('category/add');
    }
    public function removeAction(): void
    {
        $con = Connection::getConnection();
        $id = $_GET['id'];
        $query = "DELETE FROM tb_category WHERE id='{$id}'";
        $result = $con->prepare($query);
        $result->execute();

        echo 'Pronto, Categoria excluida';
    }
    public function updateAction(): void
    {
        $id= $_GET['id'];

        $con = Connection::getConnection();

        if($_POST){
            $newName = $_POST['name'];
            $newDescription = $_POST['description'];

            $queryUpdate = "UPDATE tb_category SET name='{$newName}', description= '{$newDescription}' WHERE id='{$id}'";

            $result = $con->prepare($queryUpdate);
            $result->execute();

            echo 'Categoria atualizada';
        }

        $query= "SELECT * FROM tb_category WHERE id='{$id}'";

        $result = $con->prepare($query);
        $result->execute();

        $data = $result->fetch(\PDO::FETCH_ASSOC);

        parent::render('category/edit',$data);
    }

}