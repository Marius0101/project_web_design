<?php

namespace app\core;
class Application{

    public Router $router;
    public Request $request;
    public static string $rootDir;
    public function __construct($rootPath) {
        self::$rootDir = $rootPath;
        $this ->request = new Request();
        $this ->router = new Router($this->request);
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