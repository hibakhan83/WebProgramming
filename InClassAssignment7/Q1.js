


document.write("1. Here is a Fibonacci Sequence for the first 15 numbers:  ");
		var a;
		var b;
		var c;
		var n=15;
		 
		function fibseq(){
			for (i=1;i<=n;i++){

  			if (i==1) {
  				a=1;b=0;
  			}
  			else {
  				c=a+b;b=a;a=c;
  			}
  		}
 	}

 		document.write(+i+ "&nbsp;" +a+);