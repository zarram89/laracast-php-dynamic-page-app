<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p class="mb-1">
            <a class="text-blue-500 underline text-xl" href="/notes">go back...</a>
        </p>
        <p class="text-xl"><?=$note["body"]?></p>
    </div>
</main>

<?php require('partials/footer.php') ?>
