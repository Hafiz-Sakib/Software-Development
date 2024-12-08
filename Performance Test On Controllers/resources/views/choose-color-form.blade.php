<!-- resources/views/choose-color-form.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose a Color</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 flex items-center justify-center min-h-screen font-sans">

    <!-- Form Container -->
    <div class="m-8 shadow-[0px_10px_800px_rgba(6,182,212,0.5)]
     border-2 border-cyan-500 max-w-4xl bg-white rounded-lg p-6 text-center">
        <h1 class="text-3xl font-bold mb-4 text-indigo-600">Choose Your Color</h1>

        <!-- Color Input Form -->
        <form action="/choose-color" method="POST" class="space-y-4 mb-8 px-52">
            @csrf <!-- CSRF Token -->
            <div>
                <label for="color" class="block text-gray-700 font-semibold mb-2">Enter a Color:</label>
                <input
                    type="text"
                    id="color"
                    name="color"
                    placeholder="e.g., red, blue, green"
                    required
                    class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                >
            </div>
            <button
                type="submit"
                class="w-full bg-cyan-500 shadow-2xl shadow-cyan-500 hover:bg-indigo-600 text-white py-3 rounded-lg font-semibold">
                Submit
            </button>
        </form>

        <!-- Color Options Table -->
        <h2 class="text-2xl font-bold mb-4 text-indigo-600">Color Options</h2>
        <table class="min-w-full table-auto border-collapse mb-6">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2 border text-left">Color</th>
                    <th class="px-4 py-2 border text-left">Description</th>
                    <th class="px-4 py-2 border text-left">Sample</th>
                </tr>
            </thead>
            <tbody>
                @foreach([
                    ['color' => 'Red', 'description' => 'A bold and bright color associated with passion.', 'class' => 'bg-red-500'],
                    ['color' => 'Blue', 'description' => 'A cool and calming color, often associated with trust and peace.', 'class' => 'bg-blue-500'],
                    ['color' => 'Green', 'description' => 'A color representing nature, freshness, and tranquility.', 'class' => 'bg-green-500'],
                    ['color' => 'Yellow', 'description' => 'A bright color that often symbolizes happiness and energy.', 'class' => 'bg-yellow-500'],
                    ['color' => 'Purple', 'description' => 'A color often associated with luxury, mystery, and creativity.', 'class' => 'bg-purple-500'],
                    ['color' => 'Orange', 'description' => 'A color that combines the energy of red and the happiness of yellow.', 'class' => 'bg-orange-500'],
                    ['color' => 'Pink', 'description' => 'A soft color that often represents love and femininity.', 'class' => 'bg-pink-500'],
                    ['color' => 'Black', 'description' => 'A strong color often associated with sophistication, power, and mystery.', 'class' => 'bg-black'],
                    ['color' => 'White', 'description' => 'A pure color that symbolizes peace, cleanliness, and simplicity.', 'class' => 'bg-white border-2 border-gray-500'],
                    ['color' => 'Gray', 'description' => 'A neutral color often used to represent balance and sophistication.', 'class' => 'bg-gray-500'],
                    ['color' => 'Cyan', 'description' => 'A bright and vibrant color that represents clarity and freshness.', 'class' => 'bg-cyan-500'],
                    ['color' => 'Lime', 'description' => 'A bright, zesty color that represents liveliness and energy.', 'class' => 'bg-lime-500'],
                    ['color' => 'Indigo', 'description' => 'A deep color often associated with wisdom and intuition.', 'class' => 'bg-indigo-500']
                ] as $colorOption)
                    <tr>
                        <td class="px-4 py-2 border">{{ $colorOption['color'] }}</td>
                        <td class="px-4 py-2 border">{{ $colorOption['description'] }}</td>
                        <td class="px-4 py-2 border">
                            <div class="w-10 h-10 rounded-full {{ $colorOption['class'] }}"></div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
