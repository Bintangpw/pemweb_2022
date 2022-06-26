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
    <h1>Data Riwayat Pedagang</h1>
</center>

<table id="customers">
  <tr>
    <th>ID Riwayat Pedagang</th>
    <th>ID Tenant</th>
    <th>Tanggal Transaksi</th>
    <th>ID Pemilik Lama</th>
    <th>ID Pemilik Baru</th>
    <th>Dibuat Oleh</th>
    <th>Diedit Oleh</th>
    <th>Dibuat Pada</th>
    <th>Diedit Pada</th>
  </tr>

  @foreach ($riwayat_pemilik as $riwayat_pemilik)
  <tr>
    <td>{{ $riwayat_pemilik->id }}</td>
    <td>{{ $riwayat_pemilik->id_tenant }}</td>
    <td>{{ $riwayat_pemilik->tgl_transaksi }}</td>
    <td>{{ $riwayat_pemilik->id_pemilik_lama }}</td>
    <td>{{ $riwayat_pemilik->id_pemilik_baru }}</td>
    <td>{{ $riwayat_pemilik->created_by }}</td>
    <td>{{ $riwayat_pemilik->edited_by }}</td>
    <td>{{ $riwayat_pemilik->created_at }}</td>
    <td>{{ $riwayat_pemilik->updated_at }}</td>
  </tr>
  @endforeach
</table>

</body>
</html>


