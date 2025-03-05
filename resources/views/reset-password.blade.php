<link rel="stylesheet" href="{{asset('css/reset.css')}}">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center h-screen bg-white">
    
    @if (session('status'))
        <div>{{ session('status') }}</div>
    @endif

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="w-full max-w-md p-6 bg-gray-100 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-center text-gray-700 mb-4">Reset Password</h1>
    <form action="{{ route('password.update') }}" method="POST"  class="space-y-4">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <div>
            <label for="email" class="block text-gray-600 font-medium">Email:</label>
            <input type="email" name="email" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
        </div>

        <div>
            <label for="password" class="block text-gray-600 font-medium">New Password:</label>
            <input type="password" name="password" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
        </div>

        <div>
            <label for="password_confirmation" class="block text-gray-600 font-medium">Confirm Password:</label>
            <input type="password" name="password_confirmation" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
        </div>

        <button type="submit" class="w-full bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-lg">Reset Password</button>
    </form>
    </div>
</body>
</html>