<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Theme | WP</title>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <section class="top-bar">
            <div class="social-media-icons">Icons</div>
            <div class="search">Search</div>
        </section>
        <section class="menu-area">
            <section class="logo">Logo</section>
            <nav class="main-menu">Menu</nav>
        </section>
    </header>