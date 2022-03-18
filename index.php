<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Title -->
    <title>Document</title>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/uikit.min.css">
</head>
<body>
   <div class="uk-section uk-container">
      <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1">
         <!-- Login form -->
         <form class="uk-form-stacked js-login">
            <div class="uk-margin">
               <label class="uk-form-label" for="form-stacked-text">Email</label>
               <div class="uk-form-controls">
                  <input class="uk-input" id="form-stacked-text" type="email" placeholder="Enter email address..." required>
               </div>
            </div>
   
            <div class="uk-margin">
               <label class="uk-form-label" for="form-stacked-text">Password</label>
               <div class="uk-form-controls">
                  <input class="uk-input" id="form-stacked-text" type="password" placeholder="Enter password..." required>
               </div>
            </div>
      
            <div class="uk-margin">
               <button class="uk-button uk-button-default" type="submit">Login</button>
            </div>
         </form>
      </div>
   </div>
   
   <!-- jQuery -->
   <script src="js/jquery-3.6.0.min.js"></script>
   
   <!-- UI Kit JavaScript -->
   <script src="js/uikit.min.js"></script>
   <script src="js/uikit-icons.min.js"></script>
</body>
</html>