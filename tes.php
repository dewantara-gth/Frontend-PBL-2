<html>

<head>
    <title>Jaya Badminton Hall</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
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

        /* Modal styles */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1000;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            /* Could be more or less, depending on screen size */
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
    <main class="p-4 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="border rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
                <img alt="Indoor badminton court with wooden flooring and bright lighting, Court 1"
                    class="w-full h-48 object-cover" height="400"
                    src="https://storage.googleapis.com/a1aa/image/c52aebd9-e9f5-46a8-c37e-3aa246c640fa.jpg"
                    width="600" />
                <div class="p-4">
                    <h2 class="text-lg font-bold">
                        Court 1
                    </h2>
                    <p class="text-green-600 text-xl font-bold">
                        $2016
                        <span class="text-gray-600 text-sm">
                            /2 Hours
                        </span>
                    </p>
                    <button class="mt-3 w-full bg-green-600 hover:bg-green-700 text-white py-2 rounded transition"
                        onclick="openModal('Court 1')">
                        Book Now
                    </button>
                </div>
            </div>
            <!-- Repeat for other courts -->
        </div>
        <!-- Modal for Booking Form -->
        <div id="bookingModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <h2 class="text-2xl font-bold text-center mb-6">Your Personal Information</h2>
                <form>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="court">Court</label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="court" type="text" placeholder="" readonly>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="customer-name">Customer
                            Name</label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="customer-name" type="text" placeholder="">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="phone-number">Phone
                            Number</label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="phone-number" type="text" placeholder="">
                    </div>
                    <div class="flex flex-wrap mb-4">
                        <div class="w-full md:w-1/2 pr-0 md:pr-2 mb-4 md:mb-0">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="start-time">Start
                                Time</label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline flatpickr"
                                id="start-time" type="text" placeholder="DD/MM/YY | 00.00">
                        </div>
                        <div class="w-full md:w-1/2 pl-0 md:pl-2">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="end-time">End Time</label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline flatpickr"
                                id="end-time" type="text" placeholder="DD/MM/YY | 00.00">
                        </div>
                    </div>
                    <div class="text-center">
                        <button
                            class="bg-green-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="button">
                            Next Step
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <script>
        function openModal(courtName) {
            document.getElementById('court').value = courtName;
            document.getElementById('bookingModal').style.display = "block";
        }

        function closeModal() {
            document.getElementById('bookingModal').style.display = "none";
        }

        window.onclick = function (event) {
            if (event.target == document.getElementById(' bookingModal')) {
                closeModal();
            }
        }

        document.getElementById('menu-button').addEventListener('click', function () {
            var menu = document.getElementById('mobile-menu');
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }
        });

        document.addEventListener('DOMContentLoaded', function () {
            const monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
            const dayNames = ["MON", "TUE", "WED", "THU", "FRI", "SAT", "SUN"];
            let currentDate = new Date();

            function renderCalendar() {
                const month = currentDate.getMonth();
                const year = currentDate.getFullYear();

                let firstDay = new Date(year, month, 1).getDay();
                firstDay = (firstDay + 6) % 7;

                const lastDate = new Date(year, month + 1, 0).getDate();

                document.getElementById('monthYear').innerText = `${monthNames[month]}, ${year}`;
                const calendarBody = document.getElementById('calendarBody');
                calendarBody.innerHTML = '';

                for (let i = 0; i < dayNames.length; i++) {
                    const dayCell = document.createElement('div');
                    dayCell.className = 'font-bold text-green-700';
                    dayCell.innerText = dayNames[i];
                    calendarBody.appendChild(dayCell);
                }

                for (let i = 0; i < firstDay; i++) {
                    const emptyCell = document.createElement('div');
                    emptyCell.className = 'bg-gray-200 py-4 rounded';
                    calendarBody.appendChild(emptyCell);
                }

                for (let i = 1; i <= lastDate; i++) {
                    const dateCell = document.createElement('div');
                    dateCell.className = 'bg-gray-100 py-4 rounded flex flex-col items-center justify-start text-gray-800';

                    const today = new Date();
                    if (i === today.getDate() && month === today.getMonth() && year === today.getFullYear()) {
                        dateCell.classList.add('bg-green-100', 'font-semibold');
                    }

                    const dateNumber = document.createElement('div');
                    dateNumber.innerText = i;
                    dateNumber.className = 'text-base mb-2';
                    dateCell.appendChild(dateNumber);

                    const sessions = document.createElement('div');
                    sessions.className = 'w-full flex flex-col space-y-1';

                    const sessionTimes = [
                        "08:00 - 09:00",
                        "10:00 - 11:00",
                        "14:00 - 15:00",
                        "16:00 - 17:00"
                    ];

                    sessionTimes.forEach(time => {
                        const sessionDiv = document.createElement('div');
                        sessionDiv.className = 'border border-green-600 rounded px-1 text-xs text-green-700 bg-green-50';
                        sessionDiv.innerText = time;
                        sessions.appendChild(sessionDiv);
                    });

                    dateCell.appendChild(sessions);
                    calendarBody.appendChild(dateCell);
                }
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