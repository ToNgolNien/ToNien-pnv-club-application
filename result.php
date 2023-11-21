<?php echo "<div style = 'width :500px; border: 1px solid red ; '>" ?>

<?php 
    echo "<img src='huy chương.jpg' style = 'width:200px'/> ";
    if(isset($_POST['name'])){
        echo "<h1> Thx you "  . $_POST['name'] . '!!!' .  "</h1>";
    }
    echo "<br>";
    echo "<br>";
    if (isset($_POST['club'])){
        echo "We received your application for the " . $_POST['club'];
    }
    echo "<br>";
    echo "<br>";
    
    $checkbox_value = array();

    if(isset($_POST['array'])){
        $checkbox_arr = $_POST['array'];
        foreach($checkbox_arr as $value){
            array_push($checkbox_value,$value);
        }
    }
    $string_value = implode(" and " , $checkbox_value);
    echo "You are " . $string_value;
    echo "<br>";
    echo "<br>";
    if (isset($_POST['time'])){
        echo "You will you available on " . $_POST['time'];
    }
    if (isset($_POST['club'])){
        echo "We received your application for the " . $_POST['club'];
    }
?>
<?php echo "</div>" ?>