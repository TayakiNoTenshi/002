<head>
    <title>Exercise set 5</title>
</head>
<body style="background-color:#111; color:#ddd;">
<?php



function recursiveMDSum($array)
{
    $sum = 0;
    foreach($array as $value)
    {
        if(is_int($value))
            $sum += $value;
        else if(is_array($value))
            $sum += recursiveMDSum($value);
    }
    return $sum;
}

echo '<pre>';


//1
/*Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą;*/
echo '====1====<br>';

function stuffItInAHeader($text, $hN = 1)
{
    return "<h$hN>$text</h$hN>";
}

echo stuffItInAHeader('Chicken butt, lol');
echo stuffItInAHeader("I'm very funny", 2);
echo stuffItInAHeader('Fore more laughs and gags, tune in to Big Bazingaroni, Saturday nights on whatever channel it airs on', 4);


echo '<br><br>';


//2
/*Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, įterpiamas į h tagą, o antrasis tago numeris (1-6). Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją;*/
echo '====2====<br>';

echo "I uh... might've jumped ahead with this one";

echo '<br><br>';


//3
/*Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()). Visus skaitmenis stringe įdėkite į h1 tagą. Raides palikite. Jegu iš eilės eina keli skaitmenys, juos į tagą reikią dėti kartu (h1 atsidaro prieš pirmą ir užsidaro po paskutinio) Keitimui naudokite pirmo patobulintą (jeigu reikia) uždavinio funkciją ir preg_replace_callback();*/
echo '====3====<br>';



echo '<br><br>';


//4
/*Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos (išskyrus vienetą ir patį save) Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių;*/
echo '====4====<br>';



echo '<br><br>';


//5
/*Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 33 iki 77. Išrūšiuokite masyvą pagal daliklių be liekanos kiekį mažėjimo tvarka, panaudodami ketvirto uždavinio funkciją.*/
echo '====5====<br>';



echo '<br><br>';


//6
/*Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 333 iki 777. Naudodami 4 uždavinio funkciją iš masyvo ištrinkite pirminius skaičius.*/
echo '====6====<br>';



echo '<br><br>';


//7
/*Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą, kurio visi, išskyrus paskutinį, elementai yra atsitiktiniai skaičiai nuo 0 iki 10, o paskutinis masyvas, kuris generuojamas pagal tokią pat salygą kaip ir pirmasis masyvas. Viską pakartokite atsitiktinį nuo 10 iki 30  kiekį kartų. Paskutinio masyvo paskutinis elementas yra lygus 0;*/
echo '====7====<br>';



echo '<br><br>';


//8
/*Suskaičiuokite septinto uždavinio elementų, kurie nėra masyvai, sumą. Skaičiuoti reikia visuose masyvuose ir submasyvuose.*/
echo '====8====<br>';



echo '<br><br>';


//9
/*Sugeneruokite masyvą iš trijų elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 33. Jeigu tarp trijų paskutinių elementų yra nors vienas ne pirminis skaičius, prie masyvo pridėkite dar vieną elementą- atsitiktinį skaičių nuo 1 iki 33. Vėl patikrinkite pradinę sąlygą ir jeigu reikia pridėkite dar vieną elementą. Kartokite, kol sąlyga nereikalaus pridėti elemento.*/
echo '====9====<br>';



echo '<br><br>';


//10
/*Sugeneruokite masyvą iš 10 elementų, kurie yra masyvai iš 10 elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 100. Jeigu tokio didelio masyvo (ne atskirai mažesnių) pirminių skaičių vidurkis mažesnis už 70, suraskite masyve mažiausią skaičių (nebūtinai pirminį) ir prie jo pridėkite 3. Vėl paskaičiuokite masyvo pirminių skaičių vidurkį ir jeigu mažesnis nei 70 viską kartokite.*/
echo '====10====<br>';



echo '<br><br>';


//11
/*Sugeneruokite masyvą, kurio ilgis atsitiktinai kinta nuo 10 iki 100. Masyvo reikšmes sudaro atsitiktiniai skaičiai 0-100 ir masyvai. Santykis skaičiuojamas atsitiktinai, bet taip, kad skaičiai sudarytų didesnę dalį nei masyvai. Reikšmių masyvų ilgis nuo 1 iki 5, o reikšmės analogiškos (nuo 50% iki 100% atsitiktiniai skaičiai 0-100, o likusios masyvai) ir t.t. kol visos galutinės reikšmės bus skaičiai ne masyvai. Suskaičiuoti kiek elementų turi masyvas. Suskaičiuoti masyvo elementų (tie kurie ne masyvai) sumą. Suskaičiuoti maksimalų masyvo gylį. Atvaizduokite masyvą grafiškai . Masyvą pavazduokite kaip div elementą, kuris yra display:flex, kurio viduje yra skaičiai. Kiekvienas div elementas turi savo unikalų id ir unikalią background spalvą (spalva pvz nepavaizduota). pvz: <div id=”M1”>10, 46, 67, <div id=”M2”> 89, 45, 89, 34, 90, <div id=”M3”> 84, 97 </div> 90, 56 </div> </div>*/
//also see an attached image
echo '====11====<br>';



echo '<br><br>';

?>
</body>