<html>
    <body>
        <?php
        $to = "lprasanna537.com";
        $subject = "My subject";
        $txt = "Hello world!";
        $headers = "From: webmaster@example.com" . "\r\n" .
                "CC: somebodyelse@example.com";

        mail($to, $subject, $txt, $headers);
        ?>
        
    </body>
</html>