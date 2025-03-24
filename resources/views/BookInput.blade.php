<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookInput</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
        <h2>Book Data Input</h2>
        <form action="{{ route('BookInput.store') }}" method="POST">
            @csrf

            <!-- First Name -->
            <div class="form-group">
                <label for="Book_id">Book ID</label>
                <input type="text" class="form-control @error('Book_id') is-invalid @enderror" id="Book_id" name="Book_id" value="{{ old('Book_id') }}">
                @error('Book id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Last Name -->
            <div class="form-group">
                <label for="Book_name">Book Name</label>
                <input type="text" class="form-control @error('Book_name') is-invalid @enderror" id="Book_name" name="Book_name" value="{{ old('Book_name') }}">
                @error('Book Name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Username -->
            <div class="form-group">
                <label for="Publisher">Publisher</label>
                <input type="text" class="form-control @error('Publisher') is-invalid @enderror" id="Publisher" name="Publisher" value="{{ old('Publisher') }}">
                @error('Publisher')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="Publishion">publishion</label>
                <input type="date" class="form-control @error('Publishion') is-invalid @enderror" id="Publishion" name="Publishion" value="{{ old('Publishion') }}">
                @error('Publishion')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="Author">Author</label>
                <input type="text" class="form-control @error('Author') is-invalid @enderror" id=Author" name="Author" value="{{ old('Author') }}">
                @error('Author')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <!-- Password -->

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
