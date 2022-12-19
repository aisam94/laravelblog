<!DOCTYPE html>
<title>My Blog</title>
<link rel="stylesheet" href="/app.css">
<!-- <script src="/app.js"></script> -->

<body>
    <?php foreach ($posts as  $post) : ?>
        <article>
            <h1>
                <a href="/posts/<?= $post->slug; ?>">
                    <?= $post->title; ?>
                </a>
            </h1>
            <p>
                <a href="/categories/<?= $post->category->slug ?>"><?= $post->category->name ?></a>
            </p>
            <div>
                <?= $post->excerpt; ?>
            </div>
        </article>
    <?php endforeach; ?>
    <!-- <article>
        <h1><a href="/post/my-first-post">My First Post</a></h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In minima, qui, recusandae neque officiis dolorum impedit nostrum illum numquam cum sed ullam ea? Labore, ea officiis enim sed animi ipsum!</p>
    </article>

    <article>
        <h1><a href="/post/my-second-post">My Second Post</a></h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In minima, qui, recusandae neque officiis dolorum impedit nostrum illum numquam cum sed ullam ea? Labore, ea officiis enim sed animi ipsum!</p>
    </article>

    <article>
        <h1><a href="/post/my-third-post">My Third Post</a></h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In minima, qui, recusandae neque officiis dolorum impedit nostrum illum numquam cum sed ullam ea? Labore, ea officiis enim sed animi ipsum!</p>
    </article> -->

</body>