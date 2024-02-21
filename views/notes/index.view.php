<?php require("views/partials/_header.php") ?>
<?php require("views/partials/_nav.php") ?>
<?php require("views/partials/_hero.php") ?>

<main>

    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

        <a href="/notes/create" class="text-blue-500">Create</a>

        <section class="grid grid-cols-3 gap-2">
            <?php foreach ($notes as $note) : ?>
                <article class="bg-white shadow-md p-5 flex flex-col gap-2">
                    <p><a href="/notes/show?id=<?= $note['id'] ?>"><?= e($note['title']) ?></a></p>
                </article>
            <?php endforeach; ?>
        </section>
    </div>
</main>

<?php require("views/partials/_footer.php") ?>
