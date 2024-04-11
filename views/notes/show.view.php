<?php require base_path('views/partials/_header.php') ?>
<?php require base_path('views/partials/_nav.php') ?>
<?php require base_path('views/partials/_hero.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

        <article class="bg-white shadow-md p-5 flex flex-col gap-4">
            <p><a class="text-blue-500 hover:text-blue-800" href="/notes">back...</a></p>
            <h1 class="text-2xl text-gray-900"><?= e($note->title) ?></h1>

            <div class="text-lg text-gray-700 leading-smooth">
                <?= e($note->body) ?>
            </div>

            <div class="flex justify-between">
                

                <form method="POST" action="/notes/show?id=<?= $note->id ?>">
                    <input type="hidden" name="_method" value="DELETE">

                    <button class="bg-red-500 text-white text-xs py-1 px-2">Delete</button>    
                </form>
                
                <a href="/notes/edit?id=<?= $note->id ?>" class="bg-blue-500 text-white text-xs py-1 px-2">Edit</a>
            </div>


        </article>
        
    </div>
</main>

<?php require base_path('views/partials/_footer.php') ?>
    