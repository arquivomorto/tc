<?php
$title=$message['message'];
require 'inc/header.php';
?>
<div class="container">
    <header class="top center">
        <!---gráfico de mensagens--->
    </header>
    <aside class="center">
        <img src="holder.js/100x100" class="avatar">
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
    <main class="feed">
            <?php
    $text=$message['message'];
    $text=htmlentities($text);
    $text=nl2br($text);
    $href=$cfg['siteUrl'].'/article.php?id='.$message['id'];
    ?>
        <h1 class="center">
            <?php print $text; ?>
        </h1>
        <?php 
        $article=$message['article'];
        $article=markdown($article);
        print $article;
        ?>
        <p class="center">
            <small>
                <a href="index.php"><b>@hackergaucho</b></a>
                &bull;
                <?php print date('r', $message['created_at']); ?>
            </small>
        </p>
        <hr>
    </main>
</div>
