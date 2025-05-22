      <section class="container mt-12 mx-auto font-display">
        <div class="mx-auto px-6 dark:text-light">
            <h1 class="capitalize text-2xl font-bold"><?= $chapterName ?></h1>
        </div>

        <div class="w-full flex justify-center mt-4">
            <div class="w-full  px-4 my-4 md:px-10">
                <div class="mb-3">
                    <select class="p-1 focus:outline-none bg-gray-200 font-semibold rounded-md shadow-md" name="chapterSelect" id="chapterSelect" onchange="goToChapter()">
                        <option>Select chapter</option>
                        <?php foreach ($allChapters as $chapter) : ?>
                            <?php $chapterLink =  base_url('komik/chapter/' . $param . '/' . $chapter["slug"]) ?>
                            <option value="<?= $chapterLink ?>">Chapter <?= $chapter["chapter"] ?></option> 
                        <?php endforeach ?>
                    </select>         
                </div>
    
                <div class="flex w-full justify-between">
                    <?php if (isset($previousChLink)) : ?>
                        <div class="p-2 flex justify-center items-center rounded-md shdow-lg text-white bg-linear-to-bl from-primary to-secondary cursor-pointer mr-auto hover:scale-110 hover:opacity-90 transition duration-300 ease-in-out md:px-4 lg:px-10 lg:py-4" onclick="document.location.href = '<?= $previousChLink ?>'">
                            <h3 class="text-md font-semibold">Previous Chapter</h3>
                        </div>
                    <?php else : ?>
                        <div class="p-2 flex justify-center items-center rounded-md shdow-lg bg-gray-200 md:px-4 lg:px-10 lg:py-4 dark:bg-gray-700 dark:text-slate-400">
                            <h3 class="text-md font-semibold">Previous Chapter</h3>
                        </div>
                    <?php endif ?>

                    <?php if (isset($nextChLink)) : ?>
                        <div class="p-2 flex justify-center items-center rounded-md shdow-lg text-white bg-linear-to-bl from-primary to-secondary cursor-pointer ml-auto hover:scale-110 hover:opacity-90 transition duration-300 ease-in-out  md:px-4 lg:px-10 lg:py-4" onclick="document.location.href = '<?= $nextChLink ?>'">
                            <h3 class="text-md font-semibold">Next Chapter</h3>
                        </div>
                    <?php else : ?>
                        <div class="p-2 flex justify-center items-center rounded-md shdow-lg bg-gray-200 md:px-4 lg:px-10 lg:py-4 dark:bg-gray-700 dark:text-slate-400">
                            <h3 class="text-md font-semibold">Next Chapter</h3>
                        </div>
                    <?php endif ?>
                </div>
            </div>
        </div>

        <div class="container w-full mx-auto mb-5">
        <?php foreach ($images as $image) : ?>
            <div class="w-fit mx-auto">
                <img src="<?= $image ?>" alt="">
            </div>
            <?php endforeach ?>
            <div class="w-full flex justify-center mt-6 px-4 md:px-10">
                <div class="flex w-full justify-between">
                    <?php if (isset($previousChLink)) : ?>
                        <div class="p-2 flex justify-center items-center rounded-md shdow-lg text-white bg-linear-to-bl from-primary to-secondary cursor-pointer mr-auto hover:scale-110 hover:opacity-90 transition duration-300 ease-in-out md:px-4 lg:px-10 lg:py-4" onclick="document.location.href = '<?= $previousChLink ?>'">
                            <h3 class="text-md font-semibold">Previous Chapter</h3>
                        </div>
                    <?php else : ?>
                        <div class="p-2 flex justify-center items-center rounded-md shadow-lg bg-gray-200 md:px-4 lg:px-10 lg:py-4 dark:bg-gray-700 dark:text-slate-400">
                            <h3 class="text-md font-semibold">Previous Chapter</h3>
                        </div>
                    <?php endif ?>

                    <?php if (isset($nextChLink)) : ?>
                        <div class="p-2 flex justify-center items-center rounded-md shdow-lg text-white bg-linear-to-bl from-primary to-secondary cursor-pointer ml-auto hover:scale-110 hover:opacity-90 transition duration-300 ease-in-out md:px-4 lg:px-10 lg:py-4" onclick="document.location.href = '<?= $nextChLink ?>'">
                            <h3 class="text-md font-semibold">Next Chapter</h3>
                        </div>
                    <?php else : ?>
                        <div class="p-2 flex justify-center items-center rounded-md shadow-lg bg-gray-200 md:px-4 lg:px-10 lg:py-4 dark:bg-gray-700 dark:text-slate-400">
                            <h3 class="text-md font-semibold">Next Chapter</h3>
                        </div>
                    <?php endif ?>
                </div>
            </div>
        </div>

        <div class="container w-full mb-10">
            <div class="mx-auto flex justify-center items-center">
                <a class="block p-3 w-fit rounded-full ring-secondary2 hover:bg-gray-300 transition duration-300 ease-in-out md:py-4 md:px-6" href="#head">
                    <svg class="w-[25px] h-[25px] fill-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M318 177.5c3.8-8.8 2-19-4.6-26l-136-144C172.9 2.7 166.6 0 160 0s-12.9 2.7-17.4 7.5l-136 144c-6.6 7-8.4 17.2-4.6 26S14.4 192 24 192l72 0 0 288c0 17.7 14.3 32 32 32l64 0c17.7 0 32-14.3 32-32l0-288 72 0c9.6 0 18.2-5.7 22-14.5z"/></svg>
                </a>
            </div>
        </div>
    </section>
    <script src="<?= base_url('assets/js/ch.js') ?>"></script>
</body>
</html>