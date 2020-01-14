@extends('layouts.main')

@section('title')
  Buku
@endsection

@section('content')
<div class="row">
  <div class="col-lg-12 col-md-12 col-xs-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Form Tambah</h5>
        <form action="/buku/ubah/{{ $buku->id }}" method="post">
          <input
            type="hidden"
            name="_token"
            value="{{ csrf_token() }}"
          />
          <input
            type="hidden"
            name="_method"
            value="put"
          />
          <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
              <div class="form-group">
                <label for="">
                  Judul Buku
                </label>
                <input
                  type="text"
                  name="judul"
                  id="judul"
                  class="form-control {{ $errors->has('judul') ? 'is-invalid' : '' }}"
                  value="{{ $buku->judul }}"
                />
                @if($errors->has('judul'))
                  <div class="invalid-feedback">
                    {{ $errors->first('judul') }}
                  </div>
                @endif
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
              <div class="form-group">
                <label for="">
                  Harga Buku
                </label>
                <input
                  type="text"
                  name="harga"
                  id="harga"
                  class="form-control {{ $errors->has('harga') ? 'is-invalid' : '' }}"
                  value="{{ $buku->harga }}"
                />
                @if($errors->has('harga'))
                  <div class="invalid-feedback">
                    {{ $errors->first('harga') }}
                  </div>
                @endif
              </div>
            </div>
          </div>
          <button
            type="submit"
            class="btn btn-sm btn-primary"
          >
            <i class="fa fa-floppy-o"></i> Simpan
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
