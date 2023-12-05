<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Tenan</title>
</head>
<body>
    <h1>Create Tenan</h1>
    <form action="{{ route('tenans.store') }}" method="POST">
        @csrf
        <label for="NamaTenan">Nama Tenan:</label>
        <input type="text" name="NamaTenan" required>
        <br>
        <label for="HP">Nomor HP:</label>
        <input type="text" name="HP" required>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
