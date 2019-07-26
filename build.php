<?php

function createFile($filename, $size, $blocks) {
  $fp = fopen($filename, 'w+b');
  $str = $blocks[rand(0, 3)] . $blocks[rand(0, 3)] . $blocks[rand(0, 3)] . $blocks[rand(0, 3)];
  $data = str_repeat($str, $size / strlen($str));
  fwrite($fp, $data, $size);
  fclose($fp);
}

$blocks = [
    'abcd',
    'efgh',
    'ijkl',
    'mnop'
];

if (!file_exists('build')) {
  mkdir('build');
}
chdir('./build/');

$subFolderCounter = 20;
while ($subFolderCounter-- > 0) {
  mkdir($subfolder=uniqid());
  chdir($subfolder);

  $numFiles = 20000;
  while($numFiles-- > 0) {
    createFile('file-' . uniqid(), 1024, $blocks);
  }
  chdir('../');
}

$subFolderCounter = 36;
while ($subFolderCounter-- > 0) {
  mkdir($subfolder=uniqid());
  chdir($subfolder);

  $numSizeTotal = 40 * 1024 * 1024;
  while($numSizeTotal > 0) {
    createFile('file-big-' . uniqid(), $size = rand(15, 20) * 1024 *1024, $blocks);
    $numSizeTotal -= $size;
  }
  chdir('../');
}

// Create a json file
file_put_contents('file.json', json_encode(['thisAObject' => 0]));

chdir('../');

echo 'Done!', PHP_EOL;