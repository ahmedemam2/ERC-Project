 <?php
        include_once("config.php");
 ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Excel Demo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  
</head>
<body>

<div class="container-fluid">
    <div class="card">
        <div class ="card-header text-center">
            <h4>Report</h4>
            <form action="process.php" method="post">
                <button type="submit" name="submit" class="btn btn-primary float-right">Download</button>
            </form>
            <div class="card-body">
                <table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">id</th>
      <th scope="col">address</th>
      <th scope="col">gender</th>
      <th scope="col">age</th>
      <th scope="col">Name</th>
    </tr>
  </thead>
  <tbody>
      
      
      <?php
      $sql="SELECT * FROM testingg";
      $res=mysqli_query($link, $sql);
      if(mysqli_num_rows($res)>0)
      {
          $i=1; 
          while($row=mysqli_fetch_array($res))
          {
              ?>
               <tr>
                  <th scope="row"><?php echo $i++; ?></th>
                  <td><?php echo $row['id']?></td>
                  <td><?php echo $row['address']?></td>
                  <td><?php echo $row['gender']?></td>
                  <td><?php echo $row['age']?></td>
                  <td><?php echo $row['Name']?></td>
                  <td></td>
                  <td></td>
               </tr>
              <?php
          }
      } else {
          echo("no data found");
      }
      
      ?>
   
    
  </tbody>
</table>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 
        
    </body>
</html>