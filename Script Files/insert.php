<html>
 <!--
 * 5331 - 005 - Database Systems
 * Vignesh Manikandan - 1002012757
 * Ruban Eswaravelu - 1002018133
 -->
    <head>
    <title>Insert a State</title>
    </head>
    <body>
    	<form method="post" action="Insert.controller.php">
        <fieldset>
        	<legend>Insert a New State</legend>
        	<label stateAb ="lable" for="stateAb">Enter State Abbreviation </label>
        	<input type="text" name="stateAb" placeholder="State Abbreviation"> </br>

        	<label stateName ="lable" for="stateName">Enter State Name </label>
        	<input type="text" name="stateName" placeholder="State Name"> </br>

        	<input id="button" type="submit" name="submit" value="Insert">
        </fieldset>
    </body>
</html>