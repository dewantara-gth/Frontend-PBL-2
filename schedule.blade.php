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
                <img alt="Logo of Jaya Badminton Hall, a stylized shuttlecock in blue and white colors"
                    class="h-10 w-10 rounded-full" height="40"
                    src="https://img.freepik.com/premium-vector/vector-flat-badminton-logo-design_1107171-444.jpg?w=360"
                    width="45" />
                <span class="ml-2 text-lg font-semibold hidden md:block">Admin Jaya Badminton Hall</span>
            </div>
            <nav class="mt-10">
                <a class="flex items-center py-2 px-8 text-gray-700 hover:bg-gray-200" href="#">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    <span>Dashboard</span>
                </a>
                <a class="flex items-center py-2 px-8 text-gray-700 hover:bg-gray-200" href="#">
                    <i class="fas fa-table-tennis mr-3"></i>
                    <span>Court</span>
                </a>
                <a class="flex items-center py-2 px-8 text-gray-700 hover:bg-gray-200" href="#">
                    <i class="fas fa-list-alt mr-3"></i>
                    <span>Booking Data</span>
                </a>
                <a class="flex items-center py-2 px-8 text-blue-700 hover:bg-gray-200" href="#">
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
                    <a class="ml-2 md:ml-4 text-gray-700 hover:text-gray-900" href="#">
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                </div>
            </div>

            <!-- Content -->
            <main class="flex-1 overflow-auto">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 gap-4 md:gap-0">
                    <div>
                        <h2 class="text-lg font-bold text-gray-900 uppercase">SCHEDULE DATA</h2>
                        <p class="text-xs text-gray-600 mt-1 max-w-xs md:max-w-none">
                            Here is all Booking Schedule
                        </p>
                    </div>
                </div>

                <div class="max-w-4xl mx-auto mt-8">
                    <div class="bg-blue-600 text-white text-center py-4">
                        <h1 class="text-xl font-bold">BOOKING SCHEDULE</h1>
                    </div>
                    <div class="flex justify-between items-center mt-4 px-4">
                        <button id="prevMonth" class="bg-blue-200 rounded-full p-2">
                            <i class="fas fa-chevron-left text-blue-600"></i>
                        </button>
                        <h2 id="monthYear" class="text-xl font-bold"></h2>
                        <button id="nextMonth" class="bg-blue-200 rounded-full p-2">
                            <i class="fas fa-chevron-right text-blue-600"></i>
                        </button>
                    </div>
                    <div id="calendarBody" class="grid grid-cols-7 gap-2 mt-4 text-center text-sm">
                        <!-- Calendar will be rendered here by JavaScript -->
                    </div>
                </div>

            </main>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="fixed inset-0 bg-gray-800 bg-opacity-75 z-50 hidden" role="dialog" aria-modal="true">
        <div class="flex flex-col items-center justify-center h-full space-y-6" tabindex="-1">
            <a class="flex items-center py-2 px-8 text-white hover:bg-gray-700 rounded" href="#">
                <i class="fas fa-tachometer-alt mr-3"></i>
                <span>Dashboard</span>
            </a>
            <a class="flex items-center py-2 px-8 text-white hover:bg-gray-700 rounded" href="#">
                <i class="fas fa-table-tennis mr-3"></i>
                <span>Court</span>
            </a>
            <a class="flex items-center py-2 px-8 text-white hover:bg-gray-700 rounded" href="#">
                <i class="fas fa-list-alt mr-3"></i>
                <span>Booking Data</span>
            </a>
            <a class="flex items-center py-2 px-8 text-white hover:bg-gray-700 rounded" href="#">
                <i class="fas fa-calendar-alt mr-3"></i>
                <span>Schedule</span>
            </a>
            <button id="close-menu" class="mt-4 text-white focus:outline-none" aria-label="Close menu">
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

        document.addEventListener('DOMContentLoaded', function () {
            const monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
            const dayNames = ["MON", "TUE", "WED", "THUR", "FRI", "SAT", "SUN"];
            let currentDate = new Date();

            function renderCalendar() {
                const month = currentDate.getMonth();
                const year = currentDate.getFullYear();
                const firstDay = new Date(year, month, 1).getDay();
                const lastDate = new Date(year, month + 1, 0).getDate();

                document.getElementById('monthYear').innerText = `${monthNames[month]}, ${year}`;
                const calendarBody = document.getElementById('calendarBody');
                calendarBody.innerHTML = '';

                for (let i = 0; i < dayNames.length; i++) {
                    const dayCell = document.createElement('div');
                    dayCell.className = 'font-bold';
                    dayCell.innerText = dayNames[i];
                    calendarBody.appendChild(dayCell);
                }

                for (let i = 0; i < firstDay; i++) {
                    const emptyCell = document.createElement('div');
                    emptyCell.className = 'bg-gray-200 py-4';
                    calendarBody.appendChild(emptyCell);
                }

                for (let i = 1; i <= lastDate; i++) {
                    const dateCell = document.createElement('div');
                    dateCell.className = 'bg-gray-100 py-4';
                    dateCell.innerHTML = `${i}<br>
                        <button class="mt-2 bg-blue-500 text-white text-xs px-2 py-1 rounded" onclick="addSession(this)">Add Session</button>
                        <div class="sessions mt-2"></div>`;
                    calendarBody.appendChild(dateCell);
                }
            }

            window.addSession = function (button) {
                const sessionContainer = button.nextElementSibling;
                const sessionForm = document.createElement('form');
                sessionForm.className = 'mt-2';
                sessionForm.innerHTML = `
                    <input type="time" class="border rounded p-1 text-xs w-full" placeholder="Start Time">
                    <input type="time" class="border rounded p-1 text-xs w-full mt-1" placeholder="End Time">
                    <button type="button" class="mt-1 bg-red-500 text-white text-xs px-2 py-1 rounded" onclick="removeSession(this)">Remove</button>
                `;
                sessionContainer.appendChild(sessionForm);
            }

            window.removeSession = function (button) {
                button.parentElement.remove();
            }

            document.getElementById('prevMonth').addEventListener('click', function () {
                currentDate.setMonth(currentDate.getMonth() - 1);
                renderCalendar();
            });

            document.getElementById('nextMonth').addEventListener('click', function () {
                currentDate.setMonth(currentDate.getMonth() + 1);
                renderCalendar();
            });

            renderCalendar();
        });
    </script>
</body>

</html>