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

let buttons = document.getElementsByClassName("button-items");

for (i = 0; i< buttons.length;i++) {
    buttons[i].onclick = function(){
        let ProductId = this.parentElement.children[1].getAttribute("value");

        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {

            if (this.readyState == 4 && this.status == 200) {
                alert(this.response);
            }

            obtain_wallet();

        };

        xhttp.open("POST", "/comp/buyItem.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("itemId="+ProductId);
    }
}