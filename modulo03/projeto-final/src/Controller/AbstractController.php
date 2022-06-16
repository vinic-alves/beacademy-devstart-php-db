<?php

declare(strict_types=1);

namespace App\Controller;

abstract class AbstractController
{
    public function render(string $viewName, $data =null): void
    {
        include dirname(__DIR__).'/View/_partials/head.php';
        include dirname(__DIR__)."/View/{$viewName}.php";
        include dirname(__DIR__).'/View/_partials/footer.php';
        
    }
    public function renderMessage(string $message): void
    {
        include dirname(__DIR__).'/View/_partials/head.php';
        include dirname(__DIR__).'/View/_partials/message.php';
        include dirname(__DIR__).'/View/_partials/footer.php';
        
    }

    
}
