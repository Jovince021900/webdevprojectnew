<?php
    //fetching data
    $query = "SELECT * FROM tblsubject LEFT JOIN tblsyllabus ON tblsyllabus.subject_id = tblsubject.subjectid";
    $result = mysqli_query($dbc, $query); //using mysqli_query
?> 
