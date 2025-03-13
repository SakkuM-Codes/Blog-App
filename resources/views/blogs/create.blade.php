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

    <!-- Include Tom Select JS (via CDN) -->
<script src="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/js/tom-select.complete.min.js"></script>

    <title>Create Blog</title>

</head>

<body class="bg-gray-100 flex justify-center items-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-2xl">
        <h2 class="text-3xl font-semibold text-gray-800 text-center mb-6">Create Blog</h2>
        <form method="Post" action="{{ route('blogs.store') }}" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <input type="text" name="title" placeholder="Title" required class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600">
            
            <input type="text" name="excerpt" placeholder="Excerpt" required class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600">
            
            <textarea type="text" id="summernote" rows="6" name="content" placeholder="Write your content" required class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600" ></textarea>
            
            <input type="file" name="image" accept="image/*" required class="w-full p-3 border border-gray-300 rounded-lg">
            
            <input type="text" name="duration" placeholder="Write the Duration of this blog" required  class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600">
            
            <div class="flex justify-between items-center">
                <!-- Toggle Switch -->
                <label for="toggle" class="flex items-center cursor-pointer">
                    <div class="relative">
                        <input type="checkbox" id="toggle" name="is_feature" class="sr-only" value="1">
                        <div class="w-12 h-6 bg-gray-300 rounded-full shadow-inner"></div>
                    <div class="dot absolute left-1 top-1 bg-white w-4 h-4 rounded-full transition"></div>
                        </div>
                    <span class="ml-3 text-gray-700">Feature Blog</span>
                </label>
                
                <select name="category_id[]" id="categoryDropdown" multiple class="w-full h-10 border border-gray-300 rounded-lg" required>
                    @foreach($categorys as $category)
                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
            </div>
            
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
            dot.classList.remove('bg-white'); 
            dot.classList.add('bg-purple-600'); 
        } else {
            dot.classList.remove('translate-x-6');
            dot.classList.remove('bg-purple-600'); 
            dot.classList.add('bg-white'); 
        }
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        let select = document.getElementById("categoryDropdown");
        
        // Initialize Tom Select
        new TomSelect(select, {
            placeholder: "Select Categories...",
            maxItems: null,  // Allows multiple selections
            plugins: {
                remove_button: { title: 'Remove this category' }  // Enables cross (×) to remove items
            }
        });

        // Hide the original select after Tom Select loads
        select.classList.add("hidden");
    });
</script>
    
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
