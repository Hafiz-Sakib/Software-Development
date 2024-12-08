<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Items List</title>
    <script src="https://cdn.tailwindcss.com"></script>  <!-- Tailwind CSS CDN -->
</head>
<body class="bg-gray-50 font-sans">

    <div class="container mx-auto p-6">
        <h1 class="text-4xl font-semibold text-center text-blue-600 mb-6">Items</h1>
        <ul class="space-y-4">
            @foreach ($items as $item)
                <li class="bg-white p-4 rounded-lg shadow-md flex justify-between items-center">
                    <span class="text-lg text-green-600">${{ number_format($item['id'], 2) }}</span>
                    <span class="text-xl font-medium text-gray-800">{{ $item['name'] }}</span>
                    <span class="text-lg text-green-600">${{ number_format($item['price'], 2) }}</span>
                </li>
            @endforeach
        </ul>
    </div>

</body>
</html>
