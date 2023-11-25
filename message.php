<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real-time Updates and Messages</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gray-100">

<div class="container mx-auto mt-8">
    <h2 class="text-3xl font-semibold mb-4 text-center">Real-time Updates and Messages</h2>

    <!-- Add Donor Section -->
    <div class="bg-white p-4 rounded-md shadow-md mb-8">
        <h3 class="text-lg font-semibold mb-4">Add Donor</h3>
        <!-- Placeholder for adding donor form -->
        <form>
            <label class="block mb-2">Donor Name:</label>
            <input type="text" class="w-full p-2 border rounded mb-4" placeholder="Enter donor name">
            <button type="submit" class="bg-blue-500 text-white p-2 rounded">Add Donor</button>
        </form>
    </div>

    <!-- Notification Center -->
    <div class="bg-white p-4 rounded-md shadow-md mb-8">
        <h3 class="text-lg font-semibold mb-4">Notification Center</h3>
        <ul class="list-disc pl-4">
            <!-- Placeholder notifications -->
            <li>New donation from Donor 1</li>
            <li>Your request has been fulfilled</li>
            <li>Message from Donor 2: Can deliver tomorrow</li>
        </ul>
    </div>

    <!-- Messaging System with Donor Selection -->
    <div class="bg-white p-4 rounded-md shadow-md mb-8">
        <h3 class="text-lg font-semibold mb-4">Messaging System</h3>
        <!-- Donor selection dropdown -->
        <div class="mb-4">
            <label class="block mb-2">Select Donor:</label>
            <select class="w-full p-2 border rounded">
                <option>Donor 1</option>
                <option>Donor 2</option>
                <!-- Add more donors as needed -->
            </select>
        </div>
        <!-- Chat display area -->
        <div class="bg-gray-200 p-4 rounded-md h-40 overflow-y-auto mb-4">
            <!-- Placeholder for chat messages -->
            <div class="flex items-start mb-2">
                <span class="bg-blue-500 text-white p-2 rounded">Donor 1:</span>
                <p class="ml-2">Thank you for your donation!</p>
            </div>
            <div class="flex items-start mb-2">
                <span class="bg-green-500 text-white p-2 rounded">Recipient:</span>
                <p class="ml-2">Is it possible to deliver on Friday?</p>
            </div>
        </div>
        <!-- Placeholder for message input -->
        <div class="flex">
            <input type="text" class="w-full p-2 border rounded focus:outline-none focus:border-green-500" placeholder="Type your message...">
            <button class="bg-green-500 text-white p-2 ml-2 rounded">Send</button>
        </div>
    </div>

    <!-- View All Messages and Delete Messages Section -->
    <div class="bg-white p-4 rounded-md shadow-md mb-8">
        <h3 class="text-lg font-semibold mb-4">View All Messages and Delete Messages</h3>
        <!-- Placeholder for viewing all messages and deleting messages -->
        <ul class="mb-4">
            <li><strong>Donor 1:</strong> Thank you for your donation! <button class="text-red-500">Delete</button></li>
            <li><strong>Recipient:</strong> Is it possible to deliver on Friday? <button class="text-red-500">Delete</button></li>
        </ul>
        <button class="bg-red-500 text-white p-2 rounded">Delete All Messages</button>
    </div>

</div>

</body>
</html>
