<html>
 <!--
 * 5331 - 005 - Database Systems
 * Vignesh Manikandan - 1002012757
 * Ruban Eswaravelu - 1002018133
 -->
    <head>
    <title>Update a State</title>
    </head>
    <body>
    	<form method="post" action="update.controller.php">
        <fieldset>
        	<legend>Update State Abbreviation</legend>
        	<label stateAb ="lable" for="stateAb">Enter New State Abbreviation</label>
        	<input type="text" name="stateAb" placeholder="State Abbreviation"> </br>

        	<label stateName ="lable" for="stateName">Enter State Name </label>
        	<input type="text" name="stateName" placeholder="State Name"> </br>

        	<input id="button" type="submit" name="submit" value="Update">
        </fieldset>
    </body>
</html>