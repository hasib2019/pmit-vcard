@extends('layouts.app')
@section('title')
    {{ __('All Qr code') }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="d-flex flex-column">
            <div class="col-12">
                @include('layouts.errors')
                @include('flash::message')
                <div class="d-flex justify-content-between align-items-end mb-5">
                    <h1>{{ __('All Qr Code') }}</h1>
                </div>
                <div class="container">
                    <div class="row">
                        @foreach ($vcardData as $vcard)
                            <div class="col-sm">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="vcard-one__profile position-relative">
                                            <div class="avatar position-absolute top-0 start-50 translate-middle">
                                                <img src="{{ $vcard['profile_url'] }}" height="150px" width="150px"
                                                    alt="profile-img" class="rounded-circle" />
                                                <h3>{{ $vcard['name'] }}</h3>
                                                <h5>{{ $vcard['occupation'] }}</h5>
                                                {{-- <h5>{{ $vcard['description'] }}</h5> --}}
                                            </div>

                                        </div>
                                        {{-- Qr code --}}
                                        @if (isset($vcard['show_qr_code']) && $vcard['show_qr_code'] == 1)
                                            <div class="vcard-one__qr-code mt-20 py-5 px-3 position-relative">
                                                <div class="qr-code p-3 card d-block mx-auto border-0">
                                                    <div class="qr-code-image mt-4 d-flex justify-content-center">
                                                        {!! QrCode::size(130)->format('svg')->generate(Request::url($vcard['show_qr_code'])) !!}
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
