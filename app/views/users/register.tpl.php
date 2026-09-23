<?php require VIEWS . '/incs/header.php'; ?>
        <main class="main py-3">
            <div class="container">
                
                    <div class="row">

                            <div class="col-md-6 offset-md-3">
                                  <h3>Register Page</h3>
                                <form action="" method="post">

                                    <div class="mb3">
                                        <label id="title" for="title" class="form-label">
                                            Name
                                        </label>
                                        <input id="name" name="name" type="text" class="form-control" placeholder="name" value="<?= old('name') ?>">

                                        <?= isset($validation) ? $validation->ListErrors('name') : '' ?>
                                    </div>

                                    <div class="mb3">
                                        <label id="email" for="email" class="form-label">
                                            Email
                                        </label>
                                        <input id="email" name="email" type="email" class="form-control" placeholder="email" value="<?= old('email') ?>">

                                        <?= isset($validation) ? $validation->ListErrors('email') : '' ?>
                                    </div>

                                    <div class="mb3">
                                        <label id="password" for="password" class="form-label">
                                            Password
                                        </label>
                                        <input id="password" name="password" type="password" class="form-control" placeholder="password" value="<?= old('password') ?>">

                                        <?= isset($validation) ? $validation->ListErrors('password') : '' ?>
                                    </div>


                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-success">
                                            Register
                                        </button>
                                    </div>

                                </form>

                            </div>


                    </div>
            </div>
        </main>
        <?php require VIEWS . '/incs/footer.php' ?>