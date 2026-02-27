<?php
require VIEWS . '/incs/header.php'; ?>
    <main class="main py-3">
        <div class="container">

            <div class="row">

                <div class="col-md-12">
                  <h1>New Post</h1>

                    <form action="" method="post">

                        <div class="mb3">
                            <label id="title" for="title" class="form-label">
                            Post Title
                            </label>
                            <input id="title" name="title" type="text" class="form-control" placeholder="Post title">

                            <?php if (isset($errors['title'])): ?>
                            <div class="invalid-feedback d-block">
                            <?= $errors['title']?>
                            </div>
                            <?php endif;?>
                        </div>
                        <div class="mb3">
                            <label for="excerpt" class="form-label" id="excerpt">Post Excerpt</label>
                            <textarea name="excerpt" id="excerpt" class="form-control" rows="3" placeholder="Post excerpt"></textarea>
                            <?php if (isset($errors['excerpt'])): ?>
                                <div class="invalid-feedback d-block">
                                    <?= $errors['excerpt']?>
                                </div>
                            <?php endif;?>
                        </div>

                        <div class="mb3">
                            <label for="content" class="form-label" id="content">Post Content</label>
                            <textarea name="content" id="content" class="form-control" rows="5" placeholder="Post content"></textarea>
                            <?php if (isset($errors['content'])): ?>
                                <div class="invalid-feedback d-block">
                                    <?= $errors['content']?>
                                </div>
                            <?php endif;?>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-success">
                                Zanesty
                            </button>
                        </div>

                    </form>


                </div>


            </div>
        </div>
    </main>
<?php require VIEWS . '/incs/footer.php' ?>