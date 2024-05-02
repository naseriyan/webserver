<head>
<link rel="stylesheet " href="css/bootstrap.min.css">
<script src="js/bootstrap.bundle.min.js"></script>
</head>

<h1>detail food</h1>
<?php
if(!empty($_GET)){

    if(!empty($_GET['idMeal']) )
    {
        $json_string = file_get_contents('https://www.themealdb.com/api/json/v1/1/lookup.php?i='.$_GET['idMeal']);
        
        $jFood = json_decode($json_string);

        echo '<h1>'.$jFood->meals[0]->strMeal.'</h1>';
        echo "<img style='width:200px;height:200px;' src='".$jFood->meals[0]->strMealThumb."'</img>";
        echo '<p>'.$jFood->meals[0]->strInstructions.'</p>';

    echo"<table class='table'>";
    echo"<tr>
        <th>name Materials</th>
        <th>amount of material</th>
        </tr>";
        echo"<tr>
        <td>".$jFood->meals[0]->strIngredient1."</td>
        <td>".$jFood->meals[0]->strMeasure1."</td>
        </tr>
        <tr>
        <td>".$jFood->meals[0]->strIngredient2."</td>
        <td>".$jFood->meals[0]->strMeasure2."</td>
        </tr>
        <tr>
        <td>".$jFood->meals[0]->strIngredient3."</td>
        <td>".$jFood->meals[0]->strMeasure3."</td>
        </tr>
        <tr>
        <td>".$jFood->meals[0]->strIngredient4."</td>
        <td>".$jFood->meals[0]->strMeasure4."</td>
    </tr>
        <tr>
        <td>".$jFood->meals[0]->strIngredient5."</td>
        <td>".$jFood->meals[0]->strMeasure5."</td>
    </tr>
        <tr>
        <td>".$jFood->meals[0]->strIngredient6."</td>
        <td>".$jFood->meals[0]->strMeasure6."</td>
        </tr>";
    // // echo $food->meals[0]->idMeal;
    // // echo '<br>';
    // // echo $food->meals[0]->strMeal;

    // echo"</table>";
    }
}
?>