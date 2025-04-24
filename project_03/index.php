<html>
<head>
	<style>
		td{
			background-color: rgb(204, 203, 203);
			border-radius: 10px;
			padding: 5px;
			box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);	
		}
		a{
			text-decoration: none;
			color: rgb(5, 10, 92);
			padding:40px;
			font-family: calibri;
			font-size: 20px;
			font-weight: 600px;
		}
		h1,h2{
			text-align: center;
			font-family: Algerian;
			font-size:30px;
			padding:5px;
			color:rgb(9, 9, 82);
		}
	
	</style>
	<script type="text/javascript">
		 var d= new Date();
         var time= d.getHours();
		 var day=d.getDay();
             if(time<=10){
                    document.write("<font size='5' face='Algerian'><center>GOOD MORNING");
                }
                else if(time>=10 && time<16){
                    document.write("<font size='5' face='Algerian'><center>GOOD AFTERNOON");
                }
                else if(time>=16 && time<20){
                    document.write("<font size='5' face='Algerian'><center>GOOD EVENING");
                }
                else{
                    document.write("<font size='5' face='Algerian'><center>GOOD NIGHT");
                }

			switch (day)
            {
                case 1:
                    document.write(" TODAY IS MONDAY");
                    break;
                case 2:
                    document.write(" TODAY IS TUESDAY");
                    break;
                    
                case 3:
                    document.write(" TODAY IS WEDNESDAY");
                    break;
                    
                case 4:
                    document.write(" TODAY IS THURSDAY");
                    break;
                    
                case 5:
                    document.write(" TODAY IS FRIDAY");
                    break;
				case 6:
					document.write(" TODAY IS SATURDAY")
                    
                case 0:
                    document.write(" TODAY IS SUNDAY");
                    break;
            }
	</script>
</head>
	<body bgcolor="#45A8E5">
		<h1>PSK TECHNOLOGIES PVT.LTD IT COMPANY</h1><br><br><br>
	</body>
	<h2>ATTENDANCE PORTAL</h2>
	<a href="admin_login.php"><input type="submit" name="admin" value="Admin"></a>
	<table cellspacing="100px" align="center">
		<tr>
			<td align="center">
				<a href="student_login.php">STUDENT</a>
			</td>
			<td align="center">
				<a href="trainer_login.php">TRAINER</a>
			</td>
			<td align="center">
				<a href="employee_login.php">EMPLOYEE</a>
			</td>
		</tr>
			<tr>
			<td align="center" >
				<a href="student_reg.php">SIGN UP</a>
			</td>
			<td align="center">
				<a href="trainer_reg.php">SIGN UP</a>
			</td>
			<td align="center">
				<a href="employee_reg.php">SIGN UP</a>
			</td>
		</tr>
	</table>
	</body>
</html>