<?php
declare(strict_types=1);
if (preg_match('/\.(?:png|jpg|jpeg|gif|ico)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
}
require __DIR__.'/public/index.php';
