<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generated Numbers</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans">

    <!-- Header Section -->
    <header class="bg-indigo-600 text-white py-4">
        <div class="container mx-auto text-center">
            <h1 class="text-3xl font-bold">Generated Numbers</h1>
            <p class="mt-2">A List of Numbers from 1 to 1000</p>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto p-6">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-2xl font-semibold text-indigo-500 mb-4">Numbers:</h2>

            <!-- Numbers Grid -->
            <div class="grid grid-cols-4 sm:grid-cols-6 md:grid-cols-8 lg:grid-cols-12 gap-4 text-gray-700 text-center">
                @foreach ($numbers as $number)
                    <div class="bg-indigo-50 p-2 rounded-md shadow-sm font-medium">
                        {{ $number }}
                    </div>
                @endforeach
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center py-4 mt-6">
        <p class="text-sm">&copy; 2024 Numbers List. All rights reserved.</p>
    </footer>

</body>
</html>