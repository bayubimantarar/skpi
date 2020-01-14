@extends('layouts.main')

@section('title')
  Buku
@endsection

@section('content')
<div class="row">
  <div class="col-lg-12 col-md-12 col-xs-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Daftar Buku</h5>
        <a
          href="/buku/form-tambah"
          class="btn btn-sm btn-primary"
        >
          <i class="fa fa-plus"></i> Tambah
        </a>
        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
          <div class="btn-group" role="group">
            <button id="btnGroupDrop1" type="button" class="btn btn-sm btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Cetak
            </button>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
              <a class="dropdown-item" href="/buku/cetak-pdf">
                <i class="fa fa-file-pdf-o"></i> PDF
              </a>
              <a class="dropdown-item" href="/buku/cetak-excel">
                <i class="fa fa-file-excel-o"></i> Spreadsheet
              </a>
            </div>
          </div>
        </div>
        <div class="pull-right">
          <form action="/buku/cari" class="form-inline">
            <input
              type="text"
              name="judul"
              class="form-control"
              placeholder="Cari judul buku ..."
            />
          </form>
        </div>
        <table class="table table-striped" style="margin-top: 25px;">
          <thead>
            <tr>
              <th>Judul</th>
              <th>Harga</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($buku as $item)
              <tr>
                <td>{{ $item->judul }}</td>
                <td>{{ $item->harga_rupiah }}</td>
                <td width="250">
                  <a
                    href="/buku/form-ubah/{{ $item->id }}"
                    class="text-white btn btn-sm btn-warning"
                  >
                    <i class="fa fa-pencil"></i> Ubah
                  </a>
                  <form action="/buku/hapus/{{ $item->id }}" method="post" style="display: inline;">
                    <input
                      type="hidden"
                      name="_token"
                      value="{{ csrf_token() }}"
                    />
                    <input
                      type="hidden"
                      name="_method"
                      value="delete"
                    />
                    <button
                      type="submit"
                      class="text-white btn btn-sm btn-danger"
                    >
                      <i class="fa fa-trash"></i> Hapus
                    </button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        {{ $buku->links() }}
      </div>
    </div>
  </div>
</div>
@endsection
