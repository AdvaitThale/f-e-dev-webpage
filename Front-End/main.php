<?php
    print(" ");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Advait Thale" name="author">
    <meta content="20" http-equiv="refresh">
    <title>GriffinDore</title>
    <link href="http://localhost/webverse_dev/peter_icon.png" rel="icon" type="image/x-icon"/>

    <style>
        * {
        box-sizing: border-box;
        }

        body {
            margin: 0;
        }
        .topnav {
            overflow: hidden;
            background-color: #b3b3b3;
        }

        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 2px 10px;
            text-decoration: none;
            font-family: cursive;
        }

        .topnav a:hover {
            background-color: #4267B2;
            color: white;
            font-family: cursive;
        }

        h1 {
            display: block;
            font-family: cursive;
            font-size: 3em;
            color: black;
            text-align: center;
            margin-top: 0.67em;
            margin-bottom: 0.67em;
            margin-left: 0;
            margin-right: 0;
            font-weight: bold;
}
        div
        {
            text-align: center;
        }

        #para
        {
            width: 50%;
            padding: 10px;
            border: 1px solid black;
            background-color: #00004d; /*azure*/
            font-family: cursive;
        }
        
        input[type=text] 
        {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }
        
        input[type=text]:focus 
        {
            background-color: orange;
            outline: none;
        }
        
        .button {
            border-radius: 25px;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            font-family: sans-serif;
            text-decoration: none;
            border-radius: 25px;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            opacity: 0.8;
            transition: 0.3s;

        }
        .button:hover {opacity: 1; font-family: sans-serif}
        .button1 {background-color: #46a049;} /* #4CAF50 */
        .button2 {background-color: #cc6600;} /* #e67300 */
        .button3 {background-color: #990000;} /* #cc0000 */
        .button4 {background-color: #304c82;} /* #4267B2 */

        footer {
            text-align: left;
            text-decoration: none;
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 5%;
            padding: 3px;
            background-color: blanchedalmond; /*#b3b3b3*/
            color: black;
        }
        
        .sbtn {
            border-radius: 40px;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            font-family: sans-serif;
            text-decoration: none;
            border-radius: 25px;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            opacity: 0.8;
            transition: 0.3s;

        }
        .sbtn:hover {opacity: 1; font-family: sans-serif}
        .sbtn1 {background-color: #46a049;} /* #4CAF50 */
        .sbtn2 {background-color: #cc6600;} /* #e67300 */
        .sbtn3 {background-color: #990000;} /* #cc0000 */
        .sbtn4 {background-color: #304c82;} /* #4267B2 */
    </style>
</head>

<body bgcolor="#ffffff">

<div class="topnav">
    <a href="#">Dashboard</a>
    <a href="#">Files</a>
    <a href="#">Moniter</a>
    <a href="#">Control Panel</a>
</div>
<br/>
<center>
    <div class="tenor-gif-embed" data-aspect-ratio="1.78771" data-postid="21485227" data-share-method="host"
         data-width="10%">

        <a href="https://tenor.com/view/bh187-family-guy-peter-griffin-laugh-laughing-gif-21485227"> </a></div>
    <script async src="https://tenor.com/embed.js" type="text/javascript"></script>
</center>

<h1>GriffinDore</h1>
<hr style="height:1px;border-width:0;color:gray;background-color:gray">
<br/> <br/>
<div>
    <form action="/server_store.php"> 
        <input id="search" name="search" size="50px" type="text" placeholder="Search Character..." required />
        <input onclick="" type="Button" value="Search"> <br/> <br/>
        <br><br>

        <button class="button button1" name="insert">Insert</button>
        <button class="button button2" name="edit">Edit</button>
        <button class="button button3" name="delete">Delete</button>
        <button class="button button4" name="display">Display</button>

<input type="image" src="https://www.freepngimg.com/thumb/submit_button/25497-9-submit-button-photos.png" name="submit" width="100" height="48" alt="submit"/>
        <?php
        /*$sql =
        $insert = insert into charbase values();
        $delete = drop column;
        $display = select * from charbase where ;
        $edit =;
        $search =
        $search = select * from series where ;*/
    ?>
    </form>
</div>
<?php //print($para) ?>


<footer>
    <p>©GriffinDore, Inc. 2022 |<a href="http://localhost/webverse_dev/aboutus.php" style="text-decoration: none"> About us </a> | <a href="#"
                                                                                              style="text-decoration: none">
        Terms & Conditions </a>|<a href="#" style="text-decoration: none"> Help & Contact</a>
    </p>
    <p>Follow Us</p>
        <button type="image" class="sbtn sbtn1" name="GitHub">Github</button>
        <button class="sbtn sbtn2" name="LinkedIn">Edit</button>
        <button class="sbtn sbtn3" name="Twitter">Delete</button>
        <button class="sbtn sbtn4" name="YouTube">Display</button>
        <button class="sbtn sbtn5" name="Facebook">Insert</button>
        <button class="sbtn sbtn6" name="Instagram">Edit</button>
    <a href="http://localhost/webverse_dev/Logos/LinkedIn_icon_circle.svg.png">LinkedIn </a>
    
    <h1>Your Ip Address : <span class="ip"></span></h1>
 
<script type="text/javascript">
    $(document).ready(function() {
      $.getJSON("<a class="vglnk" href="https://api.ipify.org/?format=json" rel="nofollow"><span>https</span><span>://</span><span>api</span><span>.</span><span>ipify</span><span>.</span><span>org</span><span>/?</span><span>format</span><span>=</span><span>json</span></a>", function(e) {
        $('.ip').text(e.ip);
      });
    });
</script>
        
</footer>
</body>
</html>
