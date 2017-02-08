<?php
require_once 'simplephpcounter.php';
$counter = new simplephpcounter\Hits('index');
?>
<html>
<head><title>Sample Usage</title></head>
<pre>Hits: <?php echo $counter->hits(); ?></pre>
