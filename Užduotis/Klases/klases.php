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

//Atsidarykite ir apdorokite duotą JSON failą. Iš jo gautą masyvą 
//paleiskite cikle ir kiekvieno ciklo eigoje sukurkite objektą pagal 
//pirmoje užduotyje aprašytą klasę. Atspausdinkite įmonės duomenis pagal 
//tą pačią taisyklę, tačiau duomenų atvaizdavimas NEGALI būti paleistas 
//klasės viduje. Iš objekto metodo, naudojantis return komanda susigrąžinkite 
//duomenis į ciklą ir juos atspausdinkite jame.  

echo "<h2> Trečia užduotis </h2> <br />";


$company_db = file_get_contents('./random.json');
$company_db = json_decode($company_db, true);

// foreach ($company_db as $key => $comp) {
//     $comp = new Registry($comp['company'], $comp['address'],$comp['employee_count']);
//     echo 'Įmonė nr. '. ($key+1). '<br/>';
//     $comp = ($comp ->outputPos());
//     if(is_array($comp)){
//         foreach ($comp as $key2 => $value2) {
//             echo "$key2: $value2 <br />";
//         }
//     }else{
//         echo "$comp <br />";
//     }
//     echo "<br />";
// }

//Sukurkite klasę kuri priimtų du argumentus: min ir max. Klasėje aprašykite 
//konstruktorių ir du metodus. Pastarieji turi tikrinti ar minimali reikšmė 
//yra didesnė nei 5 ir ar max mažesnė nei 56 ir grazinti teigiamą arba neigiamą
//rezultatą. Jei paduodamos reikšmės atitinka abieju metodų kondiciją (if) , 
//tuomet grąžinkite reikšmę į objektą. Min argumentas sukuriamas pasinaudojant 
//funkcija rand(0, 56), o Max argumentas funkcija rand(5, 156).
echo "<h2> Ketvirta užduotis </h2> <br />";
class MinMax {
 
    public $max;
    public $min;
 
    public function __construct($min, $max){
        $this->min = $min;
        $this->max = $max;
        $this->isSmaller();
        $this->isBigger();
     }
 
     public function isSmaller( ){
         
        return ($this->min > 5) ? true : false;
     }
 
     public function isBigger(){
 
        return ($this->max < 56) ? true : false;
        
     }
    
     public function outputMin(){
       if($this->isSmaller() && $this->isBigger()){
           return  [$this-> min, $this -> max];
       }else {
           return false;
        }
     }
}
 
$minMax = new MinMax((rand(0,56)), rand(5,156));
print_r($minMax ->outputMin());



// echo $minMax -> $max;

