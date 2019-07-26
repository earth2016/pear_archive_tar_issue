<?php

require_once 'vendor/autoload.php';

$composer = json_decode(file_get_contents('composer.lock'));
echo 'pear/archive_tar version ' . $composer->packages[0]->version . PHP_EOL;

$filename = 'file.json';
$tar = new Archive_Tar('whole.tar.gz');
$tar->extractList([$filename]);

if ($tar->error_object !== null) {
  // We found the issue :(
  echo 'Message from error_object: ' . $tar->error_object->message, PHP_EOL;
  exit(0);
}

if (file_exists($filename)) {
  // We didn't find the issue :)
  echo 'Hurray!!, the file was extracted', PHP_EOL;
  echo file_get_contents($filename);
  unlink($filename);
}