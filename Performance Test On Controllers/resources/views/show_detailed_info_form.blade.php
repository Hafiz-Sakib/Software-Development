<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Result</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-3xl bg-white p-8 shadow-[0px_10px_800px_rgba(6,182,212,0.5)] border-2 border-cyan-500 rounded-lg">
        <h1 class="text-3xl font-bold mb-6 text-center text-blue-500">Form Submitted Successfully!</h1>
        <div class="overflow-x-auto">
            <table class="w-full border-collapse border border-gray-200">
                <thead>
                    <tr class="bg-gray-100 text-blue-500">
                        <th class="border border-gray-300 px-6 py-3 text-left text-sm font-bold">Field</th>
                        <th class="border border-gray-300 px-6 py-3 text-left text-sm font-bold">Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd:bg-white even:bg-gray-50">
                        <td class="border border-gray-300 px-6 py-3 text-sm font-bold text-gray-700">Name</td>
                        <td class="border border-gray-300 px-6 py-3 text-sm font-bold text-gray-700">{{ $data['name'] }}</td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-50">
                        <td class="border border-gray-300 px-6 py-3 text-sm font-bold text-gray-700">Age</td>
                        <td class="border border-gray-300 px-6 py-3 text-sm font-bold text-gray-700">{{ $data['age'] }}</td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-50">
                        <td class="border border-gray-300 px-6 py-3 text-sm font-bold text-gray-700">Email</td>
                        <td class="border border-gray-300 px-6 py-3 text-sm font-bold text-gray-700">{{ $data['email'] }}</td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-50">
                        <td class="border border-gray-300 px-6 py-3 text-sm font-bold text-gray-700">Phone</td>
                        <td class="border border-gray-300 px-6 py-3 text-sm font-bold text-gray-700">{{ $data['phone'] }}</td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-50">
                        <td class="border border-gray-300 px-6 py-3 text-sm font-bold text-gray-700">Gender</td>
                        <td class="border border-gray-300 px-6 py-3 text-sm font-bold text-gray-700">{{ $data['gender'] }}</td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-50">
                        <td class="border border-gray-300 px-6 py-3 text-sm font-bold text-gray-700">Address</td>
                        <td class="border border-gray-300 px-6 py-3 text-sm font-bold text-gray-700">{{ $data['address'] }}</td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-50">
                        <td class="border border-gray-300 px-6 py-3 text-sm font-bold text-gray-700">Date of Birth</td>
                        <td class="border border-gray-300 px-6 py-3 text-sm font-bold text-gray-700">{{ $data['dob'] }}</td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-50">
                        <td class="border border-gray-300 px-6 py-3 text-sm font-bold text-gray-700">Country</td>
                        <td class="border border-gray-300 px-6 py-3 text-sm font-bold text-gray-700">{{ $data['country'] }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="text-center mt-6">
            <a href="/enter-detailed-info"
               class="text-white bg-blue-500 hover:bg-blue-600 px-6 py-2 rounded-md focus:outline-none focus:ring focus:ring-blue-300">
               Back to Form
            </a>
        </div>
    </div>
</body>
</html>
