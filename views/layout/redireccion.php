<?php

if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['usuario'])){
    header("Location:".base_url.'O_SuperOyente/index');
}