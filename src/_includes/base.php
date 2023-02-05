<?php

include __DIR__ . DIRECTORY_SEPARATOR . "config.php";

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php if( isset( $page_title ) && $page_title ) echo $page_title . " - "; ?>DBKFG</title>

        <link rel="stylesheet" type="text/css" href="/assets/css/stylesheet.css">
    </head>

    <body>
        <header class="site-header">
            <div class="container">
                <h1>DBKFG</h1>
            </div>
        </header>

        <nav class="site-navbar">
            <div class="container">
                <a href="/"<?php if( isset( $current_page ) && $current_page == "home" ) echo " class=\"current\""; ?>>Home</a>
            </div>
        </nav>

        <main class="container">
            <?php if( isset( $page_content ) && is_callable( $page_content ) ) $page_content(); ?>
        </main>

        <footer class="site-footer">
            <div class="container">
                <p>Copyright &copy; <a href="<?php echo $site_author_url; ?>" target="_blank"><?php echo $site_author; ?></a>.</p>
            </div>
        </footer>
    </body>
</html>