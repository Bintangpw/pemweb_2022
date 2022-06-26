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
    <h1>Data Pengelola</h1>
</center>

<table id="customers">
  <tr>
    <th>ID Pengelola</th>
    <th>Nama Pengelola</th>
    <th>ID Pasar</th>
    <th>Dibuat Oleh</th>
    <th>Diedit Oleh</th>
    <th>Dibuat Pada</th>
    <th>Diedit Pada</th>
  </tr>

  @foreach ($pengelola as $pengelola)
  <tr>
    <td>{{ $pengelola->id }}</td>
    <td>{{ $pengelola->nama }}</td>
    <td>{{ $pengelola->id_pasar }}</td>
    <td>{{ $pengelola->created_by }}</td>
    <td>{{ $pengelola->edited_by }}</td>
    <td>{{ $pengelola->created_at }}</td>
    <td>{{ $pengelola->updated_at }}</td>
  </tr>
  @endforeach
</table>

</body>
</html>


