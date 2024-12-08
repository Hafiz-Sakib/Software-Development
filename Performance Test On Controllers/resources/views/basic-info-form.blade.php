<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Form</title>
    <script src="https://cdn.tailwindcss.com"></script> <!-- Tailwind CSS CDN -->
</head>
<body class="bg-gray-100 font-sans">

    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-[0px_10px_800px_rgba(6,182,212,0.5)]
     border-2 border-cyan-500 w-full max-w-md">
            <!-- Form Title -->
            <h2 class="text-2xl font-bold text-center text-blue-600 mb-6">Submit Your Name</h2>

            <!-- Form Start -->
            <form action="/show-basic-info" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Name:</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required
                    >
                </div>
                    <!-- Email Input -->
    <div class="mb-4">
        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email:</label>
        <input
            type="email"
            id="email"
            name="email"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
            required
        >
    </div>

    <!-- Phone Input -->
    <div class="mb-4">
        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone:</label>
        <input
            type="tel"
            id="phone"
            name="phone"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
            required
        >
    </div>

    <!-- Address Input -->
    <div class="mb-4">
        <label for="address" class="block text-sm font-medium text-gray-700 mb-2">Address:</label>
        <textarea
            id="address"
            name="address"
            rows="3"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
            required
        ></textarea>
    </div>
                <div class="text-center">
                    <button
                        type="submit"
                        class="bg-blue-600 text-white py-2 px-6 rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
