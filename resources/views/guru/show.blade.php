@extends('admin.admin')

@section('content')

 <div class="container">
  <div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Detail Guru</h3>
        </div>
        <div class="card-body">
          <div class="form-group">
            <label for="title">Nama Guru : </label>
            <p>{{ $guru->nama_guru }}</p>
          </div>
          <div class="form-group">
            <label for="bidang">Bidang : </label>
            <p>{{ $guru->bidang }}</p>
          </div>
          <div class="form-group">
            <label for="foto">Foto : </label>
            <div>
                @if ($guru->foto)
                    <img src="{{asset('images/' . $guru->foto)}}" alt="{{$guru->nama_guru}}" width="500px">
                @else
                    
                @endif
            </div>
          </div>
          <a href="{{ route('guru.index') }}" class="btn btn-primary">Back to list</a>
        </div>
      </div>
    </div>
  </div>
 </div>



@endsection