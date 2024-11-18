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
              </tr>
            </thead>
            <tbody>
              <tr class="border-t hover:bg-gray-50">
                <td class="py-3 px-6">Product 1</td>
                <td class="py-3 px-6">SKU001</td>
                <td class="py-3 px-6">$50</td>
                <td class="py-3 px-6">A great product!</td>
                <td class="py-3 px-6">
                  <img
                    src="https://via.placeholder.com/50"
                    alt="Product Image"
                    class="w-12 h-12 rounded-md"
                  />
                </td>
              </tr>
              <tr class="border-t hover:bg-gray-50">
                <td class="py-3 px-6">Product 2</td>
                <td class="py-3 px-6">SKU002</td>
                <td class="py-3 px-6">$100</td>
                <td class="py-3 px-6">Another awesome product!</td>
                <td class="py-3 px-6">
                  <img
                    src="https://via.placeholder.com/50"
                    alt="Product Image"
                    class="w-12 h-12 rounded-md"
                  />
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

</body>
</html>
