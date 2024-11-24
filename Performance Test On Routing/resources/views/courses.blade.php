<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
    <div class="min-h-screen flex flex-col items-center justify-center px-6 py-12">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-2xl p-8">
            <h1 class="text-3xl font-bold text-gray-800 text-center mb-6">Available Courses</h1>
            <ul class="space-y-4">
                <li>
                    <a href="{{ route('course.details', ['id' => 1]) }}"
                       class="block px-4 py-3 bg-blue-500 text-white font-medium rounded-lg shadow-md hover:bg-blue-600 transition-all">
                       Learn PHP Basics
                    </a>
                </li>
                <li>
                    <a href="{{ route('course.details', ['id' => 2]) }}"
                       class="block px-4 py-3 bg-green-500 text-white font-medium rounded-lg shadow-md hover:bg-green-600 transition-all">
                       Master Laravel
                    </a>
                </li>
                <li>
                    <a href="{{ route('course.details', ['id' => 3]) }}"
                       class="block px-4 py-3 bg-purple-500 text-white font-medium rounded-lg shadow-md hover:bg-purple-600 transition-all">
                       Web Development Fundamentals
                    </a>
                </li>
            </ul>
            <div class="mt-6 text-center">
                <a href="{{ route('home') }}"
                   class="px-6 py-3 bg-gray-300 text-gray-800 font-medium rounded-lg shadow-md hover:bg-gray-400 transition-all">
                   Back to Homepage
                </a>
            </div>
        </div>
    </div>
</body>
</html>
