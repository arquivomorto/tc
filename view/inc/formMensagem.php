<form action="message.php" id="formMensagem" method="post">
    <label for="message"><?php __('Mensagem');?></label> /
    <label for="article"><a href="javascript:exibirFormArtigo();">
            <?php __('Artigo');?></a>
    </label>
    <textarea name="message" id="message" rows="5" maxlength="128" minlength="1" required="required"></textarea>
    <button type="submit"><?php __('Enviar mensagem');?></button>
</form>
