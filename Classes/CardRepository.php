<?php

// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern
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

    // Get one. Fetch data (1row ) from table 'books' using the id
    public function find(): array

    {
         $query = "SELECT * FROM movies WHERE id= '{$_SESSION['id']}'";
        $result = $this->databaseManager->connection->query($query);
        $fetch = $result->fetch(PDO::FETCH_ASSOC);
        return $fetch;
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
        $prepare=$this->datamanager->connection->query($query);
        $prepare->execute(array(':bookTitle' => "{$_GET['title']}",  ':synopsis' => "{$_GET['synopsis']}", ':id' => "{$_SESSION['id']}"));
        header('Location:index.php');
    }

    public function delete(): void
    {
        $query = "DELETE FROM books  WHERE id = :id;";
        $prepare = $this->databaseManager->connection->prepare($query);
        $prepare->execute(array(':id' => "{$_SESSION['id']}"));
        header('Location: index.php');  
    }

}