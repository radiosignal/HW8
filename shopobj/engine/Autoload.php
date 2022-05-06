<?php

namespace app\engine;

class Autoload{



    public function loadClass($className){
//        var_dump($className);
        $filename = str_replace('\\',DS, $className);
//        var_dump($className);
        $filename = str_replace('app\\',ROOT.DS, $filename). ".php";

//         var_dump($filename);

            if(file_exists($filename)){
                include $filename;

            }
        }



};
