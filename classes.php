<?php

class project 
{
    private $proj_id;
    private $proj_std_name;
    private $proj_name;
    private $proj_review_date;
    private $proj_des;
   
  
    public function __construct($proj_id,  $proj_std_name, $proj_name,$proj_review_date, $proj_des) {
        $this->proj_id = $proj_id;
        $this->proj_std_name = $proj_std_name;
        $this->proj_name = $proj_name;
        $this->proj_review_date = $proj_review_date;
        $this->proj_des = $proj_des;
    }
}
    class query 
    {
    private $que_id;
    private $que_std_name;
    private $que_std_email;
    private $que_degree;
    private $que_description;
    private $que_response;
  
    public function __construct($que_id, $que_std_name, $que_std_email, $que_degree,$que_description,$que_response) {
        $this->que_id = $que_id;
        $this->que_std_name = $que_std_name;
        $this->que_std_email = $que_std_email;
        $this->que_degree = $que_degree;
        $this->que_description = $que_description;
        $this->que_response = $que_response;
    }
    }
    class TimeTable
    {
        private $TT_ID;
    private $TT_file;
      
    public function __construct() {
        $this->TT_ID = $TT_ID;
        $this->TT_file = $TT_file;
    }
}
    class DateSheet
    {
        private $DD_ID;
    private $DD_file;
      
    public function __construct() {
        $this->DD_ID = $DD_ID;
        $this->DD_file = $DD_file;
    }
}