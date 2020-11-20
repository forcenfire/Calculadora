<?php

function uno()
{
    $num =$_SESSION['pantalla'];
    $num=$num*10;
    $num=$num+1;
    $_SESSION['pantalla'] = $num;
    $_SESSION['mostrar'] = 1;
}
function dos()
{
    $num = $_SESSION['pantalla'];
    $num = $num * 10;
    $num = $num + 2;
    $_SESSION['pantalla'] = $num;
    $_SESSION['mostrar'] = 1;
}
function tres()
{
    $num = $_SESSION['pantalla'];
    $num = $num * 10;
    $num = $num + 3;
    $_SESSION['pantalla'] = $num;
    $_SESSION['mostrar'] = 1;
}
function cuatro()
{
    $num = $_SESSION['pantalla'];
    $num = $num * 10;
    $num = $num + 4;
    $_SESSION['pantalla'] = $num;
    $_SESSION['mostrar'] = 1;
}
function cinco()
{
    $num = $_SESSION['pantalla'];
    $num = $num * 10;
    $num = $num + 5;
    $_SESSION['pantalla'] = $num;
    $_SESSION['mostrar'] = 1;
}
function seis()
{
    $num = $_SESSION['pantalla'];
    $num = $num * 10;
    $num = $num + 6;
    $_SESSION['pantalla'] = $num;
    $_SESSION['mostrar'] = 1;
}
function siete()
{
    $num = $_SESSION['pantalla'];
    $num = $num * 10;
    $num = $num + 7;
    $_SESSION['pantalla'] = $num;
    $_SESSION['mostrar'] = 1;
}
function ocho()
{
    $num = $_SESSION['pantalla'];
    $num = $num * 10;
    $num = $num + 8;
    $_SESSION['pantalla'] = $num;
    $_SESSION['mostrar'] = 1;
}
function nueve()
{
    $num = $_SESSION['pantalla'];
    $num = $num * 10;
    $num = $num +9;
    $_SESSION['pantalla'] = $num;
    $_SESSION['mostrar'] = 1;
}
function cero()
{
    $num = $_SESSION['pantalla'];
    $num = $num * 10;
    $num = $num + 0;
    $_SESSION['pantalla'] = $num;
    $_SESSION['mostrar'] = 1;
}

function del(){
    session_destroy();
}

function suma(){
    if (isset($_SESSION['resultado'])) {
        $pantalla=$_SESSION['pantalla'];
        $resultado=$_SESSION['resultado'];
        $resultado=$resultado+$pantalla;
        $_SESSION['resultado'] = $resultado;
        $_SESSION['pantalla'] = 0;
    }else {
        $pantalla=$_SESSION['pantalla'];
        $_SESSION['resultado']=$pantalla;
        $_SESSION['pantalla'] = 0;
    }
    $_SESSION['opera']=0;
}

function resta(){
    if (isset($_SESSION['resultado'])) {
        $pantalla = $_SESSION['pantalla'];
        $resultado = $_SESSION['resultado'];
        $resultado = $resultado - $pantalla;
        $_SESSION['resultado'] = $resultado;
        $_SESSION['pantalla'] = 0;
    } else {
        $pantalla = $_SESSION['pantalla'];
        $_SESSION['resultado'] = $pantalla;
        $_SESSION['pantalla'] = 0;
    }
    $_SESSION['opera'] = 1;
}

function multi(){
    if (isset($_SESSION['resultado'])) {
        $pantalla = $_SESSION['pantalla'];
        $resultado = $_SESSION['resultado'];
        $resultado = $resultado * $pantalla;
        $_SESSION['resultado'] = $resultado;
        $_SESSION['pantalla'] = 0;
    } else {
        $pantalla = $_SESSION['pantalla'];
        $_SESSION['resultado'] = $pantalla;
        $_SESSION['pantalla'] = 0;
    }
    $_SESSION['opera'] = 2;
}

function igual(){
    if (isset($_SESSION['resultado'])) {
        $_SESSION['mostrar']=0;
        $opera=$_SESSION['opera'];

        switch ($opera) {
            case '0':
                suma();
                break;
            case '1':
                resta();
                break;
            case '2':
                multi();
                break;
        }

    }else {
        $_SESSION['mostrar']=1;
    }
}

function ac(){
    $_SESSION['pantalla'] = 0;
}


header('Location:../');
