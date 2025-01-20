<?php

if('admin' == 'admin') : ?>

<h1>THIS IS ADMIN</h1>

<?php  
echo $_SESSION['userEmail'];
echo $_SESSION['userRole'];
?>
<?php  endif;?>
