<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment Success</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
    <div class="min-h-screen flex items-center justify-center px-6 py-12">
        <div class="bg-white rounded-lg shadow-lg max-w-lg w-full p-8 text-center">
            <h1 class="text-3xl font-bold text-green-600 mb-4">
                🎉 Congratulations!
            </h1>
            <p class="text-lg text-gray-700 mb-6">
                You have successfully enrolled in the course.
            </p>
            <div class="flex justify-center space-x-4">
                <a href="{{ route('courses') }}"
                   class="px-6 py-3 bg-blue-500 text-white font-medium rounded-lg shadow-md hover:bg-blue-600 transition-all">
                   Back to Courses
                </a>
                <a href="{{ route('home') }}"
                   class="px-6 py-3 bg-gray-300 text-gray-800 font-medium rounded-lg shadow-md hover:bg-gray-400 transition-all">
                   Back to Homepage
                </a>
            </div>
        </div>
    </div>
</body>
</html>
