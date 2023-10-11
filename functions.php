<?php 
$passLength = $_GET['generator'];

function genRandomPassword($length)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ+-.,-_:;`';
    $charactersLength = strlen($characters);
    $randomPass = '';
    for ($i = 0; $i < $length; $i++) {
        $randomPass .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomPass;
};
