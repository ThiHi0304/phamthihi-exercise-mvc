<p>Here are all the fruits: </p>
<?php 
foreach ($fruits as $fruit){
        echo '<li>'.$fruit['name']." costs ".$fruit['price'].'</li>';
} ?>
