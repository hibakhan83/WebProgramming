          
           function Pay(hrs)
           {
            
               if(hrs <= 40)
               {
                   return (hrs * 15);
               }
           
               else
               {
                   return ( (40*15) + ( (hrs-40) * 1.5 * 15 ) );
               }
           }
          
           function payroll()
           {
              
               var arr = [];
               var i = 1;
               var total = 0;
               var txt = "Go Back";
              
           
               while(true)
               {
                
                   var val = prompt("How many hours did Person " + (i) + " work?                                                   (please type -1 if all people have been added) ", 0);
                  
                   val = parseInt(val);
                  
                   if(val == -1)
                       break;
                  
                   arr.push(val);
                  
                   i++;


               }
          document.write("<br> <br>");
         document.write("<p> " + txt.link("PartA.html") + "</p>");   
          document.write("<br> <br>");
           document.write("<table border=1 padding=20px align=\"center\">");
             document.write("<tr>");
              document.write("<td><b> Employee # </b></td>");
            document.write("<td><b> Number of Hours </b></td>");
              document.write("<td><b> Pay for the Week </b></td>");
             document.write("</tr>");
              
             
               for(i=0; i<arr.length; i++)
               {
                  total += Pay(arr[i]);
                   document.write("<tr>");
                   document.write("<td>" + (i+1) + "</td>");
                   document.write("<td>" + arr[i] + "</td>");
                   document.write("<td>" + Pay(arr[i]).toFixed(2) + "</td>");
                   document.write("</tr>");
               }
              
               document.write("</table>");

              document.write("<br> <br>");

               document.write("Total Pay of all Employees: $" + total);
           }
          
       