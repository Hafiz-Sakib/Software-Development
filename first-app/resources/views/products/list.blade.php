<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Laravel 11 CRUD</title>
    @vite('resources/css/app.css')
  </head>
  <body>
    <div class="bg-gray-800 py-3">
        <h3 class="text-white text-center">Simple Laravel 11 CRUD</h3>
    </div>
    <div class="container mx-auto px-4">
        <div class="flex justify-end mt-4">
            <a href="{{ route('products.create') }}" class="px-4 py-2 bg-gray-800 text-white rounded">Create</a>
        </div>
        <div class="flex justify-center mt-4">
            @if (Session::has('success'))
            <div class="w-full max-w-3xl">
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                    {{ Session::get('success') }}
                </div>
            </div>
            @endif
        </div>
        <div class="flex justify-center mt-4">
            <div class="w-full max-w-5xl bg-white shadow-lg rounded">
                <div class="bg-gray-800 px-4 py-3 rounded-t">
                    <h3 class="text-white">Products</h3>
                </div>
                <div class="px-4 py-4">
                    <table class="w-full border-collapse">
                        <thead>
                            <tr class="bg-gray-800 text-white">
                                <th class="border px-4 py-2">ID</th>
                                <th class="border px-4 py-2"></th>
                                <th class="border px-4 py-2">Name</th>
                                <th class="border px-4 py-2">SKU</th>
                                <th class="border px-4 py-2">Price</th>
                                <th class="border px-4 py-2">Created At</th>
                                <th class="border px-4 py-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($products->isNotEmpty())
                            @foreach ($products as $product)
                            <tr class="border hover:bg-gray-100">
                                <td class="border px-4 py-2">{{ $product->id }}</td>
                                <td class="border px-4 py-2">
                                    @if ($product->image != "")
                                    <img width="50" src="{{ asset('uploads/products/'.$product->image) }}" alt="Product Image">
                                    @endif
                                </td>
                                <td class="border px-4 py-2">{{ $product->name }}</td>
                                <td class="border px-4 py-2">{{ $product->sku }}</td>
                                <td class="border px-4 py-2">${{ $product->price }}</td>
                                <td class="border px-4 py-2">{{ \Carbon\Carbon::parse($product->created_at)->format('d M, Y') }}</td>
                                <td class="border px-4 py-2">
                                    <a href="{{ route('products.edit', $product->id) }}" class="px-3 py-1 bg-blue-600 text-white rounded">Edit</a>
                                    <a href="#" onclick="deleteProduct({{ $product->id }});" class="px-3 py-1 bg-red-600 text-white rounded">Delete</a>
                                    <form id="delete-product-form-{{ $product->id }}" action="{{ route('products.destroy', $product->id) }}" method="post" class="hidden">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="7" class="text-center py-4">No Products Found</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        function deleteProduct(id) {
            if (confirm("Are you sure you want to delete this product?")) {
                document.getElementById("delete-product-form-" + id).submit();
            }
        }
    </script>
  </body>
</html>
