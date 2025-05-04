<html>

<head>
    <title>
        Jaya Badminton Hall
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
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
            <a class="hover:text-green-600" href="home.blade.php">Home</a>
            <a class="text-green-600 border-b-2 border-green-600" href="about.blade.php">About Us</a>
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
        <a class="block px-4 py-2 hover:text-green-600" href="home.blade.php">Home</a>
        <a class="block px-4 py-2 text-green-600 border-b-2 border-green-600" href="about.blade.php">About Us</a>
        <a class="block px-4 py-2 hover:text-green-600" href="booking.blade.php">Booking Now</a>
        <a class="block px-4 py-2 hover:text-green-600" href="contact.blade.php">Contact Us</a>
        <div class="flex justify-center space-x-4 py-2">
            <a class="hover:text-green-600" href="#"><i class="fab fa-facebook-f"></i></a>
            <a class="hover:text-green-600" href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
    
    <main class="flex flex-col md:flex-row">
        <div class="md:w-1/2">
            <img alt="Modern house with a pool and outdoor furniture" class="w-full h-full object-cover" height="600"
                src="https://storage.googleapis.com/a1aa/image/bDqCBuvPqfivm48tLePWij-nsWF1ziem6-llzvNp4LY.jpg"
                width="800" />
        </div>
        <div class="md:w-1/2 p-8 bg-gray-50">
            <h1 class="text-3xl font-bold mb-4">
                Discover our History
            </h1>
            <p class="mb-4">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's
            </p>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            </p>
        </div>
    </main>

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