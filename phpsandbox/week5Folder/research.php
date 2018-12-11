<?php

//require_once './schools.csv';

  function search($SchoolName = "", $City = "", $State = "")
  {
      $sql = "SELECT * from schools WHERE 0=0 ";
      $results = [];
      $binds = array();
      if($SchoolName != "")
      {
        $sql .= "AND Schoolname LIKE :name";
        $binds["name"] = '%'.$SchoolName.'%';
      }
      if($City != "")
      {
        $sql .= "AND City LIKE :city";
        $binds["city"] = '%'.$City.'%';
      }
      if($State != "")
      {
        $sql .= "AND State LIKE :state";
        $binds["state"] = '%'.$State.'%';
      }

      $results = getTableData($sql, $binds);
      return $results;
  }


?>
