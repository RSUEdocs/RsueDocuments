<div class="container wrapper">
<?php
if($_COOKIE['user']!=''):
?>
    <iframe class="" src="https://drive.google.com/file/d/1MlxzrRU8U8vV68z_GJZEsYx6Rlx6GMnn/preview" width="100%" height="1000px" frameborder="1"></iframe>
<?php
else:
?>
<p class="ta-c">Для доступа к персональным документам необходимо <a href="login.html">авторизоваться</a></p>
<?php
    endif;
?>