document.addEventListener('keydown', function(e) {
    if(e.which == 116) {
        window.onbeforeunload = function() {
            window.onbeforeunload = null;
            return "Please don't refresh the page otherwise your progress will be lost!";
        }
    }
}, false);

/*var question = localStorage.getItem("currentQuestion");
if(question === null){*/
	currentQuestion = 0;
/*}else{
	currentQuestion = question;
	loadQuestion(currentQuestion);
} */
var score = 0;
var totQuestions = questions.length;

var container = document.getElementById('quizContainer');
var questionEl = document.getElementById('question');
var opt1 = document.getElementById('opt1');
var opt2 = document.getElementById('opt2');
var opt3 = document.getElementById('opt3');
var opt4 = document.getElementById('opt4');
var nextButton = document.getElementById('nextButton');
var resultCont = document.getElementById('result');
var showResult = document.getElementById('showResult');
var ans = document.getElementsByName('option');
var res = document.getElementsByName('res');

utilitymap = [2,2,1,1];
if(localStorage.getItem("Responses") === null)
	response = new Array();
else{
	response = localStorage.getItem("Responses");
}
var time = localStorage.getItem("timer");
if(time === null){
	timer = 1800;
}else{
	timer = time;
} 


var min = 0;
var sec = 0;
function startTimer(){
	min = parseInt(timer/60);
	sec = parseInt(timer%60);
	if(timer<1){
		localStorage.setItem("response", JSON.stringify(response));
		localStorage.setItem("answers", JSON.stringify(utilitymap));
		window.location="timeup.html";
	}
	document.getElementById("time").innerHTML = "<b>Time Left : :   </b>"+min.toString()+":"+sec.toString();
	timer--;
	localStorage.setItem("timer", timer);
	setTimeout(function(){
		startTimer();
	}, 1000);
}

function setOptionColor(){
	for(var i = 1; i <= 4; i++){
    	$('#label'+i).css({'background-color': 'white'});
    }
    $('#label'+response[currentQuestion]).css({'background-color': '#76E55D'});
}

function removeColor(){
	var temp = currentQuestion + 1;
	$('#'+temp).css({'background-color': '#9D9D92'});
}

function setColor(){
	var temp = currentQuestion + 1;
	$('#'+temp).css({'background-color': '#76E55D'});
}

function loadQuestion (questionIndex) {

	localStorage.setItem("currentQuestion", questionIndex);

	var q = questions[questionIndex];
	questionEl.textContent = (questionIndex + 1) + '. ' + q.question;
	opt1.textContent = q.option1;
	opt2.textContent = q.option2;
	opt3.textContent = q.option3;
	opt4.textContent = q.option4;
	setColor();
	setOptionColor();
};

function setButtonText(){
	if(currentQuestion == totQuestions - 1){
		nextButton.textContent = 'Finish';
	}else{
		nextButton.textContent = 'Next Question';
	}
}

function setResponse(){
	value = response[currentQuestion];
	if(value != null){
		value = value-1;
		var opt = document.getElementsByName('option');
		opt[value].checked = true;
	}else{
		$("input[name=option]").removeAttr('checked');
	}
}

function clearSelection () {
	$("input[name=option]").removeAttr('checked');
	response[currentQuestion] = null;
	localStorage.setItem("Responses", response);
}

function loadPrevQuestion () {
	removeColor();
	console.log("Previes");
	console.log("Current Question : " + currentQuestion);
	if(currentQuestion > 0){
		--currentQuestion;
		loadQuestion(currentQuestion);
		setResponse();
		setButtonText();
	}
}

function changeQuestion(ele){
	removeColor();
	currentQuestion = ele.innerText - 1;
	loadQuestion(currentQuestion);
	setResponse();
	setButtonText();
	
}


function loadNextQuestion () {
	removeColor();
	++currentQuestion;
	if (currentQuestion == totQuestions) {
		window.location = "thanks.html";
		localStorage.setItem("response", JSON.stringify(response));
		localStorage.setItem("answers", JSON.stringify(utilitymap));
		return;
	}
	var selectedOption = document.querySelector('input[type=radio]:checked');
	if(!selectedOption){
		response[currentQuestion - 1] = null;
	}
	loadQuestion(currentQuestion);
	setResponse();
	setButtonText();

}

function showArray () {
	document.getElementById('result_arr').textContent = 'Answers : ' + response + ' Score : ' + countScore();
}

function countScore () {
		for (var i = 0; i < totQuestions; i++) {
			if (response[i] == utilitymap[i]) {
				score = score + 10;
			}else if (response[i] != utilitymap[i]) {
				score = score - 2.5;
			}
		}
	return score;
}

loadQuestion(currentQuestion);



$("input[type='radio']").click(function() {
	var selectedOptionn = document.querySelector('input[type=radio]:checked');
    response[currentQuestion] = selectedOptionn.value;
    localStorage.setItem("Responses", response);
    setOptionColor();
});

