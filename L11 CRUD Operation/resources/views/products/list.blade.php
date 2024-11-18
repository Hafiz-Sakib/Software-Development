<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Product List</title>
</head>
<body>
    <!-- Success Message -->
    <div class="flex justify-center mt-4">
        @if (Session::has('success'))
        <div class="w-full max-w-3xl">
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded" role="alert">
                <strong class="font-bold">Success! </strong>
                <span class="block sm:inline">{{ Session::get('success') }}</span>
            </div>
        </div>
        @endif
    </div>

    <!-- Product Table -->
    <div class="container mx-auto px-4 mt-10">
        <h1 class="text-2xl font-bold mb-6 text-center text-blue-600">Product List</h1>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                <thead class="bg-blue-600">
                    <tr>
                        <th class="py-3 px-6 text-left font-medium text-black">Name</th>
                        <th class="py-3 px-6 text-left font-medium text-black">SKU</th>
                        <th class="py-3 px-6 text-left font-medium text-black">Price</th>
                        <th class="py-3 px-6 text-left font-medium text-black">Description</th>
                        <th class="py-3 px-6 text-left font-medium text-black">Image</th>
                        <th class="py-3 px-6 text-left font-medium text-black">Created at</th>
                        <th class="py-3 px-6 text-left font-medium text-black">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($products->isNotEmpty())
                        @foreach ($products as $product)
                        <tr class="border-t hover:bg-gray-50">
                            <td class="py-3 px-6">{{ $product->name }}</td>
                            <td class="py-3 px-6">{{ $product->sku }}</td>
                            <td class="py-3 px-6">{{ $product->price }}</td>
                            <td class="py-3 px-6">{{ $product->description }}</td>
                            <td class="py-3 px-6">
                                @if ($product->image != "")
                                <img src="{{ asset('uploads/products/'.$product->image) }}" alt="Product Image" class="w-12 h-12 rounded-md" />
                                @endif
                            </td>
                            <td class="py-3 px-6">{{ \Carbon\Carbon::parse($product->created_at)->format('d M, Y') }}</td>
                            <td class="py-3 px-6 flex items-center space-x-2">
                                <!-- Edit button -->
                                <a href="{{ route('products.edit', $product->id) }}" class="bg-gray-800 text-white px-4 py-2 rounded hover:bg-gray-700">Edit</a>

                                <!-- Delete button -->
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-500">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="7" class="text-center py-3 px-6">No products found.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
