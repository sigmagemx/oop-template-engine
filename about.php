<?php
require_once 'libraries/Page.php';
$page = new Page();
$page->setTitle('About');
$page->startBody();
?>
<h2>About</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tempus tortor eu mi porta mollis. Integer et lectus consequat sapien auctor vestibulum at et est. Proin condimentum, leo faucibus feugiat sodales, tellus velit sollicitudin velit, vitae ultricies massa neque eget nulla. Integer posuere, orci eget tempor malesuada, massa neque interdum felis, vel tempor nunc mi vel erat. Aliquam erat volutpat. Nulla tempor, lectus in feugiat fringilla, risus felis accumsan nunc, ac lobortis quam ligula bibendum nibh. Quisque sit amet leo purus, vitae venenatis nunc. Maecenas ullamcorper orci metus, eu tincidunt dui. Quisque fringilla tristique urna ut cursus. Vestibulum auctor, sapien in dapibus iaculis, ligula justo mollis augue, eget venenatis felis nisi non nisl. Donec nulla augue, varius sit amet eleifend id, porta vitae velit. Phasellus auctor pretium metus, eget mollis odio viverra sed. Proin vitae odio est. Vestibulum accumsan gravida nibh, sagittis accumsan elit malesuada sed. Vestibulum varius faucibus hendrerit. Nunc purus risus, rutrum eu sagittis eu, imperdiet nec mi. Integer ante est, sagittis nec adipiscing hendrerit, laoreet non augue. Praesent vitae quam ac est lobortis congue. Curabitur commodo ante ut sapien venenatis id lacinia orci pharetra. In augue odio, aliquam in lobortis pharetra, dignissim in tellus.</p>

<p>Nulla facilisi. Vivamus et viverra erat. Mauris urna felis, suscipit sed placerat sit amet, suscipit a arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec enim magna, tincidunt malesuada suscipit quis, sodales et mi. Maecenas pharetra rhoncus justo a malesuada. In dictum lacinia ligula ac gravida. Aliquam suscipit rhoncus tellus, tincidunt dignissim lorem accumsan eu. Mauris nec mauris elit, vitae sagittis odio. Nullam semper quam non enim mollis gravida. Nulla facilisi. Duis ut fringilla enim. Vestibulum sit amet dolor ipsum, vel ultricies nulla.</p>

<p>Nam rhoncus fringilla tortor, et adipiscing sapien facilisis at. Pellentesque diam mauris, adipiscing nec auctor quis, sollicitudin sed ipsum. Sed vitae neque vel felis porta porta et eget justo. Sed enim lorem, suscipit et sollicitudin quis, sollicitudin at tellus. Mauris a justo faucibus nulla eleifend gravida. Nulla eget nisl mauris. Etiam sit amet ipsum vitae purus ultrices commodo at ut orci. Curabitur aliquam nisl non dolor malesuada ac porta lectus feugiat. Ut ac gravida lacus. In tincidunt porta risus ut interdum. Aenean at dolor mi. Morbi id enim vel odio porttitor sodales.</p>

<p>Quisque congue metus eget quam sagittis quis cursus arcu sagittis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed semper rhoncus imperdiet. Proin id neque dictum odio ullamcorper auctor eget at arcu. Sed ac aliquet sapien. Suspendisse varius lacinia mauris, a fermentum nunc pellentesque in. Pellentesque vel neque et erat rhoncus aliquet quis sed justo. Nulla facilisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi venenatis nulla nec dui malesuada rutrum. Curabitur tristique suscipit sapien ut suscipit. Aliquam lectus augue, gravida ut scelerisque eget, tincidunt in neque. Maecenas sodales velit sit amet urna lacinia posuere dignissim mauris iaculis. Cras iaculis justo vitae ligula laoreet scelerisque id scelerisque nulla. Donec ultrices nunc dui. Morbi pellentesque luctus hendrerit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse consequat rhoncus magna, ut dapibus mi convallis vel. Quisque elementum lobortis nunc. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

<p>Sed risus neque, tempor vel facilisis ac, rhoncus vel elit. Aenean nisl velit, accumsan non hendrerit id, bibendum ac elit. Donec urna quam, lacinia at pharetra eget, venenatis eu ante. Nullam placerat pellentesque elit vel dapibus. Aliquam erat volutpat. Duis sed sapien ut est aliquet feugiat nec et magna. Ut tortor massa, auctor a mollis vel, posuere vel nulla. Duis ultrices, mi sed pharetra vestibulum, lectus velit consectetur odio, eu facilisis nunc nisi in odio. Ut neque enim, rhoncus at vehicula condimentum, fermentum vel est. Aliquam erat volutpat. Nam lacinia quam sed justo sagittis at imperdiet enim interdum. Integer posuere fringilla diam, a cursus metus vulputate ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec placerat, nulla vitae commodo pharetra, nisi sem pulvinar ipsum, nec malesuada lorem nibh ac magna. Donec posuere, mauris fermentum accumsan elementum, tellus neque lacinia turpis, quis mattis odio risus tempus nibh.</p>
<?php
$page->endBody();
echo $page->render('inc/template.php');