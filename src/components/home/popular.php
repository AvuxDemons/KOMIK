<?php
$data = array(
    array(
        'endpoint' => 'manga1',
        'background' => '/public/assets/images/banner.jpeg',
        'thumbnail' => '/public/assets/images/wanpis.jpeg',
        'title' => 'Manga Title 1',
        'chapter' => 'Chapter 1',
        'description' => 'Description of Manga 1',
        'genres' => array(
            array('endpoint' => 'genre1', 'label' => 'Genre 1'),
            array('endpoint' => 'genre2', 'label' => 'Genre 2')
        )
    ),
    array(
        'endpoint' => 'manga2',
        'background' => '/public/assets/images/banner.jpeg',
        'thumbnail' => '/public/assets/images/wanpis.jpeg',
        'title' => 'Manga Title 2',
        'chapter' => 'Chapter 2',
        'description' => 'Description of Manga 2',
        'genres' => array(
            array('endpoint' => 'genre3', 'label' => 'Genre 3'),
            array('endpoint' => 'genre4', 'label' => 'Genre 4')
        )
    ),
    array(
        'endpoint' => 'manga3',
        'background' => '/public/assets/images/banner.jpeg',
        'thumbnail' => '/public/assets/images/wanpis.jpeg',
        'title' => 'Manga Title 3',
        'chapter' => 'Chapter 3',
        'description' => 'Description of Manga 2',
        'genres' => array(
            array('endpoint' => 'genre3', 'label' => 'Genre 3'),
            array('endpoint' => 'genre4', 'label' => 'Genre 4')
        )
    )
);
?>

<div id="mySwiper" class="swiper-container rounded-lg">
    <div class="swiper-wrapper">
        <?php foreach ($data as $id => $manga): ?>
                                        <div class="swiper-slide flex justify-center max-h-[450px] max-w-[1000px] rounded-lg">
                                            <div style="background-image: url(<?php echo $manga['background']; ?>); background-size: cover; background-position: center;" class="rounded-lg w-full">
                                                <div class="flex h-[200px] md:h-[400px] bg-black/60 px-4 py-6 md:gap-12 gap-4 rounded-lg-lg">
                                                    <div class="flex justify-end min-w-[30%]">
                                                        <a href="/komik/<?php echo $manga['endpoint']; ?>" class="hover:scale-105 transition">
                                                            <img
                                                                src="<?php echo $manga['thumbnail']; ?>"
                                                                width="300"
                                                                height="350"
                                                                alt="..."
                                                                class="md:max-h-[350px] md:max-w-[250px] max-h-[180px] max-w-[100px] object-cover rounded-lg shadow-md shadow-primary-300"
                                                            />
                                                        </a>
                                                    </div>
                                                    <div class="my-auto min-w-[60%]">
                                                        <div class="flex flex-col gap-3 items-center">
                                                            <div class="flex flex-col justify-center">
                                                                <a href="/komik/<?php echo $manga['endpoint']; ?>" class="text-white text-lg md:text-2xl font-medium tracking-wide transition hover:scale-105 text-center"><?php echo $manga['title']; ?></a>
                                                                <p class="flex flex-row items-center font-medium text-[0.8rem] md:text-sm text-white tracking-wider justify-center">Chapter <?php echo $manga['chapter']; ?></p>
                                                            </div>
                                                            <p class="text-white text-sm font-medium hidden md:flex"><?php echo $manga['description']; ?></p>
                                                            <div class="md:flex flex-wrap justify-center gap-2 hidden">
                                                                <?php foreach ($manga['genres'] as $genre): ?>
                                                                                                            <a href="/genre/<?php echo $genre['endpoint']; ?>" class="text-white text-xs font-medium border rounded px-1 py-0.5 transition hover:scale-110 hover:bg-white hover:text-black"><?php echo $genre['label']; ?></a>
                                                                <?php endforeach; ?>
                                                            </div>
                                                            <a href="/komik/<?php echo $manga['endpoint']; ?>" class="flex flex-row justify-center items-center gap-2 px-4 py-2 text-sm font-medium rounded-lg mx-auto bg-primary-300 transition hover:scale-105 hover:bg-primary-100"><fa.FaBookOpen /> Mulai Baca</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
        <?php endforeach; ?>
    </div>
    <div class="swiper-pagination"></div>
</div>

<script>
    var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        loop: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        speed: 1500,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
        }
    });
</script>
