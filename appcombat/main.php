<script type="text/javascript">
	if(localStorage.getItem('email') === null){
		window.location = 'index.php';
	}
</script>
<!DOCTYPE html>
<html>
<head>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<meta content="utf-8" http-equiv="encoding">
	<title></title>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/quiz.css">
	<link rel="stylesheet" type="text/css" href="css/this.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
</head>
<body onload="startTimer();">
<br><br>
	<div id="timer">
		<center><b><label id="time"></label></b></center>
	</div>
	<div id="quizContainer" class="container">
		<div class="title">AppCombat   Prelims</div><br>
		<div id="question" class="question"></div>
		<label class="option" id = "label1"><input type="radio" name="option" value="1" /> <span id="opt1"></span></label>
		<label class="option" id = "label2"><input type="radio" name="option" value="2" /> <span id="opt2"></span></label>
		<label class="option" id = "label3"><input type="radio" name="option" value="3" /> <span id="opt3"></span></label>
		<label class="option" id = "label4"><input type="radio" name="option" value="4" /> <span id="opt4"></span></label>
		<button id="clr" class="clr" onclick="clearSelection()">Clear Selection</button>
		<button id="nextButton" class="next-btn" onclick="loadNextQuestion()">Next Question</button>
		<button id="prevButton" class="prev-btn" onclick="loadPrevQuestion()">Prev Question</button>
	</div>
	<button id="res" class="res" onclick="showArray()" style="opacity: 0;">Show Responses</button>
	<div id="result" class="container result" style="display: none;">
	</div>
	<p id="result_arr"></p>
	<table class="mapt" id="quesMap">
		<tr>
			<td class="maptd" onclick="changeQuestion(this)" id="1">1</td>
			<td class="maptd" onclick="changeQuestion(this)" id="11">11</td>
			<td class="maptd" onclick="changeQuestion(this)" id="21">21</td>
		</tr>
		<tr>
			<td class="maptd" onclick="changeQuestion(this)" id="2">2</td>
			<td class="maptd" onclick="changeQuestion(this)" id="12">12</td>
			<td class="maptd" onclick="changeQuestion(this)" id="22">22</td>
		</tr>
		<tr>
			<td class="maptd" onclick="changeQuestion(this)" id="3">3</td>
			<td class="maptd" onclick="changeQuestion(this)" id="13">13</td>
			<td class="maptd" onclick="changeQuestion(this)" id="23">23</td>
		</tr>
		<tr>
			<td class="maptd" onclick="changeQuestion(this)" id="4">4</td>
			<td class="maptd" onclick="changeQuestion(this)" id="14">14</td>
			<td class="maptd" onclick="changeQuestion(this)" id="24">24</td>
		</tr>
		<tr>
			<td class="maptd" onclick="changeQuestion(this)" id="5">5</td>
			<td class="maptd" onclick="changeQuestion(this)" id="15">15</td>
			<td class="maptd" onclick="changeQuestion(this)" id="25">25</td>
		</tr>
		<tr>
			<td class="maptd" onclick="changeQuestion(this)" id="6">6</td>
			<td class="maptd" onclick="changeQuestion(this)" id="16">16</td>
			<td class="maptd" onclick="changeQuestion(this)" id="26">26</td>
		</tr>
		<tr>
			<td class="maptd" onclick="changeQuestion(this)" id="7">7</td>
			<td class="maptd" onclick="changeQuestion(this)" id="17">17</td>
			<td class="maptd" onclick="changeQuestion(this)" id="27">27</td>
		</tr>
		<tr>
			<td class="maptd" onclick="changeQuestion(this)" id="8">8</td>
			<td class="maptd" onclick="changeQuestion(this)" id="18">18</td>
			<td class="maptd" onclick="changeQuestion(this)" id="28">28</td>
		</tr>
		<tr>
			<td class="maptd" onclick="changeQuestion(this)" id="9">9</td>
			<td class="maptd" onclick="changeQuestion(this)" id="19">19</td>
			<td class="maptd" onclick="changeQuestion(this)" id="29">29</td>
		</tr>
		<tr>
			<td class="maptd" onclick="changeQuestion(this)" id="10">10</td>
			<td class="maptd" onclick="changeQuestion(this)" id="20">20</td>
			<td class="maptd" onclick="changeQuestion(this)" id="30">30</td>
		</tr>
	</table>
	<script type="text/javascript" src="js/question.js"></script>
	<script type="text/javascript" src="js/quiz-script.js"></script>
	<!-- <script type="text/javascript">
		function clear () {
			$('#clr').click(function() {
	   		$('input[name=option]').prop('checked', false);
	   		});
		}
	</script> -->


</body>
</html>
