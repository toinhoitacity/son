<?php
function procura_administrador($array, $user, $password){
    $achou = false;
    foreach($array as $admin){
        if($admin["usuario"] == $user && $admin["senha"] == $password){
            return true;
            break;
        }
    }

    return $achou;
}
