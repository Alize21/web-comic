<section class="font-display">
    <div class="relative overflow-x-auto flex whitespace-nowrap snap-x scrollbar-hidden md:h-[65vh] swiper mySwiper">

        <div class="block absolute text-light z-[5] top-10 left-6 md:left-12 md:top-18 lg:hidden">
            <h2 class="font-semibold text-2xl">Popular</h2>
        </div>

        <div class="swiper-wrapper">
            <?php foreach ($popularComics as $popularComic) : ?>
            <?php $popularComicLink = base_url('komik/index/' . $popularComic['param']) ?>
            <div class="swiper-slide cursor-pointer" onclick="window.location.href='<?= $popularComicLink ?>'">
                <div class="container mx-auto snap-center h-[45vh] md:h-full">
                    <div class="w-[100vw] h-full bg-no-repeat bg-top brightness-[0.25] bg-cover" style="background-image: url(<?= $popularComic["thumbnail"] ?>);">
                    </div>

                    <div class="w-full p-5 flex absolute top-14 gap-6 z-[20] md:py-0 md:mt-14">
                        <div class="h-40 w-28 rounded-md shrink-0 md:w-44 md:h-64 md:ml-7 lg:w-56 lg:h-72">
                            <img src="<?= $popularComic["thumbnail"] ?>" alt="" class="w-full h-full">
                        </div>
                        <div class="text-light max-w-1/2">
                            <h1 class="font-bold text-2xl text-wrap line-clamp-3 leading-8  md:max-w-fit md:max-h-40 md:line-clamp-4 md:text-4xl md:leading-9"><?= $popularComic["title"] ?></h1>
                        </div>           
                    </div>
                    
                    <div class="absolute bottom-0 left-0 w-[1000vh] h-32 bg-[linear-gradient(to_top,_white_3%,_transparent_100%)] md:bg-[linear-gradient(to_top,_white_1%,_transparent_100%)] md:h-1/2 pointer-events-none"></div>
                </div>
            </div>
            <?php endforeach ?>
        </div>

    </div>
</section>

<section class="my-5 flex flex-col items-start font-display">
    <div class="text-black pl-5">
        <h2 class="font-semibold text-2xl md:text-3xl">Latest update</h2>
    </div>
    <div class="container w-full px-5">
        <div class="w-full flex flex-wrap justify-center">
            <?php foreach ($comics as $comic) : ?>
            <?php $comicLink = base_url('komik/index/' . $comic['param'])?>
            <div class="mx-auto mb-7 w-full flex flex-wrap gap-3 items-center border-b-2 border-primary md:border-none md:w-1/2 lg:w-1/5 lg:block cursor-pointer" onclick="window.location.href='<?= $comicLink ?>'">
                <div class="h-40 my-7 w-28 md:w-28 lg:w-44 lg:items-center lg:mx-auto relative group lg:cursor-pointer overflow-hidden hover:scale-110 transition duration-500 ease-in-out lg:h-56">
                    <img src="<?= $comic["thumbnail"] ?>" alt="" class="w-full h-full group-hover:brightness-50 transition ease-in duration-300">
                    <h1 class="hidden truncate max-h-44 text-light mx-auto transition ease-in-out duration-500 absolute top-full text-center text-lg font-bold  w-full text-wrap lg:block group-hover:-translate-y-full drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)]"><?= $comic["title"] ?></h1>
                </div>
                <div class="lg:text-center lg:max-w-36 lg:mx-auto">   
                    <h1 class="font-semibold mb-2 text-sm truncate max-h-20 max-w-44 text-wrap lg:hidden"><a href="<?= $comicLink ?>" class="lg:block lg:mx-auto"><?= $comic["title"] ?></a></h1>
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

<!-- swiper -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        autoplay: {
            delay: 3000,
        },
        // loop: true,
        on: {
            slideChange: function () {
            const isFirst = swiper.activeIndex === 0;
            const isLast = swiper.activeIndex === swiper.slides.length - 1;

            swiper.allowSlidePrev = !isFirst;
            swiper.allowSlideNext = !isLast; 
            }
        }
    });
</script>
