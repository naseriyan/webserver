<head >
<link rel="stylesheet " href="css/bootstrap.min.css">
<script src="js/bootstrap.bundle.min.js"></script>
</head>
<form action="" method="GET" >
<p>جستجوی غذا</p>
        <input type="text" name="txtSearch"  >
        <input type="submit" name="search" value="search"/>
       

<?php


if(!empty($_GET['search']) )
{
    $json_string = file_get_contents('https://www.themealdb.com/api/json/v1/1/search.php?s='.$_GET['txtSearch']);
    /*https://www.themealdb.com/api/json/v1/1/*/
    $jFood = json_decode($json_string);



echo"<table class='table'>";
echo"<tr>
    <th class='col-2'>id food</th>
    <th class='col-2'>name food</th>
    <th class='col-2'>image food</th>
    </tr>";
for($index=0;$index<count($jFood->meals);$index++)
{
    echo"<tr>
    <td>".$jFood->meals[$index]->idMeal."</td>
    <td> <a href='detail.php?idMeal=".$jFood->meals[$index]->idMeal."'>".$jFood->meals[$index]->strMeal."</a></td
    <td><img style='width:50px;height:50px;' src='".$jFood->meals[$index]->strMealThumb."'</img></td>
    </tr>";
}
// echo $food->meals[0]->idMeal;
// echo '<br>';
// echo $food->meals[0]->strMeal;

echo"</table>";
}

?>
</form>
