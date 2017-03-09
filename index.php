<?php
require_once 'libraries/Page.php';
$page = new Page();
$page->setTitle('Home');
$page->startBody();
?>
<h2>Home</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et nisi felis, non porttitor eros. Cras vel tellus non est ullamcorper euismod in eget nibh. Etiam quam ante, pellentesque eu pretium convallis, ornare ut nisi. Nullam adipiscing justo nec purus accumsan blandit. In hac habitasse platea dictumst. Quisque iaculis gravida libero, fermentum scelerisque metus imperdiet eget. Duis cursus mollis ante, sit amet malesuada erat convallis vitae. Proin placerat, tortor quis hendrerit consequat, nunc nulla auctor orci, ut venenatis magna dui a eros.</p>

<p>Mauris feugiat consequat eros id sodales. Maecenas a mollis neque. Donec non risus a purus lacinia egestas. Quisque molestie nisl non lacus condimentum viverra. Sed orci libero, imperdiet vel rutrum at, aliquet nec nisi. Nullam accumsan urna a sem vehicula ac congue augue convallis. Sed blandit mauris ac est tristique ornare. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>

<p>In vitae felis nunc. Proin eget nulla massa, vel volutpat mauris. Quisque commodo odio et libero ornare ut luctus odio tincidunt. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc tincidunt aliquet nunc, ut varius metus consequat quis. Mauris dignissim, orci nec euismod pellentesque, mauris eros luctus elit, a eleifend sem tellus in tellus.</p>
<?php
$page->endBody();
echo $page->render('inc/template.php');