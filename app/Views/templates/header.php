<!DOCTYPE html>
<html lang="css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/output.css') ?>">
    <!-- swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <title>Document</title>
</head>
<body>

<!-- prevent blind color at 'search' method -->
<?php 
if (isset($searchPage)) {

    $textColor = 'black';
    $svgColor = 'black';
} else {
    $textColor = 'oklch(51.1% 0.262 276.966)';
    $svgColor = 'white';
}

?>
<header class="w-full absolute left-0 top-0 flex items-center z-10 transition duration-500 " style="color: <?= $textColor ?>;">
    <div class="container relative">
        <div class="flex items-center justify-between relative px-4 py-3 md:px-6 md:py-4">
            <div class="hidden fixed top-0 left-0 w-[100vw] h-[100vh] bg-opacity z-[999]" id="overlay"></div>
            <nav class="fixed w-72 h-[100vh] top-0 bottom-0 -left-full bg-white z-[1000] transition-all duration-500 ease-in-out" id="nav-menu">
                <ul class="px-4 py-2 font-semibold">
                    <li class="flex justify-between md:hidden">
                        <a href="<?= base_url() ?>" class="font-semibold text-lg">Home</a>
                        <div class="p-2 cursor-pointer hover:bg-gray-200 hover:shadow-lg rounded-full transition duration-300" id="close-nav">
                            <svg class="w-[18px] h-[18px] xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
                        </div>
                    </li>
                    <li>Bookmark</li>
                    <li>Genres</li>
                    <!-- will add more options in the future -->
                </ul>
            </nav>

            <div class="flex items-center">
                <button id="hamburger" class="md:hidden">
                    <span class="w-[10px] h-[2px] bg-primary my-1 block"></span>
                    <span class="w-[15px] h-[2px] bg-primary my-1 block"></span>
                    <span class="w-[20px] h-[2px] bg-primary my-1 block"></span>
                </button>

                <div class="px-4">
                    <!-- will change this in the future -->
                    <a href="<?= base_url() ?>">Page Name</a>
                </div>
            </div>

            
            <div class="md:flex md:min-w-1/3 md:justify-between md:items-center gap-2">
                <nav class="hidden md:block md:font-semibold" id="nav-menu">
                    <ul class="flex gap-2">
                        <li>Bookmark</li>
                        <li>Genres</li>
                        <!-- will add more options in the future -->
                    </ul>
                </nav>
                 <div class="md:hidden p-2 rounded-lg bg-gray-200 cursor-pointer" id="searchButton">
                     <svg class="w-[15px] h-[15px] xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
                 </div>

                <!-- > md display -->          
                <form class="hidden md:flex w-full items-center gap-1.5 border-2 border-secondary2 rounded-md backdrop-blur-lg" action="<?= base_url('home/search') ?>" method="get">
                    <input class="w-full h-full rounded-md px-2 placeholder:text-sm focus:outline-0 focus:border-none" type="text" placeholder="Search comic..." name="q" autocomplete="off" style="color: <?= $svgColor ?>;">
                    <button type="submit" class="p-2 rounded-lg cursor-pointer">
                        <svg style="fill: <?= $svgColor ?>;" class="w-[15px] h-[15px] xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
                    </button>
                </form>
            </div>
        </div>
        <!-- <= sm display -->
        <form class="pointer-events-none opacity-0 items-center px-4 absolute top-0 left-0 gap-1.5 w-full h-12 bg-white z-[999] transition duration-300 ease-in-out" id="form" action="<?= base_url('home/search') ?>" method="get">
            <input class="w-full h-[60%] border border-primary rounded-md px-2 placeholder:text-sm focus:outline-0 focus:border-2 focus:border-secondary2 transition duration-300" type="text" placeholder="Search comic..." name="q" autocomplete="off">
            <button type="submit" class="p-2 rounded-lg bg-gray-200 cursor-pointer">
                <svg class="w-[15px] h-[15px] xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
            </button>
            <div class="p-2 cursor-pointer hover:bg-gray-200 hover:shadow-lg rounded-full transition duration-300" id="close-search">
                <svg class="w-[18px] h-[18px] xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
            </div>
        </form>
        
    </div>
</header>