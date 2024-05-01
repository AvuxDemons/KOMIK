<?php
$data = array(
    array(
        'endpoint' => 'manga1',
        'thumbnail' => '/public/assets/images/goto.jpeg',
        'title' => 'Manga Title 1',
        'type' => array(
            'country' => 'jp',
            'isColored' => true,
            'isHot' => false,
            'isComplete' => true
        ),
        'chapter' => 'Chapter 1',
        'rating' => 4.5
    ),
    array(
        'endpoint' => 'manga1',
        'thumbnail' => '/public/assets/images/goto.jpeg',
        'title' => 'Manga Title 1',
        'type' => array(
            'country' => 'jp',
            'isColored' => true,
            'isHot' => false,
            'isComplete' => true
        ),
        'chapter' => 'Chapter 1',
        'rating' => 4.5
    ),
    array(
        'endpoint' => 'manga1',
        'thumbnail' => '/public/assets/images/goto.jpeg',
        'title' => 'Manga Title 1',
        'type' => array(
            'country' => 'jp',
            'isColored' => true,
            'isHot' => false,
            'isComplete' => true
        ),
        'chapter' => 'Chapter 1',
        'rating' => 4.5
    ),
    array(
        'endpoint' => 'manga1',
        'thumbnail' => '/public/assets/images/goto.jpeg',
        'title' => 'Manga Title 1',
        'type' => array(
            'country' => 'jp',
            'isColored' => true,
            'isHot' => false,
            'isComplete' => true
        ),
        'chapter' => 'Chapter 1',
        'rating' => 4.5
    ),
    array(
        'endpoint' => 'manga1',
        'thumbnail' => '/public/assets/images/goto.jpeg',
        'title' => 'Manga Title 1',
        'type' => array(
            'country' => 'jp',
            'isColored' => true,
            'isHot' => false,
            'isComplete' => true
        ),
        'chapter' => 'Chapter 1',
        'rating' => 4.5
    ),
    array(
        'endpoint' => 'manga1',
        'thumbnail' => '/public/assets/images/goto.jpeg',
        'title' => 'Manga Title 1',
        'type' => array(
            'country' => 'jp',
            'isColored' => true,
            'isHot' => false,
            'isComplete' => true
        ),
        'chapter' => 'Chapter 1',
        'rating' => 4.5
    ),
    array(
        'endpoint' => 'manga1',
        'thumbnail' => '/public/assets/images/goto.jpeg',
        'title' => 'Manga Title 1',
        'type' => array(
            'country' => 'jp',
            'isColored' => true,
            'isHot' => false,
            'isComplete' => true
        ),
        'chapter' => 'Chapter 1',
        'rating' => 4.5
    ),
    array(
        'endpoint' => 'manga1',
        'thumbnail' => '/public/assets/images/goto.jpeg',
        'title' => 'Manga Title 1',
        'type' => array(
            'country' => 'jp',
            'isColored' => true,
            'isHot' => false,
            'isComplete' => true
        ),
        'chapter' => 'Chapter 1',
        'rating' => 4.5
    ),
    array(
        'endpoint' => 'manga1',
        'thumbnail' => '/public/assets/images/goto.jpeg',
        'title' => 'Manga Title 1',
        'type' => array(
            'country' => 'jp',
            'isColored' => true,
            'isHot' => false,
            'isComplete' => true
        ),
        'chapter' => 'Chapter 1',
        'rating' => 4.5
    ),
    array(
        'endpoint' => 'manga2',
        'thumbnail' => '/public/assets/images/solo.jpeg',
        'title' => 'Manga Title 2',
        'type' => array(
            'country' => 'kr',
            'isColored' => false,
            'isHot' => true,
            'isComplete' => false
        ),
        'chapter' => 'Chapter 2',
        'rating' => 4.8
    )
);
?>

<div class="flex justify-between items-center mb-3 uppercase">
        <h1 class="font-medium tracking-widest">Trending</h1>
</div>
<div class="swiper-container max-w-[1300px] overflow-hidden">
    <div class="swiper-wrapper">
        <?php foreach ($data as $id => $manga): ?>
                                                                    <div class="swiper-slide">
                                                                        <div class="relative flex flex-1 flex-col p-3 bg-primary-900 rounded h-full max-w-[190px] md:max-w-[210px]">
                                                                            <a href="/komik/<?php echo $manga['endpoint']; ?>" class="relative transition hover:opacity-75 transition">
                                                                                <div class="h-[225px] md:h-[250px] w-full overflow-hidden">
                                                                                    <img src="<?php echo $manga['thumbnail']; ?>" alt="..." loading="lazy" class="rounded transition hover:opacity-75 object-cover h-full w-full" placeholder="blur" blurDataURL="/assets/image/placeholder.webp">
                                                                                </div>
                                                                                <div class="absolute top-2 right-2 w-full max-w-[30px] mx-auto aspect-[3/2]">
                                                                                    <img
                                                                                        src="/public/assets/images/<?php echo $manga['type']['country']; ?>.png"
                                                                                        alt="..."
                                                                                        class="rounded shadow"
                                                                                    />
                                                                                </div>
                                                                                <?php if ($manga['type']['isColored']): ?>
                                                                                                                                                                                            <p class="absolute bottom-2 right-2 flex items-center gap-1 px-1 py-0.5 rounded bg-yellow-500 text-[10px] font-[600] text-primary-100">
                                                                                                                                                                                                <FaPalette /> WARNA
                                                                                                                                                                                            </p>
                                                                                <?php endif; ?>
                                                                                <?php if ($manga['type']['isHot']): ?>
                                                                                                                                                                                            <p class="absolute bottom-2 left-2 flex items-center p-1 rounded-full bg-red-600 text-[15px] font-[600] text-white">
                                                                                                                                                                                                <FaHotjar />
                                                                                                                                                                                            </p>
                                                                                <?php endif; ?>
                                                                                <?php if ($manga['type']['isComplete']): ?>
                                                                                                                                                                                            <p class="absolute bg-clip-border top-2 left-2 flex items-center rounded bg-red-500 px-1 py-0.5 text-[0.80em] font-medium text-white">
                                                                                                                                                                                                COMPLETED
                                                                                                                                                                                            </p>
                                                                                <?php endif; ?>
                                                                            </a>
                                                                            <div class="flex flex-col justify-between h-full gap-1 mt-2">
                                                                                <a href="/komik/<?php echo $manga['endpoint']; ?>" class="line-clamp-2 text-center text-sm font-[500] hover:text-primary-600 transition">
                                                                                    <?php echo $manga['title']; ?>
                                                                                </a>
                                                                                <div class="flex flex-row justify-between text-[0.85em] text-primary-600">
                                                                                    <p><?php echo $manga['chapter']; ?></p>
                                                                                    <p class="flex flex-row gap-1 items-center">
                                                                                        <span class="hidden md:block">Rating</span> <?php echo $manga['rating']; ?> <FaStar />
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
        <?php endforeach; ?>
    </div>
</div>

<script>
    var swiper = new Swiper(".swiper-container", {
      slidesPerView: 6,
      spaceBetween: 5,
      freeMode: true,
      pagination: {
        el: ".swiper-scrollbar",
        clickable: true,
      },
    });
  </script>