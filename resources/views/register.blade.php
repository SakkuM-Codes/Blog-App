<!DOCTYPE HTML>
<html>
<head>



</head>
<body>
<div>
    <div>
        <div>
            <h3>Register</h3>
        </div>
        <form action="register" method="post">
        @csrf
        <div>
            <input type="text" name="name" placeholder="Name" required>
        </div>
        <div>
            <input type="text" name="user_name" placeholder="Username" required>
        </div>
        <div>
            <input type="text" name="email" placeholder="Email" required>
        </div>
        <div>
            <input type="text" name="password" placeholder="Password" required>
        </div>
        <button>Submit</button>
        </form>
    </div>

</div>
</body>
</html>