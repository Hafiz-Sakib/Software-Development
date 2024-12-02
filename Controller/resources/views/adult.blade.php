<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Granted - Adult</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-600 text-white font-sans">

    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white text-green-600 rounded-lg shadow-lg w-11/12 max-w-3xl p-8">
            <div class="text-center mb-6">
                <h1 class="text-4xl font-semibold">Access Granted</h1>
                <p class="text-lg mt-2">You are <span class="font-bold text-2xl">{{ $age }}</span> years old. Welcome, adult!</p>
            </div>

            <!-- Image Section with Controlled Size -->
            <div class="mt-6">
                <img src="https://images.unsplash.com/photo-1515805045078-701ba71605e2?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Adult Content" class="w-3/4 h-auto mx-auto rounded-lg shadow-lg">
            </div>

            <div class="mt-8 text-center">
                <p class="text-sm">Congratulations! You have access to exclusive adult content. Enjoy your time!</p>
                <div class="mt-4">
                    <a href="/" class="text-green-600 hover:text-green-800">Go Back to Homepage</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
