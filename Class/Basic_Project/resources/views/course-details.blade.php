<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
    <div class="min-h-screen flex items-center justify-center px-6 py-12">
        <div class="bg-white rounded-lg shadow-lg max-w-lg w-full p-8 text-center">
            <h1 class="text-3xl font-bold text-gray-800 mb-4">Course Details</h1>
            <p class="text-lg text-gray-600 mb-6">
                You are viewing details for <span class="font-semibold text-blue-500">Course ID: {{ $id }}</span>
            </p>
            <div class="flex justify-center space-x-4">
                <a href="{{ route('enroll') }}"
                   class="px-6 py-3 bg-gray-300 text-gray-800 font-medium rounded-lg shadow-md hover:bg-gray-400 transition-all">
                   Enroll Now
                </a>
                <a href="{{ route('courses') }}"
                   class="px-6 py-3 bg-gray-300 text-gray-800 font-medium rounded-lg shadow-md hover:bg-gray-400 transition-all">
                   Back to Courses
                </a>
            </div>
        </div>
    </div>
</body>
</html>
