<?php

// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern

use LDAP\Result;

class CardRepository
{
    private DatabaseManager $databaseManager;

    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function create(): void
    {
        $query= "INSERT INTO crud (title, author, synopsis) VALUES ($_GET[title],$_GET[author],$_GET[synopsis])";
        $result= $this->databaseManager->connection->query($query);
        return;
    }

    // Get one
    public function find(): array

    {

    }

    // Get all
    // FIRST USE GET TO FETCH THE INFO FORM DB crud
    // check index.php#
    // array is expected as result of function
    public function get():PDOStatement
    // now format is a PDOStatement instead of an array
    {
        // TODO: replace dummy data by real one
        // to FETCH create variable
        // QUERY ALWAYS AS STRING
        
        $query= "SELECT * FROM `books`";
        //return $this->databaseManager->connection->query($query); returns into error
        // error = return value must be of type array --> the return is a PDO STATEMENT
        // fix PDO STATEMENT and turn into ARRAY
        //FIFTH
        $result= $this->databaseManager->connection->query($query); 
        return $result;
        //refers to DatabaseManager.php connection 
        // no "$" in chain
        //query is build-in function in PDO --> creates function for us
        // return [
        //     ['name' => 'dummy one'],
        //     ['name' => 'dummy two'],
        // ];
        // We get the database connection first, so we can apply our queries with it
        // return $this->databaseManager->connection-> (runYourQueryHere)
    }

    public function update(): void
    {

    }

    public function delete(): void
    {

    }

}