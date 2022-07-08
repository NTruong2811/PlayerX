<?php
require_once "./app/models/BaseModel.php";

function loadView($view_path){
     require_once "./app/views/".$view_path."View.php";
}

function loadModel($model_path){
     require_once "./app/models/".$model_path."Model.php";
}

function load_homeview($view_path,$data){
     require_once "./app/views/".$view_path."View.php";
}

?>