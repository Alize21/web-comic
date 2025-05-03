<section class=" my-5 flex justify-center">
    <div class="container w-full p-5">
        <div class="w-full flex flex-wrap justify-center">
            <?php foreach ($comics as $comic) : ?>
            <div class="mx-auto mb-7 w-full flex flex-wrap gap-3 items-center border-t-2 border-sky-500 md:border-none md:w-1/2 lg:w-1/5 lg:block ">
                <div class="h-40 my-7 w-28 md:w-28 lg:w-44 lg:items-center lg:mx-auto relative group lg:cursor-pointer overflow-hidden hover:scale-110 transition duration-500 ease-in-out lg:h-56">
                    <img src="<?= $comic["thumbnail"] ?>" alt="" class="w-full h-full group-hover:brightness-50 transition ease-in duration-300">
                    <h1 class="hidden truncate max-h-44 text-light mx-auto transition ease-in-out duration-500 absolute top-full text-center text-lg font-bold  w-full text-wrap lg:block group-hover:-translate-y-full drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)]"><?= $comic["title"] ?></h1>
                </div>
                <div class="lg:text-center lg:max-w-36 lg:mx-auto">   
                    <h1 class="font-semibold mb-2 text-sm truncate max-h-20 max-w-44 text-wrap lg:hidden"><a href="" class="lg:block lg:mx-auto"><?= $comic["title"] ?></a></h1>
                    <div class="lg:flex lg:w-fit lg:gap-4">
                        <p class="p-1 mb-1 w-max text-sm rounded-sm shadow-sm text-light font-semibold lg:mb-0" id="type"><?= $comic['type'] ?></p>
                        <p class="p-1 mb-1 w-max font-semibold bg-light text-sm rounded-sm shadow-sm lg:mb-0">Rating <?= $comic['rating'] ?></p>  
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</section>


