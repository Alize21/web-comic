<?php if ($comics == []) : ?>
    <div class="flex justify-start w-full text-slate-700 mt-24 pl-5 md:justify-center md:mt-28">
        <div class="font-bold text-2xl md:text-3xl bg-gray-200 rounded-md p-2 shadow-lg md:p-6">
            <h1>Data not found</h1>
            <h1>Please insert another title</h1>
        </div>
    </div>
<?php else : ?>
    <section class="my-5 flex flex-col items-start mt-20">
        <div class="text-black pl-5">
            <h2 class="font-semibold text-2xl md:text-3xl">Search query</h2>
        </div>
        <div class="container w-full px-5">
            <div class="w-full flex flex-wrap justify-center">
                <?php foreach ($comics as $comic) : ?>
                <?php $comicLink = base_url('komik/index/' . $comic['param'])?>
                <div class="mx-auto mb-7 w-full flex flex-wrap gap-3 items-center border-b-2 border-primary md:w-1/2 cursor-pointer" onclick="window.location.href='<?= $comicLink ?>'">
                    <div class="h-40 my-7 w-28 md:w-28 lg:w-44 lg:items-center  relative group lg:cursor-pointer overflow-hidden lg:h-60 hover:scale-110 transition duration-500 ease-in-out group">
                        <img src="<?= $comic["thumbnail"] ?>" alt="" class="w-full h-full transition ease-in duration-300 group-hover:brightness-50">
                    </div>
                    <div class="max-w-1/2 lg:max-w-[60%] lg:h-60">   
                        <h1 class="font-semibold mb-2 text-sm truncate max-h-20 max-w-[70%] text-wrap lg:max-w-full lg:text-lg "><a href="<?= $comicLink ?>" class="lg:block lg:mx-auto"><?= $comic["title"] ?></a></h1>
                        <div class="lg:w-fit lg:gap-4">
                            <p class="p-1 mb-1 w-max text-sm rounded-sm shadow-sm text-light font-semibold lg:mb-0" id="type"><?= $comic['type'] ?></p>
                            <p class="p-1 mb-1 w-max font-semibold bg-light text-sm rounded-sm shadow-sm lg:mb-0">Rating <?= $comic['rating'] ?></p>  
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
<?php endif ?>
<?php //var_dump($comics == []) ?>