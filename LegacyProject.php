<?php
ini_set('max_execution_time', 5000);
function directories($path = array())
{
   $fileName = 'LegacyProject.csv';
   $handle = fopen($fileName,'w') or die('Can\'t open file');
   $files = array();
   $dir = opendir($path);
   $header = array(array('Location','URL','Status','Comments'));
   foreach($header as $columns)
      fputcsv($handle,(array)$columns);
   while(($file = readdir($dir))!==false){
      if($file[0] == '.') continue;
      $fullPath = $path.'/'.$file;
      //echo $fullPath.'<br />';
      if(strstr($fullPath,'.aspx')){
      //if(strstr($fullPath,'.html') || strstr($fullPath,'.htm') || strstr($fullPath,'.asp') || strstr($fullPath,'.aspx')){
         $fullDirPath = str_replace('/', '\\',$fullPath);
         //echo $fullDirPath.'<br />';
         $separatorPath = str_replace('\\','/',$fullPath);
         $webUrl = str_replace('C:/xampp/htdocs/Projects/172.17.1.36/d$/inetpub/wwwroot/isda/','www.isda.org/',$separatorPath);
         echo $webUrl.'<br />';
         $headers = get_headers('http://'.$webUrl);
         //foreach($urls as $url)
         //   echo '123'.$url.' ';
         echo $headers[0].'<br />';
         //$list = array('location' => $separatorPath,
         //              'webUrl'  => $webUrl,
         //               'status'  => 'Working');
         $list = array(
                     array($separatorPath,$webUrl, $headers[0])
               );
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