@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>Welcome to Asset Management Dashboard</h1>
            <p class="lead">Easily manage your assets, procurement, and inventory from here.</p>

            <p class="mt-4">navigate through the system and access various features.</p>

            <div class="mt-5">
                <h5>Quick Tips:</h5>
                <ul class="list-unstyled">
                    <li><i class="fas fa-check-circle"></i> View and manage your assets easily.</li>
                    <li><i class="fas fa-shopping-cart"></i> Check procurement statuses.</li>
                    <li><i class="fas fa-clipboard-list"></i> Perform asset opname for accurate records.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
