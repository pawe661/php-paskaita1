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
?> 