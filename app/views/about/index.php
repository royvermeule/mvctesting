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
            <div class="MyUserInfo">
                <div>
                    <?= $data['info_name']; ?>
                </div>
            </div>
            <div class="MyUserInfo">
                <div>
                    <a href="<?=URLROOT?>/AboutControllers/contact/1">Contact</a>
                </div>
            </div>
        </div>
        <div class="container-1">
            <div class="textSheet">
                <div>
                    Lorem ipsum dolor,
                    sit amet consectetur
                    adipisicing elit. Maxime
                    deleniti earum accusamus
                    necessitatibus voluptatem
                    quasi consequuntur, provident
                    esse placeat laborum dolores ad
                    expedita. Eos, incidunt molestias
                    amet veritatis recusandae molestiae!
                    Lorem ipsum dolor,
                    sit amet consectetur
                    adipisicing elit. Maxime
                    deleniti earum accusamus
                    necessitatibus voluptatem
                    quasi consequuntur, provident
                    esse placeat laborum dolores ad
                    expedita. Eos, incidunt molestias
                    amet veritatis recusandae molestiae!
                    Lorem ipsum dolor,
                    sit amet consectetur
                    adipisicing elit. Maxime
                    deleniti earum accusamus
                    necessitatibus voluptatem
                    quasi consequuntur, provident
                    esse placeat laborum dolores ad
                    expedita. Eos, incidunt molestias
                    amet veritatis recusandae molestiae!
                    Lorem ipsum dolor,
                    sit amet consectetur
                    adipisicing elit. Maxime
                    deleniti earum accusamus
                    necessitatibus voluptatem
                    quasi consequuntur, provident
                    esse placeat laborum dolores ad
                    expedita. Eos, incidunt molestias
                    amet veritatis recusandae molestiae!
                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php require_once APPROOT . '/views/includes/footer.php' ?>
    </footer>
</body>

</html>