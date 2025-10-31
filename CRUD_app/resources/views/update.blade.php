<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create User</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 min-h-screen flex flex-col items-center p-10 text-gray-100 font-sans">

    <h1 class="text-3xl font-bold mb-8 bg-gradient-to-r from-blue-400 to-purple-500 text-transparent bg-clip-text">
        Create New User
    </h1>

    <form action="/users/store" method="POST" class="w-full max-w-lg bg-gray-800/80 rounded-xl shadow-2xl p-8 border border-gray-700">
        <!-- CSRF token for Laravel -->
        @csrf

        <!-- ID -->
        <div class="mb-4">
            <label for="id" class="block mb-2 font-semibold text-gray-200">ID</label>
            <input type="number" name="id" id="id" class="w-full px-4 py-2 rounded-lg bg-gray-700 text-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <!-- Name -->
        <div class="mb-4">
            <label for="Name" class="block mb-2 font-semibold text-gray-200">Name</label>
            <input type="text" name="Name" id="Name" class="w-full px-4 py-2 rounded-lg bg-gray-700 text-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <!-- Age -->
        <div class="mb-4">
            <label for="Age" class="block mb-2 font-semibold text-gray-200">Age</label>
            <input type="number" name="Age" id="Age" class="w-full px-4 py-2 rounded-lg bg-gray-700 text-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <!-- Gender -->
        <div class="mb-6">
            <label for="Gender" class="block mb-2 font-semibold text-gray-200">Gender</label>
            <select name="Gender" id="Gender" class="w-full px-4 py-2 rounded-lg bg-gray-700 text-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                <option value="">Select Gender</option>
                <option value="1">Male</option>
                <option value="2">Female</option>
            </select>
        </div>

        <!-- Buttons: Back (left) | Create (right) -->
        <div class="flex justify-between mt-8">
            <a href="/" class="w-1/3 bg-red-500 hover:bg-red-600 py-3 rounded-lg font-semibold text-white text-center">
                BACK
            </a>

            <button type="submit" class="w-1/3 bg-green-500 hover:bg-green-600 py-3 rounded-lg font-semibold text-white">
                UPDATE
            </button>
        </div>

    </form>

</body>
</html>
