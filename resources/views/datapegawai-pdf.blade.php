<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        th {
            background-color: #29e361;
        }
        td,
        th {
            border: 1px solid #000000;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #ffffff;
        }
    </style>
</head>

<body>
<h1> Data Pegawai </h1>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>No telpon</th>
        </tr>
        @php
            $no=1;
        @endphp
        @foreach ($data as $row)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->jeniskelamin }}</td>
                <td>0{{ $row->notelpon }}</td>
            </tr>
        @endforeach

    </table>

</body>

</html>
