        <?php require 'incs/header.php'; ?>  
        <main class="main py-3">
            <div class="container">
                
                    <div class="row">

                            <div class="col-md-8">
                                    <?php foreach ($posts as $post): ?>
                                    <div class="card w-100 mt-2 mb-2">
                                            <div class="card-body">
                                                <h5 class="card-title"><a href="post/<?= $post['slug'] ?>"><?= $post['title'] ?></a></h5>
                                                <p class="card-text"><?= $post['desc'] ?></p>
                                                <a href="post/<?= $post['slug'] ?>">Read more</a>
                                            </div>
                                    </div>                           
                                    <?php endforeach; ?>
                            </div>                    
                            <?php require 'incs/sidebar.php' ?>

                    </div>
            </div>
        </main>
        </div>
        <?php require 'incs/footer.php' ?>
    