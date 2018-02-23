const wrapper = document.getElementById('wrapper');
const myAssignment = document.getElementById('myAssignment');
const myAnswer = document.getElementById('myAnswer');
const feedback = document.getElementById('feedback');
const sound = new Audio();

let mySum;

function makeSum() {
  var a = Math.floor(Math.random() * 9 + 1);
  var b = Math.floor(Math.random() * 9 + 1);
  mySum = a + " * " + b;
  myAssignment.innerHTML = mySum;
  myAnswer.focus();
}
function keyPressed(evt) {
  if(evt.keyCode == 13) {
    console.log("hallo");
    if (eval(mySum) == myAnswer.value) {
    feedback.src = "good.png";
    sound.src = "goed.mp3";
    sound.play();
  }
  else {
    feedback.src = "fout.png";
    sound.src = "fout.mp3";
    sound.play();
  }
window.setTimeout(waiting, 200);
}
}

function waiting() {
feedback.src = "wait.png"
myAnswer.value = "";
makeSum();
}

makeSum();
myAnswer.addEventListener("keydown", keyPressed, false);
