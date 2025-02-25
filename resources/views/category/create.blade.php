<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Category</title>
</head>
<body>
    <div>
    <form action="" method="Post" enctype="multipart/form-data">
    @csrf
    <div>
      <input type="file" name="category_image" placeholder="Upload Image" accept="image/*">
    </div>
    <div>
        <input type="text" name="category_name" placeholder="Category Name" required>
    </div>
        <button>Submit</button>        
    </form>
    </div>
</body>
</html>


