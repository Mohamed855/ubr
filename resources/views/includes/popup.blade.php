<div class="text-end">
    <span class="close" style="font-size: 40px;cursor: pointer" onclick="closePopup()">×</span>
</div>
<h1 class="fw-bold py-2">Book Your Experience</h1>
<form action="" method="" class="form">
    @csrf
    <input class="text-center form-control m-auto py-2 my-2 custom-input" type="text" name="name" maxlength="25" placeholder="Name">
    <input class="text-center form-control m-auto py-2 my-2 custom-input" type="text" name="mobile" maxlength="11" placeholder="Mobile Number">
    <input id="event" class="text-center form-control m-auto py-2 my-2 custom-input" type="text" name="event" placeholder="Event">
    <input class="text-center form-control m-auto py-2 my-2 custom-input" type="number" name="players" min="1" max="10" placeholder="Number Of Players">
    <a href="#" class="text-secondary-color">Terms & Conditions</a>
    <p class="text-center m-auto custom-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
    <input class="text-center" type="checkbox" name="terms"> <span class="text-secondary-color">I Agree</span>
    <br><br>
    <button class="rounded-3 my-3 btn custom-button" type="submit">SUBMIT</button>
</form>
@include('includes.footer')
