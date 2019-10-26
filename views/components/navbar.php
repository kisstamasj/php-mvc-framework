<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo libraries\Config::root; ?>" target="_self">Home <span class="sr-only">(current)</span></a>
            </li>
            <?php if(isset($_SESSION['user'])){ ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo libraries\Config::root."admin/dashboard"; ?>" target="_self">Dashboard</a>
            </li>
            <?php } ?>
        </ul>
    </div>
</nav>