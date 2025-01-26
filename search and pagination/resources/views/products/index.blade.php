<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="p-4 sm:p-8 md:p-12 lg:p-16 xl:p-20 bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl sm:text-3xl font-bold text-center mb-8 text-gray-800">Products</h1>

        <!-- Search Bar -->
        <form action="{{ route('products.index') }}" method="GET" class="mb-8">
            <div class="flex justify-center">
                <input
                    type="text"
                    name="search"
                    class="w-full max-w-md px-4 py-2 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Search products..."
                    value="{{ $search }}"
                >
                <button
                    type="submit"
                    class="px-4 sm:px-6 py-2 bg-blue-500 text-white rounded-r-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300"
                >
                    Search
                </button>
            </div>
        </form>

        <!-- Products Table -->
        <div class="bg-white shadow-lg rounded-lg overflow-x-auto">
            <table class="min-w-full">
                <thead class="bg-gradient-to-r from-blue-500 to-blue-600">
                    <tr>
                        <th class="px-3 py-2 sm:px-4 sm:py-3 text-left text-xs font-semibold text-white uppercase tracking-wider">ID</th>
                        <th class="px-3 py-2 sm:px-4 sm:py-3 text-left text-xs font-semibold text-white uppercase tracking-wider">Name</th>
                        <th class="px-3 py-2 sm:px-4 sm:py-3 text-left text-xs font-semibold text-white uppercase tracking-wider">Price</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($products as $index => $product)
                        <tr class="{{ $index % 2 === 0 ? 'bg-teal-100' : 'bg-teal-200' }} hover:bg-teal-300 transition duration-150 ease-in-out">
                            <td class="px-3 py-2 sm:px-4 sm:py-3 text-sm text-gray-700">{{ $product->id }}</td>
                            <td class="px-3 py-2 sm:px-4 sm:py-3 text-sm text-gray-900 font-medium">{{ $product->name }}</td>
                            <td class="px-3 py-2 sm:px-4 sm:py-3 text-sm text-gray-900">${{ number_format($product->price, 2) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="mt-8 flex justify-center">
            <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                {{ $products->onEachSide(1)->links('pagination::tailwind') }}
            </nav>
        </div>
    </div>
</body>
</html>
