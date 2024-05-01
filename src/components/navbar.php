<nav class="border-primary-200 bg-primary-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Logo" />
        </a>
        <div class="flex md:order-2 gap-2">
            <div class="relative hidden md:block">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <i class="fas fa-search"></i>
                </div>
                <input type="text" id="search-navbar" class="block w-full p-2 ps-10 text-sm border border-primary-300 rounded-lg bg-primary-50 focus:ring-accent-500 focus:border-accent-500 dark:bg-primary-700 dark:border-primary-600 dark:placeholder-primary-400 dark:focus:ring-accent-500 dark:focus:border-accent-500" placeholder="Search...">
            </div>
            <button type="button" class="inline-flex items-center p-2 text-lg justify-center text-sm text-primary-500 rounded-lg md:hidden hover:bg-primary-100 focus:outline-none focus:ring-2 focus:ring-primary-200 dark:text-primary-400 dark:hover:bg-primary-700 dark:focus:ring-primary-600 toggle-menu">
                <i class="fas fa-bars"></i>
            </button>
            <button href="#" class="inline-flex items-center justify-center w-10">
                <img src="public/assets/images/pfp.jpg" class="rounded-full" />
            </button>
        </div>

        <!-- Navbar Dropdown -->
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
            <div class="relative mt-3 md:hidden">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <i class="fas fa-search"></i>
                </div>
                <input type="text" id="search-navbar" class="block w-full p-2 ps-10 text-sm border rounded-lg bg-primary-700 border-primary-600 placeholder-primary-400 dark:focus:ring-accent-500 dark:focus:border-accent-500" placeholder="Search...">
            </div>
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-primary-100 rounded-lg bg-primary-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-primary-800 md:dark:bg-primary-900 dark:border-primary-700 tracking-widest">
                <li>
                    <a href="/" class="block py-2 px-3 rounded hover:bg-primary-100 md:hover:bg-transparent md:hover:text-500 md:p-0 md:dark:hover:text-accent-500 dark:hover:bg-primary-700 dark:hover:md:dark:hover:bg-transparent dark:border-primary-700">HOME</a>
                </li>
                <li>
                    <a href="/list.php" class="block py-2 px-3 rounded hover:bg-primary-100 md:hover:bg-transparent md:hover:text-500 md:p-0 md:dark:hover:text-accent-500 dark:hover:bg-primary-700 dark:hover:md:dark:hover:bg-transparent dark:border-primary-700">LIST</a>
                </li>
                <li>
                    <a href="/bookmark.php" class="block py-2 px-3 rounded hover:bg-primary-100 md:hover:bg-transparent md:hover:text-500 md:p-0 md:dark:hover:text-accent-500 dark:hover:bg-primary-700 dark:hover:md:dark:hover:bg-transparent dark:border-primary-700">BOOKMARK</a>
                </li>
                <li>
                    <a href="/about.php" class="block py-2 px-3 rounded hover:bg-primary-100 md:hover:bg-transparent md:hover:text-500 md:p-0 md:dark:hover:text-accent-500 dark:hover:bg-primary-700 dark:hover:md:dark:hover:bg-transparent dark:border-primary-700">ABOUT  </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    $(document).ready(function () {
        $(".toggle-menu").click(function () {
            $("#navbar-search").toggle();
        });

        $(".toggle-search").click(function () {
            $(".relative").toggle();
        });
    });
</script>

<script>
    $(document).ready(function () {
      const path = $(location).attr('pathname')

      switch (path) {
        case "/":
          $("ul li:nth-child(1)").addClass("text-accent-500") ;
          break;
        case "/list.php":
          $("ul li:nth-child(2)").addClass("text-accent-500") ;
          break;
        case "/bookmark.php":
          $("ul li:nth-child(3)").addClass("text-accent-500") ;
          break;
        case "/about.php":
          $("ul li:nth-child(4)").addClass("text-accent-500") ;
          break;
        default:
          break;
      }
    })
</script>