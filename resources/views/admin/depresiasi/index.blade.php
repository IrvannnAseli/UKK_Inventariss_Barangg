@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4>Daftar Depresiasi</h4>
        <a href="{{ route('admin.depresiasi.create') }}" class="btn btn-primary">Tambah Depresiasi</a>
    </div>
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="text-align: center;">No</th>
                    <th>Lama Depresiasi</th>
                    <th>Keterangan</th>
                    <th style="text-align: center;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($depresiasi as $item)
                    <tr>
                        <td style="text-align: center;">{{ $loop->iteration }}</td>
                        <td>{{ $item->lama_depresiasi }}</td>
                        <td>{{ $item->keterangan }}</td>
                        <td style="text-align: center;">
                            <a href="{{  auth()->user()->role === 'admin' ? route('admin.depresiasi.edit', $item->id_depresiasi) : route('depresiasi.edit', $item->id_depresiasi)}}" class="btn btn-sm btn-warning btn-gradient">Edit</a>
                            <form action="{{ route('admin.depresiasi.destroy', $item->id_depresiasi) }}" method="POST" style="display:inline-block; margin-left: 5px;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger btn-gradient" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
