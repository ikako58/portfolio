<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/functions.php';

$page = $_GET['page'] ?? 'home';
$allowedPages = ['home', 'about', 'projects', 'contact', 'download'];

if (!in_array($page, $allowedPages)) {
    $page = 'home';
}

$pageTitles = [
    'home' => 'Home',
    'about' => 'About Me',
    'projects' => 'My Projects',
    'contact' => 'Contact Me',
    'download' => 'Download Resume'
];

$pageTitle = $pageTitles[$page];
$currentPage = $page;

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/pages/' . $page . '.php';
require_once __DIR__ . '/includes/footer.php';
?>