<?php
require_once 'libraries/Page.php';
$page = new Page();
$page->setTitle('Services');
$page->startBody();
?>
<h2>Services</h2>
<b>Service 1</b>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce luctus molestie mattis. Sed consectetur semper pretium. Vestibulum et urna vitae leo tincidunt imperdiet ac sed quam. Aliquam vitae sem nulla, vitae vulputate ligula. Donec sodales tellus in purus venenatis accumsan. Pellentesque ac nunc ac ipsum pharetra ultricies vel et ipsum. Suspendisse suscipit viverra massa a consequat. Maecenas facilisis ultricies felis. Mauris laoreet felis nec tortor ornare condimentum a in ligula. Aliquam rutrum turpis eget quam euismod fringilla. Donec malesuada, est quis tempus pretium, diam orci tempus erat, quis posuere nunc libero ac leo. Proin ornare commodo risus, hendrerit posuere tellus eleifend et. Cras in convallis justo. Ut non arcu in tortor blandit bibendum id adipiscing lectus. Ut in velit lorem. Aenean luctus sem eu lectus dapibus elementum.</p><br />
<b>Service 2</b>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at sodales ligula. Proin orci dolor, dictum nec viverra eu, varius tincidunt nulla. Mauris suscipit nibh quis justo aliquam non ullamcorper nunc aliquam. Donec vitae purus sed diam blandit tincidunt ut vel ante. Pellentesque diam diam, mattis ut faucibus sit amet, tempor id lacus. Aenean pharetra ultricies egestas. Ut pharetra semper nulla, cursus consectetur ligula tincidunt nec. Nulla tempor sodales pulvinar. Aenean lorem mauris, vulputate in posuere ac, laoreet eu risus. Vivamus ut molestie erat. Curabitur diam nisl, blandit a lobortis quis, placerat vel lacus. Quisque et velit a diam tempus scelerisque a vel dolor. Nullam id massa nec magna luctus placerat. Praesent et dignissim turpis. Morbi aliquam porta sapien. Nam ornare venenatis dolor nec ultrices. Nullam luctus tempus laoreet.</p>
<?php
$page->endBody();
echo $page->render('inc/template.php');