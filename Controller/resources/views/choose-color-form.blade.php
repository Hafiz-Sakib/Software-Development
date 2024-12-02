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
    <div class="max-w-md bg-white shadow-lg rounded-lg p-6 text-center">
        <h1 class="text-3xl font-bold mb-4 text-indigo-600">Choose Your Color</h1>

        <!-- Color Input Form -->
        <form action="/choose-color" method="POST" class="space-y-4">
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
                class="w-full bg-indigo-500 hover:bg-indigo-600 text-white py-3 rounded-lg font-semibold">
                Submit
            </button>
        </form>
    </div>

</body>
</html>
