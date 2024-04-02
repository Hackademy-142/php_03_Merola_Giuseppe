<?php

//!Esercizio 1

// class Vertebrates {
//     public static $allCounter=0;

//     public function __construct() 
//     {
//         static::$allCounter++;
//     }

//     public static function getCount(){
//         return static::$allCounter;
//     }
// }

// class Warm_blooded extends Vertebrates {
//     public static $warmCounter=0;

//     public function __construct()
//     {
//         parent::__construct();
//         static::$warmCounter++;
//     }

//     public static function getCount(){
//         return static::$warmCounter;
//     }

// }

// class Cold_blooded extends Vertebrates {
//     public static $coldCounter=0;

//     public function __construct()
//     {
//         parent::__construct();
//         static::$coldCounter++;
//     }

//     public static function getCount(){
//         return static::$coldCounter;
//     }
// }

// class Mammals extends Warm_blooded {
//     public static $mammalsCounter=0;

//     public function __construct($animale)
//     {
//         parent::__construct();
//         static::$mammalsCounter++;
        
//     }

//     public static function getCount(){
//         return static::$mammalsCounter;
//     }
// }

// class Bird extends Warm_blooded {
//     public static $birdCounter=0;

//     public function __construct()
//     {
//         parent::__construct();
//         static::$birdCounter++;
        
//     }

//     public static function getCount(){
//         return static::$birdCounter;
//     }
// }

// class Fish extends Cold_blooded {
//     public static $fishCounter=0;

//     public function __construct()
//     {
//         parent::__construct();
//         static::$fishCounter++;
        
//     }

//     public static function getCount(){
//         return static::$fishCounter;
//     }
// }

// class Reptiles extends Cold_blooded {
//     public static $reptilesCounter=0;

//     public function __construct()
//     {
//         parent::__construct();
//         static::$reptilesCounter++;
        
//     }

//     public static function getCount(){
//         return static::$reptilesCounter;
//     }
// }

// class Amphibians extends Cold_blooded {
//     public static $amphibiansCounter=0;

//     public function __construct()
//     {
//         parent::__construct();
//         static::$amphibiansCounter++;
        
//     }

//     public static function getCount(){
//         return static::$amphibiansCounter;
//     }
// }

// $leone = new Mammals('Leone');
// $pettirosso = new Bird('Pettirosso');
// $magicarp = new Fish('Magicarp');
// $serpente = new Reptiles('Serpente');
// $rospo = new Amphibians('Rospo');

// echo "Numero totale di Vertebrati: " . Vertebrates::getCount() . "\n";
// echo "Numero totale di animali a sangue caldo: " . Warm_blooded::getCount() . "\n";
// echo "Numero totale di animali a sangue freddo: " . Cold_blooded::getCount() . "\n";
// echo "Numero totale dei mammiferi: " . Mammals::getCount() . "\n";
// echo "Numero totale dei volatili: " . Bird::getCount() . "\n";
// echo "Numero totale dei pesci: " . Fish::getCount() . "\n";
// echo "Numero totale dei rettili: " . Reptiles::getCount() . "\n";
// echo "Numero totale degli amfibi: " . Amphibians::getCount() . "\n";


//! Esercizio 2

class Person {
    public $name;
    public $surname;
    public $age;

    public function __construct($nome,$cognome,$eta)
    {
        $this->name = $nome;
        $this->surname = $cognome;
        $this->age = $eta;
    }
}

class Student extends Person {
    
    public $city;
    public $hackademy;

    public function __construct($name,$surname,$age,$citta,$Hackademy)
    {
        parent::__construct($name,$surname,$age);
        $this->city = $citta;
        $this->hackademy = $Hackademy;
    }

    public function info(){
        echo "Mi chiamo " . $this->name . " " . $this->surname . " ho " . $this->age . " anni, vengo da " . $this->city . " e frequento l' " . $this->hackademy . "\n";
    }

}

class Teacher extends Person {
    public $subject;

    public function __construct($name,$surname,$age,$materia)
    {
        parent::__construct($name,$surname,$age,$materia);
        $this->subject = $materia;
    }

    public function info(){
        echo "Mi chiamo " . $this->name . " " . $this->surname . " ho " . $this->age . " anni, e insegno " . $this->subject . "\n";
    }
}

$teacher1 = new Teacher('Fabrizio','Biancaniello',33,'Javascript');
$teacher2 = new Teacher('Annalisa','Cardarulo',29,'PHP');

$student1 = new Student('Giovanni','Sugamiele',28,'Trapani','Hack142');
$student2 = new Student('Flavia','Vignanelli',24,'Roma','Hack142');
$student3 = new Student('Giuseppe','Merola',33,'Manfredonia','Hack142');

$teacher1->info();
$teacher2->info();

$student1->info();
$student2->info();
$student3->info();





