<section>
    <div class="flex justify-between items-center mb-3 uppercase">
        <h1 class="font-medium tracking-widest">About</h1>
    </div>
    <div class="bg-primary-900 rounded p-4 text-primary-400">
        <p class="text-lg font-medium tracking-widest mb-2"><?php echo $project_name ?> <span class="text-md"> - </span><span class="text-primary-400"><?php echo $project_subname ?></span></p>
        <div class="flex flex-col gap-6 text-md">
            <p>
                <?php echo $project_name ?> adalah platform baca komik yang berfokus pada kenyamanan pengguna dengan menawarkan pembacaan komik tanpa iklan yang mengganggu.
                Situs ini menggunakan data dari berbagai sumber melalui mirroring untuk memastikan pembaruan komik yang cepat dan lengkap, dan memiliki tampilan menarik, fitur handal, dan pembaruan konten yang konsisten.
                Meskipun mungkin ada kesamaan dengan situs lain, fokus <?php echo $project_name ?> adalah memberikan pengalaman pengguna yang optimal.
                Jika ada, iklan akan ditampilkan tanpa mengganggu kenyamanan membaca.
            </p>
            <p class="flex flex-col">
                <span>
                    Jika Anda memiliki pertanyaan / Ingin mengajukan iklan silahkan hubungi kami
                </span>
                <span>
                    Support Server : 
                    <a
                        href="/redirect/discord"
                        class="text-primary-500 hover:text-primary-300 font-medium tracking-wide underline"
                    >
                        Join Discord
                    </a>
                </span>
                <span>
                    Email : 
                    <a
                        href="mailto:<?php echo $dev_email ?>"
                        class="text-primary-500 hover:text-primary-300 font-medium tracking-wide underline"
                    >
                        <?php echo $dev_email ?>
                    </a>
                </span>
            </p>
            <p class="flex flex-row gap-2 items-center">
                <i class="fas fa-heart"></i> Thanks For All The Support - <?php echo $project_name ?>
            </p>
        </div>
    </div>
</section>