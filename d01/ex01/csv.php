<?php

$file_name = 'ex01.txt';

$separator = ',';


if (file_exists($file_name))
{
  $content = file_get_contents($file_name);

  $data = explode($separator, $content);
  
  foreach ($data as $key => $value)
  {
    echo "$value\n";
  }

  exit;
}