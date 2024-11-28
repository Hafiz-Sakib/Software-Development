<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>  <!-- Dynamic title based on passed data -->
    <script src="https://cdn.tailwindcss.com"></script>  <!-- Tailwind CSS CDN -->
</head>
<body class="bg-gray-50 font-sans">

    <div class="flex items-center justify-center min-h-screen px-4">
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full">
            <h1 class="text-3xl font-semibold text-center text-blue-600 mb-4">
                {{ $title }}
            </h1>
            <p class="text-lg text-gray-700 text-center">
                {{ $description }}
            </p>
        </div>
    </div>

</body>
</html>
