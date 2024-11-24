<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
    <div class="min-h-screen flex items-center justify-center px-6 py-12">
        <div class="bg-white rounded-lg shadow-lg max-w-md w-full p-8">
            <h1 class="text-3xl font-bold text-gray-800 text-center mb-6">Sign Up</h1>
            <form method="POST" action="/signup" class="space-y-6">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-600 mb-2">Name</label>
                    <input type="text" id="name" name="name" placeholder="Name" required
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-600 mb-2">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email" required
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-600 mb-2">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password" required
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
                </div>
                <button type="submit"
                        class="w-full px-4 py-2 bg-green-500 text-white font-medium rounded-lg shadow-md hover:bg-green-600 transition-all">
                    Sign Up
                </button>
            </form>
            <div class="mt-6 text-center">
                <a href="{{ route('home') }}"
                   class="text-blue-500 hover:underline text-sm">
                   Back to Homepage
                </a>
            </div>
        </div>
    </div>
</body>
</html>
