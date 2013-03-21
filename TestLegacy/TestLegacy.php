<?php
ini_set('max_execution_time', 300);

function directories($path)
{
   $files = array();
   $dir = opendir($path);

   while(($file = readdir($dir))!==false){
      if($file[0] == '.' || $file[0] == '..') continue;
      $fullPath = $path . '\\' . $file;
#      echo $fullPath . '<br />';
      if(strstr($fullPath,'.asp')){
        echo $fullPath . '<br />';
#         $fullDirPath = str_replace('/', '\\',$fullPath);
#         echo $fullDirPath . '<br />';
         //$filePath = str_replace('\\','/',$fullPath);
         $webUrl = str_replace('C:\xampp\htdocs\Projects\TestLegacy\\','http://projects.lcl/TestLegacy/',$fullPath);
         echo $webUrl . '<br />';
         $headers = get_headers($webUrl);
        echo $headers[0] . '<br />';
      }
     // if(is_dir($fullPath))
     //   $files = array_merge($files, (array)directories($fullPath));
     // $files[] = $fullPath;
   }
}

$path = __DIR__;
$files = directories($path);