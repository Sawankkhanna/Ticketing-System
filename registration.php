<html>
    <head>
        <title>Registration</title>
        <link rel="stylesheet" href="./main.css" />
    </head>
    <body>
        <div class="credential">
            <h3>USERNAME:</h3>
            <p><?php echo $_POST['username']?></p>
        </div>
        <br>
        <form action="confirmation.php" method="post">
          <div class="credential">
            <h3>Source:</h3>
            <input
              type="text"
              id="source"
              name="source"
              maxlength="10"
              placeholder="Enter your source"
              required
            />
          </div>

          <br />

          <div class="credential">
            <h3>Destination:</h3>
            <input
              type="text"
              id="destination"
              name="destination"
              maxlength="10"
              placeholder="Enter your destination"
              required
            />
          </div>
          <br />

<div class="credential">
  <h3>Type of trip:</h3>
  <input
    type="radio"
    id="oneway"
    name="type"
    value="oneway"
  />
  <input
    type="radio"
    id="roundway"
    name="type"
    value="roundway"
  />
</div>

          <div id="button-div">
            <button type="submit">Register</button>
            <button type="reset">Clear</button>
          </div>
        </form>
    </body>
</html>