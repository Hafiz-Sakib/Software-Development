<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
    <div class="min-h-screen flex items-center justify-center px-6 py-12">
        <div class="bg-white rounded-lg shadow-lg max-w-md w-full p-8">
            <h1 class="text-3xl font-bold text-gray-800 text-center mb-4">About Us</h1>
            <p class="text-gray-600 text-lg text-center mb-6">
                This platform is built to connect learners with quality courses.
            </p>
            <div class="text-center">
                <a href="{{ route('home') }}"
                   class="inline-block px-6 py-3 bg-blue-500 text-white text-sm font-medium rounded-lg shadow-md hover:bg-blue-600 transition-all">
                   Back to Homepage
                </a>
            </div>
        </div>
    </div>
</body>
</html>
