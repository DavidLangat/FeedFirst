<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Food</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gray-100">

<div class="container mx-auto mt-8">
    <div class="bg-white p-8 rounded-md shadow-md max-w-md mx-auto">
        <h2 class="text-3xl font-semibold mb-6 text-center text-green-500">Request Food</h2>
        <form action="#" method="post">
            <!-- Food request form fields -->
            <div class="mb-4">
                <label for="food-type" class="block text-gray-700 text-sm font-bold mb-2">Food Type</label>
                <input type="text" id="food-type" name="food-type" class="w-full p-3 border rounded focus:outline-none focus:border-green-500">
            </div>
            <div class="mb-4">
                <label for="quantity" class="block text-gray-700 text-sm font-bold mb-2">Quantity</label>
                <input type="number" id="quantity" name="quantity" class="w-full p-3 border rounded focus:outline-none focus:border-green-500">
            </div>
            <div class="mb-4">
                <label for="urgency-level" class="block text-gray-700 text-sm font-bold mb-2">Urgency Level</label>
                <select id="urgency-level" name="urgency-level" class="w-full p-3 border rounded focus:outline-none focus:border-green-500">
                    <option value="high">High</option>
                    <option value="medium">Medium</option>
                    <option value="low">Low</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="delivery-option" class="block text-gray-700 text-sm font-bold mb-2">Delivery Option</label>
                <select id="delivery-option" name="delivery-option" class="w-full p-3 border rounded focus:outline-none focus:border-green-500">
                    <option value="pickup">Pickup</option>
                    <option value="delivery">Delivery</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="additional-notes" class="block text-gray-700 text-sm font-bold mb-2">Additional Notes</label>
                <textarea id="additional-notes" name="additional-notes" rows="4" class="w-full p-3 border rounded focus:outline-none focus:border-green-500"></textarea>
            </div>
            <button type="submit" class="bg-green-500 text-white p-3 rounded-full hover:bg-green-600 transition duration-300">Submit Request</button>
        </form>
    </div>
</div>

</body>
</html>
