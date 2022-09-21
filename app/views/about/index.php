<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once APPROOT . '/views/includes/head.php'?>
</head>
<body>
    <header>
        <?php require_once APPROOT . '/views/includes/navbar.php'?>
    </header>
    <main>
        <div>
            <?php
                // Takes the data from the $data array and formats it using the FormatTextHelper to make it more readable.
                $myinfo = $data['myinfo'];
                FormatTextHelper::ConvertStringToJsonFormat($myinfo);
            ?>
        </div>
    </main>
    <footer>
        <?php require_once APPROOT . '/views/includes/footer.php'?>
    </footer>
</body>
</html>