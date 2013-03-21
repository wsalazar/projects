<?php
ini_set('max_execution_time', 300);

//define(DIRECTORIES_PATH, __DIR__);

//set_include_path(implode(PATH_SEPARATOR, array(DIRECTORIES_PATH,get_include_path()));

function directories($path)
{
  $emailRegex = '/[A-Za-z0-9_.-]+@[A-Za-z0-9_-]+\.([A-Za-z0-9_.-][A-Za-z0-9_]+)/';
  $htmlEmailRegex = '`\<a([^>]+)href\=\"mailto\:`ism';
   $files = array();
   $dir = opendir($path);
   $matches = array();
while
   (($file = readdir($dir))!==false){
      if($file[0] == '.' || $file[0] == '..') continue;
      $fullPath = $path . '/' . $file;
#      echo $fullPath . '<br />';
      //strstr($fullPath,'.txt') ||
      if (strstr($fullPath,'.php')){
        echo $fullPath. '<br />';
        $string = file_get_contents($fullPath);

        //$handle = fopen($fullPath,'r');
        //while(!feof($handle)){
        //  $line = fgets($handle);
//          var_dump(preg_match_all($emailRegex, $string, $matchEmail));
         // var_dump(preg_match_all($htmlEmailRegex, $string, $matchHTMLEmail));
          var_dump(preg_match_all($emailRegex, $string, $matchEmail));
          if(preg_match_all($emailRegex, $string, $matches) ){//&& preg_match_all($htmlEmailRegex, $string, $matchHTMLEmail)){
              foreach($matches[0] as $match){
                var_dump($matches[0]);
                //echo $string . '<br />' . '<br />';
                //var_dump(preg_replace($emailRegex, '', $matchEmail[0]));
                //var_dump(preg_replace($htmlEmailRegex, ' ', $string));
                $string = str_replace($match,' ',$string);

                //var_dump($matchEmail[0]);

              }
              //var_dump(strstr($fullPath,'/'));
              //$relativePath = strstr($fullPath,'/');
              //echo $relativePath;

              $bytes = file_put_contents($fullPath, $string);
              echo $bytes;
          }

        }


#         $fullDirPath = str_replace('/', '\\',$fullPath);
#         echo $fullDirPath . '<br />';
         //$filePath = str_replace('\\','/',$fullPath);
        // $webUrl = str_replace('/var/www/html/projects/TestLegacy','http://projects.lcl/TestLegacy',$fullPath);
        // echo $webUrl . '<br />';
         //$headers = get_headers($webUrl);
       // echo $headers[0] . '<br />';

     if(is_dir($fullPath))
        $files = array_merge($files, (array)directories($fullPath));
     $files[] = $fullPath;
   }
   closedir($dir);
}

$path = __DIR__;
$files = directories($path);

/*
alternative regex:
/[a-z0-9_\-\+]+@[a-z0-9\-]+\.([a-z]{2,3})(?:\.[a-z]{2})?/i = > http://stackoverflow.com/questions/3901070/in-php-how-do-i-extract-multiple-e-mail-addresses-from-a-block-of-text-and-put
'/[A-Za-z0-9_-]+@[A-Za-z0-9_-]+\.([A-Za-z0-9_-][A-Za-z0-9_]+)/' = > http://stackoverflow.com/questions/3901070/in-php-how-do-i-extract-multiple-e-mail-addresses-from-a-block-of-text-and-put
$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
if(preg_match($regex, $email))
*/