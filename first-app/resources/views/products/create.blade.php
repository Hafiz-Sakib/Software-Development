<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
</head>
<body>
<div class="bg-blue-500 py-3">
    <h1 class="text-white  text-center text-xl">Laravel 11 Simple CRUD Application</h1>
</div>
<div class="bg-gray-100 flex justify-center items-center min-h-screen">

    <div class="bg-white shadow-md rounded-lg p-8 w-full max-w-md">
        <h1 class="text-2xl font-bold mb-6 text-center text-gray-800">Product Entry Form</h1>
        <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Name -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" id="name" name="name" required
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 invalid:border-red-500 invalid:focus:ring-red-500>
                    @error('name')
                        <p class="invalid-feedback">{{$message}}</p>
                    @enderror
            </div>

            <!-- SKU -->
            <div class="mb-4">
                <label for="sku" class="block text-sm font-medium text-gray-700">SKU</label>
                <input type="text" id="sku" name="sku" required
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 invalid:border-red-500 invalid:focus:ring-red-500">
                    @error('sku')
                    <p class="invalid-feedback">{{$message}}</p>
                @enderror
            </div>

            <!-- Price -->
            <div class="mb-4">
                <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                <input type="number" id="price" name="price" required step="0.01"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 invalid:border-red-500 invalid:focus:ring-red-500">
                    @error('price')
                    <p class="invalid-feedback">{{$message}}</p>
                @enderror
            </div>

            <!-- Description -->
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea id="description" name="description" rows="4" required
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 "></textarea>
            </div>

            <!-- Image -->
            <div class="mb-6">
                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                <input type="file" id="image" name="image" accept="image/*"
                    class="mt-1 block w-full text-gray-500 px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md shadow-md transition">
                Submit
            </button>
        </form>
    </div>

</div>
</body>
</html>