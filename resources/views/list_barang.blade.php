<html>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Sks</th>
            <th>Terpilih</th>
        </tr>
    </thead>

    <tbody>
        @foreach($data as $dataku)
            <tr>
                <td>{{ $dataku['id'] }}</td>
                <td>{{ $dataku['kode'] }}</td>
                <td>{{ $dataku['nama'] }}</td>
                <td>{{ $dataku['sks'] }}</td>
                <td>{{ $dataku['terpilih'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</html>