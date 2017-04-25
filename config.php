<?php
//Simple MVC Configuration File
//Inicialização da variável $config
unset($config);
$config = new stdClass();
$config->defaultClass = "Home";
$config->base_url = '/';
$config->url = 'http://batclub.esy.es'.$config->base_url;
$config->asset = $config->base_url.'view/templates/';
$config->template = 'default';

//FTP: senha nome
//Database
$config->dbuser = 'u137567811_bat'; //nomedoaluno
$config->dbpassword = 'micka13022001el'; //senha
$config->dbname ='u137567811_bat';//nomedoaluno












