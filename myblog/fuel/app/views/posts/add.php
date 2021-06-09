<h1>Add Post</h1>
<?php echo Form::open('/posts/add'); ?>
    <div class="form-group">
        <?php echo Form::label('Title', 'title'); ?>
    </div>
<?php echo Form::close(); ?>