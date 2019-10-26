<?php $this->loadComponent("navbar"); ?>
<div class="container mb-8">
    <h1 class="text-center">Dashboard</h1>
    <div class="row mt-3 justify-content-center">
        <div class="col-lg-5">
            <table class="table table-dark">
                <tbody>
                    <tr>
                        <td>Id</td>
                        <td><?php echo $_SESSION['user']['id']; ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?php echo $_SESSION['user']['email']; ?></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><?php echo $_SESSION['user']['username']; ?></td>
                    </tr>
                    <tr>
                        <td>First name</td>
                        <td><?php echo $_SESSION['user']['firstname']; ?></td>
                    </tr>
                    <tr>
                        <td>Last name</td>
                        <td><?php echo $_SESSION['user']['lastname']; ?></td>
                    </tr>
                    <tr>
                        <td>Mobile</td>
                        <td><?php echo $_SESSION['user']['mobile']; ?></td>
                    </tr>
                </tbody>
            </table>
            <div class="row justify-content-center" style="min-height: 40px;">
                <button type="button" class="btn btn-primary" id="logout-button"><i class="fas fa-sign-out-alt"></i> Logout</button>
                <div class="spinner-border text-primary d-none" id="logout-spinner" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->loadComponent("footer"); ?>