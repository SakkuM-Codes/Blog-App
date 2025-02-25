<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h3 class="text-2xl font-bold text-center text-gray-800 mb-6">Register</h3>
        
        <form action="register" method="post" class="space-y-4">
            @csrf

            <div>
                <input type="text" name="name" placeholder="Name" required 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600">
            </div>

            <div>
                <input type="text" name="user_name" placeholder="Username" required 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600">
            </div>

            <div>
                <input type="email" name="email" placeholder="Email" required 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600">
            </div>

            <div>
                <input type="password" name="password" placeholder="Password" required 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600">
            </div>

            <button type="submit" 
                class="w-full bg-purple-600 text-white py-2 rounded-lg hover:bg-purple-700 transition">
                Submit
            </button>
        </form>
    </div>

</body>
</html>
