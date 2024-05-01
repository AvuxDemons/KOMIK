<footer class="mx-auto max-w-[1300px] pb-12 md:py-12 px-4 sm:px-6 md:flex md:items-center md:justify-between lg:px-8">
    <div class="flex justify-center space-x-6 md:order-2">
        <a href="/redirect/discord" class="text-primary-600 hover:text-white" target="_blank">
            <span class="sr-only">Discord</span>
            <i class="fab fa-discord"></i>
        </a>
        <a href="/redirect/donate" class="text-primary-600 hover:text-white" target="_blank">
            <span class="sr-only">Paypal</span>
            <i class="fab fa-paypal"></i>
        </a>
    </div>
    <div class="mt-8 md:order-1 md:mt-0">
        <p class="text-xs text-center text-primary-600">
            Copyright © 2022 - <span id="current-year"></span> <?php echo $project_name ?>. All rights reserved.
        </p>
    </div>
</footer>

<script>
    const year = new Date().getFullYear();
    $("#current-year").text(year);
</script>