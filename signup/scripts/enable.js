window.onload = function() {
var $recaptcha = document.querySelector('#g-recaptcha-response');

if($recaptcha) {
    $recaptcha.setAttribute("required", "required");
}

const $form = document.querySelector('form');
/*
$form.addEventListener('submit', (event) => {

  event.preventDefault();
  document.getElementsByTagName('p').innerHTMl = "Complete the verification!";
});*/
};
