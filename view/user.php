<?php
$title='Hacker Gaucho';
require 'inc/header.php';
?>
<div class="container">
    <header class="top center">
        <img src="holder.js/100x100" class="avatar">
    </header>
    <main class="feed">
        <?php require 'inc/formArtigo.php';?>
        <?php require 'inc/formMensagem.php';?>
        <?php require 'inc/feedMensagens.php';?>
    </main>
    <aside class="center">
        <p>
            <strong>Hacker Gaucho</strong>
        </p>
        <p>
            @hackergaucho
        </p>
        <p>
            <a href=""><i aria-hidden="true" class="fa fa-twitter"></i></a>
        </p>
    </aside>
</div>
