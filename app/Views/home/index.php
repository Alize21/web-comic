<section class=" my-5 flex justify-center">
    <div class="container w-full p-5">
        <div class="w-full flex flex-wrap justify-center">
            <?php foreach ($comics as $comic) : ?>
            <div class="mx-auto w-full flex flex-wrap gap-3 items-center border-t-2 border-sky-500 md:border-none md:w-1/2 lg:w-1/4 lg:block">
                <div class="my-7 w-24 md:w-28 lg:w-40 lg:items-center lg:mx-auto">
                    <img src="<?= $comic["thumbnail"] ?>" alt="" class="w-full">
                </div>
                <div class="lg:text-center lg:max-w-1/2 lg:mx-auto lg:h-20">   
                    <h1 class="font-semibold mb-2 text-sm truncate max-h-20 max-w-44 text-wrap lg:max-w-full lg:text-nowrap lg:mb-0"><a href="" class="lg:block lg:mx-auto"><?= $comic["title"] ?></a></h1>
                    <div class="lg:grid lg:place-items-center">
                        <p class="p-1 mb-1 w-max bg-primary text-sm rounded-sm shadow-sm text-secondary font-semibold lg:mb-0"><?= $comic['type'] ?></p>
                        <p class="p-1 mb-1 w-max bg-slate-200 text-sm rounded-sm shadow-sm lg:mb-0">Rating <?= $comic['rating'] ?></p>  
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</section>


