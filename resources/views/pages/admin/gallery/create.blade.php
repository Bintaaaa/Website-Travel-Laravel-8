@extends('layouts.admin')
@section('title','Form Gallery Travel')
@section('header','Form Gallery Travel')
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
        <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label for="travel_packages_id">Paket Travel</label>
                <select name="travel_packages_id" id="" required class="form-control">
                    <option value="">Pilih Paket Travel</option>
                    @foreach ($travel_packages as $item)
                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" placeholder="Image" >
            </div>
        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
    </form>
    </div>
</div>
@endsection