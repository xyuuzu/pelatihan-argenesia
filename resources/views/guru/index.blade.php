@extends('admin.admin')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <!-- Button to Create New Record -->
                <div class="card-title">
                    <a href="{{ route('guru.create') }}" class="btn btn-success btn-sm">Create New Guru</a>
                </div>

                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Guru</th>
                            <th>Bidang Guru</th>
                            <th>Foto</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gurus as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->nama_guru }}</td>
                                <td>{{ $item->bidang }}</td>
                                <td>
                                    @if ($item -> foto)
                                    <img src="{{asset('images/' . $item->foto)}}" alt="{{$item->nama_guru}}" width="100px">
                                        @else
                                        <p>Foto Tidak tersedia</p>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('guru.show', $item->id) }}" class="btn btn-info btn-sm">Lihat</a>
                                    <a href="{{ route('guru.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <!-- Tombol hapus jika diperlukan -->
                                    <form action="{{ route('guru.destroy', $item->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
@endsection