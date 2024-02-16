<?php require("partials/_header.php") ?>
<?php require("partials/_nav.php") ?>
<?php require("partials/_hero.php") ?>

<main>



    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

        <article class="bg-white shadow-md p-5 flex flex-col gap-4">
            <p><a class="text-blue-500 hover:text-blue-800" href="/notes">back...</a></p>
            <h1 class="text-2xl text-gray-900"><?= e($note['title']) ?></h1>

            <div class="text-lg text-gray-700 leading-smooth">
                <?= e($note['body']) ?>
            </div>
        </article>
        
    </div>
</main>

<?php require("partials/_footer.php") ?>
    