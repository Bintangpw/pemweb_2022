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
    <h1>Data Kios</h1>
</center>

<table id="customers">
  <tr>
    <th>ID Tenant</th>
    <th>Nama Tenant</th>
    <th>ID Pemilik</th>
    <th>Latitude Tenant</th>
    <th>Longitude Tenant</th>
    <th>Harga Iuran</th>
    <th>ID Pasar</th>
    <th>Dibuat Oleh</th>
    <th>Diedit Oleh</th>
    <th>Dibuat Pada</th>
    <th>Diedit Pada</th>
  </tr>

  @foreach ($tenant as $tenant)
  <tr>
    <td>{{ $tenant->id }}</td>
    <td>{{ $tenant->nama }}</td>
    <td>{{ $tenant->id_pemilik }}</td>
    <td>{{ $tenant->latitude_tenant }}</td>
    <td>{{ $tenant->longitude_tenant }}</td>
    <td>{{ $tenant->harga_iuran }}</td>
    <td>{{ $tenant->id_pasar }}</td>
    <td>{{ $tenant->created_by }}</td>
    <td>{{ $tenant->edited_by }}</td>
    <td>{{ $tenant->created_at }}</td>
    <td>{{ $tenant->updated_at }}</td>
  </tr>
  @endforeach
</table>

</body>
</html>


