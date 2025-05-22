<section class="mb-20 font-display dark:text-light">
    <div class="container mx-auto relative">
        <div class="w-full h-64 bg-no-repeat bg-top brightness-[0.25] bg-cover blur-xs md:h-72" style="background-image: url(<?= $thumbnail ?>);">
        </div>

        <div class="w-full p-5 flex absolute top-14 gap-6 z-[2] md:py-0">
            <div class="h-40 w-28 rounded-md overflow-hidden shrink-0 md:w-44 md:h-60 md:ml-7 lg:w-56 lg:h-72">
                <img src="<?= $thumbnail ?>" alt="" class="w-full h-full">
            </div>
            <div class="text-light">
                <h1 class="font-bold overflow-ellipsis text-2xl line-clamp-2 max-w-96 max-h-18 leading-7 mb-3 md:max-w-fit md:max-h-40 md:line-clamp-4 md:text-4xl md:leading-9"><?= $title ?></h1>
                <h3 class="font-semibold text-lg capitalize md:text-xl"><?= $meta_info["author"] ?></h3>
                <h5 class="text-sm font-semibold capitalize "><?= $meta_info["status"] ?></h5>
            </div>           
        </div>

        <div class="container relative px-5 lg:mt-20">
            <div class="absolute -top-40 left-0 w-full h-32 bg-[linear-gradient(to_top,_white_3%,_transparent_100%)] z-[1] md:hidden dark:bg-[linear-gradient(to_top,_#030712_3%,_transparent_100%)]"></div>

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
                    <?php $chapterLink =  base_url('komik/chapter/' . $param . '/' . $chapter["slug"]) ?>
                    <div class="w-full py-2 px-3 flex justify-between border-b-2 border-b-primary hover:bg-linear-to-r hover:from-primary hover:to-secondary active:bg-linear-to-r active:from-red-400 active:to-secondary cursor-pointer group" onclick="window.location.href='<?= $chapterLink ?>'">
                        <a href="<?= $chapterLink ?>" class="transition-all duration-200 ease-in-out group-hover:text-light group-hover:scale-105 group-active:text-light group-active:scale-105">
                            <p >Chapter <?= $chapter["chapter"] ?></p> 
                        </a>

                        <a href="<?= $chapterLink ?>" class="transition-all duration-200 ease-in-out group-hover:text-light group-hover:scale-105 group-active:text-light group-active:scale-105">
                            <?= $chapter["release"] ?>
                        </a>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

        
    </div>
</section>