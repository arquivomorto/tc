<p>
    <?php
    $text=$message['message'];
    $text=htmlentities($text);
    $text=nl2br($text);
    print $text; 
    $href=$cfg['siteUrl'].'/message.php?id='.$message['id']; 
    ?>
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
