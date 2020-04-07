function vall()
{
    var x = document.getElementById("done").selectedIndex;
    var y = document.getElementById("done").options;
    var z = document.getElementById('val')


    switch (y[x].index) {
        case 0:
            z.innerHTML =0;
          break;
        case 1:
            z.innerHTML = 200;
          break;
          case 2:
            z.innerHTML = 400;
          break;
        default:
          text = "No value found";
      }
