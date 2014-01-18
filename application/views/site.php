<?php
echo $name;
?>
<hr />
<?php
echo anchor('blog/about', 'About');
?>
<hr />

<?php

echo form_open('blog/index');

echo 'Name:' . form_input('title','123');

echo form_submit('', 'Send data');

echo form_close();
?>