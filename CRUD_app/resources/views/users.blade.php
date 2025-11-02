<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Table</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 min-h-screen flex flex-col items-center justify-start p-10 text-gray-100 font-sans">

    <!-- Header with Table Label and Create Button -->
    <div class="flex w-full max-w-5xl justify-between items-center mb-8">
        <h1 class="text-4xl font-extrabold bg-gradient-to-r from-blue-400 to-purple-500 text-transparent bg-clip-text">
            User List
        </h1>
        <a href="/create" class="px-5 py-2 bg-green-500 hover:bg-green-600 rounded-lg text-white font-semibold shadow-md transition">
            + Create
        </a>
    </div>

    <!-- Users Table -->
    <div class="w-full max-w-5xl bg-gradient-to-br from-gray-800/80 to-gray-900/90 shadow-2xl rounded-2xl border border-gray-700 overflow-hidden">
        <table class="min-w-full border-collapse text-base text-center">
            <thead>
                <tr class="bg-gradient-to-r from-blue-600/80 to-purple-600/80 text-white">
                    <th class="py-3 px-4 font-semibold">ID</th>
                    <th class="py-3 px-4 font-semibold">Name</th>
                    <th class="py-3 px-4 font-semibold">Age</th>
                    <th class="py-3 px-4 font-semibold">Gender</th>
                    <th class="py-3 px-4 font-semibold">Created At</th>
                    <th class="py-3 px-4 font-semibold">Updated At</th>
                    <th class="py-3 px-4 font-semibold">Action (1)</th>
                    <th class="py-3 px-4 font-semibold">Action (2)</th>
                </tr>
            </thead>

            <tbody>

                <x-users-data-output />

            </tbody>
        </table>
    </div>

</body>
</html>
