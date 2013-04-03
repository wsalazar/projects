<?php
ini_set('max_execution_time', 5000);
require 'config.php';
function directories($path, $handle = null)
{
   $files = array();
   $dir = opendir($path);
   while(($file = readdir($dir))!==false){
      if($file[0] == '.' || $file[0] == '..') continue;
      if(strtoupper(substr(php_uname(),0,3)) === 'WIN'){
         $fullPath = $path . DIRECTORY_SEPARATOR . $file;
         $url = str_replace(DIRECTORY_SEPARATOR,'/',$fullPath);
         $webUrl = str_replace(PATH,'www.isda.org/',$url);
      }
      else if(strtoupper(substr(php_uname(),0,3)) === 'LIN'){
         $fullPath = $path . '/' . $file;
         $webUrl = str_replace('/var/www/html/isda/','www.isda.org',$fullPath);
      }

      if(strstr($fullPath,'.htm') || strstr($fullPath,'.asp')){
         echo "Full Path: $fullPath <br />";
         echo "Web URL: $webUrl <br />";
         $headers = get_headers('http://'.$webUrl);
         echo "Headers: $headers[0] <br />";
         $legacyServerPath =str_replace('C:\\xampp\\htdocs\\Projects', '\\', $fullPath);
         $fields = array($legacyServerPath, $webUrl, $headers[0]);
         fputcsv($handle, $fields);
      }

      if(is_dir($fullPath))
        $files = array_merge($files, (array)directories($fullPath, $handle));

      $files[] = $fullPath;
   }
}

$legacyFiles = 'LegacyFiles.csv';

$handle = fopen($legacyFiles,'w') or die('Can\'t open file');
$heading = array('Location','URL','Status','Comments');
fputcsv($handle,$heading);
$path = __DIR__;
directories($path, $handle);
//fclose($handle);


///^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/