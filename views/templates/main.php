<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="<?php echo $_SESSION['CSRF_TOKEN']; ?>">

    <base href="<?php echo libraries\Config::root; ?>" target="_blank">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/app.css">

    <title><?php echo libraries\Config::mainTitle; echo property_exists($this, "subTitle") ? " - ".$this->subTitle : ""; ?></title>
</head>

<body class="bg-light">

    <?php include_once "views/" . $this->__view . ".php"; ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/fontawsome.js"></script>

    <script>
        var root = "<?php echo libraries\Config::root; ?>"
    </script>

    <script src="assets/js/app.js"></script>
</body>

</html>