<?php require base_path('views/partials/_header.php') ?>
<?php require base_path('views/partials/_nav.php') ?>
<?php require base_path('views/partials/_hero.php') ?>


<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <form method="POST" action="/notes/show?id=<?= $note['id'] ?>">

        <input type="hidden" name="_method" value="PATCH">

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm font-medium leading-6 text-gray-900">title</label>
                        <div class="mt-2">
                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text" name="title" id="title" value="<?= $note['title'] ?>" class="bg-white block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                            </div>
                            <?php if (isset($errors['title'])) : ?>
                                <p class="text-red-500 text-xs"><?= $errors['title'] ?></p>
                            <?php endif ?> 

                        </div>
                    </div>

                    <div class="col-span-full">
                        <label for="body" class="block text-sm font-medium leading-6 text-gray-900">body</label>
                        <div class="mt-2">
                            <textarea id="body" name="body" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"><?= $note['body'] ?></textarea>
                        </div>
                        <?php if (isset($errors['body'])) : ?>
                            <p class="text-red-500 text-xs"><?= $errors['body'] ?></p>
                        <?php endif ?> 
                    </div>
                </div>
            </div>


        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a class="bg-gray-500 text-white px-3 py-2 rounded-md text-sm" href="/notes/show?id=<?= $note['id'] ?>">Cancel</a>
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
        </div>
    </form>
</div>

<?php require base_path('views/partials/_footer.php') ?>