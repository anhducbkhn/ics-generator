<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $calendar=new Invite();
        $calendar
            ->setDate(new DateTime('23/11/2013', 'Asia/Singapore'), new DateTime('24/11/2013', 'Asia/Singapore'))
            ->setFrom('anhduc.bkhn@gmail.com')
            ->setSummary('test event')
            ->download();
                    
        ?>
        test
    </body>
</html>
