<?php
//Klasės ir Objektai

//Klasė
class Test {

    //Trys matomumo variantai 
    //public
    //private
    //protected 

    //Savybes | Properties
    public $name = 'Giedrius'; //Nurodome pradine savybes reiksme
    public $surname;
    public $address;

    //Konstanta
    public const KONSTANTA = 'Gedimino g. 11'; 

    //Construct methodas pasileidzia vos tik iniciavus klase
    //__destruct()
    public function __construct($vardas, $pavarde) {
        $this->setName($vardas);
        $this->surname = $pavarde;

        $this->address = function() {
            return self::KONSTANTA;
        };
        
    }
 
    //Metodas | Method
    public function setName($name) {
        //$this - yra kreipimasis į funkciją kurioje yra metodas
        $this->name = $name;
    }

    public function getName() {
        //$this->setName();
        return $this->name;
    }

}

//Objektas
$objektas1 = new Test('Adomas', 'Mickevicius');
$objektas2 = new Test('Kazys', 'Grinius');

//$test->setName('Vilius');

//echo $test->name;

echo $objektas1->getName() . '<br />';
echo $objektas1->surname . '<br />';

echo $objektas1::KONSTANTA;

echo '<pre>';
print_r($objektas1);

echo $objektas2->getName() . '<br />';
echo $objektas2->surname . '<br />';

echo ($objektas2->address)();

//MVC Metodu
//Model - Yra atsakingas uz duomenu paemima ir apdorojima
//View - Yra atsakingas uz duomenu atvaizdavima
//Controller - Yra atsakingas uz duomenu paskirstyma

//Sukurkite Klasę kuri turi tris savybes. company, address, employee_count.
// Klasė turi turėti konstruktorių ir galimybę priimti tris argumentus. 
//Taip pat klasės viduje aprašykite metodą kuris tikrintų darbuotojų skaičių 
//gaunamą iš employee_count savybės ir grąžintų teigiamą arba neigiamą atsakymą 
//sąlygai “Ar darbuotojų skaičius yra didesnis nei 3”. Jeigu taip 
//atspausdinkite įmonės duomenis.

echo "<h2> Pirma užduotis </h2> <br />";

class Registry {

    public $company;
    public $address;
    public $employee_count;
    

    public function __construct($input_company, $input_address, $input_employee_count){
       $this-> empCount($input_company, $input_address, $input_employee_count); 
       
    }

    public function empCount ($company, $address, $employee_count){
        if($employee_count > 3){
            $this-> output['company_name'] = $company;
            $this-> output['company_address']= $address;
            $this-> output['company_employee_count'] = $employee_count;
        }else {
            $this -> output = 'Darbuotojų skaičius yra mažesnis nei 3';
        }
    }
    public function outputPos (){
        return $this->output;
    }

}
$company1 = new Registry('Azarta', 'Mickevicius g. 25', 2);

print_r($company1);
print_r($company1 ->outputPos());

echo "<h2> Antra užduotis </h2> <br />";

$company2 = new Registry('Kalavala', 'Basanavičiaus g.', rand(1,100));
print_r($company2 ->outputPos());

