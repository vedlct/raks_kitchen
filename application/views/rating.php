<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>stars.css Demos</title>
    <script type="text/javascript" src="<?php echo base_url()?>js/jquery/jquery.js" language="javascript"></script>
    <script type="text/javascript" src="<?php echo base_url()?>js/rating.js" language="javascript"></script>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">


    <style>
        .relativeWrap
        {
            z-index: 0;
        }
        .rating {
            cursor: pointer;

            clear: both;
            display: block;
        }
        .rating:after {
            content: '.';
            display: block;
            height: 0;
            width: 0;
            clear: both;
            visibility: hidden;
        }
        .cancel,
        .star {
            float: left;
            width: 17px;
            height: 15px;
            overflow: hidden;
            text-indent: -999em;
            cursor: pointer;
        }

        .star,
        .star a {background: url(<?php echo base_url()?>img/star.gif) no-repeat 0 0px;}

        .cancel a,
        .star a {
            display: block;
            width: 100%;
            height: 100%;
            background-position: 0 0px;
        }

        div.rating div.on a {
            background-position: 0 -16px;
        }
        div.rating div.hover a,
        div.rating div a:hover {
            background-position: 0 -32px;
        }


    </style>
    <link href="http://www.cssscript.com/wp-includes/css/sticky.css" rel="stylesheet" type="text/css">
</head>

<script type="text/javascript">
    $(document).ready(function() {
        $('#rate1').rating6('', {maxvalue:5, curvalue:0});

//
    });

    function rating_system()
    {

        var star1 = document.getElementById("get_text1").value;
        var total_count=(Number(star1));
        document.getElementById("total_star").value=total_count;
    }

</script>
<body>


<div class="col-md-4">
    <!-- <h4 class="media-heading text-primary">Feedback</h4> -->
    <!-- <p><div id="rate1" class="rating">&nbsp;<strong>Skills</strong></div></p> -->

    <div id="rate1" class=" rating col-md-12">
        <p class="col-md-6">&nbsp;<strong>Skills</strong></p>
    </div>



    <input type="text" id="get_text1" name="get_text1">

    <input type="text" id="total_star" name="total_count">
    <button data-panel-id="total_rating" onclick="rating_system()">Click to see result</button>
    <a href="<?php echo base_url()?>Admin_menu_attribute">Menu Attribute</a>
</div>

    </body>
</html>
