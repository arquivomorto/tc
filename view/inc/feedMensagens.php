<?php
if ($messages) {
    foreach ($messages as $message) {
        if ($message['type']=='article') {
            require 'feedArtigo.php';
        }
        if ($message['type']=='message') {
            require 'feedMensagem.php';
        }
    }
}