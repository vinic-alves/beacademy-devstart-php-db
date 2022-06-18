<?php

declare(strict_types=1);

namespace App\Controller;

use App\Connection\Connection;
use Dompdf\Dompdf;


class ProductController extends AbstractController
{
    public function listAction(): void
    {
        $con = Connection::getConnection();

        $result = $con->prepare('SELECT * FROM tb_product');
        $result->execute();


        
        parent::render('product/list', $result);

    }
    public function addAction(): void
    {
        $con = Connection::getConnection();

        if ($_POST){
            $name = $_POST['name'];
            $category_id = $_POST['category'];
            $description = $_POST['description'];
            $value = $_POST['value'];
            $quantity = $_POST['quantity'];
            $photo = $_POST['photo'];
            $createdAt = date('Y-m-d H:i:s');

            $query = "INSERT INTO tb_product 
            (name, description, value, photo, quantity, category_id, created_at) 
            VALUES ('{$name}', '{$description}', '{$value}', '{$photo}', '{$quantity}', '{$category_id}', '{$createdAt}')";

            $result = $con->prepare($query);
            $result->execute();

            echo 'Pronto, produto cadastrado!';
        };

        
        
        $result = $con->prepare('SELECT * FROM tb_category');
        $result->execute();

        parent::render('product/add', $result);
        
    }
    public function editAction(): void
    {
        $id = $_GET['id'];

        $con = Connection::getConnection();

        $categories = $con->prepare('SELECT * FROM tb_category');
        $categories->execute();

        if ($_POST){

            $name = $_POST['name'];
            $description = $_POST['description'];
            $value = $_POST['value'];
            $quantity = $_POST['quantity'];
            $photo = $_POST['photo'];

            $query = "
                    UPDATE tb_product SET
                        name = '{$name}',
                        description = '{$description}',
                        value = '{$value}',
                        quantity = '{$quantity}',
                        photo = '{$photo}'
                    WHERE id='{$id}'
                    ";
            $resultUpdate = $con->prepare($query);
            $resultUpdate->execute();

            echo 'Pronto, produto atualizado';

        }

        $product = $con->prepare("SELECT * FROM tb_product WHERE id='{$id}'");
        $product->execute();

        parent::render('product/edit', [
            'product' => $product->fetch(\PDO::FETCH_ASSOC),
        ]);
        
    }

    public function removeAction(): void
    {
        $id = $_GET['id'];

        $con = Connection::getConnection();

        $result = $con->prepare("DELETE FROM tb_product WHERE id='{$id}'");
        $result->execute();

        parent::renderMessage('Pronto, produto excluido');


    }

    public function reportAction(): void
    {
        $con = Connection::getConnection();

        $result = $con->prepare( 'SELECT prod.id, prod.name, prod.quantity, cat.name as category FROM tb_product prod INNER JOIN tb_category cat ON prod.category_id = cat.id');
        $result->execute();

        $content = '';

        while ($product = $result->fetch(\PDO::FETCH_ASSOC)){

            extract($product);

            $content .="
                <tr>
                    <td>{$id}</td>
                    <td>{$name}</td>
                    <td>{$quantity}</td>
                    <td>{$category}</td>
                </tr>
            ";
        }

      

        $html = "
            <h1>Relatório de Produtos</h1>
            <table border='1' width= '100%'>
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Produto</th>
                        <th>Saldo disponível</th>
                        <th>Categoria</th>
                    </tr>
                </thead>
                <tbody>
                    {$content}
                </tbody>
            </table>
            
            
        ";

        $pdf = new Dompdf();
        $pdf->loadHtml($html);

        $pdf->render();
        $pdf->stream();
    }
}