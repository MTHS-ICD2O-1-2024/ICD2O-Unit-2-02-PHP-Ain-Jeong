<!DOCTYPE php>
<!-- ICS2O-Unit2-02-HTML-MDL -->
<html lang="en-ca">
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="The Area and Perimeter program,in PHP" />
    <meta name="keywords" content="mths, icd2o" />
    <meta name="author" content="Ain Jeong" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-blue.min.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="./images/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon-16x16.png" />
    <link rel="manifest" href="site.webmanifest" />
    <title>The Area and Perimeter program,in PHP</title>
  </head>
  <body>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">The Area and Perimeter program,in PHP</span>
        </div>
      </header>
      <div>
        <header>The dimensions of a rectangle are: 5cm and 3cm.</header>
      </div>
      <main class="mdl-layout__content">
        <div class="right-image">
          <img src="./images/area_and_perimeter.png" alt="area and perimeter image" />
        </div>
        <div class="page-content">The area and perimeter is ...</div>
        <br />
        <!-- Simple Textfield for integers-->
        <form action="answer.php" method="GET">
          <br />
          <!-- Accent-colored raised button with ripple -->
          <button
            class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
            type="submit">
            Calculate
          </button>
        </form>
      </main>
    </div>
  </body>
</html>
