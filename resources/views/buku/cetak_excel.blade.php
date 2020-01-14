<table border="1">
  <thead>
    <tr>
      <th>Judul Buku</th>
      <th>Harga Buku</th>
    </tr>
  </thead>
  <tbody>
    @foreach($buku as $item)
      <tr>
        <td>{{ $item->judul }}</td>
        <td>{{ $item->harga_rupiah }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
