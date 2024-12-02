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
    @elseif ($color == 'yellow')
        <div class="mt-6 w-24 h-24 mx-auto bg-yellow-500 rounded-full shadow-md"></div>
    @elseif ($color == 'purple')
        <div class="mt-6 w-24 h-24 mx-auto bg-purple-500 rounded-full shadow-md"></div>
    @elseif ($color == 'orange')
        <div class="mt-6 w-24 h-24 mx-auto bg-orange-500 rounded-full shadow-md"></div>
    @elseif ($color == 'pink')
        <div class="mt-6 w-24 h-24 mx-auto bg-pink-500 rounded-full shadow-md"></div>
    @elseif ($color == 'brown')
        <div class="mt-6 w-24 h-24 mx-auto bg-brown-500 rounded-full shadow-md"></div>
    @elseif ($color == 'black')
        <div class="mt-6 w-24 h-24 mx-auto bg-black rounded-full shadow-md"></div>
    @elseif ($color == 'white')
        <div class="mt-6 w-24 h-24 mx-auto bg-white rounded-full shadow-md"></div>
    @elseif ($color == 'gray')
        <div class="mt-6 w-24 h-24 mx-auto bg-gray-500 rounded-full shadow-md"></div>
    @elseif ($color == 'cyan')
        <div class="mt-6 w-24 h-24 mx-auto bg-cyan-500 rounded-full shadow-md"></div>
    @elseif ($color == 'magenta')
        <div class="mt-6 w-24 h-24 mx-auto bg-magenta-500 rounded-full shadow-md"></div>
    @elseif ($color == 'lime')
        <div class="mt-6 w-24 h-24 mx-auto bg-lime-500 rounded-full shadow-md"></div>
    @elseif ($color == 'gold')
        <div class="mt-6 w-24 h-24 mx-auto bg-yellow-600 rounded-full shadow-md"></div>
    @elseif ($color == 'silver')
        <div class="mt-6 w-24 h-24 mx-auto bg-silver-500 rounded-full shadow-md"></div>
    @elseif ($color == 'beige')
        <div class="mt-6 w-24 h-24 mx-auto bg-beige-500 rounded-full shadow-md"></div>
    @elseif ($color == 'peach')
        <div class="mt-6 w-24 h-24 mx-auto bg-peach-500 rounded-full shadow-md"></div>
    @elseif ($color == 'tan')
        <div class="mt-6 w-24 h-24 mx-auto bg-tan-500 rounded-full shadow-md"></div>
    @elseif ($color == 'navy')
        <div class="mt-6 w-24 h-24 mx-auto bg-navy-500 rounded-full shadow-md"></div>
    @elseif ($color == 'aqua')
        <div class="mt-6 w-24 h-24 mx-auto bg-aqua-500 rounded-full shadow-md"></div>
    @elseif ($color == 'ivory')
        <div class="mt-6 w-24 h-24 mx-auto bg-ivory-500 rounded-full shadow-md"></div>
    @elseif ($color == 'coral')
        <div class="mt-6 w-24 h-24 mx-auto bg-coral-500 rounded-full shadow-md"></div>
    @elseif ($color == 'plum')
        <div class="mt-6 w-24 h-24 mx-auto bg-plum-500 rounded-full shadow-md"></div>
    @elseif ($color == 'mint')
        <div class="mt-6 w-24 h-24 mx-auto bg-mint-500 rounded-full shadow-md"></div>
    @elseif ($color == 'lavender')
        <div class="mt-6 w-24 h-24 mx-auto bg-lavender-500 rounded-full shadow-md"></div>
    @else
        <div class="mt-6 w-24 h-24 mx-auto bg-gray-500 rounded-full shadow-md"></div>
    @endif


        <!-- Navigation Button -->
        <div class="mt-6">
            <a href="/choose-color-form" class="text-indigo-500 hover:text-indigo-700 font-semibold underline">
                Choose Again
            </a>
        </div>
    </div>

</body>
</html>
