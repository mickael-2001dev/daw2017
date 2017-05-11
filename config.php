<?php
//Simple MVC Configuration File
//Inicialização da variável $config
unset($config);
$config = new stdClass();
$config->defaultClass = "Home";
$config->base_url = '/daw2017/mickaelbraz';
$config->url = 'http://localhost/'.$config->base_url;
$config->asset = $config->base_url.'view/templates/';
$config->template = 'default';

//FTP: senha nome
//Database
$config->dbuser = 'root'; //nomedoaluno
$config->dbpassword = 'root'; //senha
$config->dbname ='mvc';//nomedoaluno












