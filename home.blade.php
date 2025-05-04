<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Jaya Badminton Hall</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
        /* Custom styles for the mobile menu */
        .mobile-menu {
            display: none;
        }
        @media (max-width: 768px) {
            .mobile-menu {
                display: block;
            }
            .navbar {
                display: none;
            }
        }
    </style>
</head>

<body class="bg-white">
    <!-- Navbar -->
    <nav class="flex items-center justify-between p-4 border-b">
        <div class="flex items-center space-x-2">
            <img alt="Jaya Badminton Hall Logo" class="h-8" height="50"
                src="https://img.freepik.com/premium-vector/vector-flat-badminton-logo-design_1107171-444.jpg?w=360"
                width="45" />
            <span class="font-bold text-lg">JAYA BADMINTON HALL</span>
        </div>
        <div class="hidden md:flex space-x-6">
            <a class="text-green-600 border-b-2 border-green-600" href="home.blade.php">Home</a>
            <a class="hover:text-green-600" href="about.blade.php">About Us</a>
            <a class="hover:text-green-600" href="booking.blade.php">Booking Now</a>
            <a class="hover:text-green-600" href="contact.blade.php">Contact Us</a>
        </div>
        <div class="hidden md:flex space-x-4">
            <a class="hover:text-green-600" href="#"><i class="fab fa-facebook-f"></i></a>
            <a class="hover:text-green-600" href="#"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="md:hidden">
            <button id="menu-button" class="text-green-600 focus:outline-none">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
    </nav>
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden">
        <a class="block px-4 py-2 text-green-600 border-b-2 border-green-600" href="home.blade.php">Home</a>
        <a class="block px-4 py-2 hover:text-green-600" href="about.blade.php">About Us</a>
        <a class="block px-4 py-2 hover:text-green-600" href="booking.blade.php">Booking Now</a>
        <a class="block px-4 py-2 hover:text-green-600" href="contact.blade.php">Contact Us</a>
        <div class="flex justify-center space-x-4 py-2">
            <a class="hover:text-green-600" href="#"><i class="fab fa-facebook-f"></i></a>
            <a class="hover:text-green-600" href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
    <!-- Hero Section -->
    <section class="relative flex flex-col md:flex-row items-center justify-between p-8">
        <div class="max-w-lg">
            <h1 class="text-5xl font-bold text-black">Your Game Starts with the Right Court.</h1>
            <p class="text-xl text-gray-600 mt-4">Ready for new journy!</p>
            <a class="mt-6 px-6 py-3 bg-green-600 text-white text-lg font-semibold rounded inline-block text-center" href="booking.blade.php">Book Now</a>
        </div>
        <img alt="Indoor Badminton Court" class="w-full md:w-1/2 h-auto rounded-lg shadow-lg mt-8 md:mt-0" height="600"
            src="https://storage.googleapis.com/a1aa/image/UTMepjVB4_4XMaDy6UcaMYHHew1EGzLOiNEYc-1PjmM.jpg"
            width="800" />
    </section>
    <!-- Features Section -->
    <section class="bg-gray-100 py-4">
        <div class="flex flex-col md:flex-row justify-around">
            <div class="flex items-center space-x-2 mb-4 md:mb-0">
                <i class="fas fa-shopping-bag text-red-600 text-2xl"></i>
                <div>
                    <p class="font-semibold">Canteen</p>
                    <p class="text-sm text-gray-600">Indoor Canteen</p>
                </div>
            </div>
            <div class="flex items-center space-x-2 mb-4 md:mb-0">
                <i class="fas fa-clock text-red-600 text-2xl"></i>
                <div>
                    <p class="font-semibold">Open every day</p>
                    <p class="text-sm text-gray-600">Open from 09:00 AM to 10:00 PM</p>
                </div>
            </div>
            <div class="flex items-center space-x-2 mb-4 md:mb-0">
                <i class="fas fa-headset text-red-600 text-2xl"></i>
                <div>
                    <p class="font-semibold">Customer Support 24/7</p>
                    <p class="text-sm text-gray-600">Online booking service available 24/7</p>
                </div>
            </div>
            <div class="flex items-center space-x-2">
                <i class="fas fa-wifi text-red-600 text-2xl"></i>
                <div>
                    <p class="font-semibold">Free Wifi</p>
                    <p class="text-sm text-gray-600">Wi-Fi is available in all areas</p>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.getElementById('menu-button').addEventListener('click', function () {
            var menu = document.getElementById('mobile-menu');
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }
        });

        
    </script>
</body>

</html>