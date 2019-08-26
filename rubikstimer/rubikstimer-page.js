var timerDisplay = document.getElementById("timerDisplay");
var startButton = document.getElementById("startButton");
var resetButton = document.getElementById("resetButton");

var timer = new RubiksTimer(timerDisplay);

startButton.addEventListener("click", function() {
    if (timer.isOn) {
        timer.stop();
        startButton.textContent = "Start";
    } else {
        timer.start();
        startButton.textContent = "Stop";
    }
});

resetButton.addEventListener("click", function() {
    timer.stop();
    timer.reset();
    startButton.textContent = "Start";
});