<?php

namespace app\core;

class Router{
    public Request $request;
    protected array $routes = [];
    public Response $response;
    public function __construct(Request $request, Response $response) {
        $this->request = $request;
        $this->response = $response;
        
    }
    
    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }
    public function post($path, $callback)
    {
        $this->routes['post'][$path] = $callback;
    }
    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();

        $callback = $this->routes[$method][$path] ?? false;
         if ($callback==false){
            $this->response->SetStatusCode(404);
            return $this->renderView("404");

        }
        if(is_string($callback)){
            return $this->renderView($callback);
        }
        return call_user_func($callback);
    }
    public function renderView($view, $parm = [])
    {
        $layoutCountent = $this->layoutContent();
        $viewContent = $this->renderOnlyView($view, $parm);
        return str_replace("{{content}}", $viewContent, $layoutCountent);
        
    }
    protected function layoutContent()
    {
        ob_start();
        include_once Application::$rootDir . "/views/layout/main.php";
        return ob_get_clean();
    }
    protected function renderOnlyView($view, $parm)
    {
        foreach($parm as $key => $value){
            $$key = $value;
        }
        ob_start();
        include_once Application::$rootDir . "/views/$view.php";
        return ob_get_clean();
    }
    
}
?>