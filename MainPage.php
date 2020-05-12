<?php

require 'Author.php';
require 'Director.php';
require 'Employees.php';

$Director  = new Director('Egzon', 'Gashi', '13 janar 2000', '2010', 'Lipjan','250$', '8');
$Employee1 = new Employees('Albin', 'Semetishti', '12 janar 2001', '2011', 'Ferizaj', '245$');
$Employee2 = new Employees('Betim', 'Tasholli', '5 shkurt 2001', '2012', 'Mitrovice te Veriut', '230$');
$Employee3 = new Employees('Arlind', 'Berisha', '8 gusht 1999', '2014', 'Peje', '200$');
$Employee4 = new Employees('Festim', 'Tasholli', '18 korrik 2002', '2016', 'Prizren', '210$');
$Employee5 = new Employees('Arbon', 'Flugaj', '12 nentor 1997', '2015', 'Malisheve', '195$');
$Employee6 = new Employees('Altin', 'Gashi', '20 gusht 2004', '2018', 'Gjakove', '230$');
$Employee7 = new Employees('Arsim', 'Kryeziu', '10 shkurt 2000', '2017', 'Podujeve', '285$');
$Employee8 = new Employees('Kushtrim', 'Sylejmani', '1 tetor 1999', '2013', 'Dragash', '200$');

echo '<b>Drejtori i web-faqes</b> <br>';
echo $Director->firstName . ' ' . $Director->lastName . ' i lindur me ' . $Director->get_birthDate() . '. Jeton ne ' . $Director->get_city() . '. Eshte drejtori i web-faqes nga viti ' . $Director->get_startYear() . '. Ka gjithsej ' . $Director->get_numriIPuntoreve() . ' puntore. Paga e tij mujore eshte ' . $Director->get_wage() . '.<br><br>';

echo '<b>Puntoret</b> <br>';
echo $Employee1->firstName . ' ' . $Employee1->lastName . ' i lindur me ' . $Employee1->get_birthDate() . '. Jeton ne ' . $Employee1->get_city() . '. Eshte puntor i web-faqes nga viti ' . $Employee1->get_startYear() . '. Paga e tij mujore eshte ' . $Employee1->get_wage() . '.<br>';
echo $Employee2->firstName . ' ' . $Employee2->lastName . ' i lindur me ' . $Employee2->get_birthDate() . '. Jeton ne ' . $Employee2->get_city() . '. Eshte puntor i web-faqes nga viti ' . $Employee2->get_startYear() . '. Paga e tij mujore eshte ' . $Employee2->get_wage() . '.<br>';
echo $Employee3->firstName . ' ' . $Employee3->lastName . ' i lindur me ' . $Employee3->get_birthDate() . '. Jeton ne ' . $Employee3->get_city() . '. Eshte puntor i web-faqes nga viti ' . $Employee3->get_startYear() . '. Paga e tij mujore eshte ' . $Employee3->get_wage() . '.<br>';
echo $Employee4->firstName . ' ' . $Employee4->lastName . ' i lindur me ' . $Employee4->get_birthDate() . '. Jeton ne ' . $Employee4->get_city() . '. Eshte puntor i web-faqes nga viti ' . $Employee4->get_startYear() . '. Paga e tij mujore eshte ' . $Employee4->get_wage() . '.<br>';
echo $Employee5->firstName . ' ' . $Employee5->lastName . ' i lindur me ' . $Employee5->get_birthDate() . '. Jeton ne ' . $Employee5->get_city() . '. Eshte puntor i web-faqes nga viti ' . $Employee5->get_startYear() . '. Paga e tij mujore eshte ' . $Employee5->get_wage() . '.<br>';
echo $Employee6->firstName . ' ' . $Employee6->lastName . ' i lindur me ' . $Employee6->get_birthDate() . '. Jeton ne ' . $Employee6->get_city() . '. Eshte puntor i web-faqes nga viti ' . $Employee6->get_startYear() . '. Paga e tij mujore eshte ' . $Employee6->get_wage() . '.<br>';
echo $Employee7->firstName . ' ' . $Employee7->lastName . ' i lindur me ' . $Employee7->get_birthDate() . '. Jeton ne ' . $Employee7->get_city() . '. Eshte puntor i web-faqes nga viti ' . $Employee7->get_startYear() . '. Paga e tij mujore eshte ' . $Employee7->get_wage() . '.<br>';
echo $Employee8->firstName . ' ' . $Employee8->lastName . ' i lindur me ' . $Employee8->get_birthDate() . '. Jeton ne ' . $Employee8->get_city() . '. Eshte puntor i web-faqes nga viti ' . $Employee8->get_startYear() . '. Paga e tij mujore eshte ' . $Employee8->get_wage() . '.<br><br>';

?>

