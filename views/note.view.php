<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold mb-4"><?= $note['body'] ?></h1>
        <p class="text-gray-600 text-sm">Created at: <?= $note['created_at'] ?></p>
    </div>
</main>

<?php require('partials/footer.php') ?>
