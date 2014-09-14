//Basic Javascript Functions
function Account(){
	this.bal = 0;
	this.loan = 0;
	this.max = 0;
}

Account.prototype.getAccount = function(){
	this.bal = Number(document.getElementById("bal").firstChild.nodeValue);
	this.loan = Number(document.getElementById("loan").firstChild.nodeValue);
	this.max = 10000;
}

Account.prototype.credit = function(){
	if(this.loan < this.max){
		this.bal +=1000;
		this.loan +=1000;
	}
	this.displayHtml();
}

Account.prototype.debit = function(){
	if(this.bal >= 1000){
		this.bal -= 1000;
		this.loan -=1000;
	}
	this.displayHtml();
}

Account.prototype.displayLog = function(){
	console.log(this.bal);
	console.log(this.loan);
	console.log(this.max);
}

Account.prototype.displayHtml = function(){
	document.getElementById('bal').firstChild.nodeValue = this.bal;
	document.getElementById('loan').firstChild.nodeValue = this.loan;
}

var accnt = new Account();
accnt.getAccount();


function callDebit(){
	accnt.debit();
}

function callCredit(){
	accnt.credit();
}

