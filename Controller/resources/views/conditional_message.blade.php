<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 flex items-center justify-center min-h-screen font-sans">
    <div class="max-w-lg bg-white shadow-md rounded-lg p-8 text-center">
        <!-- Header -->
        <h1 class="text-3xl font-bold text-indigo-600">Your Message</h1>
        <p class="mt-4 text-gray-600 text-lg">Here is the message sent to this page:</p>

        <!-- Message Display -->
        <div class="mt-6 bg-indigo-50 border-l-4 border-indigo-500 text-indigo-800 p-4 rounded-md">
            <p class="text-xl font-medium">{{ $message }}</p>
        </div>

        <!-- Footer -->
        <footer class="mt-8">
            <a href="/" class="text-indigo-500 hover:text-indigo-700 text-sm font-semibold underline">
                Back to Home
            </a>
        </footer>
    </div>
</body>
</html>
