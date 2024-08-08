<?php require('partials/head.php') ?>

<?php require('partials/navbar.php') ?>

<!-- main -->
<main class="flex-grow flex items-center mx-auto my-8">
    
    <img src="photos/cover.png" alt="Money Pile" class = "w-106 h-96">
    <div class = "flex flex-col gap-6 text-center">
        <h1 class="font-bold text-3xl">Start Logging Your Money</h1>
        <h1 class="font-bold text-5xl text-primary">Today</h1>
        <?php if(isLoggedIn() === false) : ?>
        <a href="/login" class = "btn btn-primary btn-sm w-32 mx-auto">Log in</a>
        <?php endif ?>
    </div>
</main>

<?php require('partials/footer.php') ?>