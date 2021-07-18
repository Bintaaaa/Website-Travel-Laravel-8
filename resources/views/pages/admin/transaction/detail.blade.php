@extends('layouts.admin')
@section('title','Detail Transaction Travel')
@section('header','Detail Transaction Travel')
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
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <td>{{ $items->id }}</td>
            </tr>
            <tr>
                <th>Paket Travel</th>
                <td>
                    {{  $items->travelPackage->title }}
                </td>
            </tr>
            <tr>
                <th>Pembeli</th>
                <td>
                    {{  $items->users->name }}
                </td>
            </tr>
            <tr>
                <th>Additional Visa</th>
                <td>
                    ${{  $items->additional_visa }}
                </td>
            </tr>
            <tr>
                <th>Total Transaksi</th>
                <td>
                    ${{  $items->transaction_total }}
                </td>
            </tr>
            <tr>
                <th>Status</th>
                <td>
                    {{  $items->trasaction_status }}
                </td>
            </tr>
            <tr>
                <th>Pembelian</th>
                <td>
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Nationality</th>
                            <th>Visa</th>
                            <th>DOE Passport</th>
                        </tr>
                        @foreach($items->details as $detail)
                        <tr>
                            <td>{{ $detail->id }}</td>
                            <td>{{ $detail->username }}</td>
                            <td>{{ $detail->nationality }}</td>
                            <td>{{ $detail->is_visa ? '30 Days' : 'N/A' }}</td>
                            <td>{{ $detail->doe_passport }}</td>
                        </tr>
                    @endforeach
                    </table>
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection