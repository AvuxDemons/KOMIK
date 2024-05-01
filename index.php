<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include ('src/components/project_config.php'); ?>

        <?php $title = "Home" ?>
        <?php include ('src/components/header.php'); ?>
    </head>
    <body class="bg-black">
        <?php include ('src/components/navbar.php'); ?>

        <div id="content" class="flex flex-col gap-4">
            <div>
                <?php include ('src/components/home/popular.php'); ?>
                <?php include ('src/components/home/trending.php'); ?>
            </div>
            <div class="flex flex-row gap-4">
                <div class="flex flex-col gap-6 w-full max-w-[70%]">
                    <?php include ('src/components/list/list.php'); ?>
                </div>
                <div class="flex flex-col gap-6 w-full max-w-[30%]">
                    <?php include ('src/components/sidebar/sidebar.php'); ?>
                </div>
            </div>
        </div>

        <?php include ('src/components/footer.php'); ?>
    </body>

</html>