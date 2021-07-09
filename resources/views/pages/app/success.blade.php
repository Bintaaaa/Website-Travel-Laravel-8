@extends('layouts.success')
@section('title','Transaction Success')
@section('content')
<main>
    <div class="section-succes align-items-center mt-5">
        <div class="col text-center">
            <img src="{{ url('frontend/images/ic_mail.png') }}" alt="">
            <h1>Yeay! Success</h1>
            <p>
                We've sent you email for trip instruction
                <br>
                please read it as well 
            </p>
            <a href="{{ route('home') }}" class="btn btn-home-page btn-primary mt-3 px-5">
                Home Page
            </a>
        </div>
    </div>
</main>
@endsection
