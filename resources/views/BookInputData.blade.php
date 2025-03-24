<!DOCTYPE html>
<html lang="en">
<head>
    <title>Book Input Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
        <h2>Registration Successful</h2>
        <p>Here are the details you provided:</p>
        <ul>
            <li><strong>Book ID:</strong> {{ $data['Book_id'] }}</li>
            <li><strong>Book Title:</strong> {{ $data['Book_name'] }}</li>
            <li><strong>Publisher:</strong> {{ $data['Publisher'] }}</li>
            <li><strong>Publishion Date:</strong> {{ $data['Publishion'] }}</li>
            <li><strong>Author:</strong> {{ $data['Author'] }}</li>
        </ul>
    </div>
</body>
</html>