@extends('admin.admin')

@section('content')

<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">Buat Tentang Baru</div>

              <div class="card-body">
                  <form method="POST" action="{{ route('guru.update', $guru->id) }}" enctype="multipart/form-data">
                    @method('PUT')
                      @csrf

                      <div class="form-group row">
                          <label for="nama_guru" class="col-md-4 col-form-label text-md-right">Nama Guru</label>

                          <div class="col-md-6">
                              <input id="nama_guru" type="text" class="form-control @error('nama_guru') is-invalid @enderror" name="nama_guru" value="{{old('nama_guru',$guru->nama_guru)}}" autocomplete="nama_guru" autofocus>

                              @error('nama_guru')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="bidang" class="col-md-4 col-form-label text-md-right">Bidang</label>

                          <div class="col-md-6">
                              <input id="bidang" type="text" class="form-control @error('bidang') is-invalid @enderror" name="bidang" value="{{old('bidang',$guru->bidang)}}" autocomplete="bidang" autofocus>

                              @error('bidang')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="foto" class="col-md-4 col-form-label text-md-right">Foto Guru</label>
                          <input type="file" class="form-control" id="foto" name="foto">
                              @error('foto')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                      </div>

                     
                      </div>

                      <div class="form-group row mb-0">
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Simpan
                              </button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection