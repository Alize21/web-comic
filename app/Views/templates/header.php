<!DOCTYPE html>
<html lang="css" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/output.css') ?>">
    <!-- swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <title>Document</title>
    <script>
        if (!localStorage.getItem('theme')) {
            if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
                localStorage.setItem('theme', 'dark')
            } else {
                localStorage.setItem('theme', 'light')
            }
        }

        if (localStorage.getItem('theme') === 'dark') {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
</head>
<body class="dark:bg-dark" id="head">

<!-- prevent blind color at 'search' method (currently disabled)-->
<?php 
// if (isset($searchPage)) {

//     $textColor = 'black';
//     $svgColor = 'black';
// } else {
//     $textColor = 'oklch(51.1% 0.262 276.966)';
//     $svgColor = 'white';
// }

?>
<header class="w-full absolute left-0 top-0 flex items-center z-10 transition duration-500 font-display" >
    <div class="container relative">
        <div class="flex items-center justify-between relative px-4 py-3 md:px-6 md:py-4 bg">
            <div class="hidden fixed top-0 left-0 w-[100vw] h-[100vh] bg-opacity z-[999]" id="overlay"></div>
            <nav class="fixed w-72 h-[100vh] top-0 bottom-0 -left-full bg-white z-[1000] transition-all duration-500 ease-in-out text-primary dark:bg-dark dark:text-light" id="nav-menu">
                <ul class="px-4 py-2 font-semibold">
                    <li class="flex justify-between md:hidden">
                        <a href="<?= base_url() ?>" class="font-semibold text-lg">Home</a>
                        <div class="p-2 cursor-pointer hover:bg-gray-200 hover:shadow-lg rounded-full transition duration-300 dark:hover:bg-primary" id="close-nav">
                            <svg class="w-[18px] h-[18px] dark:fill-light" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
                        </div>
                    </li>
                    <!-- will add more options in the future -->
                    <!-- <li>Bookmark</li>
                    <li>Genres</li> -->
                </ul>
            </nav>

            <div class="flex items-center">
                <button id="hamburger" class="md:hidden">
                    <span class="w-[10px] h-[2px] bg-primary my-1 block"></span>
                    <span class="w-[15px] h-[2px] bg-primary my-1 block"></span>
                    <span class="w-[20px] h-[2px] bg-primary my-1 block"></span>
                </button>

                <div class="px-4 text-primary">
                    <!-- will change this in the future -->
                    <a href="<?= base_url() ?>">Page Name</a>
                </div>
            </div>

            
            <div class="flex items-center md:w-fit md:justify-between md:items-center gap-2 text-primary">
                <!-- <nav class="hidden md:block md:font-semibold" id="nav-menu">
                    <ul class="flex gap-2">
                        <li>Bookmark</li>
                        <li>Genres</li>
                        will add more options in the future
                    </ul>
                </nav> -->
                <div class="md:hidden p-2 rounded-lg bg-gray-200 cursor-pointer" id="searchButton">
                    <svg class="w-[15px] h-[15px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
                </div>

                <!-- > md display -->
                <div>
                    <form class="hidden md:flex w-full items-center gap-1.5 border-2 border-secondary2 rounded-md backdrop-blur-lg" action="<?= base_url('home/search') ?>" method="get">
                        <input class="w-full h-full rounded-md px-2 placeholder:text-sm focus:outline-0 focus:border-none" type="text" placeholder="Search comic..." name="q" autocomplete="off" >
                        <button type="submit" class="p-2 rounded-lg cursor-pointer">
                            <svg class="w-[15px] h-[15px] xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
                        </button>
                    </form>
                </div>  

                <div class="flex justify-center">
                    <input type="checkbox" id="darkMode" class="hidden">
                    <label for="darkMode" class="flex justify-center relative">
                        <div class="w-14 h-6 bg-slate-500 rounded-full flex items-center">
                            <svg class="fill-yellow-300 h-4 w-4 absolute left-[5px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M361.5 1.2c5 2.1 8.6 6.6 9.6 11.9L391 121l107.9 19.8c5.3 1 9.8 4.6 11.9 9.6s1.5 10.7-1.6 15.2L446.9 256l62.3 90.3c3.1 4.5 3.7 10.2 1.6 15.2s-6.6 8.6-11.9 9.6L391 391 371.1 498.9c-1 5.3-4.6 9.8-9.6 11.9s-10.7 1.5-15.2-1.6L256 446.9l-90.3 62.3c-4.5 3.1-10.2 3.7-15.2 1.6s-8.6-6.6-9.6-11.9L121 391 13.1 371.1c-5.3-1-9.8-4.6-11.9-9.6s-1.5-10.7 1.6-15.2L65.1 256 2.8 165.7c-3.1-4.5-3.7-10.2-1.6-15.2s6.6-8.6 11.9-9.6L121 121 140.9 13.1c1-5.3 4.6-9.8 9.6-11.9s10.7-1.5 15.2 1.6L256 65.1 346.3 2.8c4.5-3.1 10.2-3.7 15.2-1.6zM160 256a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zm224 0a128 128 0 1 0 -256 0 128 128 0 1 0 256 0z"/></svg>
                            <div class="w-5 h-5 bg-white rounded-full mx-1 toggle-circle transition duration-300 ease-in-out"></div>
                            <svg class="fill-blue-400 h-4 w-4 absolute right-[5px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M223.5 32C100 32 0 132.3 0 256S100 480 223.5 480c60.6 0 115.5-24.2 155.8-63.4c5-4.9 6.3-12.5 3.1-18.7s-10.1-9.7-17-8.5c-9.8 1.7-19.8 2.6-30.1 2.6c-96.9 0-175.5-78.8-175.5-176c0-65.8 36-123.1 89.3-153.3c6.1-3.5 9.2-10.5 7.7-17.3s-7.3-11.9-14.3-12.5c-6.3-.5-12.6-.8-19-.8z"/></svg>
                        </div>
                    </label>
                </div>
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