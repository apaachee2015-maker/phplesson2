<?php
require VIEWS . '/incs/header.php'; ?>
    <main class="main py-3">
        <div class="container">

            <div class="row">

                <div class="col-md-12">
                    <?= $post['content']; ?> <br>

                    <?= $post['excerpt']; ?>
                </div>


            </div>
        </div>
    </main>
<?php require VIEWS . '/incs/footer.php' ?>