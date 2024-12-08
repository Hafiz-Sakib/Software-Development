<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Routes Table</title>
    <script src="https://cdn.tailwindcss.com"></script> <!-- Tailwind CSS CDN -->
</head>
<body class="bg-gray-100 font-sans">

    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 m-8 rounded-lg shadow-[0px_10px_800px_rgba(6,182,212,0.5)]
     border-2 border-cyan-500 w-full max-w-4xl">
            <!-- Page Title -->
            <h2 class="text-2xl font-bold text-center text-blue-600 mb-6">Application Routes</h2>

            <!-- Routes Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full table-auto border-collapse border border-gray-200">
                    <thead class="bg-blue-600 text-white">
                        <tr>
                            <th class="border border-gray-300 px-6 py-3 text-left text-sm font-bold">Route Name</th>
                            <th class="border border-gray-300 px-6 py-3 text-left text-sm font-bold">URL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Add routes here -->

                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="border border-gray-300 px-6 py-3 text-sm font-semibold text-gray-700">Home</td>
                            <td class="border border-gray-300 px-6 py-3 text-sm">
                                <a href="http://127.0.0.1:8000/" class="text-blue-500 hover:text-blue-700">Go to Home</a>
                            </td>
                        </tr>
                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="border border-gray-300 px-6 py-3 text-sm font-semibold text-gray-700">Controller Basics</td>
                            <td class="border border-gray-300 px-6 py-3 text-sm">
                                <a href="http://127.0.0.1:8000/controller_basics" class="text-blue-500 hover:text-blue-700">Go to Controller Basics</a>
                            </td>
                        </tr>
                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="border border-gray-300 px-6 py-3 text-sm font-semibold text-gray-700">Message</td>
                            <td class="border border-gray-300 px-6 py-3 text-sm">
                                <a href="http://127.0.0.1:8000/message" class="text-blue-500 hover:text-blue-700">Go to Message</a>
                            </td>
                        </tr>
                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="border border-gray-300 px-6 py-3 text-sm font-semibold text-gray-700">Data</td>
                            <td class="border border-gray-300 px-6 py-3 text-sm">
                                <a href="http://127.0.0.1:8000/data" class="text-blue-500 hover:text-blue-700">Go to Data</a>
                            </td>
                        </tr>
                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="border border-gray-300 px-6 py-3 text-sm font-semibold text-gray-700">Show List</td>
                            <td class="border border-gray-300 px-6 py-3 text-sm">
                                <a href="http://127.0.0.1:8000/showList" class="text-blue-500 hover:text-blue-700">Go to Show List</a>
                            </td>
                        </tr>
                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="border border-gray-300 px-6 py-3 text-sm font-semibold text-gray-700">Basic Info Form</td>
                            <td class="border border-gray-300 px-6 py-3 text-sm">
                                <a href="http://127.0.0.1:8000/basic-info-form" class="text-blue-500 hover:text-blue-700">Go to Basic Info Form</a>
                            </td>
                        </tr>
                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="border border-gray-300 px-6 py-3 text-sm font-semibold text-gray-700">Show Basic Info</td>
                            <td class="border border-gray-300 px-6 py-3 text-sm">
                                <a href="http://127.0.0.1:8000/show-basic-info" class="text-blue-500 hover:text-blue-700">Go to Show Basic Info</a>
                            </td>
                        </tr>
                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="border border-gray-300 px-6 py-3 text-sm font-semibold text-gray-700">Conditional Message</td>
                            <td class="border border-gray-300 px-6 py-3 text-sm">
                                <a href="http://127.0.0.1:8000/conditional_message" class="text-blue-500 hover:text-blue-700">Go to Conditional Message</a>
                            </td>
                        </tr>
                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="border border-gray-300 px-6 py-3 text-sm font-semibold text-gray-700">Numbers</td>
                            <td class="border border-gray-300 px-6 py-3 text-sm">
                                <a href="http://127.0.0.1:8000/numbers" class="text-blue-500 hover:text-blue-700">Go to Numbers</a>
                            </td>
                        </tr>
                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="border border-gray-300 px-6 py-3 text-sm font-semibold text-gray-700">Random Numbers</td>
                            <td class="border border-gray-300 px-6 py-3 text-sm">
                                <a href="http://127.0.0.1:8000/random" class="text-blue-500 hover:text-blue-700">Go to Random Numbers</a>
                            </td>
                        </tr>
                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="border border-gray-300 px-6 py-3 text-sm font-semibold text-gray-700">Color</td>
                            <td class="border border-gray-300 px-6 py-3 text-sm">
                                <a href="http://127.0.0.1:8000/color/{color}" class="text-blue-500 hover:text-blue-700">Go to Color</a>
                            </td>
                        </tr>
                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="border border-gray-300 px-6 py-3 text-sm font-semibold text-gray-700">Choose Color Form</td>
                            <td class="border border-gray-300 px-6 py-3 text-sm">
                                <a href="http://127.0.0.1:8000/choose-color-form" class="text-blue-500 hover:text-blue-700">Go to Choose Color Form</a>
                            </td>
                        </tr>
                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="border border-gray-300 px-6 py-3 text-sm font-semibold text-gray-700">Input Age</td>
                            <td class="border border-gray-300 px-6 py-3 text-sm">
                                <a href="http://127.0.0.1:8000/input-age" class="text-blue-500 hover:text-blue-700">Go to Input Age</a>
                            </td>
                        </tr>
                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="border border-gray-300 px-6 py-3 text-sm font-semibold text-gray-700">API Simulation</td>
                            <td class="border border-gray-300 px-6 py-3 text-sm">
                                <a href="http://127.0.0.1:8000/api-simulation" class="text-blue-500 hover:text-blue-700">Go to API Simulation</a>
                            </td>
                        </tr>
                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="border border-gray-300 px-6 py-3 text-sm font-semibold text-gray-700">Chessboard</td>
                            <td class="border border-gray-300 px-6 py-3 text-sm">
                                <a href="http://127.0.0.1:8000/chessboard" class="text-blue-500 hover:text-blue-700">Go to Chessboard</a>
                            </td>
                        </tr>
                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="border border-gray-300 px-6 py-3 text-sm font-semibold text-gray-700">Enter Detailed Info</td>
                            <td class="border border-gray-300 px-6 py-3 text-sm">
                                <a href="http://127.0.0.1:8000/enter-detailed-info" class="text-blue-500 hover:text-blue-700">Go to Enter Detailed Info</a>
                            </td>
                        </tr>
                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="border border-gray-300 px-6 py-3 text-sm font-semibold text-gray-700">Submit Form</td>
                            <td class="border border-gray-300 px-6 py-3 text-sm">
                                <a href="http://127.0.0.1:8000/submit-form" class="text-blue-500 hover:text-blue-700">Go to Submit Form</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>
