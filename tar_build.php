<?php


chdir('./build/');
$output = `tar czf ../whole.tar.gz *`;

echo "Output: $output\n";

