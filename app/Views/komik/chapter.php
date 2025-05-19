<!DOCTYPE html>
<html lang="css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/output.css') ?>">
    <title>Document</title>
</head>
<body>
  
    <section class="container mt-10 mx-auto">
        <div class="mx-auto px-6">
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
                        <div class="p-2 flex justify-center items-center rounded-md shdow-lg bg-gray-200 md:px-4 lg:px-10 lg:py-4">
                            <h3 class="text-md font-semibold">Previous Chapter</h3>
                        </div>
                    <?php endif ?>

                    <?php if (isset($nextChLink)) : ?>
                        <div class="p-2 flex justify-center items-center rounded-md shdow-lg text-white bg-linear-to-bl from-primary to-secondary cursor-pointer ml-auto hover:scale-110 hover:opacity-90 transition duration-300 ease-in-out  md:px-4 lg:px-10 lg:py-4" onclick="document.location.href = '<?= $nextChLink ?>'">
                            <h3 class="text-md font-semibold">Next Chapter</h3>
                        </div>
                    <?php else : ?>
                        <div class="p-2 flex justify-center items-center rounded-md shdow-lg bg-gray-200 md:px-4 lg:px-10 lg:py-4">
                            <h3 class="text-md font-semibold">Next Chapter</h3>
                        </div>
                    <?php endif ?>
                </div>
            </div>
        </div>

        <div class="container w-full mx-auto mb-10">
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
                        <div class="p-2 flex justify-center items-center rounded-md shdow-lg bg-gray-200 md:px-4 lg:px-10 lg:py-4">
                            <h3 class="text-md font-semibold">Previous Chapter</h3>
                        </div>
                    <?php endif ?>

                    <?php if (isset($nextChLink)) : ?>
                        <div class="p-2 flex justify-center items-center rounded-md shdow-lg text-white bg-linear-to-bl from-primary to-secondary cursor-pointer ml-auto hover:scale-110 hover:opacity-90 transition duration-300 ease-in-out md:px-4 lg:px-10 lg:py-4" onclick="document.location.href = '<?= $nextChLink ?>'">
                            <h3 class="text-md font-semibold">Next Chapter</h3>
                        </div>
                    <?php else : ?>
                        <div class="p-2 flex justify-center items-center rounded-md shdow-lg bg-gray-200 md:px-4 lg:px-10 lg:py-4">
                            <h3 class="text-md font-semibold">Next Chapter</h3>
                        </div>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </section>
    <script src="<?= base_url('assets/js/ch.js') ?>"></script>
</body>
</html>