<?php
$source = [
    "Kiryuu",
    "Komiku",
    "KomikIndo",
    "Komikcast",
    "Shinigami",
    "BacaKomik",
    "Mangaku",
    "Sekaikomik",
    "MirrorKomik",
    "GudangKomik",
    "Mangakyo",
    "Komikpedia",
    "ReadKomik",
    "KomikAss",
    "MangaWest",
];
?>

<section>
    <div class="flex justify-between items-center mb-3 uppercase">
        <h1 class="font-medium tracking-widest">Source</h1>
    </div>
    <div class="bg-primary-900 rounded p-4">
        <div class="flex flex-col text-primary-400 gap-3 text-md">
            <p>
                Berikut merupakan beberapa sumber komik yang digunakan untuk membangun <?php echo $project_name; ?>.
            </p>
            <p class="flex flex-wrap gap-1">
                <?php foreach ($source as $s): ?>
                    <span class="bg-accent-500 text-primary-900 px-2 py-0.5 rounded"> <?php echo $s; ?> </span>
                <?php endforeach; ?>
            </p>
            <p>
                Sumber diatas akan diupdate secara berkala.
            </p>
        </div>
    </div>
</section>