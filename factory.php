<?php 


/*

[ my understand ]

it's is the one of the most used patterns and is used to create a factory do 
help you get less hard coding when creating something like objet that, that's way is called factory;

*/

ini_set('display_errors', 1);
error_reporting(~0);


    interface Shape {
        public function draw();
    }

    class Rectangle implements Shape {

        public $x;
        public $y;
        public $h;
        public $w;
        
        public function draw()
        {
            echo "Drawing !";
        }
    }


    class Position{}


    class ShapeFactory {
        public function create($type){
            if($type == "Rectangle"){
                return new Rectangle(new Position);
            }
        }
    }

    $rect = new ShapeFactory();


    $rect->create("Rectangle")->draw();


?>