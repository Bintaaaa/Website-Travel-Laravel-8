@extends('layouts.admin')
@section('title','Form Edit Transaction Travel')
@section('header','Form Edit Transaction Travel')
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
        <form action="{{ route('transaction.update', $item->id) }}" method="post">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="title">Status</label>
                <select name="trasaction_status" required class="form-control">
                    <option value="{{ $item->trasaction_status }}">Jangan Ubah ({{ $item->trasaction_status }})</option>
                    <option value="IN_CART">In Cart</option>
                    <option value="PENDING">Pending</option>
                    <option value="SUCCESS">Success</option>
                    <option value="CANCEL">Cancel</option>
                    <option value="FAILED">Failed</option>
                </select>
            </div>
        <button type="submit" class="btn btn-primary btn-block">Edit</button>
    </form>
    </div>
</div>
@endsection