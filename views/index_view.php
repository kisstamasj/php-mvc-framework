<?php $this->loadComponent("navbar"); ?>

<div class="container mb-8">
<?php if(!isset($_SESSION['user'])) {?>
    <div class="row mt-3 justify-content-center">
        <div class="col-lg-5">
            <div class="card">
                <div class="card-body">
                    <form id="login-form">
                        <div class="form-group">
                            <label for="username_email">Username or Email</label>
                            <input type="text" class="form-control form-control-lg" id="username_email" placeholder="Username or Email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control form-control-lg" id="password" placeholder="****">
                        </div>

                        <div class="row justify-content-center" style="min-height: 40px;">
                            <button type="button" class="btn btn-primary" id="login-button"><i class="fas fa-sign-in-alt"></i> Login</button>
                            <div class="spinner-border text-primary d-none" id="login-spinner" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>

                        <div class="alert alert-danger mt-3 d-none" id="errors" role="alert">
                            <ul></ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php } else { ?>

        <h4>Hi <?php echo $_SESSION['user']['lastname']; ?>!</h4>
        <p>How are you?</p>

    <?php } ?>
</div>

<?php $this->loadComponent("footer"); ?>
