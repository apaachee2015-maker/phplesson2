<?php
require VIEWS . '/incs/header.php';
/**
 * @var $post;
 */
?>
    <main class="main py-3">
        <div class="container">

            <div class="row">

                <div class="col-md-12">
                    <h1>Edit Post</h1>

                    <form action="/posts" method="post">


                        <input type="hidden" name="_method" value="patch">
                        <input type="hidden" name="id" value="<?= $post['id']?>">

                        <div class="mb3">
                            <label for="title" class="form-label">
                                Post Title
                            </label>
                            <input id="title" name="title" type="text" class="form-control" placeholder="Post title" value="<?= old('title') ?: $post['title'] ?>">
                            
                            <?= isset($validation) ? $validation->ListErrors('title') : '' ?>
                        </div>
                        <div class="mb3">
                            <label for="excerpt" class="form-label" id="excerpt">Post Excerpt</label>
                            <textarea name="excerpt" id="excerpt" class="form-control" rows="3" placeholder="Post excerpt"><?= old('excerpt') ?: $post['excerpt'] ?></textarea>
                            <?= isset($validation) ? $validation->ListErrors('excerpt') : '' ?>
                        </div>

                        <div class="mb3">
                            <label for="content" class="form-label" id="content">Post Content</label>
                            <textarea name="content" id="content" class="form-control" rows="5" placeholder="Post content"><?= old('content') ?: $post['content']?></textarea>
                            <?= isset($validation) ? $validation->ListErrors('content') : '' ?>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-success">
                                Edit
                            </button>
                        </div>

                    </form>


                </div>


            </div>
        </div>
    </main>
<?php require VIEWS . '/incs/footer.php' ?>
