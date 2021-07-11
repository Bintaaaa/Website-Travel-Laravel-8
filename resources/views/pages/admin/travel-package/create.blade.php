@extends('layouts.admin')
@section('title','Form Package Travel')
@section('header','Form Package Travel')
@section('content')
{{-- menampilkan error --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
{{-- enderror --}}

{{-- form --}}
<div class="card shadow">
    <div class="card-body">
        <form action="{{ route('travel-package.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Title" value="{{ old('title') }}">
        </div>
        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" class="form-control" name="location" placeholder="Location" value="{{ old('location') }}">
        </div>
        <div class="form-group">
            <label for="about">About</label>
            <textarea name="about" id="about" class="d-block w-100 form-control" cols="30" rows="10" placeholder="About">{{ old('about') }}</textarea>
        </div>
        <div class="form-group">
            <label for="featured_event">Featured Event</label>
            <input type="text" class="form-control" name="featured_event" placeholder="Featured Event" value="{{ old('featured_event') }}">
        </div>
        <div class="form-group">
            <label for="language">Language</label>
            <input type="text" class="form-control" name="language" placeholder="Language" value="{{ old('language') }}">
        </div>
        <div class="form-group">
            <label for="foods">Foods</label>
            <input type="text" class="form-control" name="foods" placeholder="Foods" value="{{ old('foods') }}">
        </div>
        <div class="form-group">
            <label for="departured_date">Departured Date</label>
            <input type="date" class="form-control" name="departure_date" placeholder="Departured Date" value="{{ old('departured_date') }}">
        </div>
        <div class="form-group">
            <label for="duration">Duration</label>
            <input type="text" class="form-control" name="duration" placeholder="Duration" value="{{ old('duration') }}">
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <input type="text" class="form-control" name="type" placeholder="Type" value="{{ old('type') }}">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" name="price" placeholder="Price" value="{{ old('price') }}">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
    </form>
    </div>
</div>
@endsection