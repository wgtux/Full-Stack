<?php
//função de autoload nativa
spl_autoload_register(function($class){
    
    //recebendo o caminho de classes
    $baseDir = __DIR__.'/classes/';

    //subsitituindo as \ por /
    $file = $baseDir.str_replace('\\', '/', $class).'.php';

    //verifica se o arquivo existe
    if(file_exists($file)){
        require $file;
    }
});