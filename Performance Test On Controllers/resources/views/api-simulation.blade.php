<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Simulation</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-8">

    <div class="max-w-6xl mx-auto bg-white shadow-[0px_10px_800px_rgba(6,182,212,0.5)] border-2 border-cyan-500 p-6 rounded-2xl ">

        <h2 class="text-2xl font-semibold text-center mb-4">API Simulation Data</h2>

        @if(is_array($data) && isset($data['status']) && $data['status'] === 'success')
            <table class="min-w-full table-auto border-collapse">
                <thead>
                    <tr class="bg-blue-500 text-white border-4 border-blue-500 rounded-full p-6">
                        <th class="px-4 py-2 text-left">Name</th>
                        <th class="px-4 py-2 text-left">Subject</th>
                        <th class="px-4 py-2 text-left">Grade</th>
                        <th class="px-4 py-2 text-left">Score</th>
                        <th class="px-4 py-2 text-left">Age</th>
                        <th class="px-4 py-2 text-left">Gender</th>
                        <th class="px-4 py-2 text-left">Remarks</th>
                        <th class="px-4 py-2 text-left">Location</th>
                        <th class="px-4 py-2 text-left">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data['results'] as $result)
                        <tr class="border-b hover:bg-cyan-400">
                            <td class="px-4 py-2">{{ $result['name'] }}</td>
                            <td class="px-4 py-2">{{ $result['subject'] }}</td>
                            <td class="px-4 py-2">{{ $result['grade'] }}</td>
                            <td class="px-4 py-2">{{ $result['score'] }}</td>
                            <td class="px-4 py-2">{{ $result['age'] }}</td>
                            <td class="px-4 py-2">{{ $result['gender'] }}</td>
                            <td class="px-4 py-2">{{ $result['remarks'] }}</td>
                            <td class="px-4 py-2">{{ $result['location'] }}</td>
                            <td class="px-4 py-2">
                                <!-- Active/Inactive Status Circle -->
                                <span class="inline-block w-4 h-4 rounded-full
                                    {{ $result['status'] === 'Active' ? 'bg-green-500' : 'bg-gray-500' }}"></span>
                                <span class="ml-2">{{ $result['status'] }}</span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="text-red-500 text-center mt-4">Data loading failed. Please try again later.</p>
        @endif
    </div>

</body>
</html>
