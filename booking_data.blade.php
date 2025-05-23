<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Booking Data - Jaya Badminton Hall</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <style>

        body {
            font-family: "Inter", sans-serif;
        }

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

<body class="bg-[#f9f9f9] text-[#1a1a1a]">
    <div class="flex min-h-screen flex-col md:flex-row">
        <!-- Sidebar -->
        <div class="w-full md:w-64 bg-white shadow-md sidebar">
            <div class="flex items-center justify-center h-16 border-b">
                <img alt="Logo" class="h-10 w-10 rounded-full" height="40" src="https://img.freepik.com/premium-vector/vector-flat-badminton-logo-design_1107171-444.jpg?w=360" width="45"/>
                <span class="ml-2 text-lg font-semibold hidden md:block">Admin Jaya Badminton Hall</span>
            </div>
            <nav class="mt-10">
                <a class="flex items-center py-2 px-8 text-gray-700 hover:bg-gray-200" href="dash_Admin.blade.php">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    <span>Dashboard</span>
                </a>
                <a class="flex items-center py-2 px-8 text-gray-700 hover:bg-gray-200" href="court.blade.php">
                    <i class="fas fa-table-tennis mr-3"></i>
                    <span>Court</span>
                </a>
                <a class="flex items-center py-2 px-8 text-blue-700 hover:bg-gray-200" href="booking_data.blade.php">
                    <i class="fas fa-list-alt mr-3"></i>
                    <span>Booking Data</span>
                </a>
                <a class="flex items-center py-2 px-8 text-gray-700 hover:bg-gray-200" href="schedule.blade.php">
                    <i class="fas fa-calendar-alt mr-3"></i>
                    <span>Schedule</span>
                </a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-4 md:p-10 flex flex-col">
            <div class="flex justify-between items-center mb-6">
                <div class="mobile-menu">
                    <button id="menu-button" class="text-gray-700 focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
                <div class="flex items-center ml-auto">
                    <span class="mr-2 md:mr-4 text-gray-700 whitespace-nowrap">Dewantara Bram</span>
                    <img alt="User avatar of Dewantara Bram, a smiling man with short black hair wearing a blue shirt"
                        class="h-8 w-8 md:h-10 md:w-10 rounded-full" height="40"
                        src="https://storage.googleapis.com/a1aa/image/8bhRABXN6qfAH_O5DWhIrN9rgGhUj-t8JMTbbKIYhMc.jpg"
                        width="40" />
                    <a class="ml-2 md:ml-4 text-gray-700 hover:text-blue-900" href="login.blade.php">
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                </div>
            </div>

            <!-- Content -->
            <main class="flex-1 overflow-auto">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 gap-4 md:gap-0">
                    <div>
                        <h2 class="text-lg font-bold text-gray-900 uppercase">BOOKING DATA</h2>
                        <p class="text-xs text-gray-600 mt-1 max-w-xs md:max-w-none">
                            Here is a list of all Booking Data
                        </p>
                    </div>
                    <a
                        class="bg-blue-600 text-white text-xs font-semibold px-4 py-2 rounded shadow hover:bg-blue-700 focus:outline-none whitespace-nowrap" href="add_booking.blade.php">
                        Add Booking Data
                    </a>
                </div>
                <div class="overflow-x-auto rounded-md shadow-sm">
                    <table class="w-full text-xs text-left border-collapse min-w-[700px] md:min-w-full">
                        <thead class="bg-gray-100 text-gray-700">
                            <tr>
                                <th class="py-2 px-3 font-normal border-b border-gray-200">No</th>
                                <th class="py-2 px-3 font-normal border-b border-gray-200">Name</th>
                                <th class="py-2 px-3 font-normal border-b border-gray-200">
                                    Phone Number
                                </th>
                                <th class="py-2 px-3 font-normal border-b border-gray-200">Court</th>
                                <th class="py-2 px-3 font-normal border-b border-gray-200">
                                    Start Time
                                </th>
                                <th class="py-2 px-3 font-normal border-b border-gray-200">End Time</th>
                                <th class="py-2 px-3 font-normal border-b border-gray-200">Status</th>
                                <th class="py-2 px-3 font-normal border-b border-gray-200">Total Payment</th>
                                <th class="py-2 px-3 font-normal border-b border-gray-200">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white text-gray-800">
                            <tr>
                                <td class="py-2 px-3 border-b border-gray-100">1</td>
                                <td class="py-2 px-3 border-b border-gray-100">Dewan Sigma</td>
                                <td class="py-2 px-3 border-b border-gray-100">0883-3838-8382</td>
                                <td class="py-2 px-3 border-b border-gray-100">3</td>
                                <td class="py-2 px-3 border-b border-gray-100">DD/MM/YY | 00.00</td>
                                <td class="py-2 px-3 border-b border-gray-100">DD/MM/YY | 00.00</td>
                                <td class="py-2 px-3 border-b border-gray-100">Accepted</td>
                                <td class="py-2 px-3 border-b border-gray-100">Rp 125.000,00</td>
                                <td class="py-2 px-3 border-b border-gray-100 flex gap-2">
                                    <button aria-label="Edit booking 1" class="text-blue-600 hover:text-blue-700">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button aria-label="Delete booking 1" class="text-red-500 hover:text-red-600">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-2 px-3 border-b border-gray-100">2</td>
                                <td class="py-2 px-3 border-b border-gray-100">Dewan Keren</td>
                                <td class="py-2 px-3 border-b border-gray-100">0829-2890-1891</td>
                                <td class="py-2 px-3 border-b border-gray-100">2</td>
                                <td class="py-2 px-3 border-b border-gray-100">DD/MM/YY | 00.00</td>
                                <td class="py-2 px-3 border-b border-gray-100">DD/MM/YY | 00.00</td>
                                <td class="py-2 px-3 border-b border-gray-100">Accepted</td>
                                <td class="py-2 px-3 border-b border-gray-100">Rp 180.000,00</td>
                                <td class="py-2 px-3 border-b border-gray-100 flex gap-2">
                                    <button aria-label="Edit booking 2" class="text-blue-600 hover:text-blue-700">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button aria-label="Delete booking 2" class="text-red-500 hover:text-red-600">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-2 px-3 border-b border-gray-100">3</td>
                                <td class="py-2 px-3 border-b border-gray-100">Dewan Ga Ada Obat</td>
                                <td class="py-2 px-3 border-b border-gray-100">0928-9828-2101</td>
                                <td class="py-2 px-3 border-b border-gray-100">5</td>
                                <td class="py-2 px-3 border-b border-gray-100">DD/MM/YY | 00.00</td>
                                <td class="py-2 px-3 border-b border-gray-100">DD/MM/YY | 00.00</td>
                                <td class="py-2 px-3 border-b border-gray-100">Accepted</td>
                                <td class="py-2 px-3 border-b border-gray-100">Rp 120.000,00</td>
                                <td class="py-2 px-3 border-b border-gray-100 flex gap-2">
                                    <button aria-label="Edit booking 3" class="text-blue-600 hover:text-blue-700">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button aria-label="Delete booking 3" class="text-red-500 hover:text-red-600">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-2 px-3 border-b border-gray-100">4</td>
                                <td class="py-2 px-3 border-b border-gray-100">Ewon Pls Notice Dewan</td>
                                <td class="py-2 px-3 border-b border-gray-100">0862-2829-1911</td>
                                <td class="py-2 px-3 border-b border-gray-100">6</td>
                                <td class="py-2 px-3 border-b border-gray-100">DD/MM/YY | 00.00</td>
                                <td class="py-2 px-3 border-b border-gray-100">DD/MM/YY | 00.00</td>
                                <td class="py-2 px-3 border-b border-gray-100">Accepted</td>
                                <td class="py-2 px-3 border-b border-gray-100">Rp 150.000,00</td>
                                <td class="py-2 px-3 border-b border-gray-100 flex gap-2">
                                    <button aria-label="Edit booking 4" class="text-blue-600 hover:text-blue-700">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button aria-label="Delete booking 4" class="text-red-500 hover:text-red-600">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-2 px-3 border-b border-gray-100">5</td>
                                <td class="py-2 px-3 border-b border-gray-100">Dewan And Only</td>
                                <td class="py-2 px-3 border-b border-gray-100">0878-2891-8111</td>
                                <td class="py-2 px-3 border-b border-gray-100">4</td>
                                <td class="py-2 px-3 border-b border-gray-100">DD/MM/YY | 00.00</td>
                                <td class="py-2 px-3 border-b border-gray-100">DD/MM/YY | 00.00</td>
                                <td class="py-2 px-3 border-b border-gray-100">Accepted</td>
                                <td class="py-2 px-3 border-b border-gray-100">Rp 100.000,00</td>
                                <td class="py-2 px-3 border-b border-gray-100 flex gap-2">
                                    <button aria-label="Edit booking 5" class="text-blue-600 hover:text-blue-700">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button aria-label="Delete booking 5" class="text-red-500 hover:text-red-600">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mt-6 flex flex-col sm:flex-row gap-4">
                    <button
                        class="bg-purple-600 text-white text-xs font-semibold px-5 py-2 rounded shadow hover:bg-purple-700 focus:outline-none whitespace-nowrap">
                        Download PDF
                    </button>
                    <button
                        class="bg-purple-600 text-white text-xs font-semibold px-5 py-2 rounded shadow hover:bg-purple-700 focus:outline-none whitespace-nowrap">
                        Download Excel
                    </button>
                </div>
            </main>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="fixed inset-0 bg-gray-800 bg-opacity-75 z-50 hidden">
        <div class="flex flex-col items-center justify-center h-full">
            <a class="lex items-center py-2 px-8 text-white hover:bg-blue-200" href="dash_admin.blade.php">
                <i class="fas fa-tachometer-alt mr-3"></i>
                <span>Dashboard</span>
            </a>
            <a class="fflex items-center py-2 px-8 text-white hover:bg-blue-200" href="court.blade.php">
                <i class="fas fa-table-tennis mr-3"></i>
                <span>Court</span>
            </a>
            <a class="flex items-center py-2 px-8 text-blue-700 hover:bg-blue-200" href="booking_data.blade.php">
                <i class="fas fa-list-alt mr-3"></i>
                <span>Booking Data</span>
            </a>
            <a class="flex items-center py-2 px-8 text-white hover:bg-blue-200" href="schedule.blade.php">
                <i class="fas fa-calendar-alt mr-3"></i>
                <span>Schedule</span>
            </a>
            <button id="close-menu" class="mt-4 text-white focus:outline-none">
                <i class="fas fa-times text-2xl"></i>
            </button>
        </div>
    </div>

    <script>
        const menuButton = document.getElementById("menu-button");
        const mobileMenu = document.getElementById("mobile-menu");
        const closeMenu = document.getElementById("close-menu");

        menuButton.addEventListener("click", () => {
            mobileMenu.classList.remove("hidden");
        });

        closeMenu.addEventListener("click", () => {
            mobileMenu.classList.add("hidden");
        });
    </script>
</body>

</html>