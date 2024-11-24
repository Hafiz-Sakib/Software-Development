<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Course Platform</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
    <div class="min-h-screen flex flex-col items-center justify-center px-6 py-12">
        <div class="bg-white rounded-lg shadow-lg max-w-2xl w-full p-8 text-center">
            <h1 class="text-4xl font-bold text-gray-800 mb-8">Welcome to the Online Course Platform!</h1>
            <nav class="space-x-4">
                <a href="{{ route('courses') }}"
                   class="text-lg text-blue-500 hover:text-blue-600 font-semibold transition-all">
                   View Courses
                </a> |
                <a href="{{ route('signup') }}"
                   class="text-lg text-green-500 hover:text-green-600 font-semibold transition-all">
                   Sign Up
                </a> |
                <a href="{{ route('login') }}"
                   class="text-lg text-blue-500 hover:text-blue-600 font-semibold transition-all">
                   Login
                </a> |
                <a href="{{ route('about') }}"
                   class="text-lg text-gray-600 hover:text-gray-700 font-semibold transition-all">
                   About Us
                </a>
            </nav>
        </div>
    </div>
</body>
</html>
