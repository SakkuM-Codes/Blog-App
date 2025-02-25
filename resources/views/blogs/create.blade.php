<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
<!-- Include jQuery & Bootstrap -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Include Summernote JS -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>

    <title>Create Blog</title>
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-2xl">
        <h2 class="text-3xl font-semibold text-gray-800 text-center mb-6">Create Blog</h2>
        <form method="Post" action="{{ route('blogs.store') }}" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <input type="text" name="title" placeholder="Title" required class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600">
            
            <input type="text" name="excerpt" placeholder="Excerpt" required class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600">
            
            <textarea type="text" id="summernote" rows="6" name="content" placeholder="Write your content" required class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600"></textarea>
            
            <input type="file" name="image" accept="image/*" required class="w-full p-3 border border-gray-300 rounded-lg">
            
            <input type="text" name="duration" placeholder="Write the Duration of this blog" required  class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600">
            
            <div class="flex justify-between items-center">
                <!-- Toggle Switch -->
                <label for="toggle" class="flex items-center cursor-pointer">
                    <div class="relative">
                        <input type="checkbox" id="toggle" class="sr-only">
                        <div class="w-12 h-6 bg-gray-300 rounded-full shadow-inner"></div>
                    <div class="dot absolute left-1 top-1 bg-white w-4 h-4 rounded-full transition"></div>
                    </div>
                    <span class="ml-3 text-gray-700">Feature Blog</span>
                </label>

                <!-- Wider Dropdown -->
                {{-- <select name="category_id" class="p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 w-40">
                    <option>Tech</option>
                    <option>Food</option>
                </select>
            </div>
             --}}
            <!-- Submit Button with Purple Color and Lower Width -->
            <button type="submit" class="bg-purple-600 hover:bg-purple-700 text-white px-6 py-3 rounded-lg font-semibold transition duration-300 w-1/3 mx-auto block">Submit</button>
        </form>
    </div>

    <!-- Toggle Button Script -->
    <script>
    const toggle = document.getElementById('toggle');
    const dot = document.querySelector('.dot');
    
    toggle.addEventListener('change', () => {
        if (toggle.checked) {
            dot.classList.add('translate-x-6');
            dot.classList.remove('bg-white'); // Remove white background
            dot.classList.add('bg-purple-600'); // Add purple background
        } else {
            dot.classList.remove('translate-x-6');
            dot.classList.remove('bg-purple-600'); // Remove purple background
            dot.classList.add('bg-white'); // Re-add white background
        }
    });
</script>
{{-- <script>
    $(document).ready(function () {
        $('#toggle').on('change', function () {
            let blogId = $(this).data('blog-id');
            let isFeature = $(this).is(':checked') ? 1 : 0;

            $.ajax({
                url: "{{ route('blogs.store') }}",
                type: "POST",
                data: {
                    blog_id: blogId,
                    is_feature: isFeature,
                    _token: "{{ csrf_token() }}"
                },
                success: function (response) {
                    alert(response.message);
                },
                error: function () {
                    alert("An error occurred while updating the blog status.");
                }
            });
        });
    });
</script> --}}

    
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 300, // Set editor height
            placeholder: 'Write your content here...',
            });
        });
    </script>
</body>
</html>
