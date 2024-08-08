<?php require('view/partials/head.php') ?>

<?php require('view/partials/navbar.php') ?>

<!-- main -->
<main class = "flex-grow">

    <div class="flex flex-col my-8">
        <h2 class="text-center mx-auto font-semibold text-xl">Your Total</h2>
        <h2 class="text-center mx-auto font-bold text-3xl text-primary"><?= $total?>&nbsp; <span class = "text-2xl">MMK</span></h2>
    </div>

    <div class="h-auto min-h-24 overflow-x-auto m-8 table-sm flex">
        <table class = "table table-pin-rows mx-auto text-center">
            <thead>
                <?php $thisTime = getdate(strtotime(date("Y-m-d"))) ?>
                <tr>
                    <td>Date</td>
                </tr>
            </thead>
            <tbody>
            <?php foreach($dateStreams as $dateStream) : ?>
                <tr class = "h-16">
                    <?php 
                    //getting date of each stream as associative array
                    $dataTime = getdate(strtotime($dateStream['date']));
                    //showing only this month data
                    if($thisTime['month'] === $dataTime['month']) :
                    ?>
                    <td class = "hover:bg-base-200 shadow">
                        <a href="/finance?date=<?= $dateStream['date'] ?>" class = "text-center"><?= $dataTime['mday'] . ", " . $dataTime['month'] . ", " . $dataTime['year'] ?></a>
                    </td>
                    <?php endif ?>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>  
    </div>

</main>

<?php require('view/partials/footer.php') ?>