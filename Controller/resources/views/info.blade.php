<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Information</title>
    <script src="https://cdn.tailwindcss.com"></script> <!-- Tailwind CSS CDN -->
</head>
<body class="bg-gray-100 font-sans">

    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <!-- Page Title -->
            <h2 class="text-2xl font-semibold text-center text-blue-600 mb-6">Submitted Information</h2>

            <!-- Displaying Submitted Data -->
            <div class="space-y-4">
                <div>
                    <h3 class="text-lg font-medium text-gray-800">Name:</h3>
                    <p class="text-gray-700">{{ $name }}</p>
                </div>
                <div>
                    <h3 class="text-lg font-medium text-gray-800">Email:</h3>
                    <p class="text-gray-700">{{ $email }}</p>
                </div>
                <div>
                    <h3 class="text-lg font-medium text-gray-800">Phone:</h3>
                    <p class="text-gray-700">{{ $phone }}</p>
                </div>
                <div>
                    <h3 class="text-lg font-medium text-gray-800">Address:</h3>
                    <p class="text-gray-700">{{ $address }}</p>
                </div>
            </div>

            <!-- Back Button -->
            <div class="mt-6 text-center">
                <a href="/" class="text-blue-600 hover:text-blue-700">Go Back to Form</a>
            </div>
        </div>
    </div>

</body>
</html>
