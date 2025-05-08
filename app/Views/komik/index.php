<section class="mb-20">
    <div class="container relative">
        <div class="w-full h-64 bg-no-repeat bg-top brightness-[0.25] bg-cover blur-xs" style="background-image: url(<?= $thumbnail ?>);">
        </div>

        <div class="w-full p-5 flex absolute top-14 gap-6 z-10">
            <div class="h-40 w-28 rounded-md overflow-hidden shrink-0">
                <img src="<?= $thumbnail ?>" alt="" class="w-full h-full">
            </div>
            <div class="text-white">
                <h1 class="font-bold overflow-ellipsis text-2xl line-clamp-2 max-h-18 leading-7 mb-3"><?= $title ?></h1>
                <h3 class="font-semibold text-lg capitalize"><?= $meta_info["author"] ?></h3>
                <h5 class="text-sm font-semibold capitalize"><?= $meta_info["status"] ?></h5>
            </div>           
        </div>

        <div class="container relative px-5">
            <div class="absolute -top-40 left-0 w-full h-32 bg-[linear-gradient(to_top,_white_3%,_transparent_100%)]"></div>

            <div class="w-full mt-10 z-10">
                <div class="flex gap-1 flex-wrap max-w-80">
                <?php foreach ($genres as $genre) : ?>
                    <a href="" class="block py-0.5 px-1.5 bg-linear-to-bl from-primary to-secondary rounded-md shadow-lg text-sm text-light font-semibold"><?= $genre ?></a>
                <?php endforeach ?>
                </div>
            </div>

            <div class="w-fit h-fit my-5">
                <p><?= $synopsis ?></p>
            </div>

            <div class="w-full max-h-screen mt-10 overflow-x-hidden overflow-scroll font-semibold">
                <?php foreach ($chapters as $chapter) : ?>
                    <?php $chapterLink =  base_url('komik/chapter/' . $chapter["slug"]) ?>
                    <div class="w-full py-2 px-3 flex justify-between border-b-2 border-b-primary hover:bg-linear-to-r hover:from-primary hover:to-secondary cursor-pointer group" onclick="window.location.href='<?= $chapterLink ?>'">
                        <a href="<?= $chapterLink ?>" class="transition-all duration-200 ease-in-out group-hover:text-light group-hover:scale-105">
                            <p >Chapter <?= $chapter["chapter"] ?></p> 
                        </a>

                        <a href="<?= $chapterLink ?>" class="transition-all duration-200 ease-in-out group-hover:text-light group-hover:scale-105">

                            <?= $chapter["release"] ?>
                        </a>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

        
    </div>
</section>