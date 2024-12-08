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
        <div class="bg-white p-8 rounded-lg shadow-[0px_10px_800px_rgba(6,182,212,0.5)]
        border-2 border-cyan-500 w-full max-w-3xl">
            <!-- Page Title -->
            <h2 class="text-2xl font-bold text-center text-blue-600 mb-6">Submitted Information</h2>

            <!-- Displaying Submitted Data in Table Format -->
            <div class="overflow-x-auto bg-white p-6 rounded-lg shadow-lg">
                <table class="w-full table-auto border-collapse border border-gray-200">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border border-gray-300 px-6 py-3 text-left text-sm font-bold text-gray-600">Field</th>
                            <th class="border border-gray-300 px-6 py-3 text-left text-sm font-bold text-gray-600">Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd:bg-white even:bg-gray-50 hover:bg-cyan-500">
                            <td class="border border-gray-300 px-6 py-3 text-sm font-bold text-gray-700">Name</td>
                            <td class="border border-gray-300 px-6 py-3 text-sm font-bold text-gray-700">{{ $name }}</td>
                        </tr>
                        <tr class="odd:bg-white even:bg-gray-50 hover:bg-cyan-500">
                            <td class="border border-gray-300 px-6 py-3 text-sm font-bold text-gray-700">Email</td>
                            <td class="border border-gray-300 px-6 py-3 text-sm font-bold text-gray-700">{{ $email }}</td>
                        </tr>
                        <tr class="odd:bg-white even:bg-gray-50 hover:bg-cyan-500">
                            <td class="border border-gray-300 px-6 py-3 text-sm font-bold text-gray-700">Phone</td>
                            <td class="border border-gray-300 px-6 py-3 text-sm font-bold text-gray-700">{{ $phone }}</td>
                        </tr>
                        <tr class="odd:bg-white even:bg-gray-50 hover:bg-cyan-500">
                            <td class="border border-gray-300 px-6 py-3 text-sm font-bold text-gray-700">Address</td>
                            <td class="border border-gray-300 px-6 py-3 text-sm font-bold text-gray-700">{{ $address }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Back Button -->
            <div class="mt-6 text-center">
                <a href="/basic-info-form" class="text-blue-600 hover:text-blue-700">Go Back to Form</a>
            </div>
        </div>
    </div>

</body>
</html>
