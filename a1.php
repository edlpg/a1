
<?php

$random = rand(1,3);

if($random == 1) {
$quote  ='“Don t cry because it s over, smile because it happened.”';
$author ='Dr. Seuss';
}
elseif ($random == 2) {
$quote  ='“Be who you are and say what you feel, because those who mind don t matter, and those who matter don t mind.” ';
$author ='Bernard M. Baruch';
}
else {
$quote  ='“You only live once, but if you do it right, once is enough.”';
$author ='Mae West';
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Assignement1</title>
</head>
<body>
<h1 style="color:blue;">Eduardo de la Pena</h1>
<img src='me.jpg' alt='Me'>
<h2 style="color:blue;">About Me</h2>
<p>I have a Bacherlor's in animation and Digital Art and I'm</p>
<p>taking this course because since I already know html, css</p>
<p>js I want to know the comlete web knowledge, so only server</p>
<p>side was missing.</p>
<p>That's what I expect to learn on this course.</p>
<br><br>
<h2 style="color:blue;">Random Quote</h2>

<h3>  <?php echo $quote ?>  </h3>
<h3>  - <?php echo $author ?> </h3>
</body>
</html>
