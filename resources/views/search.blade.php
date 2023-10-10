@extends('layouts.main')

@section('root')
    <div class="container-fluid my-4">
        <div class="px-4">
            <div class="row">
                <h3>Search</h3>
            </div>
            <div class="row">
                <input class="container-fluid py-3" type="text" name="search" placeholder="Search by name or category">
            </div>
        </div>
    </div>
@endsection