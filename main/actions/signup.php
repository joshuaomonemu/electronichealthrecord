<?php

function generateRandomDocId() {
    $prefix = 'doc_';
    $randomNumber = mt_rand(100000, 999999); // Generates a 6-digit random number
    return $prefix . $randomNumber;
}

// Example usage
$docId = generateRandomDocId();

?>