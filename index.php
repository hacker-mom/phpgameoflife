<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Game of life</title>
    <link rel="stylesheet" href="css/styles.css">
    <script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
    <!--<script type="text/javascript" src="js/scripts.js"></script>-->
</head>

<body>
    <div class="content">
        <div id="cells">
            <?php
            require('lib/World.php');
            /*
            * Any live cell with fewer than two live neighbours dies, as if caused by underpopulation.
            Any live cell with two or three live neighbours lives on to the next generation.
            Any live cell with more than three live neighbours dies, as if by overpopulation.
            Any dead cell with exactly three live neighbours becomes a live cell, as if by reproduction.
            */
            //$_SESSION['world'] = array();
           // die();
            if (empty($_SESSION['world'])) {
            $world = new World();
            } else {
            $world = unserialize($_SESSION['world']);
            $world->tick();
            }
            $_SESSION['world'] = serialize($world);
            ?>

        </div>
    </div>
</body>

</html>