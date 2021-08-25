<?php

require_once("modules/RecordFinderContent.class.php");

$type = $_GET['type'];

switch ($type)
{
  case 'food':
    $title = 'Food Previews';
    break;
  case 'fashion':
    $title = 'Fashion Previews';
    break;
  case 'beauty':
    $title = 'Beauty Previews';
    break;
  case 'lifestyle':
    $title = 'Lifestyle Previews';
    break;
}

$pRecordFinder = new RecordFinderContent();
$records = $pRecordFinder->getRecords($type);

echo '<!DOCTYPE html>
 <html lang="de">
 <head>
 <title>Fair</title>
 <meta http-equiv="content-type" content="text/html; charset=utf-8" />
 <link rel="stylesheet" href="css/style-previews.css" type="text/css" />
 </head>';

 echo '<body>
        <div class="container">
          <div class="header">
              '.$title.'
          </div>';

if ($records !== [])
{
  foreach ($records as $record)
  {
    echo  '<div class ="picture">
            <a href="Blog.php?type='.$type.'&position='.$record['position'].'">
            <img src="img/rect.png">
            </a>
          </div>
    
          <div class="blogPreview">
          <a href="Blog.php?type='.$type.'&position='.$record['position'].'">'.$record['content'].'</a>
          </div>';
  }
} 
  
echo '</div>
    </body>
  </html>';