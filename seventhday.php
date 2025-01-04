<html>
    <head>
        <title>accociative array</title>
    </head>
    <body>
    <form method="POST">
        <input type="text" name="value" placeholder="Enter string">
        <input type="submit">
    </form>
    <?php
        $str=$_POST['value'];
       $arr=array("name"=>"vaishu","id"=>20,"marks"=>70.80);
       foreach($arr as $val)
       {
           echo "<br>".$val;
       }
        ?>
    </body>
</html>