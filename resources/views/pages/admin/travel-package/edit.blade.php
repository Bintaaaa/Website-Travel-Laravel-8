@extends('layouts.admin')
@section('title','Form Edit Package Travel')
@section('header','Form Edit Package Travel {{ $item->title }}')
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
        <form action="{{ route('travel-package.update',$item->id) }}" method="POST">
            @method('PUT')
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $item->title }}">
        </div>
        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" class="form-control" name="location" placeholder="Location" value="{{ $item->location }}">
        </div>
        <div class="form-group">
            <label for="about">About</label>
            <textarea name="about" id="about" class="d-block w-100 form-control" cols="30" rows="10" placeholder="About">{{ $item->about }}</textarea>
        </div>
        <div class="form-group">
            <label for="featured_event">Featured Event</label>
            <input type="text" class="form-control" name="featured_event" placeholder="Featured Event" value="{{ $item->featured_event }}">
        </div>
        <div class="form-group">
            <label for="language">Language</label>
            <input type="text" class="form-control" name="language" placeholder="Language" value="{{ $item->language }}">
        </div>
        <div class="form-group">
            <label for="foods">Foods</label>
            <input type="text" class="form-control" name="foods" placeholder="Foods" value="{{ $item->foods }}">
        </div>
        <div class="form-group">
            <label for="departured_date">Departured Date</label>
            <input type="date" class="form-control" name="departure_date" placeholder="Departured Date" value="{{ $item->departure_date }}">
        </div>
        <div class="form-group">
            <label for="duration">Duration</label>
            <input type="text" class="form-control" name="duration" placeholder="Duration" value="{{ $item->duration }}">
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <input type="text" class="form-control" name="type" placeholder="Type" value="{{ $item->type }}">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" name="price" placeholder="Price" value="{{ $item->price }}">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Edit</button>
    </form>
    </div>
</div>
@endsection