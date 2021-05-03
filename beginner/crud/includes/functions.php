<?php require_once('db.php');


function formatcode($arr) {
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}

/* select statement */
function selectAll() {
    global $mysqli;
    $data = array();
    $stmt = $mysqli->prepare("SELECT * FROM employees");
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows === 0) echo ("no rows");
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    $stmt->close();
    return $data;
}

/* select single */
function selectSingle($id = NULL) {
    global $mysqli;
    $stmt = $mysqli->prepare("SELECT * FROM employees WHERE id = ?");
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows === 0) echo ("no rows");
    $row = $result->fetch_assoc();
    $stmt->close();
    return $row;
}

/* insert statement */
function insert($fname = NULL, $lname = NULL, $phoneNumber = NULL) {
    global $mysqli;
    $stmt = $mysqli->prepare("INSERT INTO employees (fname, lname, phoneNumber) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $fname, $lname, $phoneNumber);
    $stmt->execute();
    $stmt->close();
    header("Location: update.php?id=".$mysqli->insert_id);
}

/* update statement */
function update($fname = NULL, $lname = NULL, $phoneNumber = NULL, $id = NULL) {
    global $mysqli;
    $stmt = $mysqli->prepare("UPDATE employees SET fname = ?, lname = ?, phoneNumber = ? WHERE id = ?");
    $stmt->bind_param("sssi", $fname, $lname, $phoneNumber, $id);
    $stmt->execute();
    if($stmt->affected_rows === 0) echo ("No rows updated.");
    $stmt->close();
}

/* delete statement */
function delete($id = NULL) {
    global $mysqli;
    $stmt = $mysqli->prepare("DELETE FROM employees WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    if($stmt->affected_rows === 0) echo ("No rows updated.");
    $stmt->close();
    header("Location: index.php");
}