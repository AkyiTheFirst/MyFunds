<?php require('view/partials/head.php') ?>

<?php require('view/partials/navbar.php') ?>

<!-- main -->
<main class="flex-grow flex">
    <form method="POST" class="card bg-base-100 w-auto min-w-96 h-106 mx-auto my-auto flex flex-col justify-center p-6 space-y-4">

        <h2 class = "text-center text-xl font-bold">Log Your Money Daily</h2>

        <select class="select select-sm select-bordered select-primary w-full" id = "status" name = "status">
        <option>income</option>
        <option>expense</option>
        </select>

        <textarea class="grow textarea textarea-primary resize-none" placeholder="Description"  id = "description" name = "description"></textarea>
        

        <label class="input input-sm input-bordered input-primary flex items-center gap-2">
        Ammount : 
        <input type="number" required class="grow" placeholder="000.00" id = "amount" name = "amount"/>
        </label>

        <select class="select select-sm select-bordered select-primary w-full" id = "account" name = "account">
            <option>Cash</option>
            <option>Card</option>
            <option>Bank</option>
            <option>Kpay</option>
            <option>others</option>
        </select>

        <button type = "submit" class="btn btn-primary btn-sm">Create</button>
        <a href="/finance" class = "btn btn-secondary btn-sm">Cancel</a>

    </form>
</main>

<?php require('view/partials/footer.php') ?>