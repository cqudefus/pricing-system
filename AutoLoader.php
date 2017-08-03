<?php


$paths = array(

    "library"=>[
        'Controllers/Components/ComponentFiles/DompPdf/'
    ],

    "route"=>[
        "berkaPhp/config/Router/"
    ],

    "database"=> [
        "berkaPhp/database/"
    ],

    "controllers"=> [
        "berkaPhp/Controllers/",
        "Controllers/Default/"
    ],

    "components"=> [
        "berkaPhp/Controllers/Components/",
        "Controllers/Components/ComponentFiles/Email/",
        "Controllers/Components/"
    ],

    "model"=> [
        "berkaPhp/models/",
        "Models/"
    ],

    "views"=> [
        "berkaPhp/template/"
    ],

    "helpers"=> [
        "berkaPhp/Helpers/",
        "Cqudefus/Helpers/"
    ]
);

$except = [
    'dompdf'
]

?>






























































<?php

foreach($paths as $path) {
    foreach($path as $fileInfo => $filePath) {
        foreach (glob($filePath."*.php") as $filename)
        {
            if(file_exists($filename)) {
                require_once($filename);
            } else {

            }
        }
    }
}

?>

