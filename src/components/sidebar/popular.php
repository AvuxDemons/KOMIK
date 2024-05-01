<?php
$data = array(
    array(
        'endpoint' => 'manga1',
        'thumbnail' => '/public/assets/images/goto.jpeg',
        'title' => 'Manga Title 1',
        'rating' => 4.5,
        'genres' => array(
            array('endpoint' => 'genre1', 'label' => 'Genre 1'),
            array('endpoint' => 'genre2', 'label' => 'Genre 2')
        )
    ),
    array(
        'endpoint' => 'manga2',
        'thumbnail' => '/public/assets/images/solo.jpeg',
        'title' => 'Manga Title 2',
        'rating' => 4.8,
        'genres' => array(
            array('endpoint' => 'genre3', 'label' => 'Genre 3'),
            array('endpoint' => 'genre4', 'label' => 'Genre 4')
        )
    ),
    array(
        'endpoint' => 'manga2',
        'thumbnail' => '/public/assets/images/goto.jpeg',
        'title' => 'Manga Title 3',
        'rating' => 4.8,
        'genres' => array(
            array('endpoint' => 'genre3', 'label' => 'Genre 3'),
            array('endpoint' => 'genre4', 'label' => 'Genre 4')
        )
    ),
    array(
        'endpoint' => 'manga2',
        'thumbnail' => '/public/assets/images/solo.jpeg',
        'title' => 'Manga Title 4',
        'rating' => 4.8,
        'genres' => array(
            array('endpoint' => 'genre3', 'label' => 'Genre 3'),
            array('endpoint' => 'genre4', 'label' => 'Genre 4')
        )
    ),
    array(
        'endpoint' => 'manga2',
        'thumbnail' => '/public/assets/images/goto.jpeg',
        'title' => 'Manga Title 2',
        'rating' => 4.8,
        'genres' => array(
            array('endpoint' => 'genre3', 'label' => 'Genre 3'),
            array('endpoint' => 'genre4', 'label' => 'Genre 4')
        )
    ),
);

?>

<div class="flex w-full flex-col gap-2">
            <?php foreach ($data as $index => $manga): ?>
                                    <div class="p-3 bg-primary-900 rounded gap-2 relative">
                                        <div class="absolute font-bold top-2 right-5 text-5xl opacity-10">
                                            <?php echo $index + 1; ?>
                                        </div>
                                        <div class="relative flex space-x-3 rounded transition">
                                            <div class="flex-shrink-0">
                                                <a href="/komik/<?php echo $manga['endpoint']; ?>">
                                                    <img src="<?php echo $manga['thumbnail']; ?>" alt="..." loading="lazy" class="h-[125px] w-[90px] rounded lg:h-[100px] lg:w-[75px] hover:opacity-75 transition">
                                                </a>
                                            </div>
                                            <div class="min-w-0 flex-1">
                                                <div class="flex flex-col focus:outline-none gap-1">
                                                    <a href="/komik/<?php echo $manga['endpoint']; ?>" class="verflow-hidden truncate w-full max-w-[160px] md:max-w-[220px] text-sm font-medium transition hover:text-primary-600 truncate">
                                                        <?php echo $manga['title']; ?>
                                                    </a>
                                                    <div class="flex items-center gap-2">
                                                        <div class="flex">
                                                            <?php
                                                            for ($i = 0; $i < 5; $i++) {
                                                                $class = $i < ($manga['rating'] / 2) ? 'text-primary-700' : 'text-primary-300';
                                                                echo "<i class='fas fa-star $class'></i>";
                                                            }
                                                            ?>
                                                        </div>
                                                        <p class="font-medium text-sm text-primary-900"><?php echo $manga['rating']; ?></p>
                                                    </div>
                                                    <p class="flex flex-wrap font-medium text-xs gap-[5px] overflow-hidden truncate max-h-[60px] leading-[10px]"> Genres :
                                                        <?php foreach ($manga['genres'] as $genre): ?>
                                                                                                                <a href="/genre/<?php echo $genre['endpoint']; ?>" class="text-primary-600 text-[0.75rem] transition hover:text-white"><?php echo $genre['label']; ?></a>
                                                        <?php endforeach; ?>
                                                    </p>
                                                </div>
                                            </div>
                                    </div>
                                </div>
            <?php endforeach; ?>
</div>
