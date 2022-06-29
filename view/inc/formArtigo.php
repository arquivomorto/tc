<form action="article.php" class="hide" id="formArtigo" method="post">
    <label for="message"><a href="javascript:exibirFormMensagem();">
            <?php __('Mensagem');?></a>
    </label> /
    <label for="article"><?php __('Artigo');?></label><br>
    <label for="title"><?php __("Título");?></label>
    <input type="text" name="title" id="title">
    <label for="article"><?php __('Markdown');?></label><br>    
    <textarea name="article" id="article" rows="5"></textarea>
    <button type="submit"><?php __('Enviar artigo');?></button>
</form>
