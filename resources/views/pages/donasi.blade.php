@extends('layouts.index', ['navbar' => 'donasi'])
@php
    $firstItem = $donations->firstItem() ?? 0;
    $lastIten = $donations->lastItem() ?? 0;
@endphp
@section('content')
    <section class="data-donasi">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Data Donasi</h1>
                </div>
                <div class="col-md-6">
                    <div class="search d-flex align-items-center justify-content-md-end gap-2">
                        <span>Search:</span>
                        <form action="{{ route('donasi') }}" method="GET" role="search">
                            <input type="text" name="search" placeholder="Cari nama donatur" value="{{ request()->input('search') }}">
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-bordered" style="--bs-border-color: #363231;">
                            <thead class="table-dark" style="--bs-table-bg: #363231; --bs-table-border-color: #363231;">
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Via</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($donations as $donation)
                                    <tr>
                                        <td scope="row">{{ $loop->index + $firstItem}}</td>
                                        <td>{{ date('d-m-Y', strtotime($donation->date)) }}</td>
                                        <td>{{ $donation->name }}</td>
                                        <td>{{ 'Rp. ' . number_format($donation->amount, 0, ',', '.') }}</td>
                                        <td>{{ $donation->transfer_via }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-5 mt-2 my-lg-0 ">
                    <div class="showing-entities">
                        Showing {{ $firstItem }} to {{ $lastIten }} of {{ $donations->total() }}
                        entries
                    </div>
                </div>
                <div class="col-md-6">
                    <nav aria-label="Page navigation">
                        {{ $donations->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection
