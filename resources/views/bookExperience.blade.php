@extends('layouts.app')

@section('title', 'Book Your Experience')

@section('content')

    <nav class="py-5">
        @include('includes.nav')
    </nav>

    <div class="container pb-5">
        <div class="row justify-content-start">
            <div class="text-center">
                <h1 class="fw-bold pb-4">Book Your Experience</h1>
                <div class="px-5">
                    <div class="text-center">
                        <div class="m-auto">
                            @php($a = 35)
                            <div class="ele-box row justify-content-between">
                                @for($i = 1; $i <= $a; $i++)
                                    <div class="card m-2 col-1" <?php echo "onclick='selectEvent($i)'"; ?> >
                                        @include('includes.card')
                                    </div>
                                @endfor
                            </div>
                        </div>
                        @include('includes.footer')
                        <div class="popup" id="popup">
                            @include('includes.popup')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        let popup = document.getElementById("popup");
        let event = document.getElementById('event');
        function selectEvent(i) {
            event.value = i;
            popup.style.display = "block";
        }
        function closePopup() {
            popup.style.display = "none";
        }
    </script>

@endsection
