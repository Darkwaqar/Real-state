


//js-profile-tab
$(document).ready(function () {
  $(".tab").click(function () {
      $(".tab").removeClass("active");
      $(this).addClass("active");
  });
});


//edit-profile-round-image
function readURL(input) {
  if(input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $("#imagePreviewban").css("background-image", "url(" + e.target.result + ")");
      $("#imagePreviewban").hide();
      $("#imagePreviewban").fadeIn(650);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
$("#imageUploadban").change(function() {
  readURL(this);
});
//edit-profile-main-banner-image-end
//round-image-start



//hide date-picker-2
$(".dates-field").focusin(function () {
  $(".field-icons").hide();
});

$(".dates-field").focusout(function () {
  $(".field-icons").show();
});

// Mobile Menu Js
$('.mobile-toggle').click(function(){
	$('.mobile-wrap').toggleClass('active');
});
// Mobile Navigation Close Button Js
$('.toogle-close-btn').click(function(){
	$('.mobile-wrap').removeClass('active');
});


//faq-start
const questionContainers = document.querySelectorAll('.question-container');
const answers = document.querySelectorAll('.answer');
let activeAnswer = answers[0];

// Adds the visible class to the first answer and rotate class to the first toggle button
questionContainers[0].querySelector('.toggle-btn p').classList.add('rotate');
activeAnswer.classList.add('visible');

questionContainers.forEach((container, index) => {
  container.addEventListener('click', () => {
    const answer = answers[index];
    const toggleBtn = container.querySelector('.toggle-btn p');

    if (activeAnswer !== null && activeAnswer !== answer) {
      const activeToggleBtn = activeAnswer.previousElementSibling.querySelector('.toggle-btn p');
      activeToggleBtn.classList.remove('rotate');
      activeAnswer.classList.remove('visible');
    }

    toggleBtn.classList.toggle('rotate');

    if (answer.classList.contains('visible')) {
      answer.classList.remove('visible');
      activeAnswer = null;
    } else {
      answers.forEach(a => {
        a.classList.remove('visible');
      });
      answer.classList.add('visible');
      activeAnswer = answer;
    }
  });
});

var optionMenuth = document.querySelector(".select-menu-three"),
  selectBtnns = optionMenuth.querySelector(".select-btn-three"),
  optionstws = optionMenuth.querySelectorAll(".option-three"),
  sBtn_textss = optionMenuth.querySelector(".sBtn-text-three");

selectBtnns.addEventListener("click", () =>
  optionMenuth.classList.toggle("active")
);

optionstws.forEach((optionth) => {
  optionth.addEventListener("click", () => {
    var selectedOptionss = optionth.querySelector(".option-text-three").innerText;
    sBtn_textss.innerText = selectedOptionss;
    optionMenuth.classList.remove("active");
  });
});


$(document).ready(function () {
  var flashData = getSetFlashData();

  if (flashData) {
      $('#modal-icon').html('<i class="' + flashData.icon + '"></i>');
      $('#modal-message').html(flashData.message);
      $('#exampleModalsubmit').modal('show');
  }
});