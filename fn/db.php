<?php
// Todo: Fix All dbFunctions *HIGH*

/**
 * Retrieves a field from the table for that particular userid
 */
function getField($table, $field, $userid)
{
  $result  = mysql_query("SELECT $field FROM $table WHERE userid = $userid");
  $row = mysql_fetch_row($result);
  return $row[0];
}

/**
 * Retrieve Multiple Fields from DB. Improved version of getField()
 */
function getFields($table, $fields, $userid)
{
  $result  = mysql_query("SELECT $fields FROM $table WHERE userid = $userid");
  return mysql_fetch_row($result);
}

/**
 * Updates the given field with new value
 */
function updateField($table, $field, $value, $userid)
{
  return mysql_query("UPDATE $table SET $field = '$value' WHERE userid = $userid");
}

/**
 * Updates the given field with new value
 */
function updateFields($table, $fieldValues, $userid)
{
  // return mysql_query("UPDATE $table SET $fieldValues WHERE userid = $userid");
  if (!mysql_query("UPDATE $table SET $fieldValues WHERE userid = $userid"))
  {
    die("Shit Happened in Updating - " . mysql_error());
  }
}

/**
 * Insert fields into a table. Quickly.
 */
function insertField($table, $field, $values)
{
  // $result = mysql_query("INSERT INTO $table ($fields) VALUES($values)");
}
?>
