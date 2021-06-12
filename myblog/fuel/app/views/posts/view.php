<article class="blog-post">
    <h2 class="blog-post-title"><?php echo $post->title ?></h2>
    <p class="blog-post-meta"><?php echo $post->create_date ?></p>
    <div class="container mb-3 p-0">
        <div class="row-cols-auto">
            <span class="col">カテゴリ: <?php echo $post->category ?></span>
            <span class="col ms-3">タグ: <?php echo $post->tags ?></span>
        </div>
    </div>
    <?php echo $post->body; ?>
</article>

<hr class="my-5">
<div class="my-5">
    <a href="/posts/edit/<?php echo $post->id; ?>" class="btn btn-light">Edit</a>
    <a href="/posts/delete/<?php echo $post->id; ?>" class="btn btn-danger">Delete</a>
</div>
