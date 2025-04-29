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
                src="https://storage.googleapis.com/a1aa/image/NqrvQLGGbmjOFAGOwWyU5cuPnxiNuIaNgr65bk8SoU4.jpg"
                width="50" />
            <span class="font-bold text-lg">JAYA BADMINTON HALL</span>
        </div>
        <div class="hidden md:flex space-x-6">
            <a class="text-green-600 border-b-2 border-green-600" href="#">Home</a>
            <a class="text-gray-600" href="#">About Us</a>
            <a class="text-gray-600" href="#">Booking Now</a>
            <a class="text-gray-600" href="#">Contact Us</a>
        </div>
        <div class="hidden md:flex space-x-4">
            <a class="text-green-600" href="#"><i class="fab fa-facebook-f"></i></a>
            <a class="text-green-600" href="#"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="md:hidden">
            <button id="menu-button" class="text-green-600 focus:outline-none">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
    </nav>
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden">
        <a class="block px-4 py-2 text-green-600 border-b-2 border-green-600" href="#">Home</a>
        <a class="block px-4 py-2 text-gray-600" href="#">About Us</a>
        <a class="block px-4 py-2 text-gray-600" href="#">Booking Now</a>
        <a class="block px-4 py-2 text-gray-600" href="#">Contact Us</a>
        <div class="flex justify-center space-x-4 py-2">
            <a class="text-green-600" href="#"><i class="fab fa-facebook-f"></i></a>
            <a class="text-green-600" href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>

    <div class="max-w-4xl mx-auto mt-8">
        <div class="bg-green-600 text-white text-center py-4">
            <h1 class="text-xl font-bold">JADWAL BOOKING LAPANGAN</h1>
        </div>
        <div class="flex justify-between items-center mt-4 px-4">
            <button id="prevMonth" class="bg-green-200 rounded-full p-2">
                <i class="fas fa-chevron-left text-green-600"></i>
            </button>
            <h2 id="monthYear" class="text-xl font-bold"></h2>
            <button id="nextMonth" class="bg-green-200 rounded-full p-2">
                <i class="fas fa-chevron-right text-green-600"></i>
            </button>
        </div>
        <div id="calendarBody" class="grid grid-cols-7 gap-2 mt-4 text-center text-sm">
            <!-- Calendar will be rendered here by JavaScript -->
        </div>
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

    <script>
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