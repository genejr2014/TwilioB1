<?php
 
    // if the caller pressed anything but 1 send them back
    if($_REQUEST['Digits'] != '1') {
        header("Location: hello-monkey.php");
        die;
    }
     
    // the user pressed 1, connect the call to <span id="gc-number-1" class="gc-cs-link" title="Call with Google Voice">310-555-1212</span> 
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Dial>+13105551212</Dial>
    <Say>The call failed or the remote party hung up. Goodbye.</Say>
</Response>
