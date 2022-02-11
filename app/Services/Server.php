<?php
if (phpversion() === '7.4.26' || phpversion() > '7.4') {
} else {
    die(include($_SERVER['DOCUMENT_ROOT'] . '/views/pages/Errors/KernelError.php'));
}