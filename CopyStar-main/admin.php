<?php
session_start();
if(!$_SESSION['user']){
    header('Location: /entrance.php');
}
?>
<html lang="en">


<?php require_once 'includes/head.php'; ?>

<body>
<div class="page">
    <?php require_once 'includes/header.php'; ?>
    <main class="main">
        <div class="container">
            <div class="main-content">
                <div class="title">Вы зашли в админ-панель. Добро пожаловать, <?= $_SESSION['user']['name'] ?>!</div>
            </div>
        </div>
    </main>
    <?php require_once 'includes/footer.php'; ?>
</div>

</body>

</html>
