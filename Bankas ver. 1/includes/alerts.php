<?php
require ('funk.php');


//Naujos sąskaitos validacijos prenešimai
alert_status_alert(1,'Įvyko klaida, bandykyte dar kartą');
alert_status_alert(2,'Suveskite vardą / vardas yra per trumpas');
alert_status_alert(3,'Suveskite pavardę / pavardė yra per trumpa');
alert_status_alert(4,'Toks Asmens kodas jau yra');
alert_status_alert(5,'Klaidingas IBAN');
alert_status_alert(6,'Duomenų nepavyko įrašyti');

alert_status_success(7,'Duomenis įrašyti sėkmingai');

//Registracijos  validacijos prenešimai
alert_status_alert(1.1,'Įvyko klaida, bandykyte dar kartą');
alert_status_alert(2.1,'Suveskite vardą / vardas yra per trumpas');
alert_status_alert(3.1,'Suveskite pavardę / pavardė yra per trumpa');
alert_status_alert(4.1,'Įvestas el paštas netaisingas / toks el paštas jau yra');
alert_status_alert(5.1,'Suveskite slaptažuodį / slaptažodis per trumpas');
alert_status_alert(6.1,'Duomenų nepavyko įrašyti');

alert_status_success(7.1,'Vartuotojas sukurtas sėkmingai');

//Login validacijos pranešimai

alert_status_alert(1.2,'Įvestas taisingą el paštą');
alert_status_alert(2.2,'Toks vartuotojas neužregistuotas');
alert_status_alert(3.2,'Netaisingas slaptažodis');

//Sarašas delete pranešimai
alert_status_alert(2.3,'Pašalinimas nepavyko');
alert_status_alert(3.3,'Sąskaitos ištrinti nepavyko nes sąskaitoje yra lėšų');

alert_status_success(1.3,'Sąskaita sėkmingai pašalinta');

//Pinigų pridejimas
alert_status_alert(2.4,'Pinigų pridėjimas nepavyko');
alert_status_alert(3.4,'IBAN ilgis neatitinka');
alert_status_alert(4.4,'Pateiktas IBAN nesutampa');
// alert_status_alert(5.4,'Pridedamų pinigų suma negali būti neigiama');

alert_status_success(1.4,'Pinigai sėkmingai Pridėti');

//Pinigų nuskaitymas
alert_status_alert(2.5,'Pinigų nuskaičiuoti nepavyko');
alert_status_alert(3.5,'IBAN ilgis neatitinka');
alert_status_alert(4.5,'Pateiktas IBAN nesutampa');
// alert_status_alert(5.5,'Nuskaitomų pinigų suma negali būti neigiama');


alert_status_success(1.5,'Pinigai sėkmingai nuskaičiuoti');
?> 