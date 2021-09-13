<?php
const studenCount = 15;
// FUNCTIONS
// Генерация студентов в массив students
function studentsGenerate($names, $surnames){
    $students = [];
    for ($i = 1; $i <= studentCount; $i++) {
        $buffer = [
            'name' => $names[rand(0,9)],
            'surname' => $surnames[rand(0,9)],
            'age' => rand(16,29),
        ];
        array_push($students, $buffer);
    }
    return $students
}
// Функция условия для генерации по алфавиту
function cmpName($a, $b)
{
    return strcmp($a["name"], $b["name"]);
}
// Сортировка по алфавиту
function sortByAplh($arr){
   usort($arr, "cmpName");
   $_GET["students"] = $arr;
}
// VARIABLE
$surnames = [
    'Якимов',
    'Федоров',
    'Степанов',
    'Носов',
    'Емальянко',
    'Московит',
    'Кошка',
    'Гришко',
    'Порошенко',
    'Лавров',
];
$names = [
    'Иван',
    'Даня',
    'Григорий',
    'Гена',
    'Степа',
    'Витя',
    'Миха',
    'Владимир',
    'Саша',
    'Макс'
];

// PROGRAM
$_GET["students"] = studentsGenerate($names, $surnames);
sortByAplh($_GET["students"]);
$GROUP = array(
    'name' => "Ир5-18",
    'students' => $_GET["students"],
    'stream' => 4,
);
// print_r($GROUP);
echo "<head><style> li:hover { color: black; font-size: 17px;  }</style></head>"
?>

<div style = "width: 100%; background: white;"> 
    <?php
        echo "<h1>Группа "."$GROUP[name]"."</h1> "."Поток "."$GROUP[stream]";
        echo "<br/> Студенты: ";
        echo "<ol>";
            foreach( $GROUP["students"] as $student ){
                echo "<li>" . $student["name"] . " ". $student["surname"] . " (". $student["age"] . " лет) " . "</li>";
            }
        echo "</ol>";
    ?>
    <button> Кнопка </button>
</div>