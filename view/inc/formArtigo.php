<form action="article.php" class="hide" id="formArtigo" method="post">
    <label for="message"><a href="javascript:exibirFormMensagem();">
            <?php __('Mensagem');?></a>
    </label> /
    <label for="article"><?php __('Artigo');?></label>
    <textarea name="message" id="message" rows="5"></textarea>
    <button type="submit"><?php __('Enviar artigo');?></button>
</form>
