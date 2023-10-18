@extends('layouts.app')

@section('title', 'UBR Booking System')

@section('nav')
@endsection

@section('first-column')

    <div class="d-none d-xl-block col-xl-5">
        <img class="vectors" src="{{ asset('assets/images/zombie-1.png') }}">
    </div>

@endsection

@section('middle-column')

    <div class="col-xl-2">
        <div class="text-center">
            <div class="m-auto">
                <div class="d-flex justify-content-end align-items-start" style="height: 30vh;">
                    <img class="align-middle" style="max-width: 140px" src="{{ asset('assets/images/spider.png') }}">
                </div>
                <div class="d-flex justify-content-center align-items-center" style="height: 50vh;">
                    <img style="max-width: 400px" src="{{ asset('assets/images/main-title.png') }}">
                </div>
                @include('includes.footer')
            </div>
        </div>
    </div>

@endsection

@section('last-column')

    <div class="d-none d-xl-block col-xl-5">
        <img class="vectors" src="{{ asset('assets/images/female.png') }}">
    </div>

@endsection
