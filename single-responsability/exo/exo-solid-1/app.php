<?php

require_once 'Uploader.php';
require_once 'FileImage.php';
require_once 'FileImageCollection.php';
require_once 'ExtensionsFileValidator.php';

function it($m,$p){
    echo"\033[3",$p?'2m✔︎':'1m✘'.register_shutdown_function(function(){die(1);}),"$m\033[0m\n";
}

$file = $_FILE['fichier.png'] = [
    'tmp_name' => './fichier.png',
    'name' => 'fichier.png',
    'type' => 'png',
];



$fileCollection = new FileImageCollection();

$fileCollection::add('fichier.png', new FileImage([
    'tmp_name' => './fichier.png',
    'name' => 'fichier.png',
    'type' => 'png',
]));

$fileCollection::add('mauvais_fichier.xls', new FileImage([
    'tmp_name' => 'mauvais_fichier.xls',
    'name' => 'mauvais_fichier.xls',
    'type' => 'xls',
]));

$filePng = $fileCollection::get('fichier.png');
$fileXls = $fileCollection::get('mauvais_fichier.xls');

$uploader = new Uploader();
// CAS 1 : un bon fichier
it('Upload Fichier png', $uploader->uploadFile($filePng) == true);

// CAS 2 : un mauvais fichier
it('Upload Fichier excel', $uploader->uploadFile($fileXls) == true);
var_dump($uploader->getError());
