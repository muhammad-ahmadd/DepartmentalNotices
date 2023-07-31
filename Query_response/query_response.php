<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Query Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #800080;
  color: white;
}
        body {font-family: Arial, Helvetica, sans-serif;}
        *{
            box-sizing: border-box;
        }
        
body 
  {
    font-family: Arial, Helvetica, sans-serif;
    font: 400 15px/1.8 Lato, sans-serif;
    color: #777;
  }
  *{
            box-sizing: border-box;
  }
  h3, h4 
  {
    margin: 10px 0 30px 0;
    letter-spacing: 10px;      
    font-size: 20px;
    color: #111;
  }
  .container 
  {
    padding: 80px 120px;
  }
  
 
  .bg-1 
  {
    background: #2d2d30;
    color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child 
  {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
  }
  .list-group-item:last-child 
  {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .thumbnail 
  {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail p 
  {
    margin-top: 15px;
    color: #555;
  }
  .btn {
    padding: 10px 20px;
    background-color: #333;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
  }
  .modal-header, h4, .close {
    background-color: #333;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header, .modal-body {
    padding: 40px 50px;
  }
  .nav-tabs li a {
    color: #777;
  }
 
  .navbar {
    font-family: Montserrat, sans-serif;
    padding: 10px;
    margin-bottom: 0;
    background-color: #2d2d30;
    border: 0;
    font-size: 13px !important;
    letter-spacing: 4px;
    opacity: 1;
  }
  .navbar li a, .navbar .navbar-brand { 
    color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
    color: #fff !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .open .dropdown-toggle {
    color: #fff;
    background-color: #555 !important;
  }
  .dropdown-menu li a {
    color: #000 !important;
  }
  .dropdown-menu li a:hover {
    background-color: rgb(51, 2, 167) !important;
  }
  
  .form-control {
    border-radius: 0;
  }
  textarea {
    resize: none;
  }
  input[type=text], select, textarea 
        {
          width: 100%;
          padding: 12px;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
          margin-top: 6px;
          margin-bottom: 16px;
          resize: vertical;
        }
        input[type=email], select, textarea 
        {
          width: 100%;
          padding: 12px;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
          margin-top: 6px;
          margin-bottom: 16px;
          resize: vertical;
        }
        
        
        input[type=submit] 
        {
          background-color: #8a06a5;
          color: white;
          padding: 12px 20px;
          border: none;
          border-radius: 4px;
          cursor: pointer;
        }
        
        input[type=submit]:hover 
        {
          background-color: #8b0707;
        }
        
        .container 
        {
          border-radius: 5px;
          background-color: #f2f2f2;
          padding: 20px;
        }
        </style>
        
        
        <script>
        
        function validateName(nam)
        {
            var exp = /^[a-zA-Z]+ [a-zA-Z]+$/;
           // var name = document.getElementById('name').value;
            if(nam.value.match(exp)){
                return ture;
            }
            else
            {
                alert('Please enter your name in Alphabets[a-z] OR [A-Z]');
                document.form11.text1.focus();
                return false;
            }
        }
            function ValidateEmail(val)
            {
            
            var mailformat =  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if(val.value.match(mailformat))
            {
            return true;
            }
            else
            {
            alert("Email Should be in format xxxx@xxx.com");   
            document.form11.text1.focus();
            return false;
            }
            }
            
            </script>
        
        
  </head>
  <body>
    

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="HOME.html">Department Notices System</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="HOME.html">HOME</a></li>
            <li><a href="Query .html">QUERY</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">NOTIFICATION
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="timetable.html">TimeTable</a></li>
                <li><a href="datesheet.html">Date Sheet</a></li>
                <li><a href="projectreviewdate.html">Project Dates</a></li> 
                <li><a href="#">Announcements</a></li> 
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    



      <section class="h-100 bg-dark">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
              <div class="card card-registration my-4">
                <div class="row g-0">
                  <div class="col-xl-6 d-none d-xl-block">
                  <table id="customers">
   <thead>
   <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Degree</th>
            <th>Description</th>
        </tr>
   </thead> 
    <tbody>
    <?php 
            require_once 'query_res.php';
            foreach($queries as $query) {
                echo "<table id='customers'>";
                echo "<tr>";
                echo "<td> ".$query['que_id']."</td>";
                echo "<td>".$query['que_std_name']."</td>";
                echo "<td>".$query['que_std_email']."</td>";
                echo "<td>".$query['que_std_degree']."</td>";
                echo "<td>".$query['que_description']."</td>";
                echo "</tr>";
                echo "</table>";
            }
        ?>
    </tbody>
 
</table>
    </div>
    <div class="col-xl-6">
    <div class="card-body p-md-5 text-black">
        <h3 class="mb-5 text-uppercase">Query Dates</h3>
      
        <div class="container">
                    

<section>
    <form action="database.php" method="post">
   <label for="response">Response:</label>
   <input type="text" required autofocus min="5" max="5" id="response" name="response"><br>
   <label for="query_id">Query ID:</label>
   <input type="text" id="query_id" name="query_id"><br>
   <input type="submit" value="Submit">
</form>
</section>

    
</body>
</html>

