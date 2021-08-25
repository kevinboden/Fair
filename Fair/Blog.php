<?php

require_once("modules/RecordFinderContent.class.php");
$type = $_GET['type'];
$position = (int) $_GET['position'];
$pRecordFinder = new RecordFinderContent();
$record = $pRecordFinder->getRecord($type, $position);
$content = $record['content'] ?? '';

switch ($type)
{
  case 'food':
    $title = 'Food Blog';
    break;
  case 'fashion':
    $title = 'Fashion Blog';
    break;
  case 'beauty':
    $title = 'Beauty Blog';
    break;
  case 'lifestyle':
    $title = 'Lifestyle Blog';
    break;
}

echo '<!DOCTYPE html>
<html lang="de">
<head>
<title>Fair</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style-blog.css" type="text/css" />
</head>
  <body>';

if ($content !== '')
{ 
  echo '<div class="container">
          <div class="header">
            '.$title.'
          </div>

          <div class="blog">'.$content.'</div>
      
        </div>';
}
echo '</body>
</html>';