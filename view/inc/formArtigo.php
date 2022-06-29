<form action="article.php" class="hide" id="formArtigo" method="post">
    <label for="message"><a href="javascript:exibirFormMensagem();">
            <?php __('Mensagem');?></a>
    </label> /
    <label for="article"><?php __('Artigo');?></label><br>
    <label for="message"><?php __("Título");?></label>
    <input type="text" name="message" id="message" maxlength="128" minlength="1" required="required">
    <label for="article"><?php __('Markdown');?></label><br>    
    <textarea name="article" id="article" rows="5" maxlength="1024" minlength="1" required="required"></textarea>
    <button type="submit"><?php __('Enviar artigo');?></button>
</form>
