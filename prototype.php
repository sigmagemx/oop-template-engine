<?php
require_once 'libraries/Page.php';
$page = new Page();
$page->setTitle('');
$page->startBody();
?>
<!-- Body code goes here -->
<?php
$page->endBody();
echo $page->render('inc/template.php');