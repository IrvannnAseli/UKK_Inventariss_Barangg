@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 style="font-weight: 600; color: #4A4A4A;">Edit Depresiasi</h4>
    </div>
    <form action="{{ route('admin.depresiasi.update', $depresiasi->id_depresiasi) }}" method="POST" style="background: rgba(255, 255, 255, 0.8); padding: 2rem; border-radius: 10px; box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label style="font-weight: 500; font-size: 1rem; color: #4A4A4A;">Lama Depresiasi (tahun)</label>
            <input type="number" name="lama_depresiasi" class="form-control" value="{{ $depresiasi->lama_depresiasi }}" required style="padding: 0.9rem; font-size: 1rem; border-radius: 5px; background: rgba(255, 255, 255, 0.8); box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);">
        </div>
        <div class="mb-3">
            <label style="font-weight: 500; font-size: 1rem; color: #4A4A4A;">Keterangan</label>
            <input type="text" name="keterangan" class="form-control" value="{{ $depresiasi->keterangan }}" maxlength="50" style="padding: 0.9rem; font-size: 1rem; border-radius: 5px; background: rgba(255, 255, 255, 0.8); box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);">
        </div>
        <div class="d-flex justify-content-between mt-4">
            <button type="submit" class="btn btn-gradient">Update</button>
            <a href="{{  auth()->user()->role === 'admin' ? route('admin.depresiasi.index') : route('depresiasi.index')}}" class="btn btn-gradient-secondary">Batal</a>
        </div>
    </form>
</div>


</style>
@endsection
