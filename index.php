<?php
require __DIR__ . '/data/site-data.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php require __DIR__ . '/components/layout/head.php'; ?>

<body class="bg-white text-slate-900 font-inter antialiased">
    <?php require __DIR__ . '/components/layout/header.php'; ?>

    <main>
        <?php require __DIR__ . '/components/sections/hero.php'; ?>
        <?php require __DIR__ . '/components/sections/mission-vision.php'; ?>
        <?php require __DIR__ . '/components/sections/divisions.php'; ?>
        <?php require __DIR__ . '/components/sections/experience.php'; ?>
        <?php require __DIR__ . '/components/sections/showcase.php'; ?>
        <?php require __DIR__ . '/components/sections/recruitment.php'; ?>
    </main>

    <?php require __DIR__ . '/components/layout/footer.php'; ?>

    <script src="public/assets/js/main.js"></script>
</body>

</html>