<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once APPROOT . '/views/includes/head.php' ?>
</head>

<body>
    <header>
        <?php require_once APPROOT . '/views/includes/navbar.php' ?>
    </header>
    <main>
        <div class="container-1">
            <div class="contact-list">
                <div>
                    <?= $data['info_email'] ?>
                </div>
            </div>
            <div class="contact-list">
                <div>
                    <?= $data['info_phone'] ?>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php require_once APPROOT . '/views/includes/footer.php' ?>
    </footer>
</body>

</html>