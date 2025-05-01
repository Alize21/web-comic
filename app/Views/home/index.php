<section class="mx-auto my-5">
        <div class="container w-full p-5">
            <div class="border-t-2 border-slate-300 mb-4"></div>
            <div class="flex flex-wrap">
                <div class="flex gap-3 items-center">
                    <div>
                        <img src="<?= $data[0]["thumbnail"] ?>" alt="" width="90">
                    </div>
        
                    <div>
                        <h1 class="font-semibold mb-2 text-lg"><a href=""><?= $data[0]["title"] ?></a></h1>
    
                        <div>
                            <?php 
                                $komik = json_decode(file_get_contents($data[0]["detail_url"]), true);
                            ?>
                            <p class="p-1 mb-1 w-max bg-slate-200 text-sm rounded-sm shadow-sm">Chapter <?= $komik['data']['chapters'][0]["chapter"] ?></p>
                            <p class="p-1 mb-1 w-max bg-slate-200 text-sm rounded-sm shadow-sm">Chapter <?= $komik['data']['chapters'][1]["chapter"] ?></p>
                            <p class="p-1 mb-1 w-max bg-slate-200 text-sm rounded-sm shadow-sm">Chapter <?= $komik['data']['chapters'][2]["chapter"] ?></p>
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


