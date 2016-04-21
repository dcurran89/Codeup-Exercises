<?php

$companies = [
    'Sun Microsystems' => [
        'Vinod Khosla',
        'Bill Joy',
        'Andy Bechtolsheim',
        'Scott McNealy'
    ],
    'Silicon Graphics' => [
        'Jim Clark',
        'Ed McCracken'
    ],
    'Cray' => [
        'William Norris',
        'Seymour Cray'
    ],
    'NeXT' => [
        'Steve Jobs',
        'Avie Tevanian',
        'Joanna Hoffman',
        'Bud Tribble',
        'Susan Kare'
    ],
    'Acorn Computers' => [
        'Steve Furber',
        'Sophie Wilson',
        'Hermann Hauser',
        'Jim Mitchell'
    ],
    'MIPS Technologies' => [
        'Skip Stritter',
        'John L. Hennessy'
    ],
    'Commodore' => [
        'Yash Terakura',
        'Bob Russell',
        'Bob Yannes',
        'David A. Ziembicki',
        'Jay Miner'
    ],
    'Be Inc' => [
        'Steve Sakoman',
        'Jean-Louis Gassée'
    ]
];
//my code
// ksort($companies);
// foreach($companies as $company => $employee){
//     foreach($employee as $index => $name){
//         sort($employee);
//         for ($i=0; $i <= $index; $i++) { 

//         }
//     }
//     print_r($employee);
// }

//ben's code
$companies['Be Inc'];
$employees = $companies['Be Inc'];

sort($employees);
$companies['Be Inc'] = $employees;
ksort($companies);
foreach($companies as $company){
    foreach($companies as $companyName => $employees){
        sort($employees);

        $companies[$companyName] = $employees;
    }
    print_r($companies);
}
print_r($companies);
?>
