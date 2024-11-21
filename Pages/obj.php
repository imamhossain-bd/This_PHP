
<div class= "p-10">
    <?php
        require('inherit.php');
        use inherits\Fruits;
        use inherits\Strawberry;
        require('abstruct.php');
        use abstruct\cars;
        use abstruct\Audi;
        use abstruct\Price;


        //.......Inherit_______________
        $obj = new Strawberry("Strawberry", "Red");
        $obj->message();
        $obj->intro();
        //.........ABstruct_________________
        $audi = new Audi("Audi A4", 50000);
        echo $audi->intros();

        $price = new Price("Car", 30000);
        echo $price->intros(); 
    ?>
</div>