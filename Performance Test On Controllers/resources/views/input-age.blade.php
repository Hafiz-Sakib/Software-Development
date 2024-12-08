<!-- resources/views/choose-color-form.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Your Age</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 flex items-center justify-center min-h-screen font-sans">
    <!-- Form Container -->
    <div class="m-8 shadow-[0px_10px_800px_rgba(6,182,212,0.5)]
     border-2 border-cyan-500 max-w-4xl bg-white rounded-lg p-6 text-center">
        <h1 class="text-3xl font-bold mb-4 text-indigo-600">Enter Your Age</h1>

        <!-- Age Input Form -->
        <form action="{{ route('check-access') }}" method="POST" class="space-y-4 mb-8 px-52">
            @csrf <!-- CSRF Token -->
            <div>
                <input
                    type="text"
                    id="age"
                    name="age"
                    placeholder="enter your age"
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
</div>
</body>
