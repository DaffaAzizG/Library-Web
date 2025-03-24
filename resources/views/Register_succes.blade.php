<!DOCTYPE html>
<html>
<head>
    <title>Register Success</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Registration Successful</h2>
        <p>Here are the details you provided:</p>
        <ul>
            <li><strong>First Name:</strong> {{ $data['first_name'] }}</li>
            <li><strong>Last Name:</strong> {{ $data['last_name'] }}</li>
            <li><strong>Username:</strong> {{ $data['username'] }}</li>
            <li><strong>Email:</strong> {{ $data['email'] }}</li>
        </ul>
    </div>
</body>
</html>
