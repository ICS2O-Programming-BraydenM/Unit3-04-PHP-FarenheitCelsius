<!DOCTYPE html>
<html>
  <head>
<!-- metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Volume of Right Triangular Prism, with JavaScript">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Brayden MacMillan">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <title>Fahrenheit to Celsius</title>
  </head>
  <body>
    <center>
<!-- adding a JavaScript button -->
      <?php
      echo "<h1>Converting Fahrenheit to Celsius</h1>";
      ?>
		<table>
			<tr>
				<td>
          <?php
					echo "<h3>Enter the temperature in degrees Fahrenheit:</h3>";
          ?>
					<form action="./results.php" method="post" target="display-results">
						<label for="fahrenheit">Degrees in Fahrenheit:</label>
						<input type="number" step="any" name="degrees" placeholder="Enter degrees in Fahrenheit"><br><br>
						<input type="submit" value="Calculate Degrees in Celsius">
					</form>
				</td>
				<td width=45%>
<!-- adding an image -->
					<img src="./images/degrees.png" alt="Fahrenheit" width="85%" height="auto"/>
				</td>
			</tr>
		</table>
		<!-- Create a space where the user information will be displayed -->
		<iframe name="display-results"></iframe>
    </center>
  </body>
</html>