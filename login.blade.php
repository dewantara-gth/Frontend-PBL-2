<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        Sign Up
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="flex flex-col md:flex-row bg-white shadow-lg rounded-lg overflow-hidden max-w-4xl w-full">
        <div class="md:w-1/2 p-8">
            <h2 class="text-2xl font-bold mb-6">
                Admin Login
            </h2>
            <form>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                        Name
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="name" placeholder="Enter your name" type="text" />
                </div>
                
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Password
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                        id="password" placeholder="Enter your password" type="password" />
                </div>

                <div class="flex items-center justify-between">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="button">
                        Sign up
                    </button>
                </div>
            </form>
            <div class="mt-4 text-center">
                <p class="text-gray-600">
                    Or
                </p>
                <p class="mt-2">
                    Have an account?
                    <a class="text-blue-500" href="#">
                        Sign In
                    </a>
                </p>
            </div>
        </div>
        <div class="md:w-1/2">
            <img alt="Badminton rackets and shuttlecock on a blue background" class="object-cover w-full h-full"
                height="800"
                src="https://storage.googleapis.com/a1aa/image/gI6DY3lKMsJCuPddhLYQUIXAvBOTGnNOMJzOOq_prJs.jpg"
                width="600" />
        </div>
    </div>
</body>

</html>