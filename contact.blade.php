<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        Jaya Badminton Hall
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<body class="bg-white text-gray-800">
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
            <a class="hover:text-green-600" href="about.blade.php">About Us</a>
            <a class="hover:text-green-600" href="booking.blade.php">Booking Now</a>
            <a class="text-green-600 border-b-2 border-green-600" href="contact.blade.php">Contact Us</a>
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
        <a class="block px-4 py-2 hover:text-green-600" href="about.blade.php">About Us</a>
        <a class="block px-4 py-2 hover:text-green-600" href="booking.blade.php">Booking Now</a>
        <a class="block px-4 py-2 text-green-600 border-b-2 border-green-600" href="contact.blade.php">Contact Us</a>
        <div class="flex justify-center space-x-4 py-2">
            <a class="hover:text-green-600" href="#"><i class="fab fa-facebook-f"></i></a>
            <a class="hover:text-green-600" href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>

    <main class="flex flex-col items-center p-8">
        <div class="w-full max-w-4xl flex flex-col md:flex-row justify-between items-start">
            <div class="w-full md:w-1/2">
                <h2 class="text-4xl font-bold mb-4">
                    Get in
                    <span class="text-green-600">
                        Touch
                    </span>
                </h2>
                <p class="mb-8">
                    Enim tempor eget pharetra facilisis sed maecenas adipiscing. Eu leo molestie vel, ornare non id
                    blandit netus.
                </p>
                <form class="space-y-4">
                    <div>
                        <input class="w-full p-3 border rounded" placeholder="Name *" type="text" />
                    </div>
                    <div>
                        <input class="w-full p-3 border rounded" placeholder="Email" type="email" />
                    </div>
                    <div>
                        <input class="w-full p-3 border rounded" placeholder="Phone number *" type="text" />
                    </div>
                    <div>
                        <select class="w-full p-3 border rounded">
                            <option>
                                How did you find us?
                            </option>
                        </select>
                    </div>
                    <button class="w-full p-3 bg-green-600 text-white font-bold rounded" type="submit">
                        SEND
                    </button>
                </form>
                <div class="mt-8 flex justify-between items-center text-center text-sm">
                    <div class="flex flex-col items-center">
                        <i class="fas fa-phone-alt text-xl mb-2">
                        </i>
                        <p class="font-bold">
                            PHONE
                        </p>
                        <p>
                            03 5432 1234
                        </p>
                    </div>
                    <div class="flex flex-col items-center">
                        <i class="fas fa-fax text-xl mb-2">
                        </i>
                        <p class="font-bold">
                            FAX
                        </p>
                        <p>
                            03 5432 1234
                        </p>
                    </div>
                    <div class="flex flex-col items-center">
                        <i class="fas fa-envelope text-xl mb-2">
                        </i>
                        <p class="font-bold">
                            EMAIL
                        </p>
                        <p>
                            info@marcc.com.au
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 mt-8 md:mt-0 md:ml-8">
                <img alt="Map showing location of Jaya Badminton Hall" height="400"
                    src="https://storage.googleapis.com/a1aa/image/mgH_XbBbANd1KHohyP4DNH2PjSRhbSi7U6R1blcqP70.jpg"
                    width="600" />
            </div>
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