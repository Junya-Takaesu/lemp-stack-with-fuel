<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.83.1">
    <title><?= $title ?></title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/blog/">
    <!-- Favicons -->
    <link rel="icon" href="/favicon.ico">
    <meta name="theme-color" content="#7952b3">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <?php echo Asset::css("bootstrap.min.css") ?>
    <?php echo Asset::css("myblog.css") ?>
</head>

<body>
    <?php if(Session::get_flash("success")): ?>
        <div class="alert alert-success"><?php echo Session::get_flash("success"); ?></div>
    <?php endif; ?>
    <?php if(Session::get_flash("error")): ?>
        <div class="alert alert-error"><?php echo Session::get_flash("error"); ?></div>
    <?php endif; ?>

    <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-start align-items-center">
                <div class="col-3">
                    <a class="blog-header-logo text-dark" href="/" style="color: <?php echo $_SESSION["color"] ?> !important">My Blog</a>
                </div>
                <div class="col pt-1">
                    <a class="btn btn-info" href="/posts/add">Add an article</a>
                </div>
                <div class="col pt-1">
                    <a class="btn btn-success" href="/posts/change_color">Change color</a>
                </div>
            </div>
        </header>
    </div>

    <main class="container">
        <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
                <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
                <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
            </div>
        </div>

        <div class="row g-5">
            <div class="col-md-8">
                <?php echo $content ?>
            </div>

            <div class="col-md-4">
                <div class="position-sticky" style="top: 2rem;">
                    <div class="p-4 mb-3 bg-light rounded">
                        <h4 class="fst-italic">About</h4>
                        <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
                    </div>

                    <div class="p-4">
                        <h4 class="fst-italic">Elsewhere</h4>
                        <ol class="list-unstyled">
                            <li><a href="#">GitHub</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Facebook</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer class="blog-footer">
        <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
        <p>
            <a href="#">Back to top</a>
        </p>
    </footer>



</body>

</html>