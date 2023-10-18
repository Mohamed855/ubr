<div class="container">
    <div class="row">
        <div class="col-md-6 col-xl-11"></div>
        <div class="col-md-6 col-xl-1">
            <div class="m-auto text-center time">{{ \Carbon\Carbon::now(+3)->format('d/m/Y') }}</div>
            <div class="m-auto text-center time">{{ \Carbon\Carbon::now(+3)->format('h:i A') }}</div>
        </div>
    </div>
</div>
