<?php 


session_start();
require("connect.php");

// $sql = "SELECT * FROM `users`";
// $stat = $con->prepare($sql);
// $stat->execute();
// $users = $stat->get_result()->fetch_all(MYSQLI_ASSOC);

// echo "<pre>", print_r($users), "</pre>";
// var_dump($users);

function dd($value) {

    echo "<pre>", print_r($value, true),"</pre>";
    die();
}

function executeQuery($sql, $data) {
    global $con; 
    $stat = $con->prepare($sql);
    $values = array_values($data);
    $types = str_repeat("s" , count($values));
    $stat->bind_param($types, ...$values);
    $stat->execute();
    return $stat;
}





function selectAll($table, $conditions = []) {
    global $con;
    $sql = "SELECT * FROM $table";
    if (empty($conditions)) {
        $stat = $con->prepare($sql);
        $stat->execute();
        $records = $stat->get_result()->fetch_all(MYSQLI_ASSOC);

        return  $records;  
    }else { 
        $i = 0;

        foreach ($conditions as $key => $value) {
            if ($i === 0) {
                $sql = $sql . " WHERE $key=?";
            } else {
                $sql = $sql . " AND $key=?";
            }
            $i++;
        } 
        // dd($sql);
        $stat = executeQuery($sql, $conditions);
        $records = $stat->get_result()->fetch_all(MYSQLI_ASSOC);

        return  $records;  

        
    }

}

function selectOne($table, $conditions) {
    global $con;
    $sql = "SELECT * FROM $table";
    
    $i = 0;

        foreach ($conditions as $key => $value) {
            if ($i === 0) {
                $sql = $sql . " WHERE $key=?";
            } else {
                $sql = $sql . " AND $key=?";
            }
            $i++;
        }
        // dd($sql);
        $sql = $sql . " LIMIT 1";
        $stat = $stat = executeQuery($sql, $conditions);
        $records = $stat->get_result()->fetch_assoc();
        
        return  $records;  


}

function create($table, $data) {
    global $con;
    $sql = "INSERT INTO $table SET ";

    $i = 0;

    foreach ($data as $key => $value) {
        if ($i === 0) {
            $sql = $sql . " $key=?";
        } else {
            $sql = $sql . ", $key=?";
        }
        $i++;
    }
    
    $stat = executeQuery($sql, $data);
    $id = $stat->insert_id;
    return $id;
}

function update($table, $id, $data) {
    global $con;
    $sql = "UPDATE $table SET ";

    $i = 0;

    foreach ($data as $key => $value) {
        if ($i === 0) {
            $sql = $sql . " $key=?";
        } else {
            $sql = $sql . ", $key=?";
        }
        $i++;
    }

    $sql = $sql . " WHERE id=?";
    $data['id'] = $id;
    $stat = executeQuery($sql, $data);
    
    return $stat->affected_rows;
}

function delete($table, $id) {
    global $con;
    $sql = "DELETE FROM $table WHERE id=? ";
  
    $stat = executeQuery($sql, ['id' =>$id]);
    
    return $stat->affected_rows;
}

function getPublishedPosts() {
    global $con;

    $sql = "SELECT p.*,u.username FROM posts AS p JOIN users AS u ON p.user_id=u.id WHERE p.published=?"; 
    
    $stat = executeQuery($sql, ['published' => 1]);
    $records = $stat->get_result()->fetch_all(MYSQLI_ASSOC);
  
    return  $records;  

}

function getPostsByTopicId($topic_id) {
    global $con;

    $sql = "SELECT p.*,u.username FROM posts AS p JOIN users AS u ON p.user_id=u.id WHERE p.published=? AND topic_id=?"; 
    
    $stat = executeQuery($sql, ['published' => 1, 'topic_id' => $topic_id]);
    $records = $stat->get_result()->fetch_all(MYSQLI_ASSOC);

    return  $records;  

}



function searchPosts($term ) {
    $match = '%' . $term . '%';
    global $con;

    $sql = "SELECT p.*,u.username FROM posts AS p JOIN users AS u ON p.user_id=u.id WHERE p.published=?
             AND p.title LIKE ? OR p.body LIKE ? "; 
    
    $stat = executeQuery($sql, ['published' => 1, 'title' => $match, 'body' => $match]);
    $records = $stat->get_result()->fetch_all(MYSQLI_ASSOC);

    return  $records;  

}