<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
function myAccFunc() {
    var x = document.getElementById("demoAcc");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-green";
    } else { 
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-green", "");
    }
}

function myDropFunc() {
    var x = document.getElementById("demoDrop");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-green";
    } else { 
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-green", "");
    }
}
</script>
<body>

<div class="w3-sidebar w3-bar-block w3-red w3-card-2" style="width:170px;">
  <a href="#" class="w3-bar-item w3-button"><b>Congresso</b> APSP</a>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <button class="w3-button w3-block w3-left-align" onclick="myAccFunc()">
  <i class="fa fa-user-plus"></i>Accordion <i class="fa fa-caret-down"></i>
  </button>
  <div id="demoAcc" class="w3-hide w3-white w3-card-2">
    <a href="#" class="w3-bar-item w3-button">Link</a>
    <a href="#" class="w3-bar-item w3-button">Link</a>
  </div>

  <div class="w3-dropdown-click">
    <button class="w3-button" onclick="myDropFunc()">
      Dropdown <i class="fa fa-caret-down"></i>
    </button>
    <div id="demoDrop" class="w3-dropdown-content w3-bar-block w3-white w3-card-2">
      <a href="#" class="w3-bar-item w3-button">Link</a>
      <a href="#" class="w3-bar-item w3-button">Link</a>
    </div>
  </div>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user-plus"></i> Informacoes gerais</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
</div>

<div class="w3-container" style="margin-left:160px">
<h2>Sidebar Accordion</h2>
<p>In this example, we have added an accordion and a dropdown menu inside the side navigation.</p>
<p>Click on both to understand how they differ from each other. The accordion will push down the content, while the dropdown lays over the content.</p>
</div>



</body>
</html>
