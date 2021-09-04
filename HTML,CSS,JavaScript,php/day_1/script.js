var btn_white = document.getElementById("btn_white");
var btn_black = document.getElementById("btn_black");

btn_white.addEventListener('click',function(){
  document.getElementById('target').className = 'white';
})

btn_black.addEventListener('click',function(){
  document.getElementById('target').className = 'black';
})
