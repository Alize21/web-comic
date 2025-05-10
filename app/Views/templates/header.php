<!DOCTYPE html>
<html lang="css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/output.css') ?>">
    <title>Document</title>
</head>
<body>
    
<header class="w-full absolute left-0 top-0 flex items-center z-10 transition duration-500">
    <div class="container">
        <div class="flex items-center justify-between relative px-4 py-3">
            <div class="hidden fixed top-0 left-0 w-[100vw] h-[100vh] bg-opacity z-[999]" id="overlay"></div>
            <nav class="fixed w-[65%] h-[100vh] top-0 bottom-0 -left-full bg-white z-[1000] transition-all duration-500 ease-in-out" id="nav-menu">
                <ul class="px-4 py-2">
                    <li class="flex justify-between">
                        <a href="<?= base_url() ?>" class="font-semibold text-lg">Home</a>
                        <p id="close-nav">close</p>
                    </li>
                    <!-- will add more options in the future -->
                </ul>
            </nav>

            <div class="flex items-center">
                <button id="hamburger">
                    <span class="w-[10px] h-[2px] bg-primary my-1 block"></span>
                    <span class="w-[15px] h-[2px] bg-primary my-1 block"></span>
                    <span class="w-[20px] h-[2px] bg-primary my-1 block"></span>
                </button>

                <div class="px-4">
                    <!-- will change this in the future -->
                    <a href="<?= base_url() ?>">Page Name</a>
                </div>
            </div>
            
            <div>
                <!-- will change this in the future -->
                Search
            </div>
        </div>

        
    </div>
</header>