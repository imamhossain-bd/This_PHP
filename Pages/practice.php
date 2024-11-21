<section>
    <div class = "mt-17 p-10 flex gap-10">
       <div>
       <?php
        // Constant Variable Define, This variable is not changeable...............
            define("NAME", "Imam");
            echo (NAME);
            echo ("<br>");
            define("AMOUNT", 240);
            print_r("This Amount IS:  " ."$" .AMOUNT);
            echo ("<br>");
        ?>
        <!-- Object Oriented Programming -->
        <?php
            class car{
                public $car_name;
                public $model;
                public $price;
                public $color;


                function set_Property($car_name, $model, $price, $color){
                    $this->car_name = $car_name;
                    $this->model = $model;
                    $this->price = $price;
                    $this->color = $color;
                }
                function getDetails(){
                    return "Car: <br> Name: $this->car_name, <br> Model: $this->model, <br> Price: $this->price, <br> Color: $this->color <br>";
                }

            }

            $myCar = new car();
            echo $myCar->set_Property("BMW", "M340i", "$10000", "Black");
            echo $myCar->getDetails();
        ?>
        <?php
            class phone{
                public $name;
                public $model;
                public $color;
                public $price;
            
            function set_phone($name, $model, $price, $color = "Unknown"){
                $this->name = $name;
                $this->model = $model;
                $this->color = $color;
                $this->price = $price;
            }
            function getPhoneDetails(){
                return "Phone: <br> Name: $this->name, <br> Model: $this->model, <br> Color: $this->color, <br> Price: $this->price, <br>";
            }
        }

        $myPhone = new phone();
        echo $myPhone->set_phone("Iphone", "Iphone 13pro", "$120000", "Gold");
        echo $myPhone->getPhoneDetails()
        ?>

        <?php
            function factorial($num){
                
                if($num <= 1){
                    return 1;
                }
                return $num * factorial($num - 1);
            }
            echo "Factorial Number Is: " . factorial(5);
        ?>


        <!-- <form action="" method="post">
        <label for="">number:</label> <br>
        <input type="text" name="number" id=""> <br>
        <input type="submit" value="submit" name="btn">
        </form> -->
        <?php
        // if(isset($_POST["btn"])){
        // $fact=1;
        // $number=$_POST["number"];
        // echo "factorial Number $number:<br>";
        // for ($i=1; $i <=$number; $i++) { 
        // $fact=$fact*$i;
        // }
        // echo $fact."<br>";
        // }
        ?>
       </div>
       <div class="">
            <?php
                class computer{
                    public $monitor;
                    public $mouse;
                    public $graphics;
                    public $motherBoard;

                    function __construct ($monitors, $mouse,  $graphics, $motherBoard){
                        $this->monitor = $monitors;
                        $this->mouse = $mouse;
                        $this->graphics = $graphics;
                        $this->motherBoard = $motherBoard;
                    }

                    function getDisplay(){
                        return "Computer: <br> $this->monitor, <br> $this->mouse, <br> $this->graphics, <br> $this->motherBoard, <br>";
                    }
                }

                $cmp = new Computer("HP", "A4Tech", "RTX3090", "Asus TUF X299");
                echo  $cmp->getDisplay();
            ?>
            <?php
                class ParentClass {
                    public static function greet() {
                        echo "Hello from the parent!";
                    }
                }
                
                class ChildClass extends ParentClass {
                    public static function greet() {
                        parent::greet();
                        echo "Hello from the child! <br>";
                    }
                }
                
                ChildClass::greet();
            ?>
            <?php

                // class Animal {
                //      public function speak() {
                //         echo "Animal speaks!";
                //     }
                // }
                
                // class Dog extends Animal {
                //     public function speak() {
                //         echo "Woof!";
                //     }
                // }
                
                // $speaks = new Speaks();
                // $dog = new Dog();
                
                // // Checking if $dog is an instance of Dog
                // if ($dog instanceof Dog) {
                //     echo "This is a Dog!\n";
                // }
                
                // // Checking if $dog is an instance of Animal
                // if ($dog instanceof Animal) {
                //     echo "This is an Animal!\n";
                // }

// Define the Animal class
class Animal {
    public function speak() {
        echo "Animal speaks!\n";
    }
}

// Define the Dog class, which extends Animal
class Dog extends Animal {
    public function speak() {
        echo "Woof!\n";  // Overriding the Animal's speak method
    }
}

// Instantiate objects
$dog = new Dog();

// Checking if $dog is an instance of Dog
if ($dog instanceof Dog) {
    echo "This is a Dog!\n";
}

// Checking if $dog is an instance of Animal
if ($dog instanceof Animal) {
    echo "This is an Animal!\n";
}

// Call the speak method of $dog
$dog->speak();  // This will call the overridden method in Dog

var_dump(method_exists($dog ,"speaks"))

?>


    <?php
        class Fruit{
            public $name;
            public $color;

            function set__name($name, $color){
                $this->name = $name;
                $this->color = $color;
            }
            function getProperty(){
                return "<br> The Fruit Name Is: $this->name, This color Is: $this->color <br>";
            }
        }

        $output = new Fruit();
        echo $output->set__name("Banana", "Green");
        echo $output->getProperty()
    ?>


        <?php
            class Banana{};
            class Colom extends Banana{};
            $pen = new Colom();
            if($pen instanceof Banana ){
                echo "Yes This is subclass";
            }
            else{
                echo "No This is not a subclass";
            }
        ?>
        <?php
            $name = "Imam";
            $height = "5.10";
            $hobbes = "software engineer";

            printf("<br> My name IS %s, My height is %s, And I'm a %s <br>", $name, $height, ucwords($hobbes));

            $html_block = "<div>
                <h1>$name</h1>
                <h2>I'm a " . ucwords($hobbes) . "</h2>
            </div>";

            printf($html_block);
        ?>

       </div>
    </div>
</section>