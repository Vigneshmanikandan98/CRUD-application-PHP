<html>
 <!--
 * 5331 - 005 - Database Systems
 * Vignesh Manikandan - 1002012757
 * Ruban Eswaravelu - 1002018133
 -->
    <head>
    <title>Delete a State</title>
    </head>
    <body>
    	<form method="post" action="delete.controller.php">
        <fieldset>
        	<legend>Delete a State</legend>

        	<label stateName ="lable" for="stateName"> Enter State Name </label>
        	<input type="text" name="stateName" placeholder="State Name"> </br>

        	<input id="button" type="submit" name="submit" value="Delete">
        </fieldset>
    </body>
</html>