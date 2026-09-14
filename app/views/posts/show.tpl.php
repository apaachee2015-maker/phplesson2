<?php
require VIEWS . '/incs/header.php'; ?>
    <main class="main py-3">
        <div class="container">

            <div class="row">

                <div class="col-md-12">
                    <h1> <?= h($post['title']); ?> </h1> <br>

                    <?= $post['content']; ?>
                </div>

                <form action="/posts" method="post">

                    <input type="hidden" name="_method" value="delete">
                    <input type="hidden" name="id" value="<?= $post['id']?>">

                    <button type="submit" class="btn btn-danger">Delete</button>
                    <a href="/posts/edit?id=<?= $post['id'] ?>" class="btn btn-success">Edit Post</a>

                </form>

            </div>
        </div>
    </main>
<?php require VIEWS . '/incs/footer.php' ?>