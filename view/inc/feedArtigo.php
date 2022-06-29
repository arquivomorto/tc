<p>
    <?php
    $text=$message['message'];
    $text=htmlentities($text);
    $text=nl2br($text);
    $href=$cfg['siteUrl'].'/message.php?id='.$message['id'];
    ?>
<h1 class="center">
    <a href="<?php print $href; ?>">
        <?php print $text; ?>
    </a>
</h1>
</p>
<p class="center">
    <small>
        <a href=""><b>@hackergaucho</b></a>
        &bull;
        <a href="<?php print $href; ?>">
            <?php print date('r', $message['created_at']); ?>
        </a>
    </small>
</p>
<hr>
