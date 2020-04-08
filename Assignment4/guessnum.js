


var randonum=0;

var attempts = 7;

var gnum=7;

var sound1;

var sound2;


function game()

{


randonum=Math.floor(Math.random()*101+1);

document.getElementById('attempts').innerHTML=gnum+" guesses left!";

}





function check_num(){

sound1=new sound("Win.mp3");

sound2=new sound("Lose.mp3");

var enterednumber=new Number(document.getElementById('number').value);

if(enterednumber==randonum )

{
sound1.play();
alert('Congratulations! You entered the correct number '+randonum+'.\n Click ok to restart the game.');


gnum=attempts;

game();

}else{

if(enterednumber>randonum && gnum>1)

{
alert('Your guess is greater than secret number');

gnum=gnum-1;

document.getElementById('attempts').innerHTML=gnum+" guesses left!";

}

if(enterednumber<randonum && gnum>1)

{

alert('Your guess is less than secret number');

gnum=gnum-1;

document.getElementById('attempts').innerHTML=cur+" guesses left!";

}

if(gnum==1)

{
	sound2.play();
	alert('Sorry, but you ran out of guesses. The secret number was '+randonum+'.\n Click ok to restart the game.');

gnum=attempts;

game();

}

}}

function sound(src) {
    this.sound = document.createElement("audio");
    this.sound.src = src;
    this.sound.setAttribute("preload", "auto");
    this.sound.setAttribute("controls", "none");
    this.sound.style.display = "none";
    document.body.appendChild(this.sound);
    this.play = function(){
        this.sound.play();
    }
    
}

function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}

var timeMe = function () {
    var x = 10;
    var mins = 60 * x,
        display = document.querySelector('#time');
    startTimer(mins, display);
};