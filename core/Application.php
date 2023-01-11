<?php

namespace app\core;
class Application{

    public Router $router;
    public Request $request;
    public Response $response;
    public static Application $app; 
    public static string $rootDir;
    public function __construct($rootPath) {
        self::$rootDir = $rootPath;
        self::$app = $this;
        $this ->request = new Request();
        $this -> response = new Response();
        $this ->router = new Router($this->request, $this->response);
    }
    public function test()
    {
        echo __METHOD__, PHP_EOL;
    }
    public function run()
    {
        echo $this->router->resolve();
    }
}
?>