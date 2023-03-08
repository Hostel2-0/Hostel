function setStatus(status) {
    var circle = document.getElementById("status-rectangle");
    circle.classList.remove("offline", "online", "waiting");
  
    if (status === "covid-19") {
      circle.classList.add("waiting");
      circle.innerText = "Карантин";
    } else if (status === "offline") {
      circle.classList.add("offline");
      circle.innerText = "Закрито";
    } else if (status === "online") {
      circle.classList.add("online");
      circle.innerText = "Відкрито";
    }
  
    var buttons = document.getElementsByClassName("myButton");
    for (var i = 0; i < buttons.length; i++) {
      buttons[i].classList.remove("active");
    }
  
    var button = document.querySelector("a[onclick='setStatus(\"" + status + "\")']");
    button.classList.add("active");
  }

  
  