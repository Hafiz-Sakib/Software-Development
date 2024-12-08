<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chessboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">

<div class="text-center">
    <h1 class="text-4xl text-blue-500 font-bold mb-6">Interactive Chessboard</h1>
    <table class="border-collapse shadow-[0px_10px_800px_rgba(6,182,212,0.5)]
     border-2 border-black">
        @for ($i = 0; $i < $rows; $i++)
        <tr>
            @for ($j = 0; $j < $cols; $j++)
            @php
            $isBlack = ($i + $j) % 2 === 0;
            @endphp
            <td class="{{ $isBlack ? 'bg-black' : 'bg-white' }} w-16 h-16 border border-gray-500
                        hover:scale-105 transform transition-transform duration-300 ease-in-out">
            </td>
            @endfor
        </tr>
        @endfor
    </table>
</div>

</body>
</html>
