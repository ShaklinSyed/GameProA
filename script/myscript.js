//Basic Javascript Functions

var bal = document.getElementById('bal');
console.log(bal);
var loan = document.getElementById('loan');
console.log(loan);
var max = 30000;
var limit = 0;

function add_money(){
	if(max >limit){
		bal = bal+1000;
		loan +=1000;
		limit +=1000;
		console.log(bal, loan , max, limit);
		document.getElementById('bal').innerHTML = bal;
		document.getElementById('loan').innerHTML = loan;
	}
	else{
		document.write('Maximum Limit Reached');
	}
	return bal;
}

function sub_money(){
	if(bal > 1000){
		loan -=1000;
		limit -=1000;
		bal -= 1000;
		console.log(bal, loan , max, limit);
		document.getElementById('bal').innerHTML = bal;
		document.getElementById('loan').innerHTML = loan;
	}
	else{
		document.write('Balance is Less than 1000');
	}
}