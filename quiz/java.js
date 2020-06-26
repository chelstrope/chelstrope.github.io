// JavaScript Document
	var score=0;
	var questions=[
	['what is my favorite color?', "green"],
	['what is my favorite animal?', "panda"],
	['how old am i?', 22],
	['what is my middle name?', "christine"],
	['what is my dogs name?', "lila"]	
	];
	
	for(var i=0; i<questions.length; i++) {
		askQuestion(questions[i]);
		} 
	
	function askQuestion(question) {
	var answer=prompt(question[0],'');
	if (answer == question[1]) {
	alert('Correct! :)');
	score++;
	} else {
	alert(':( The correct answer is ' + question[1]);
	}
	}