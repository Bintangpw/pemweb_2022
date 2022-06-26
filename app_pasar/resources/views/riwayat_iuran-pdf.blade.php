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
    <h1>Data Riwayat Iuran</h1>
</center>

<table id="customers">
  <tr>
    <th>ID Riwayat Iuran</th>
    <th>ID Tenant</th>
    <th>Periode</th>
    <th>Jumlah Bayar</th>
    <th>Tanggal Bayar</th>
    <th>Dibuat Oleh</th>
    <th>Diedit Oleh</th>
    <th>Dibuat Pada</th>
    <th>Diedit Pada</th>
  </tr>

  @foreach ($riwayat_iuran as $riwayat_iuran)
  <tr>
    <td>{{ $riwayat_iuran->id }}</td>
    <td>{{ $riwayat_iuran->id_tenant }}</td>
    <td>{{ $riwayat_iuran->tahun_bulan }}</td>
    <td>{{ $riwayat_iuran->jml_bayar }}</td>
    <td>{{ $riwayat_iuran->tgl_bayar }}</td>
    <td>{{ $riwayat_iuran->created_by }}</td>
    <td>{{ $riwayat_iuran->edited_by }}</td>
    <td>{{ $riwayat_iuran->created_at }}</td>
    <td>{{ $riwayat_iuran->updated_at }}</td>
  </tr>
  @endforeach
</table>

</body>
</html>


