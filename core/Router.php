<?php

namespace app\core;

class Router{
    public Request $request;
    public function __construct(Request $request) {
        $this->request = $request;
        
    }
    protected array $routes = [];
    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }
    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();

        $callback = $this->routes[$method][$path] ?? false;
         if ($callback==false){
            return "Not Found";

        }
        if(is_string($callback)){
            return $this->renderView($callback);
        }
        return call_user_func($callback);
    }
    public function renderView($view)
    {
        $layoutContent = $this->layoutContent();
        $viewContent = $this->renderOnlyView($view);
        return $viewContent;
        
    }
    protected function layoutContent()
    {
        ob_start();
        include_once Application::$rootDir . "/views/layout/main.php";
        return ob_clean();
    }
    protected function renderOnlyView($view)
    {
        ob_start();
        include_once Application::$rootDir . "/views/$view.php";
        return ob_clean();
    }
    
}
?>