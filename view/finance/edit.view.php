<?php require('view/partials/head.php') ?>

<?php require('view/partials/navbar.php') ?>

<!-- main -->
<main class="flex-grow flex">
    <form action = "/update" method="POST" class="card bg-base-100 w-auto min-w-96 h-106 mx-auto my-auto flex flex-col justify-center p-6 space-y-4">
    
        <input type="hidden" name="_method" value="PATCH">
        <input type="hidden" name="id" value=<?= $stream['id'] ?>>
        <input type="hidden" name="date" value=<?= $stream['date'] ?>>

        <h2 class = "text-center text-xl font-bold">Edit Your Log</h2>

        <select class="select select-sm select-bordered select-primary w-full" id = "status" name = "status" value = "<?= $stream['status'] ?>">
        <option>income</option>
        <option>expense</option>
        </select>

        <textarea class="grow textarea textarea-primary resize-none" placeholder="Breakfast with love"  id = "description" name = "description"><?= $stream['description'] ?></textarea>

        <label class="input input-sm input-bordered input-primary flex items-center gap-2">
        Ammount : 
        <input type="number" required class="grow" placeholder="000.00" id = "amount" name = "amount"  value = "<?= $stream['amount'] ?>"/>
        </label>

        <select class="select select-sm select-bordered select-primary w-full" id = "account" name = "account"  value = "<?= $stream['account'] ?>">
            <option>Cash</option>
            <option>Card</option>
            <option>Bank</option>
            <option>Kpay</option>
            <option>others</option>
        </select>

        <button type = "submit" class="btn btn-primary btn-sm">Save</button>
        <a href="/finance?date=<?= $stream['date'] ?>" class = "btn btn-secondary btn-sm">Cancel</a>

    </form>
</main>

<?php require('view/partials/footer.php') ?>