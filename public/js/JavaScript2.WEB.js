function Hint(){
    var a =  getRandomInt(1000);
    var b = getRandomInt1(1000);
    var res = parseInt(prompt("Confirm that you are not a robot : "+a+"+"+b+ "?"));
    var x = a + b;
    if(res === x)
    {
         var modal = document.getElementById("myModal");
         show('block');
    }
    else 
    {
        return Hint();
    }
}
function getRandomInt(max) {
    return Math.floor(Math.random() * max);
  }
  function getRandomInt1(max) {
    return Math.floor(Math.random() * max);
  }
  var show = function (state) {
    document.getElementById('modalForm').style.display = state;
    document.getElementById('filter').style.display = state;
    if (state === 'block') {
        setTimeout(show2, 5000);
    }
}

function show2(){
    document.getElementById('modalForm').style.display = 'none';
    document.getElementById('filter').style.display = 'none';
}

  var link = [];
  link["default"] = "https://www.youtube.com/embed/Z4RtSSSXkoc";
  link["sintikov"] = "https://www.youtube.com/embed/PyVT8G1QEg0";
  link["history"] = "https://www.youtube.com/embed/Bluxbh9CaQ0";  
  
  
  
  var keys = [];
  keys[0] = "default";
  keys[1] = "sintikov";
  keys[2]  = "history"
  
  function Chang() {
      var text = document.getElementById("InnerHtml").value;
      var srVideo = document.getElementById("VideoInnerHtml");
      text = text.toLowerCase();
      if (text != '' || text != null){
          for (let i = 0; i < keys.length; i++){
              console.log(i);
              if (keys[i] === text){
                  srVideo.src = link[keys[i]];
              }
          }
      } 
      var audio = new Audio();
     audio.src = 'Audio.mp3';
      audio.play();   
    }

    $('#all').animate({opacity: 1}, 3000);