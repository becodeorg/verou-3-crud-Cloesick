<?php
//ALWAYS START WITH INDEX.PHP 
// Require the correct variable type to be used (no auto-converting)
declare (strict_types = 1);

// Show errors so we get helpful information
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

session_start();
if(!empty($_GET['id'])){
    $_SESSION['id'] =$_GET['id'];
}

//function pre to format the data output better
function pre($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
// Load you classes
require_once 'config.php';
require_once 'classes/DatabaseManager.php';
require_once 'classes/CardRepository.php';
//class creation + store class in variable
//FIRST the line beneath CREATES the CONNECTION
$databaseManager = new DatabaseManager($config['host'], $config['user'], $config['password'], $config['dbname']);
//FOURTH 
$databaseManager->connect();
//SECOND
// This example is about a Pokémon card collection
// Update the naming if you'd like to work with another collection
$cardRepository = new CardRepository($databaseManager);
//NEW CLASS"cardRepository" NEEDS $databaseManager
//SIXTH 
$cards = $cardRepository->get(); // FETCH ALL-EXISTS OUT OF QUERRY
//SEVENTH
var_dump($cards);
// Get the current action to execute
// If nothing is specified, it will remain empty (home should be loaded)
$action = $_GET['action'] ?? null;
//echo '<br/>';
//print_r($cards);
//<a href="?action=about-me"> about me </a>
         // https://localhost/?action=about-me
        // $action
//https//:localhost/my-page?name=Basile&age=99 = html 
// last part of html = htmi = ?name=Basile&age-99 =uri
//$name=$_get['name'] = Basile
// Load the relevant action
// This system will help you to only execute the code you want, instead of all of it (or complex if statements)
// $_GET(action ) linked to https
switch ($action){
    case 'create':
        // $cardRepository->aboutMe();
        // require 'about-me.php'
        $cardRepository->create($cardRepository);//create new variable cardrepository and store in cardrepository
        break;
    case 'edit':
        // $cardRepository->aboutMe();
        // require 'about-me.php'
        update($databaseManager, $cardRepository);//create new variable cardrepository and store in cardrepository
        break;
    default:
        // $this->overview(); -->not used cause this a side object 
        require 'overview.php';
        var_dump($_GET);
        // SUPERGLOBAL OF POST
        break;
}

function overview($cardRepository)
{
    // Load your view
    // Tip: you can load this dynamically and based on a variable, if you want to load another view
    require 'overview.php';
    require 'Edit.php';
}

function create($cardRepository)
{
    // TODO: provide the create logic
    $values="'{$_GET['title']}', '{$_GET['author']}', '{$_GET['synopsis']}'";
    $cardRepository->create($values);
}

function update($cardRepository): void
{
    $fetch = $cardRepository->find();
        require 'Edit.php';
    if(!empty($_GET['books'])){
        $cardRepository->update;
    }
}

function delete($cardRepository): void
{
    $fetch = $cardRepository->find();
    require 'delete.php';
    if (!empty($_GET['deleteCheck'])){
        $cardRepository->delete();
    }
}

function show($cardRepository): void
{
    $fetch = $cardRepository->find();
    require 'show.php';
}