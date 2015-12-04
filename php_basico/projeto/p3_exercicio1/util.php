<?php
function procura_administrador($array, $user, $password){
    $achou = false;
    foreach($array as $admin){
        if($admin["usuario"] == $user && $admin["senha"] == $password){
            break;
        }
    }

    return $achou;
}
