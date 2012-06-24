<!DOCTYPE html>

<html>
<head>
    <title>Canvas Prime</title>
    <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
    <div id="container">
        <canvas id="canvas">
            Download Google Chrome to play this game now!
        </canvas>
    </div>

    <!-- COMPILER_REPLACE -->
    <!-- Load dependencies -->
    <script type="text/javascript" src="js/depen/animation.js"></script>
    <script type="text/javascript" src="js/depen/class_init.js"></script>

    <!-- Load all files in development -->
    <?php include 'include/engine-files.php'; ?>

    <!-- Execute logic from assembled engine -->
    <script type="text/javascript" src="js/setup.js"></script>
    <!-- END_COMPILER_REPLACE -->
</body>

</html>
