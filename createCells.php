<?php
session_start();
require('lib/World.php');
/*
 * Any live cell with fewer than two live neighbours dies, as if caused by underpopulation.
Any live cell with two or three live neighbours lives on to the next generation.
Any live cell with more than three live neighbours dies, as if by overpopulation.
Any dead cell with exactly three live neighbours becomes a live cell, as if by reproduction.
 */

if (empty($_SESSION['world'])) {
    $world = new World();
} else {
    $world = unserialize($_SESSION['world']);
    $world->tick();
}
$_SESSION['world'] = serialize($world);

