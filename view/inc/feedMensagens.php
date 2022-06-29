<?php
if ($messages) {
    foreach ($messages as $message) {
        if ($message['type']=='message') {
            mensagemNoFeed($message, $cfg);
        }
    }
}
function mensagemNoFeed($message, $cfg)
{?>
<p>
    <?php
    $text=$message['message'];
    $text=htmlentities($text);
    $text=nl2br($text);
    print $text; ?>
</p>
<p>
    <small>
        <?php
        $href=$cfg['siteUrl'].'/message.php?id='.$message['id']; ?>
        <a href="<?php print $href; ?>">
            <?php print date('r', $message['created_at']); ?>
        </a>
    </small>
</p>
<hr>
<?php
}
