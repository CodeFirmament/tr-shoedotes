function obtain_wallet() {
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {

      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("nav-bar-wallet").innerHTML = this.response;
      }

    };

    xhttp.open("POST", "/comp/wallet.php", true);
    xhttp.send();

}

document.getElementById("nav-bar-wallet").onclick =()=>{
  var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {

      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("nav-bar-wallet").innerHTML = this.response;
      }

    };

    xhttp.open("GET", "/comp/addwallet.php", true);
    xhttp.send();
}

window.onload = function(){
  this.obtain_wallet();
}