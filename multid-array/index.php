<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional Array</title>
</head>
<body>

    <?php 
    
        $arr = array(
            array("Book Name:"=>'Php', "Quarter 1:"=>25, "Quarter 2:"=>45, "Quarter 3:"=>0, "Quarter 4:"=>0),
            array("Book Name:"=>'Java', "Quarter 1:"=>0, "Quarter 2:"=>0, "Quarter 3:"=>65, "Quarter 4"=>69),
            array("Book Name:"=>'Perl', "Quarter 1:"=>54, "Quarter 2:"=>48, "Quarter 3:"=>0, "Quarter 4"=>0),
            array("Book Name:"=>'Android', "Quarter 1:"=>0, "Quarter 2:"=>76, "Quarter 3:"=>0, "Quarter 4"=>46),
            array("Book Name"=>'Python', "Quarter 1;"=>0, "Quarter 2:"=>0, "Quarter 3:"=>23, "Quarter 4:"=>34),
        );


    echo 'Sales of PHP Books in Quarter 1: ' . $arr[0]['Quarter 1:'] . ' and Quarter 2: ' .$arr[0]['Quarter 2:'] . '<br>';
    echo 'Sales of Java Books in Quarter 3: ' . $arr[1]['Quarter 3:'] . ' and Quarter 4: ' . $arr[1]['Quarter 4:'] . '<br>';
    echo 'Sales of Perl Books in Quarter 4: ' . $arr[2]['Quarter 1:'] . 'and Quarter 2: ' . $arr[2]['Quarter 2:'] . '<br>';
    echo 'Sales of Android Books in Quarter 2: ' . $arr[3]['Quarter 1:'] . 'and Quarter 2 ' . $arr[3]['Quarter 2:'] . '<br>';
    echo 'Sales of Python Books in Quarter 3: ' . $arr[4]['Quarter 3:'] . 'and Qarter 4 ' . $arr[4]['Quarter 4:'] . '<br>';





    ?>

</body>
</html>