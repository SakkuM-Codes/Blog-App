<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex items-center justify-center h-screen bg-white">
    <div class="w-full max-w-md p-6 bg-gray-100 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-center text-gray-700 mb-4">Forget Password</h1>
        <form method="POST" action="{{ route('password.email') }}" class="space-y-4">
            @csrf
            <div>
                <label for="email" class="block text-gray-600 font-medium">Email:</label>
                <input type="email" name="email" id="email" required 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" 
                class="w-full bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-lg">
                Send Password Reset Link
            </button>
            <div class="text-center">
                <a href="{{route('login')}}" class="text-purple-600 hover:underline">Back</a>
            </div>
        </form>
    </div>
</body>
</html>
