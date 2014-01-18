<?php echo validation_errors(); ?>


<?php 
echo $title;
echo $content;
echo form_open('blog/add_Blog');
echo 'Title:' . form_input('title', 'Title');
?>
<hr />
<?php echo form_textarea('content'); ?>

<?php echo form_submit('', 'Add Blog');
    echo form_close();
?>