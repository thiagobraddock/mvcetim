<?php

namespace MVCETIM\Core;
class Core
{
    public function __construct()
    {
        $flag = false;
        //Pegar o valor passado pela URL (path)
        if(isset($_GET['path']))
        {
            $token = explode('/', rtrim($_GET['path'], '/'));
            $controllerName = ucfirst(array_shift($token));
            //Verifica se o controlador existe na pasta Controller
            if(file_exists('app/Controllers/' . $controllerName . 'Controller.php'))
            {
                $controllerName = '\\MVCETIM\\Controllers\\' . $controllerName;
                $controller = new $controllerName();

                // Verifica se existe um método sendo chamado
                if(!empty($token)){
                    $methodName = array_shift($token);
                    if(method_exists($controller, $methodName))
                    {
                         $controller->$methodName(@$token);
                    }
                    else
                    {
                        $flag = true;
                        // echo 'Metodo nao existe - Erro 404';
                    }
                }
                else
                {
                    // valor default de metodo, caso nao seja passado nenhum outro
                    $controller->index();
                }

            }
            else
            {
                $flag = true;
                // echo 'Eu nao existo - Erro 404';
            }
        }
        else
        {
            // Caso nao tenha sido passado nenhum Controller
            //Chamamos o Controller Generico
            $controllerName = '\\MVCETIM\\Controllers\\Home';
            $controller = new $controllerName();
            $controller->index();
        }

        if($flag)
        {
            $controllerName = '\\MVCETIM\\Controllers\\Page404';
            $controller = new $controllerName();
            $controller->index();
        }
    }
}