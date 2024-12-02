<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Denied - Minor</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-red-600 text-white font-sans">

    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white text-red-600 rounded-lg shadow-lg w-11/12 max-w-3xl p-8">
            <div class="text-center mb-6">
                <h1 class="text-4xl font-semibold">Access Denied</h1>
                <p class="text-lg mt-2">You are <span class="font-bold text-2xl">{{ $age }}</span> years old. Sorry, access is denied.</p>
            </div>

            <!-- Image Section with Controlled Size -->
            <div class="mt-6">
                <img src="https://plus.unsplash.com/premium_photo-1679934135314-3ad7205beac2?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Access Denied" class="w-3/4 h-auto mx-auto rounded-lg shadow-lg">
            </div>

            <div class="mt-8 text-center">
                <p class="text-sm">You must be at least 18 years old to access this content. Please come back later.</p>
                <div class="mt-4">
                    <a href="/" class="text-red-600 hover:text-red-800">Go Back to Homepage</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
