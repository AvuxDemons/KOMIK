<?php
$data = array(
    array(
        'endpoint' => 'manga1',
        'thumbnail' => '/public/assets/images/goto.jpeg',
        'title' => 'Manga Title 1',
        'genres' => array(
            array('endpoint' => 'genre1', 'label' => 'Genre 1'),
            array('endpoint' => 'genre2', 'label' => 'Genre 2')
        ),
        'date' => '2024-04-30'
    ),
    array(
        'endpoint' => 'manga2',
        'thumbnail' => '/public/assets/images/solo.jpeg',
        'title' => 'Manga Title 2',
        'genres' => array(
            array('endpoint' => 'genre3', 'label' => 'Genre 3'),
            array('endpoint' => 'genre4', 'label' => 'Genre 4')
        ),
        'date' => '2024-04-30'
    )
);
?>

<div class="flex flex-col gap-3">
    <?php foreach ($data as $id => $manga): ?>
                            <div class="flex flex-1 flex-col p-3 bg-primary-900 rounded gap-2">
                                <div class="relative flex space-x-3 rounded transition">
                                    <div class="flex-shrink-0">
                                        <a href="/komik/<?php echo $manga['endpoint']; ?>">
                                            <img
                                                src="<?php echo $manga['thumbnail']; ?>"
                                                alt="..."
                                                loading="lazy"
                                                class="h-[125px] w-[90px] rounded lg:h-[100px] lg:w-[75px] hover:opacity-75 transition"
                                            />
                                        </a>
                                    </div>
                                    <div class="min-w-0 flex-1">
                                        <div class="flex flex-col focus:outline-none gap-1">
                                            <a href="/komik/<?php echo $manga['endpoint']; ?>" class="w-full text-sm font-medium transition hover:text-primary-600 truncate">
                                                <p class="overflow-hidden truncate max-w-[250px]">
                                                    <?php echo $manga['title']; ?>
                                                </p>
                                            </a>
                                            <p class="flex flex-wrap font-medium text-xs gap-[5px] overflow-hidden truncate max-h-[60px] leading-[15px]">Genres:
                                                <?php foreach ($manga['genres'] as $genre): ?>
                                                                        <a href="/genre/<?php echo $genre['endpoint']; ?>" class="text-primary-600 text-[0.75rem] transition hover:text-primary-900">
                                                                            <?php echo $genre['label']; ?>
                                                                        </a>
                                                <?php endforeach; ?>
                                            </p>
                                            <p class="text-primary-600 text-[0.75rem]"><?php echo $manga['date']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
    <?php endforeach; ?>
</div>
