<?php
$title=$cfg['siteName'];
require 'inc/header.php';
?>
<div class="container home">
    <aside class="home asideL">
        <h1>
            <?php print $cfg['siteName'];?>
        </h1>
        <p>
            <?php __('Microblog para devs');?>
        </p>
    </aside>
    <aside class="home asideR center">
    <?php require 'inc/formSignin.php';?>
    <?php require 'inc/formSignup.php';?>
    </aside>
</div>
