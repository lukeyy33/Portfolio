<!--Luke Waugh 2016-->
<!DOCTYPE html>
<html>
<head>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>

    <script src="scripts/jquery.fullPage.js"></script>
    <script src="scripts/scrolloverflow.js"></script>

    <link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css"/>




<!-- Scroll -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#fullpage').fullpage({
                sectionsColor: ['#1bbc9b', '#1bbc9b', '#1bbc9b', '#1bbc9b'],
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
            color: #fff;
            margin:0;
            padding:40px 0 0 0;
        }
        .intro p{
            color: #fff;
            padding:40px 0 0 0;
        }

        /* Centered texts in each section
        * --------------------------------------- */
        .section{
            text-align:center;
        }


        /* Bottom menu
        * --------------------------------------- */
        #infoMenu li a {
            color: #fff;
        }
    </style>



</head>
<body>



<div id="fullpage">



    <!-- Index -->
    <div class="section" id="section0">
            <h1>Index</h1>
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
        <h1>Contact</h1>
        <h1>How to contact me: </h1>

        <a href="https://github.com/lukeyy33">Github</a>
        <a href="https://uk.linkedin.com/in/luke-waugh-58b25494">LinkedIn</a>
        <p>Mobile Number: 07956785585</p>
        <a href="#">lukewaugh12@gmail.com</a>

    </div>

</div>
</body>
</html>