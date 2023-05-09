document.addEventListener("DOMContentLoaded", function() {
    var bigSquare = document.getElementById("bigSquare");
    var square1 = document.getElementById("square1");
    var square2 = document.getElementById("square2");
    var start = document.getElementById("start");
    var stop = document.getElementById("stop");
    
    var animationInterval;
  
    function moveSquares() {
      var maxPosition = bigSquare.offsetWidth - square1.offsetWidth;
      var x1 = Math.floor(Math.random() * maxPosition);
      var y1 = Math.floor(Math.random() * maxPosition);
      var x2 = Math.floor(Math.random() * maxPosition);
      var y2 = Math.floor(Math.random() * maxPosition);
      
      square1.style.transform = `translate(${x1}px, ${y1}px)`;
      square2.style.transform = `translate(${x2}px, ${y2}px)`;
    }
  
    start.addEventListener("click", function() {
      clearInterval(animationInterval);
      animationInterval = setInterval(moveSquares, 1000);
    });
  
    stop.addEventListener("click", function() {
      clearInterval(animationInterval);
    });
  });