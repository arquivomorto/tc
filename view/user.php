<?php
$title='Hacker Gaucho';
require 'inc/header.php';
?>
<div class="container">
    <header class="top center">
        <!---gráfico de mensagens--->
    </header>
    <main class="feed">
	<section class="center">
	        <?php require 'inc/formArtigo.php';?>
        	<?php require 'inc/formMensagem.php';?>
	</section>
        <?php require 'inc/feedMensagens.php';?>
    </main>
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
</div>
