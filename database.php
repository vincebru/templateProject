<?php
$bdd=new PDO('mysql:host=localhost;dbname=dbname;charset=utf8','root','');


function getDb(){
	return $bdd;
}