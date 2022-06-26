<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<center>
    <h1>Data Pedagang</h1>
</center>

<table id="customers">
  <tr>
    <th>ID Pedagang</th>
    <th>Nama Pedagang</th>
    <th>Alamat</th>
    <th>NIK</th>
    <th>Nomor WA</th>
    <th>Nomor Telepon</th>
    <th>Dibuat Oleh</th>
    <th>Diedit Oleh</th>
    <th>Dibuat Pada</th>
    <th>Diedit Pada</th>
  </tr>

  @foreach ($pemilik as $pemilik)
  <tr>
    <td>{{ $pemilik->id }}</td>
    <td>{{ $pemilik->nama }}</td>
    <td>{{ $pemilik->alamat }}</td>
    <td>{{ $pemilik->nik }}</td>
    <td>{{ $pemilik->no_wa }}</td>
    <td>{{ $pemilik->no_telp }}</td>
    <td>{{ $pemilik->created_by }}</td>
    <td>{{ $pemilik->edited_by }}</td>
    <td>{{ $pemilik->created_at }}</td>
    <td>{{ $pemilik->updated_at }}</td>
  </tr>
  @endforeach
</table>

</body>
</html>


