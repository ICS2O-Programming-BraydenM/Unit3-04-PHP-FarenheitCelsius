<!DOCTYPE html>
<html>
  <head>
<!-- metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Volume of Right Triangular Prism, with JavaScript">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Brayden MacMillan">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
    <link rel="manifest" href="./fav_index/site.webmanifest">
<!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <title>Fahrenheit to Celsius</title>
  </head>
  <body>
    <center>
<!-- adding a JavaScript button -->
    <script src="./js/script.js"></script>
    <h1>Converting Fahrenheit to Celsius</h1>
		<table>
			<tr>
				<td>
					<h3>Enter the temperature in degrees Fahrenheit:</h3>
					<form action="javascript:calcDegrees()">
						<label for="fahrenheit">Degrees in Fahrenheit:</label>
						<input type="number" step="any" id="degrees" placeholder="Enter degrees in Fahrenheit"><br><br>
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
		<div id="display-results">
    </div>
    </center>
  </body>
</html>