<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio | <?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <h1>My<span>Portfolio</span></h1>
            </div>
            <nav>
                <ul class="nav-links">
                    <?php foreach (getNavigation() as $item): ?>
                        <li><a href="<?php echo $item['url']; ?>" <?php echo ($currentPage === str_replace(' ', '', strtolower($item['title'])) ? 'class="active"' : ''); ?>>
                            <?php echo $item['title']; ?>
                        </a></li>
                    <?php endforeach; ?>
                </ul>
                <div class="hamburger">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>
            </nav>
        </div>
    </header>
    <main>