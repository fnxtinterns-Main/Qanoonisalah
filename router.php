<?php
/**
 * Qanooni Salah - Clean URL Router for PHP Built-in Server
 * Removes .php extensions and routes requests cleanly.
 * Designed by Technxtai (technxtai.com)
 */

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Serve existing static files directly (images, css, js, etc.)
if ($uri !== '/' && file_exists(__DIR__ . $uri) && !is_dir(__DIR__ . $uri)) {
    return false;
}

// Normalize path
$clean = trim($uri, '/');

// Root request -> index.php
if ($clean === '' || $clean === 'index' || $clean === 'home') {
    include __DIR__ . '/index.php';
    exit;
}

// Redirect if request ends with .php
if (str_ends_with($clean, '.php')) {
    $redirectUrl = '/' . substr($clean, 0, -4);
    header("Location: $redirectUrl", true, 301);
    exit;
}

// If matching .php file exists, include it
if (file_exists(__DIR__ . '/' . $clean . '.php')) {
    include __DIR__ . '/' . $clean . '.php';
    exit;
}

// Fallback to index.php
include __DIR__ . '/index.php';
exit;
