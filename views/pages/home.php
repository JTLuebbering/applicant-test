<html>
<head>
<meta http-equiv="Content-Type"	comtent="text/html; charset=UTF-8">

<p>You successfully landed on the home page. Congrats!</p> 
<link href="../applicant-test-master/views/pages/style.css"
		rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="content">
        <h2>Hello there <?php echo $first_name . ' ' . $last_name; ?>!</h2>
        <h3>Congrats! The Site Works!</h3>
        <p>Many changes have been made to the home page. A sidebar has been added, as long as content for
        	the home page. </p>
        <p>This is just filler text to take up some room on the page. I feel that a page should
        look like it has plenty of content for readers to come and look at for a while. As you can see, 
        there were many changes done to the page, and I believe it looks much easier on the eyes. </p>
    <div id="news">
        <h3>Latest Updates</h3>
        <h4>Latest - Changes Made to Site!</h4>
        <small>October 26, 2016</small>
        <p>My first objective was to install xampp and get the repository to work. I first attempted this 
        	on my laptop with Windows 10. There was a lot of issues with getting wamp running. I eventually
        	moved to my desktop and got everything set up.<p>
        	<h4>Latest - Updates to Site!</h4>
    <small>October 1, 2016</small>
    <p>This is just more filler text to take up space. This would normally be a status about what changes 
    	might have been made to the page. </p>
    </div><!--end news-->
</div><!--end content-->

<div id="sidebar">
                <div id="popular">
                    <h3>Popular Items</h3>
                    <ul>
                        <li><a href="#">Check out this empty link!</a></li>
                        <li><a href="#">Here is another link!</a></li>
                        <li><a href="#">A Third Link to look</a></li>
                        <li><a href="#">This is also a blank link</a></li>
                    </ul>
                </div>
                <div id="contributors">
                    <h3>Contributors</h3>
                    <ul>
                        <li><a href="#">Josh L, Web Designer</a></li>
                        <li><a href="#">Josh L, Writer</a></li>
                        <li><a href="#">Josh L, Editor</a></li>
                    </ul>
                </div>
            </div><!--end sidebar-->
</body>
</html>
