<?php require base_path('views/partials/_header.php') ?>
<?php require base_path('views/partials/_nav.php') ?>
<?php require base_path('views/partials/_hero.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

        <article class="bg-white shadow-md p-5 flex flex-col gap-4">
            <h1 class="text-2xl text-gray-900"><?= $post->title ?></h1>

            <img src="https://placehold.co/800x400" alt="<?= $post->title ?>">

            <div class="text-lg text-gray-700 leading-smooth">
                <?= $post->body ?>
            </div>
        </article>
        
    </div>
</main>

<?php require base_path('views/partials/_footer.php') ?>
    