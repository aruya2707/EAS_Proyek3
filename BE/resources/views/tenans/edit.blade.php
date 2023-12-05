<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tenan</title>
</head>
<body>
    <h1>Edit Tenan</h1>
    <form action="{{ route('tenans.update', $tenan->KodeTenan) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="NamaTenan">Nama Tenan:</label>
        <input type="text" name="NamaTenan" value="{{ $tenan->NamaTenan }}" required>
        <br>
        <label for="HP">Nomor HP:</label>
        <input type="text" name="HP" value="{{ $tenan->HP }}" required>
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
