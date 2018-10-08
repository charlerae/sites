<!DOCTYPEhtml>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello world</h1>

    <?php
        $test = "This is a string test!";
        echo $test;

        $test ="this is a string";
        echo $test;
        $numone = 500;
        $numtwo = 10;
        $total = $numone * $numtwo;
        echo $total;
        $floaty = 9.1456;
        echo $total * $floaty;
        
        if ($total> 200) {
        echo "true";
        } else {
        echo "false";
        }
        
        $zines = array('teatime', 'labluegirls', 'justjoking');
        var_dump ($zines);
        
        
        $bool = true;
        echo $bool;
        
        if ($bool === true) {
        echo "true";
        } else {
        echo "false";
        }
        
        /*class Computer {
        function Computer() {
            $this->type = 'desktop';
            $this->brand = 'mac';
            $this->location = 'home';
        }
        }
        
        $charles = Computer();
        echo $charles->type; 
        
        $zip = ; */
    ?>
</body>
</html>  