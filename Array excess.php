<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Excess</title>
</head>
<body>
    <?php
    
    $person_info= array(

     'name' => 'fahim faisal sifat',
     'department' => 'CSE',
     'mobile number' => '01847282785',
     'email address' => 'mdsifat4620@gmail.com'

    );
    
    echo '<h1>Print r function</h1>';
     print_r($person_info);
   
    echo '<h1>Index excess</h1>'.$person_info['department'];

    echo '<h1>For each loop using</h1>';
    foreach($person_info as $n){
        echo $n . '<br>';
    }
    ?>
</body>
</html>