
<?php
$page_title = "Video";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $page_title ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="menu.css">
    </head>

    <header>
        <?php
        include 'header.php';
        ?>
    </header>

    <body>
        <h1>Video</h1><br>

        <div class="content">
            <h4 style="text-align: center;">Channel Name</h4>
            <embed type="video/webm" src="" width="400" height="300">
        </div>

    </body>

    <footer>
        <?php
        include 'footer.php';
        ?>
    </footer>

</html>
