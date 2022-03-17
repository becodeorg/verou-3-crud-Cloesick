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

    public function create($values): void
    {
        $query= "INSERT IGNORE INTO books (`title`, `author`, `synopsis`) VALUES (values)";
        header('Location:index.php');
        //this updates the table on refresh of site

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
    {
        // TODO: replace dummy data by real one        
        $query= "SELECT * FROM `books`";
        $result= $this->databaseManager->connection->query($query); 
        return $result;
        // We get the database connection first, so we can apply our queries with it
        // return $this->databaseManager->connection-> (runYourQueryHere)
    }

    public function update(): void
    {
        $query="UPDATE books SET 'title'= '{$_GET['title']}', '{$_GET['author']}', '{$_GET['synopsis']}' WHERE id = '{$_SESSION['id']}'";
        this->datamanager->connection->query($query);
        header('Location:index.php');
    }

    public function delete(): void
    {

    }

}