<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tenan</title>
</head>
<body>
    <div>
        <h2>Data Tenan</h2>
        <a href="{{ route('tenans.create') }}">Tambah Tenan</a>
        @if ($message = Session::get('success'))
            <div>
                <p>{{ $message }}</p>
            </div>
        @endif
        <table border="1">
            <tr>
                <th>Kode Tenan</th>
                <th>Nama Tenan</th>
                <th>Nomor HP</th>
                <th>Action</th>
            </tr>
            @foreach ($tenans as $tenan)
                <tr>
                    <td>{{ $tenan->KodeTenan }}</td>
                    <td>{{ $tenan->NamaTenan }}</td>
                    <td>{{ $tenan->HP }}</td>
                    <td>
                        <form action="{{ route('tenans.destroy', $tenan->KodeTenan) }}" method="POST">
                            <a href="{{ route('tenans.show', $tenan->KodeTenan) }}">Show</a>
                            <a href="{{ route('tenans.edit', $tenan->KodeTenan) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
