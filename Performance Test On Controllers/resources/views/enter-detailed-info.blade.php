<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="shadow-[0px_10px_800px_rgba(6,182,212,0.5)]
     border-2 border-cyan-500 m-12 w-full max-w-md bg-white p-8 rounded-lg">
        <h1 class="text-2xl font-bold mb-6 text-center text-blue-500">Enter Your Details</h1>
        <form action="/submit-form" method="POST" class="space-y-4">
            @csrf
            <!-- Name -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
                <input type="text" id="name" name="name"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:ring-blue-500 focus:border-blue-500">
            </div>
            <!-- Age -->
            <div>
                <label for="age" class="block text-sm font-medium text-gray-700">Age:</label>
                <input type="number" id="age" name="age"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:ring-blue-500 focus:border-blue-500">
            </div>
            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                <input type="email" id="email" name="email"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:ring-blue-500 focus:border-blue-500">
            </div>
            <!-- Phone -->
            <div>
                <label for="phone" class="block text-sm font-medium text-gray-700">Phone:</label>
                <input type="text" id="phone" name="phone"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:ring-blue-500 focus:border-blue-500">
            </div>
            <!-- Gender -->
            <div>
                <label for="gender" class="block text-sm font-medium text-gray-700">Gender:</label>
                <select id="gender" name="gender"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <!-- Address -->
            <div>
                <label for="address" class="block text-sm font-medium text-gray-700">Address:</label>
                <textarea id="address" name="address" rows="3"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
            </div>
            <!-- Date of Birth -->
            <div>
                <label for="dob" class="block text-sm font-medium text-gray-700">Date of Birth:</label>
                <input type="date" id="dob" name="dob"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:ring-blue-500 focus:border-blue-500">
            </div>
            <!-- Country -->
            <div>
                <label for="country" class="block text-sm font-medium text-gray-700">Country:</label>
                <input type="text" id="country" name="country"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:ring-blue-500 focus:border-blue-500">
            </div>
            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit"
                    class="bg-blue-500 text-white px-6 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300">
                    Submit
                </button>
            </div>
        </form>
        @if ($errors->any())
        <div class="mt-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
            <h3 class="font-bold mb-2">Errors:</h3>
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</body>
</html>
