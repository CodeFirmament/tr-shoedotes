window.onload = ()=> {
var $recaptcha = document.querySelector('#g-recaptcha-response');

if($recaptcha) {
    $recaptcha.setAttribute("required", "required");
}

};
