<?php

declare(strict_types=1);

/* EXERCISE 2
TODO: Make class beer that extends from Beverage.

TODO: Create the properties name (string) and alcoholpercentage (float).

TODO: Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.

// Remember for now we will use properties and methods that can be accessed from everywhere.

TODO: Make a getAlcoholpercentage function which returns the alocoholpercentage.

TODO: Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.

Also the name equal to Duvel and the alcohol percentage to 8,5%

TODO: print the getAlcoholpercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.

Make sure that each print is on a different line.

TODO: Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholpercentage() in /var/www/becode/workshop/exercise2.php on line 64

USE TYPEHINTING EVERYWHERE!
*/

class Beverage
{
    public string $color;
    public float $price;
    public string $temperature;

    public function __construct(string $color, float $price, string $temperature="Cold")
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo():string
    {
        return " € This beverage is $this->temperature and $this->color.";
    }
}



class Beer extends Beverage
{
    public string $name;
    public float $alcoholpercentage;

    public function __construct(string $color, float $price, string $name, float $alcoholpercentage)
    {
        parent::__construct($color, $price);

        $this->name = $name;
        $this->alcoholpercentage = $alcoholpercentage;
    }

    public function getAlcoholpercentage()
    {
        echo $this->alcoholpercentage . "%";
        
    }
}
$duvel = new Beer("blonde", 3.5, "Duvel,", 8.5);
echo $duvel->name;

// $cola = new Beverage("black", 2);
// echo $cola->price;
// echo $cola->getInfo();