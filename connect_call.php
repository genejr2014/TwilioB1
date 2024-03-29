<?php
 
    // make an associative array of callers we know, indexed by phone number
    $people = array(
        "+8029528844"=>"Gene",
        "+8022286276"=>"Vermont Home",
    );
     
    // if the caller is known, then greet them by name
    // otherwise, consider them just another monkey
    if(!$name = $people[$_REQUEST['From']])
        $name = "Gene";
         
    // now greet the caller
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Say>Hello <?php echo $name ?>.</Say>
    <Play>http://demo.twilio.com/hellomonkey/monkey.mp3</Play>
    <Gather numDigits="1" action="hello-monkey-handle-key.php" method="POST">
        <Say>To speak to a real person, press 1.  Press any other key to start over.</Say>
    </Gather>
</Response>
