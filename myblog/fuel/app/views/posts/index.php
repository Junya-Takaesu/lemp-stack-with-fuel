<?php foreach($posts as $post): ?>

<article class="blog-post">
    <h2 class="blog-post-title"><?php echo $post->title ?></h2>
    <p class="blog-post-meta"><?php echo $post->create_date ?></p>
    <?php echo Str::truncate($post->body, 100) ?>
    <p>
        <a href="/posts/view/<?php echo $post->id ?>" class="btn btn-dark">View more</a>
    </p>
</article>

<?php endforeach ?>