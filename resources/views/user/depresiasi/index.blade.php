@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4>Daftar Depresiasi</h4>
    </div>
    @if(session('success'))
        <div class="alert alert-success" style="background: rgba(92, 184, 92, 0.2); border: none; color: #5CB85C;">
            {{ session('success') }}
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="text-align: center;">No</th>
                    <th>Lama Depresiasi</th>
                    <th>Keterangan</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($depresiasi as $item)
                    <tr>
                        <td style="text-align: center;">{{ $loop->iteration }}</td>
                        <td>{{ $item->lama_depresiasi }}</td>
                        <td>{{ $item->keterangan }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection
