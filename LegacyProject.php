<?php
ini_set('max_execution_time', 5000);
function directories($path = array())
{
   $fileName = 'LegacyProject.csv';
   $handle = fopen($fileName,'w') or die('Can\'t open file');
   $files = array();
   $dir = opendir($path);
   $header = array('Location','URL','Status','Comments');
   fputcsv($handle,$columns);
   while(($file = readdir($dir))!==false){
      if($file[0] == '.' || $file[0] == '..') continue;
      if(strtoupper(substr(php_uname(),0,3)) === 'WIN'){
         $fullPath = $path . '\\' . $file;
         $url = str_replace('C:\\xampp\\htdocs\\Projects\\172.17.1.36\\d$\\inetpub\\wwwroot\\isda\\','C:/xampp/htdocs/Projects/172.17.1.36/d$/inetpub/wwwroot/isda/',$fullPath);
         $webUrl = str_replace('C:/xampp/htdocs/Projects/172.17.1.36/d$/inetpub/wwwroot/isda/','www.isda.org/',$url);
      }
      else if(strtoupper(substr(php_uname(),0,3)) === 'LIN'){
         $fullPath = $path . '/' . $file;
         $webUrl = str_replace('/var/www/html/isda/','www.isda.org',$fullPath);
      }

      //echo $fullPath.'<br />';
      if(strstr($fullPath,'.aspx')){
      //if(strstr($fullPath,'.html') || strstr($fullPath,'.htm') || strstr($fullPath,'.asp') || strstr($fullPath,'.aspx')){
         //echo $fullDirPath.'<br />';
         echo $webUrl.'<br />';
         $headers = get_headers('http://'.$webUrl);
         //foreach($urls as $url)
         //   echo '123'.$url.' ';
         echo $headers[0].'<br />';
         //$list = array('location' => $separatorPath,
         //              'webUrl'  => $webUrl,
         //               'status'  => 'Working');
         $list = array($separatorPath,$webUrl, $headers[0]);
                                                               /*'request' => array(
                                                               'OK'              =>     'Working',
                                                               'serverError'     =>     'Not Working',
                                                               'badRequest'      =>     'Bad Request',
                                                               'moved'           =>     'Moved Permanently'
                                                        )
                     )*/
         //);
         //if($headers[0] == 'HTTP/1.1 200 OK'){
            foreach($list as $fields){
               fputcsv($handle,(array)$fields);
            }
         //else if($headers[0] == 'HTTP/1.1 500 Internal Server Error'){
           // foreach($list as $fields){
            //   fputcsv($handle,(array)$fields);
            //}
         //}
         //else if($headers[0] == 'HTTP/1.1 400 Bad Request'{
            //foreach($list as $fields){
              // fputcsv($handle,(array)$fields);
            //}
         //}
      }
      if(is_dir($fullPath))
        $files = array_merge($files, (array)directories($fullPath));

      $files[] = $fullPath;

   }
}
$path = __DIR__;
$files = directories($path);