<form action="message.php" id="formMensagem" method="post">
    <label for="message"><?php __('Mensagem');?></label> /
    <label for="article"><a href="javascript:exibirFormArtigo();"><?php __('Artigo');?></a></label>
    <textarea name="message" id="message" rows="5"></textarea>
    <button type="submit"><?php __('Enviar mensagem');?></button>
</form>