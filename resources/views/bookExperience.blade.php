@extends('layouts.app')

@section('title', 'Book Your Experience')

@section('nav')

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xl-11"></div>
            <div class="col-md-6 col-xl-1">
                <nav class="py-4">
                    <div class="m-auto text-center time">{{ \Carbon\Carbon::now(+3)->format('d/m/Y') }}</div>
                    <div class="m-auto text-center time">{{ \Carbon\Carbon::now(+3)->format('h:i A') }}</div>
                </nav>
            </div>
        </div>
    </div>

@endsection

@section('first-column')

    <div class="d-none d-xl-block col-xl-4">
        <img class="vectors" src="{{ asset('assets/images/zombie-1.png') }}">
    </div>

@endsection

@section('middle-column')

    <div class="col-xl-4">
        <div class="text-center">
            <div class="m-auto">
                <h1 class="fw-bold py-4">Book Your Experience</h1>
                <form action="" method="" class="form">
                    @csrf
                    <input class="text-center form-control m-auto py-2 my-2 custom-input" type="text" name="name" maxlength="25" placeholder="Name">
                    <input class="text-center form-control m-auto py-2 my-2 custom-input" type="text" name="mobile" maxlength="11" placeholder="Mobile Number">
                    <input class="text-center form-control m-auto py-2 my-2 custom-input" type="number" name="players" min="1" max="99" placeholder="Number Of Players">
                    <input id="selectTime" type="hidden" name="date" value="Select Time" onchange="changeBtnText()">
                    <button id="selectTimeBtn" class="text-center form-control m-auto py-2 my-2 custom-input" type="button" onclick="popupWindow()"></button>
                    <a href="#" class="text-secondary-color">Terms & Conditions</a>
                    <p class="text-center m-auto custom-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
                    <input class="text-center" type="checkbox"> <span class="text-secondary-color">I Agree</span>
                    <br><br>
                    <button class="rounded-3 my-3 btn custom-button" type="submit">SUBMIT</button>
                </form>
                <div class="popup" id="myPopup">
                    @php($a = 40)
                    <div class="ele-box row justify-content-between">
                        @for($i = 1; $i <= $a; $i++)
                            <div class="card m-2 col-1" <?php echo "onclick='selectEvent($i)'"; ?> >
                                <span class="card-title">2:36 PM</span>
                                <span class="card-text">10/18/2023</span>
                                <span class="card-main">5/10</span>
                                <span class="card-text s-color">PLAYERS</span>
                                <div class="bottom py-1">
                                    <p class="text">Remaining 5</p>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
                <script src="{{ asset('assets/js/script.js') }}" type="text/javascript"></script>
                @include('includes.footer')
            </div>
        </div>
    </div>

@endsection

@section('last-column')

    <div class="d-none d-xl-block col-4">
        <img class="vectors" src="{{ asset('assets/images/zombie-1.png') }}">
    </div>

@endsection
