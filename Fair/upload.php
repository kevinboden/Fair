<?php
  require_once('modules/ActionCreateContent.class.php');
  $content = $_POST['content'];
  $type = $_POST['type'];
  $pActionCreateContent = new ActionCreateContent();
  $pActionCreateContent->createContent($content, $type);

  header('location: DeveloperPage.php');
 