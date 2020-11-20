<?php
session_start();

include('funciones.php');

if (isset($_GET['1'])) {
    uno();
} elseif (isset($_GET['2'])) {
    dos();
} elseif (isset($_GET['3'])) {
    tres();
} elseif (isset($_GET['4'])) {
    cuatro();
} elseif (isset($_GET['5'])) {
    cinco();
} elseif (isset($_GET['6'])) {
    seis();
} elseif (isset($_GET['7'])) {
    siete();
} elseif (isset($_GET['8'])) {
    ocho();
} elseif (isset($_GET['9'])) {
    nueve();
} elseif (isset($_GET['0'])) {
    cero();
}elseif (isset($_GET['DEL'])){
    del();
} elseif (isset($_GET['suma'])) {
    suma();
} elseif (isset($_GET['igual'])) {
    igual();
} elseif (isset($_GET['rest'])) {
    resta();
} elseif (isset($_GET['multi'])) {
    multi();
} elseif (isset($_GET['ac'])) {
    ac();
}