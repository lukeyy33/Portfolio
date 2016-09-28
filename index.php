<!--Luke Waugh 2016-->
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>

    <script src="scripts/jquery.fullPage.js"></script>
    <script src="scripts/scrolloverflow.js"></script>

    <link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css"/>

    <link rel="stylesheet" type="text/css" href="
          https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />




<!-- Scroll -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#fullpage').fullpage({
                sectionsColor: ['#f2f2f2', '#e6e6e6', '#d9d9d9', '#cccccc'],
                anchors: ['index', 'projects', 'skills', 'contact'],
                menu: '#menu',
                continuousVertical: true
            });
        });
    </script>

    <style>

        /* Style for our header texts
        * --------------------------------------- */
        h1{
            font-size: 5em;
            font-family: arial,helvetica;
            color: #000;
            margin:0;
            padding:40px 0 10px 0;
        }
        h3 {
            font-size: 1.5em;
            font-weight: normal;
            color: #000;
            margin: 0;
            padding: 40px 0 0 0;
        }

        /* Centered texts in each section
        * --------------------------------------- */
        .section{
            text-align:center;
        }





    </style>



</head>
<body>



<div id="fullpage">



    <!-- Index -->
    <div class="section" id="section0">
            <h1>Luke Waugh</h1>
            <h3>I am a recent graduate in Software Engineering...</h3>
    </div>


    <!-- Projects Page -->
    <div class="section" id="section1">
                <h1>Projects</h1>
    </div>



    <! -- Skills Page -->
    <div class="section" id="section2">
            <h1>Skills</h1>
    </div>

    <!-- Contact Page -->
<div class="section" id="section3">

        <h1>Get in contact!</h1>
    <div class="container">
        <form class="form-horizontal" action ="contact.php" method="post">
            <div class="form-group">
                <label class="control-label col-sm-2" id="email" for="email">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" placeholder="Enter email">
                    </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" id="comment" for="comment">Comments:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="comment" placeholder="Enter comments">
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="submit" type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form>
    </div>

        <a href="https://github.com/lukeyy33">Github</a>
        <a href="https://uk.linkedin.com/in/luke-waugh-58b25494">LinkedIn</a>
        <p>Mobile Number: 07956785585</p>
        <p>Email: lukewaugh12@gmail.com</p>

</div>

</div>
</body>
</html>