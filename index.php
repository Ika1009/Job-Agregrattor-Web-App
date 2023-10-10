<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Job Portal</title>
    <link href="dist/output1.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">


    <style>
        body, h2, h3, p, input, button, a {
            font-family: 'Poppins', 'Poppins';
        }
    </style>
</head>

<body class="bg-background-50">
    <!-- Navbar -->
    <nav class="bg-transparent border border-b-gray-300">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto sm:pr-8 pr-0">
            <a href="index.php" class="flex items-center">
                <img src="images/UltraCv.png" class="w-20 mr-3" alt="UltraCv Logo" />
            </a>
            <div class="flex md:order-2">
                <?php
                if (!isset($_SESSION['id'])) {  
                ?>
                    <a href="login.php" type="button"
                    class="text-background-50 bg-primary1 hover:bg-primary-400 focus:ring-4 focus:outline-none text-md rounded-lg px-4 py-2 text-center mr-3 md:mr-0"> Log In</a>
                <?php } ?>
                <button data-collapse-toggle="navbar-cta" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    aria-controls="navbar-cta" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 ml-auto mr-8"
                id="navbar-cta">
                <ul
                    class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0">
                    <li>
                        <a href="index.php"
                            class="block py-2 pl-3 pr-4 text-text1 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-custom-purple md:p-0">Home</a>
                    </li>
                    <li>
                        <a href="jobList.html"
                            class="block py-2 pl-3 pr-4 text-text1 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-custom-purple md:p-0">Job List</a>
                    </li>
                    <li>
                        <a href="pricing.php"
                            class="block py-2 pl-3 pr-4 text-text1 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-custom-purple md:p-0">Pricing</a>
                    </li>
                    <?php
                    if (isset($_SESSION['id'])) {  
                ?>
                    <li>
                        <a href="profilePage.html" class="block py-2 pl-3 pr-4 text-primary1 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-custom-purple md:p-0">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </a>
                    </li>
                <?php
                    } else { 
                ?>

                    <li>
                            <a href="register.html" class="block py-2 pl-3 pr-4 text-text1 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-custom-purple md:p-0">
                                Sign In
                            </a>
                        </li>
                <?php } ?>
                </ul>
            </div>
        </div>
    </nav>



    <!-- Hero Section -->
    <section class="relative mt-4 rounded-none sm:rounded-3xl py-10 md:py-16 lg:py-32 xl:py-48 2xl:py-64 mx-auto md:mx-48 xl:mx-60 sm:mx-32" style="background-image: url('images/HeroImg.jpg'); background-size: cover; background-position: center;">
        <div class="absolute rounded-none sm:rounded-3xl inset-0 bg-black opacity-40"></div>
        <div class="container mx-auto text-center relative z-10">
            <h2 class="text-2xl md:text-3xl lg:text-4xl text-primary1 font-bold mb-4">Find Your Dream Job or Post a New One</h2>
            <p class="text-base text-secondary-50 md:text-xl lg:text-2xl mb-8">Search for job opportunities or create your own job listing.</p>
            <div class="flex flex-col md:flex-row mx-4 md:mx-8 justify-center items-center">
                <input type="text" placeholder="Search for jobs" class="w-full md:w-64 lg:w-96 px-4 py-2 rounded-t-lg md:rounded-t-none md:rounded-l-lg focus:outline-none focus:ring focus:border-blue-300 mb-0 md:mb-2 text-sm md:text-base lg:text-lg">
                <button class="w-full md:w-32 mb-2 lg:w-48 bg-primary1 text-white px-4 py-2 rounded-b-lg md:rounded-b-none md:rounded-r-lg hover:bg-primary-400 text-sm md:text-base lg:text-lg">Search</button>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="pt-8 pb-16">
        <div class="container mx-auto text-center">
            <h2 class="text-2xl lg:text-3xl font-semibold mb-4">Why Us?</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Benefit Item 1 -->
                <div class="bg-secondary-100 p-4 rounded-lg shadow-md">
                    <div class="text-4xl">
                        <i class="fa fa-search text-accent1" aria-hidden="true"></i>        
                    </div>
                    <h3 class="text-xl text-text1">Discover More Opportunities</h3>
                </div>
                <!-- Benefit Item 2 -->
                <div class="bg-secondary-100 p-4 rounded-lg shadow-md">
                    <div class="text-4xl">
                        <i class="fa fa-check-circle-o text-accent1" aria-hidden="true"></i>
                    </div>
                    <h3 class="text-xl text-text1">Effortless Hiring</h3>
                </div>
                <!-- Benefit Item 3 -->
                <div class="bg-secondary-100 p-4 rounded-lg shadow-md">
                    <div class="text-4xl">
                        <i class="fa fa-puzzle-piece text-accent1" aria-hidden="true"></i>
                    </div>
                    <h3 class="text-xl text-text1 ">Tailored Matches</h3>
                </div>
                <!-- Benefit Item 4 -->
                <div class="bg-secondary-100 p-4 rounded-lg shadow-md">
                    <div class="text-4xl">
                        <i class="fa fa-area-chart text-accent1" aria-hidden="true"></i>
                    </div>
                    <h3 class="text-xl text-text1 ">Smart Insights</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class=" pt-16 pb-32">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl text-primary1 lg:text-4xl font-semibold mb-4">Ready to Get Started?</h2>
            <p class="text-xl mb-8">Join our platform and start your job search or post a job listing today.</p>
            <a href="register.html"
                class="bg-primary1 hover:bg-primary-400 text-background-50 px-6 py-3 rounded-full text-lg font-semibold transition duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-secondary-400">Sign
                Up Now</a>
        </div>
    </section>

        <!-- Testimonials Section -->
        <!-- <section class=" text-white py-16">
            <div class="container mx-auto text-center">
                <h2 class="text-3xl font-semibold mb-8">What Our Users Say</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white rounded-lg p-4 shadow-md text-gray-700">
                        <p class="mb-4">"I found my dream job through this platform. Highly recommended!"</p>
                        <p class="font-semibold">John Doe</p>
                        <p class="text-sm">Web Developer</p>
                    </div>

                </div>
            </div>
        </section> -->


    <!-- Footer Section -->
    <footer class="bg-transparent rounded-lg border-t-gray-300 border ">
        <div class="w-full max-w-screen-xl mx-auto pb-2 px-4 md:pb-4">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="index.php" class="flex items-center">
                    <img src="images/UltraCv.png" class="w-24" alt="UltraCv Logo" />
                </a>
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0">
                    <li>
                        <a href="index.php" class="mr-4 hover:underline text-base md:mr-6 ">Home</a>
                    </li>
                        <?php
                        // Check if the user is logged in
                        if (isset($_SESSION['id'])) {
                            $href = 'jobList.html'; // Set the link for logged-in users
                        } else {
                            $href = 'login.php'; // Set the link for users who are not logged in
                        }
                        ?>

                        <li>
                            <a href="<?php echo $href; ?>" class="mr-4 hover:underline text-base md:mr-6">job List</a>
                        </li>
                    <li>
                        <a href="pricing.php" class="mr-4 hover:underline text-base md:mr-6 ">Pricing</a>
                    </li>
                    <li>
                        <a href="login.php"
                            class="mr-4 hover:underline px-4 py-2 items-center rounded-lg text-background-50 bg-primary1 text-base md:mr-6 ">Log
                            In</a>
                    </li>
                </ul>
            </div>
            <hr class="my-2 border-gray-300 sm:mx-auto lg:my-4" />
            <span class="block text-sm text-gray-500 sm:text-center">© 2023 <a href="https://www.hireheroic.com"
                    class="hover:underline text-primary1">Hire Heroic™</a>. All Rights Reserved.</span>
        </div>
    </footer>
</body>

</html>