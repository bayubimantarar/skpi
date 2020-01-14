<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Daftar Buku</title>
</head>
<body>
  <h2 class="text-center">
    Daftar Buku
  </h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <td>
          Judul Buku
        </td>
        <td>
          Harga
        </td>
      </tr>
    </thead>
    <tbody>
      @foreach($buku as $item)
        <tr>
          <td>
            {{ $item->judul }}
          </td>
          <td>
            {{ $item->harga_rupiah }}
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>
