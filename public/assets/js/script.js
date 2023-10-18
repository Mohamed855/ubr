let popup = document.getElementById("myPopup");
let selectTime = document.getElementById('selectTime');
let selectTimeBtn = document.getElementById('selectTimeBtn');
function changeBtnText() {
    selectTimeBtn.innerText = selectTime.value;
}
function popupWindow () {
    popup.style.display = "block";
}
function selectEvent(i) {
    selectTime.value = i;
    selectTimeBtn.innerText = selectTime.value;
    popup.style.display = "none";
}
changeBtnText();
