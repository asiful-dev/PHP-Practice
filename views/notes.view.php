<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <?php foreach ($notes as $note) : ?>
            <article class="mb-4">
                <a href="/note?id=<?= $note['id'] ?>" class="text-2xl text-blue-500 font-bold hover:underline">
                    <?= $note['body'] ?>
                </a>
                <!-- <p class="text-gray-600 text-sm">Created at: <?= $note['created_at'] ?></p> -->
            </article>
        <?php endforeach; ?>
        <a href="/note/create" class="text-green-500 text-xl font-bold hover:underline">Create a new note</a>
    </div>
</main>

<?php require('partials/footer.php') ?>
