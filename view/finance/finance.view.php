<?php require('view/partials/head.php') ?>

<?php require('view/partials/navbar.php') ?>

<!-- main -->
<main class = "flex-grow">
    <?php $date = $financeDate?>
    <div class="flex flex-col my-8">
        <h2 class="text-center mx-auto font-semibold text-xl">Your Total for
            <?php if($date === date("Y-m-d")) : ?> 
                Today
            <?php else : ?>
                <span><?= getdate(strtotime($date))['month'] . " " . getdate(strtotime($date))['mday'] ?></span>
            <?php endif?>
        </h2>
        <h2 class="text-center mx-auto font-bold text-3xl text-primary"><?= $total?>&nbsp; <span class = "text-2xl">MMK</span></h2>
    </div>
    <div class="h-auto overflow-x-auto m-8 table-sm">  
        <table class="table table-pin-rows">
            <thead>
                <tr>
                    <th>No.</th>
                    <td>Status</td>
                    <td>Description</td>
                    <td>Amount</td>
                    <td>Account</td>
                </tr>                                                                                             
            </thead>
            <tbody>
            <?php $count = 1?>
            <?php foreach($streams as $stream) : ?>
                <tr class = "hover:bg-base-200">
                    <th><?= $count++ ?></th>
                    <td>
                    <?php if($stream['status'] == 'i') : ?>
                        <div class = "badge badge-success text-white">income</div>
                    <?php else : ?>
                        <div class = "badge badge-error text-white">expense</div>
                    <?php endif ?>
                    </td>
                    <td><?= $stream['description'] ?></td>
                    <td><?= $stream['amount'] ?></td>
                    <td><?= $stream['account'] ?></td>
                    <td class = "flex flex-col text-primary">
                        <div class="text-center">
                            <a href = "/edit?id=<?= $stream['id'] ?>" class = "btn btn-ghost btn-xs" type = "submit">Edit</a>
                        </div>
                        <form class="text-center" method="POST" action = "/delete">
                            <input type="hidden" name="id" value="<?= $stream['id'] ?>">
                            <button type="submit" class="btn btn-ghost btn-xs">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <?php if($date === date('Y-m-d')) : ?>
    <div class="flex">
        <a href = "/create" class="btn mx-auto my-6 btn-primary">
            Create
        </a>
    </div>
    <?php endif?>
</main>

<?php require('view/partials/footer.php') ?>