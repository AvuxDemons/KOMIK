<?php
$manga = array(
    array(
        'endpoint' => 'manga1',
        'thumbnail' => '/public/assets/images/goto.jpeg',
        'type' => array(
            'country' => 'jp',
            'isColored' => true,
            'isHot' => true,
            'isComplete' => false
        ),
        'title' => 'Manga Title 1',
        'chapter' => 'Chapter 1',
        'rating' => 4.5
    ),
    array(
        'endpoint' => 'manga2',
        'thumbnail' => '/public/assets/images/solo.jpeg',
        'type' => array(
            'country' => 'kr',
            'isColored' => false,
            'isHot' => false,
            'isComplete' => true
        ),
        'title' => 'Manga Title 2',
        'chapter' => 'Chapter 10',
        'rating' => 4.8
    ),

);

?>


<div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-2">
    <?php foreach ($manga as $item): ?>
        <div class="relative flex flex-1 flex-col p-3 bg-primary-900 rounded">
            <a href="/komik/<?php echo $item['endpoint']; ?>" class="relative">
                <div class="h-[250px] md:h-[210px] w-full overflow-hidden">
                    <img src="<?php echo $item['thumbnail']; ?>" alt="..." loading="lazy"
                        class="rounded transition hover:opacity-75 object-cover h-full w-full" placeholder="blur"
                        blurDataURL="/assets/image/placeholder.webp">
                </div>
                <div class="absolute top-2 right-2 w-full max-w-[30px] mx-auto aspect-[3/2]">
                    <img src="/public/assets/images/<?php echo $item['type']['country']; ?>.png" alt="..."
                        class="rounded shadow">
                </div>
                <?php if ($item['type']['isColored']): ?>
                    <p
                        class="absolute bottom-2 right-2 flex items-center gap-1 px-1 py-0.5 rounded bg-yellow-500 text-[10px] font-[600] text-primary-900">
                        <i class="fas fa-palette"></i> WARNA
                    </p>
                <?php endif; ?>
                <?php if ($item['type']['isHot']): ?>
                    <p
                        class="absolute bottom-2 left-2 flex items-center p-1 rounded-full bg-red-600 text-[15px] font-[600] text-white">
                        <i class="fas fa-fire"></i>
                    </p>
                <?php endif; ?>
                <?php if ($item['type']['isComplete']): ?>
                    <p
                        class="absolute bg-clip-border top-2 left-2 flex items-center rounded bg-red-500 px-1 py-0.5 text-[0.80em] font-medium text-white">
                        COMPLETED
                    </p>
                <?php endif; ?>
            </a>
            <div class="flex flex-col justify-between h-full gap-1 mt-2">
                <a href="/komik/<?php echo $item['endpoint']; ?>"
                    class="line-clamp-2 text-center text-sm font-[500] hover:text-primary-600 transition">
                    <?php echo $item['title']; ?>
                </a>
                <div class="flex flex-row justify-between text-[0.85em] text-primary-600">
                    <p><?php echo $item['chapter']; ?></p>
                    <p class="flex flex-row gap-1 items-center">
                        <?php echo $item['rating']; ?> <i class="fas fa-star"></i>
                    </p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>