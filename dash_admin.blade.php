<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <style>
        /* Custom styles for the mobile menu */
        .mobile-menu {
            display: none;
        }
        @media (max-width: 768px) {
            .mobile-menu {
                display: block;
            }
            .sidebar {
                display: none;
            }
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="flex flex-col md:flex-row h-screen">
        <!-- Sidebar -->
        <div class="w-full md:w-64 bg-white shadow-md sidebar">
            <div class="flex items-center justify-center h-16 border-b">
                <img alt="Logo" class="h-10 w-10 rounded-full" height="40" src="https://img.freepik.com/premium-vector/vector-flat-badminton-logo-design_1107171-444.jpg?w=360" width="45"/>
                <span class="ml-2 text-lg font-semibold hidden md:block">Admin Jaya Badminton Hall</span>
            </div>
            <nav class="mt-10">
                <a class="flex items-center py-2 px-8 text-blue-700 hover:bg-gray-200" href="#">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    <span>Dashboard</span>
                </a>
                <a class="flex items-center py-2 px-8 text-gray-700 hover:bg-gray-200" href="#">
                    <i class="fas fa-table-tennis mr-3"></i>
                    <span>Court</span>
                </a>
                <a class="flex items-center py-2 px-8 text-gray-700 hover:bg-gray-200" href="#">
                    <i class="fas fa-calendar-alt mr-3"></i>
                    <span>Booking Data</span>
                </a>
                <a class="flex items-center py-2 px-8 text-gray-700 hover:bg-gray-200" href="#">
                    <i class="fas fa-calendar-alt mr-3"></i>
                    <span>Schedule</span>
                </a>
            </nav>
        </div>
        <!-- Main Content -->
        <div class="flex-1 p-4 md:p-10">
            <div class="flex justify-between items-center">
                <div class="mobile-menu">
                    <button id="menu-button" class="text-gray-700 focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
                <div class="flex items-center ml-auto">
                    <span class="mr-2 md:mr-4 text-gray-700 whitespace-nowrap">Dewantara Bram</span>
                    <img alt="User Avatar" class="h-8 w-8 md:h-10 md:w-10 rounded-full" height="40" src="https://storage.googleapis.com/a1aa/image/8bhRABXN6qfAH_O5DWhIrN9rgGhUj-t8JMTbbKIYhMc.jpg" width="40"/>
                    <a class="ml-2 md:ml-4 text-gray-700 hover:text-gray-900" href="#">
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                </div>
            </div>
            <div class="mt-10 md:mt-20">
                <h1 class="text-3xl md:text-5xl font-bold">Welcome,</h1>
                <h1 class="text-3xl md:text-5xl font-bold">Dewantara Bram</h1>
                <p class="mt-2 md:mt-4 text-lg md:text-xl text-gray-600">Admin Jaya Badminton Hall</p>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="fixed inset-0 bg-gray-800 bg-opacity-75 z-50 hidden">
        <div class="flex flex-col items-center justify-center h-full">
            <a class="flex items-center py-2 px-8 text-white hover:bg-gray-700" href="#">
                <i class="fas fa-tachometer-alt mr-3"></i>
                <span>Dashboard</span>
            </a>
            <a class="flex items-center py-2 px-8 text-white hover:bg-gray-700" href="#">
                <i class="fas fa-table-tennis mr-3"></i>
                <span>Court</span>
            </a>
            <a class="flex items-center py-2 px-8 text-white hover:bg-gray-700" href="#">
                <i class="fas fa-list-alt mr-3"></i>
                <span>Booking Data</span>
            </a>
            <a class="flex items-center py-2 px-8 text-white hover:bg-gray-700" href="#">
                <i class="fas fa-calendar-alt mr-3"></i>
                <span>Schedule</span>
            </a>
            <button id="close-menu" class="mt-4 text-white focus:outline-none">
                <i class="fas fa-times text-2xl"></i>
            </button>
        </div>
    </div>

    <script>
        const menuButton = document.getElementById('menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const closeMenu = document.getElementById('close-menu');

        menuButton.addEventListener('click', () => {
            mobileMenu.classList.remove('hidden');
        });

        closeMenu.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
        });
    </script>
</body>
</html>