<?php
ini_set('max_execution_time', 300);

//define(DIRECTORIES_PATH, __DIR__);

//set_include_path(implode(PATH_SEPARATOR, array(DIRECTORIES_PATH,get_include_path()));

function directories($path, $handle)
{
  $emailRegex = '/[A-Za-z0-9_.-]+@[A-Za-z0-9_-]+\.([A-Za-z0-9_.-][A-Za-z0-9_]+)/';
  $htmlEmailRegex = '/mailto:(.+?)\?/';
  $insertRegex = '/Insert Into/i';
  $updateRegex = '/Update\s+\w+\s+Set/i';
   $files = array();
   $dir = opendir($path);
   $matches = array();
    while(($file = readdir($dir))!==false){
      if($file[0] == '.' || $file[0] == '..') continue;
        if(strtoupper(substr(php_uname(),0,3)) === 'WIN'){
          $fullPath = $path . '\\' . $file;
        }
        else if(strtoupper(substr(php_uname(),0,3)) === 'LIN')
          $fullPath = $path . '/' . $file;

      if (strstr($fullPath,'.htm')|| strstr($fullPath,'.asp') || strstr($fullPath,'.cfm') || strstr($fullPath,'.inc')){
        //echo $fullPath. '<br />';
        $string = file_get_contents($fullPath);
          //var_dump(preg_match_all($emailRegex, $string, $matches));
          //echo '<br />';
          //if(preg_match_all($emailRegex, $string, $matches) ){//&& preg_match_all($htmlEmailRegex, $string, $matchHTMLEmail)){
              //foreach($matches[0] as $match){
                //var_dump($matches[0]);
                //echo '<br />';
                //$string = str_replace($match,' ',$string);
              //}
              //$bytes = file_put_contents($fullPath, $string);
              //echo $bytes;
          //}
          //var_dump(preg_match_all($insertRegex, $string, $matches));
          //echo '<br />';
          if($times = preg_match_all($insertRegex, $string, $matches) ){
              $insertCSV = array($fullPath,$times);
              fputcsv($handle,$insertCSV);
              echo "$fullPath <br />";
              /*
              foreach($matches[0] as $match){
                var_dump($matches[0]);
                echo '<br />';
                echo $match;
                echo '<br />';
              }
              */
          }
          //var_dump(preg_match_all($updateRegex, $string, $matches));
          if($times = preg_match_all($updateRegex, $string, $matches) ){
              $insertCSV = array($fullPath,'',$times);
              fputcsv($handle,$insertCSV);
              echo "$fullPath <br />";
              /*
              foreach($matches[0] as $match){
                var_dump($matches[0]);
                echo '<br />';
                echo $match;
                echo '<br />';
              }
              */
          }
          //if($times = preg_match_all($emailRegex, $string, $matches)){
          //  $emailCSV = array($fullPath,'','',$times);
          //}
      }

#         $fullDirPath = str_replace('/', '\\',$fullPath);
#         echo $fullDirPath . '<br />';
         //$filePath = str_replace('\\','/',$fullPath);
        // $webUrl = str_replace('/var/www/html/projects/TestLegacy','http://projects.lcl/TestLegacy',$fullPath);
        // echo $webUrl . '<br />';
         //$headers = get_headers($webUrl);
       // echo $headers[0] . '<br />';

     if(is_dir($fullPath))
        $files = array_merge($files, (array)directories($fullPath,$handle));
     $files[] = $fullPath;
    }
   closedir($dir);
}

$path = __DIR__;
$insertCSVFile = 'ProblemFiles.csv';
$handle = fopen($insertCSVFile,'w');
$columnNames = array('Location', 'Insert', 'Update');
fputcsv($handle,$columnNames);
directories($path, $handle);

/*
alternative regex:
/[a-z0-9_\-\+]+@[a-z0-9\-]+\.([a-z]{2,3})(?:\.[a-z]{2})?/i = > http://stackoverflow.com/questions/3901070/in-php-how-do-i-extract-multiple-e-mail-addresses-from-a-block-of-text-and-put
'/[A-Za-z0-9_-]+@[A-Za-z0-9_-]+\.([A-Za-z0-9_-][A-Za-z0-9_]+)/' = > http://stackoverflow.com/questions/3901070/in-php-how-do-i-extract-multiple-e-mail-addresses-from-a-block-of-text-and-put
$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
if(preg_match($regex, $email))
for mailto:   '`\<a([^>]+)href\=\"mailto\:`ism'
*/