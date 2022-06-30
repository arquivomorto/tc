<form action="signup.php" class="hide" id="formSignup" method="post">
    <h2><?php __("Criar conta");?>
    </h2>
    <label for="nameSignup"><?php __('Nome');?></label><br>
    <input type="text" id="nameSignup" maxlength="32" minlegth="2" name="name"><br>
    <label for="emailSignup"><?php __('Email');?></label><br>
    <input type="email" id="emailSignup" maxlength="64" minlegth="6" name="email"><br>
    <label for="passwordSignup"><?php __('Senha');?></label><br>
    <input type="password" id="passwordSignup" maxlength="8" minlegth="256" name="password"><br>
    <button type="submit"><?php __("Criar conta");?></button>
    <p>
        <a href="javascript:showFormSignin();"><?php __("Entrar");?></a>
    </p>
</form>
<script>
    function showFormSignin() {
        $('#formSignup').hide();
        $('#formSignin').show();
    }

</script>
