<?php require "partials/header.php"; ?>

<!-- Sign In Start -->
<div class="container-fluid ">
    <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
            <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <a href="/" class="">
                        <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>School MS</h3>
                    </a>
                    <h3>Sign In</h3>
                </div>
                <form action="" method="POST">
                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <?php if (isset($error)) { ?>
                        <div class="alert alert-danger">
                            <p>
                                <?php echo $error; ?>
                            </p>
                        </div>
                    <?php } ?>
                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Sign In End -->

<?php require "partials/footer.php"; ?>