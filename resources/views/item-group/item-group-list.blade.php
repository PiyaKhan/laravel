<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Group Create</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans antialiased">

    <!-- Page Header -->
    <div class="bg-blue-600 text-white py-4">
        <h1 class="text-center text-3xl font-bold">Item Groups</h1>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto p-6">

        <!-- If item_groups is empty -->
        @if($item_groups->isEmpty())
        <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 mb-6">
            <p class="font-semibold">No Item Groups Available</p>
            <p>Please add some item groups first.</p>
        </div>
        @else
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full table-auto">
                <thead>
                    <tr class="bg-blue-100">
                        <th class="px-4 py-2 text-left">#</th>
                        <th class="px-4 py-2 text-left">Item Group Title</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($item_groups as $group)
                    <tr class="border-t hover:bg-gray-50">
                        <td class="px-4 py-2">{{ $loop->iteration }}</td>
                        <td class="px-4 py-2">{{ $group->title }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif

        <!-- Add New Item Group Button -->
        <div class="mt-6 text-center">
            <a href="/item-group/create" class="px-6 py-3 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none">
                Add New Item Group
            </a>
        </div>
    </div>

</body>

</html>
