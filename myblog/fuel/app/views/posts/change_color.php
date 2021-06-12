<?php echo Form::open('/posts/change_color'); ?>
<div class="form-group">
    <?php echo Form::label('Color', 'color'); ?>
    <?php echo Form::input([
        "name" => "color",
        "value" => Session::get("color"),
        "class" => "form-control"
    ]); ?>
    <div class="actions">
        <?php echo Form::submit([
            "name" => "send",
            "value" => "submit",
            "class" => "btn btn-info"
        ]); ?>
    </div>
</div>
<?php echo Form::close(); ?>