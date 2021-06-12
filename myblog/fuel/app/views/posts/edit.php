<h1>Add Post</h1>
<?php echo Form::open("/posts/edit/$post->id"); ?>
    <div class="form-group">
        <?php echo Form::label('Title', 'title'); ?>
        <?php echo Form::input([
            "name" => "title",
            "value" => Input::post('title', isset($post) ? $post->title : ""),
            "class" => "form-control"
        ]); ?>
        <?php echo Form::label('Title', 'title'); ?>
    </div>
    <div class="form-group">
        <?php echo Form::label('Category', 'category'); ?>
        <?php echo Form::select([
            "name" => "category",
            "value" => $post->category,
            "options" => [
                "0" => "カテゴリを選択してください",
                "Web Design" => "Web Design",
                "Programming" => "Programming",
                "Graphic Design" => "Graphic Design"
            ],
            "class" => "form-control"
        ]); ?>
    </div>
    <div class="form-group">
        <?php echo Form::label('Body', 'body'); ?>
        <?php echo Form::textarea([
            "name" => "body",
            "value" => Input::post('body', isset($post) ? $post->body : ""),
            "class" => "form-control"
        ]); ?>
    </div>
    <div class="form-group">
        <?php echo Form::label('Tags', 'tags'); ?>
        <?php echo Form::input([
            "name" => "tags",
            "value" => Input::post('title', isset($post) ? $post->tags : ""),
            "class" => "form-control"
        ]); ?>
    </div>
    
    <?php echo Form::hidden("post_id", $post->id) ?>

    <div class="actions">
        <?php echo Form::submit([
            "name" => "send",
            "value" => "submit",
            "class" => "btn btn-info"
        ]); ?>
    </div>
<?php echo Form::close(); ?>