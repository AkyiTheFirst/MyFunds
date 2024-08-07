<?php require('partials/head.php') ?>
<?php require('partials/navbar.php') ?>

<!-- main -->
<main class = "flex-grow flex">
    <div class="card bg-base-100 w-96 shadow-xl mx-auto my-auto">
        <figure class="px-10 pt-10">
            <img
            src="photos/avatar.png"
            alt="Avatar Image"
            class="rounded-full bg-accent w-32 h-32" />
        </figure>
        <div class="card-body items-center text-center">
            <h2 class="card-title">Your Name</h2>
            <p>Total Money : </p>
            <p></p>
            <div class="card-actions">
            <a href = "/" class="btn btn-primary btn-sm">Back to Home</a>
            </div>
        </div>
    </div>
</main>

<?php require('partials/footer.php') ?>