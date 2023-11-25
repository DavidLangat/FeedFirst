<?php
// Check the state (you can replace 'login' with your actual logic)
$state = isset($_GET['state']) ? $_GET['state'] : 'login';

// Placeholder for form submission handling
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($state === 'login') {
        // Handle login form submission
        // Replace the following lines with your actual login logic
        $email = $_POST['login-email'];
        $password = $_POST['login-password'];

        // Example: Check credentials (replace this with your actual authentication logic)
        if ($email === 'user@example.com' && $password === 'password') {
            echo 'Login successful!';
            header('location:dashboard.php');
        } else {
            echo 'Invalid credentials. Please try again.';
        }
    } else {
        // Handle signup form submission
        // Replace the following lines with your actual signup logic
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirm-password'];

        // Example: Check if passwords match (replace this with your actual validation logic)
        if ($password === $confirmPassword) {
            echo 'Signup successful!';
        } else {
            echo 'Passwords do not match. Please try again.';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration and Authentication</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">

<div class="container mx-auto flex p-8 bg-white shadow-md rounded-md">
    <!-- Image on the left -->
    <div class="hidden lg:block lg:w-1/2">
        <img src="https://images.pexels.com/photos/6646904/pexels-photo-6646904.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Background Image" class="object-cover w-full h-full rounded-l-md">
    </div>

    <!-- Form on the right -->
    <div class="lg:w-1/2 p-8">
        <?php if ($state === 'login') { ?>
            <!-- Authentication Form -->
            <div id="authentication-form">
                <h2 class="text-3xl font-semibold mb-4 animate__animated animate__fadeInLeft">Login</h2>
                <form action="?state=login" method="post">
                    <!-- Login form fields -->
                    <div class="mb-4">
                        <label for="login-email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                        <input type="email" id="login-email" name="login-email" class="w-full p-2 border rounded">
                    </div>
                    <div class="mb-4">
                        <label for="login-password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                        <input type="password" id="login-password" name="login-password" class="w-full p-2 border rounded">
                    </div>
                    <button type="submit" href='' class="bg-green-500 text-white p-2 rounded">Login</button>
                    
                </form>
            </div>
        <?php } else { ?>
            <!-- Registration Form -->
            <div id="registration-form">
                <h2 class="text-3xl font-semibold mb-4 animate__animated animate__fadeInRight">Sign Up</h2>
                <form action="?state=signup" method="post">
                    <!-- Registration form fields -->
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                        <input type="text" id="name" name="name" class="w-full p-2 border rounded">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                        <input type="email" id="email" name="email" class="w-full p-2 border rounded">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                        <input type="password" id="password" name="password" class="w-full p-2 border rounded">
                    </div>
                    <div class="mb-4">
                        <label for="confirm-password" class="block text-gray-700 text-sm font-bold mb-2">Confirm Password</label>
                        <input type="password" id="confirm-password" name="confirm-password" class="w-full p-2 border rounded">
                    </div>
                    <button type="submit" class="bg-blue-500 text-white p-2 rounded">Sign Up</button>
                </form>
            </div>
        <?php } ?>
    </div>
</div>

</body>
</html>
