<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Tenan</title>
</head>
<body>
    <h1>Show Tenan</h1>
    <p><strong>Kode Tenan:</strong> {{ $tenan->KodeTenan }}</p>
    <p><strong>Nama Tenan:</strong> {{ $tenan->NamaTenan }}</p>
    <p><strong>Nomor HP:</strong> {{ $tenan->HP }}</p>
    <a href="{{ route('tenans.index') }}">Back</a>
</body>
</html>