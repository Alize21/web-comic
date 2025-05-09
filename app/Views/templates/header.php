<!DOCTYPE html>
<html lang="css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/output.css') ?>">
    <title>Document</title>
</head>
<body>
    
<header class="w-full absolute left-0 top-0 flex items-center z-10 bg-white">
    <div class="container">
        <div class="flex items-center justify-between relative px-4 py-3">
            <div class="hidden fixed top-0 left-0 w-[100vw] h-[100vh] bg-opacity z-[99]" id="overlay"></div>
            <nav class="fixed w-[65%] top-0 bottom-0 -left-full bg-white z-[100] transition-all duration-500 ease-in-out" id="nav-menu">
                <ul>
                    <li>
                        <a href="<?= base_url() ?>">Home</a>
                    </li>
                </ul>
            </nav>

            <div class="flex items-center">
                <button id="hamburger">
                    <span class="w-[10px] h-[2px] bg-black my-1 block"></span>
                    <span class="w-[15px] h-[2px] bg-black my-1 block"></span>
                    <span class="w-[20px] h-[2px] bg-black my-1 block"></span>
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