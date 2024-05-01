<?php
$data = [
    [
        'type' => ['country' => 'kr', 'isHot' => true, 'isNew' => false],
        'endpoint' => 'manga1',
        'title' => 'Manga Title 1',
        'thumbnail' => '/public/assets/images/goto.jpeg',
        'chapter' => [
            ['endpoint' => 'chapter2', 'chapter' => 2, 'updated' => '1 days ago'],
            ['endpoint' => 'chapter1', 'chapter' => 1, 'updated' => '2 weeks ago'],
        ]
    ],
    [
        'type' => ['country' => 'jp', 'isHot' => false, 'isNew' => true],
        'endpoint' => 'manga2',
        'title' => 'Manga Title 2',
        'thumbnail' => '/public/assets/images/solo.jpeg',
        'chapter' => [
            ['endpoint' => 'chapter5', 'chapter' => 5, 'updated' => '2 days ago'],
            ['endpoint' => 'chapter4', 'chapter' => 4, 'updated' => '1 weeks ago'],
            ['endpoint' => 'chapter3', 'chapter' => 3, 'updated' => '3 weeks ago'],
        ]
    ],
];
?>

<div>
    <div class="flex justify-between items-center mb-3 uppercase">
        <h1 class="font-medium tracking-widest">Update</h1>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-3">
        <?php foreach ($data as $id => $manga) { ?>
            <div class="flex flex-1 flex-col p-3 bg-primary-900 rounded">
                <div class="flex flex-row justify-between items-center pb-2 gap-1">
                    <img src="/public/assets/images/<?php echo $manga['type']['country']; ?>.png" width="100" height="100"
                        alt="..." class="w-6 h-4" />
                    <a href="/komik/<?php echo $manga['endpoint']; ?>"
                        class="w-full text-sm font-medium text-primary-400 transition hover:text-primary-200 transition-all truncate">
                        <p class="overflow-hidden truncate max-w-[250px]"><?php echo $manga['title']; ?></p>
                    </a>
                </div>
                <div class="relative flex space-x-3 h-full rounded transition">
                    <a href="/komik/<?php echo $manga['endpoint']; ?>"
                        class="relative w-full max-w-[90px] min-h-[120px] mx-auto aspect-[3/2] rounded overflow-hidden">
                        <img src="<?php echo $manga['thumbnail']; ?>" alt="..." loading="lazy"
                            class="h-[150px] w-[91px] rounded hover:opacity-75 transition object-cover" placeholder="blur"
                            blurDataURL="/public/assets/images/placeholder.webp" />
                        <?php if ($manga['type']['isHot']): ?>
                            <div class="absolute inset-x-0 top-0 flex items-start justify-start overflow-hidden rounded-b p-1">
                                <p
                                    class="relative inline-flex items-center rounded bg-red-600 px-1 py-0.8 text-[11px] font-[600] uppercase">
                                    H</p>
                            </div>
                        <?php endif; ?>
                        <?php if ($manga['type']['isNew']): ?>
                            <div class="absolute inset-x-0 top-0 flex items-start justify-end overflow-hidden rounded-b p-1">
                                <p
                                    class="relative inline-flex items-center rounded bg-orange-600 px-1 py-0.8 text-[11px] font-[600] uppercase">
                                    N</p>
                            </div>
                        <?php endif; ?>
                    </a>
                    <div class="min-w-0 flex-1">
                        <div class="flex flex-col focus:outline-none gap-1">
                            <?php foreach ($manga['chapter'] as $chapter): ?>
                                <a href="/chapter/<?php echo $chapter['endpoint']; ?>"
                                    class="visited flex flex-row justify-between items-center rounded text-center border border-primary-300 px-2 py-2.5 sm:px-2 sm:py-2.5 text-xs font-medium text-primary-400 hover:text-primary-400 hover:bg-white/20 transition visited:text-primary-300">
                                    <p>Ch. <?php echo $chapter['chapter']; ?></p>
                                    <p class="text-primary-400"><?php echo $chapter['updated']; ?></p>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>

    <?php $last = 10; ?>

    <div class="mt-6">
        <div class="flex justify-center items-center text-sm">
            <button
                class="flex flex-row items-center gap-2 rounded-l-lg px-3 py-2 font-medium tracking-wide bg-primary-900 text-primary-400 border border-primary-600 hover:text-primary-700 hover:bg-primary-200 transition">
                <i class="fas fa-angle-left"></i> Prev
            </button>
            <div class="flex flex-row px-5 py-2 text-center bg-primary-900 border border-primary-600 font-medium">
                <input type="number" class="w-[40px] text-center border-none outline-none bg-primary-900" value="1" />
                <p class="text-primary-600 px-1">of</p>
                <span><?php echo $last; ?></span>
            </div>
            <button
                class="flex flex-row items-center gap-2 rounded-r-lg px-3 py-2 font-medium tracking-wide bg-primary-900 text-primary-400 border border-primary-600 hover:text-primary-700 hover:bg-primary-200 transition">
                Next <i class="fas fa-angle-right"></i>
            </button>
        </div>
    </div>

</div>