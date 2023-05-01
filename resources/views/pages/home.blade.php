@extends('layouts.index', ['navbar' => 'home'])
@section('jumbotron')
    <div class="banner-section">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-md-7">
                    <h1>{{ $campaign->title }}</h1>
                </div>
                @php
                    $persentageConvert = $campaign->persentage > 100 ? 100 : round($campaign->persentage, 2);
                @endphp
                <div class="col-md-5">
                    <div class="right">
                        <div class="progress-tooltip">
                            <span class="progress-tooltip-info"
                                style="left: {{ $persentageConvert }}%;">{{ $persentageConvert }}%</span>
                            <div class="progress" role="progressbar" aria-label="Basic example"
                                aria-valuenow="{{ $campaign->persentage }}" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: {{ $persentageConvert }}%"></div>
                            </div>
                        </div>
                        <div class="text-center progress-value">
                            <div class="bolder-text">
                                {{ 'Rp ' . number_format($campaign->donations_sum_amount, 0, ',', '.') }}</div>
                            <div>Terkumpul dari
                                <strong>{{ 'Rp ' . number_format($campaign->target_amount, 0, ',', '.') }}</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <!-- /.home-header -->
    <section class="about-section">
        <div class="container">
            <div class="row align-items-center gx-5">
                <div class="col-md-6">

                    <div class="video-div">
                        <a href="{{ config('content.pages.home.khotbah.youtube') }}" class="popup-youtube"><img
                                src="{{ config('content.pages.home.khotbah.thumbnail') }}" alt="video-poster"
                                class="img-fluid"></a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-play-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path
                                d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z" />
                        </svg>
                    </div>

                </div>
                <div class="col-md-6 col-xxl-5">
                    <div class="pre-title">{{ config('content.pages.home.khotbah.sub_title') }}</div>
                    <h2>{{ config('content.pages.home.khotbah.title') }}</h2>
                    @php
                        $khotbah = config('content.pages.home.khotbah.messages');
                    @endphp
                    @if (is_array($khotbah))
                        @foreach ($khotbah as $item)
                            <p>{{ $item }}</p>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
