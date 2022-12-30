<!DOCTYPE html>
<title>My Blog</title>
<link rel="stylesheet" href="/app.css">
<!-- <script src="/app.js"></script> -->

<body>
    <article>
        <h1>
            <?= $post->title; ?>
        </h1>
        <p>
            By <a href='/authors/<?= $post->author->username ?>'><?= $post->user->name ?></a> in
            <a href="/categories/<?= $post->author->name ?>"><?= $post->category->name ?></a>
        </p>
        <div>
            <?= $post->body; ?>
        </div>
    </article>
    <a href="/">Go Back</a>
</body>