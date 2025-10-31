<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Table</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 min-h-screen flex flex-col items-start p-10 text-gray-100 font-sans">

    <!-- Header with Table Label and Create Button -->
    <div class="flex w-full max-w-5xl justify-between items-center mb-6">
        <h1 class="text-3xl font-bold bg-gradient-to-r from-blue-400 to-purple-500 text-transparent bg-clip-text">
            User List
        </h1>
        <a href="/create" class="px-4 py-2 bg-green-500 hover:bg-green-600 rounded text-white font-semibold">
            Create
        </a>
    </div>

    <!-- Users Table -->
    <div class="w-full max-w-5xl bg-gradient-to-br from-gray-800/70 to-gray-900/90 shadow-2xl rounded-xl border border-gray-700 overflow-hidden">
        <table class="min-w-full border-collapse">

            <thead>
                <tr class="bg-gradient-to-r from-blue-600/80 to-purple-600/80 text-white">
                    <th class="py-3 px-4 text-left font-semibold">ID</th>
                    <th class="py-3 px-4 text-left font-semibold">Name</th>
                    <th class="py-3 px-4 text-left font-semibold">Age</th>
                    <th class="py-3 px-4 text-left font-semibold">Gender</th>
                    <th class="py-3 px-4 text-left font-semibold">Created At</th>
                    <th class="py-3 px-4 text-left font-semibold">Updated At</th>
                    <th class="py-3 px-4 text-left font-semibold">Actions</th>
                </tr>
            </thead>

            <tbody>

                <!-- Sample Row -->        
                <form method="POST" action="#"> 
                @method('PUT')

                <tr class="border-b border-gray-700 hover:bg-blue-900/30 transition">
                    <td class="py-3 px-4">1</td>
                    <td class="py-3 px-4">Alice</td>
                    <td class="py-3 px-4">24</td>
                    <td class="py-3 px-4">Female</td>
                    <td class="py-3 px-4 text-sm text-gray-400">2025-10-29</td>
                    <td class="py-3 px-4 text-sm text-gray-400">2025-10-30</td>
                    <td class="py-3 px-4">
                    <button type="submit" name="submit" value="update" class="px-3 py-1 bg-blue-500 hover:bg-blue-600 rounded text-white text-sm">
                        Update
                    </button>
                    </td>
                </tr>
                </form>
  
            </tbody>
        </table>
    </div>

</body>
</html>
