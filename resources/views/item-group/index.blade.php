<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Group Create</title>
</head>
<body>
<form action="{{url('/save-item-group')}}" method="post">
    @csrf
    <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Item group Name</label>
            <input type="text" id="title" name="title" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md" required>
        </div>
        <button>
            Submit
        </button>
</form>
</body>
</html>