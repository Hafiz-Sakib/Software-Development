<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color Chooser</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 flex items-center justify-center min-h-screen font-sans">

    <!-- Card Container -->
    <div class="max-w-md bg-white shadow-lg rounded-lg p-6 text-center">
        <!-- Dynamic Color Message -->
        <h1 class="text-3xl font-bold mb-4 text-indigo-600">Color Selection</h1>
        <p class="text-xl text-gray-700">{{ $message }}</p>

        <!-- Decorative Circle -->
        @if ($color == 'red')
            <div class="mt-6 w-24 h-24 mx-auto bg-red-500 rounded-full shadow-md"></div>
        @elseif ($color == 'blue')
            <div class="mt-6 w-24 h-24 mx-auto bg-blue-500 rounded-full shadow-md"></div>
        @elseif ($color == 'green')
            <div class="mt-6 w-24 h-24 mx-auto bg-green-500 rounded-full shadow-md"></div>
        @else
            <div class="mt-6 w-24 h-24 mx-auto bg-gray-500 rounded-full shadow-md"></div>
        @endif

        <!-- Navigation Button -->
        <div class="mt-6">
            <a href="{{route('choose-color-form')}}" class="text-indigo-500 hover:text-indigo-700 font-semibold underline">
                Choose Again
            </a>
        </div>
    </div>

</body>
</html>
