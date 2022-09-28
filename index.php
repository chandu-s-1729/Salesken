<?php
    include 'config.php';
    if ($conn) {
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center p-5">STUDENT REPORTING SYSTEM</h1>
    <section class="container">
      <table class="table table-striped table-hover">
        <thead>
          <tr class="bg-dark text-white">
            <th scope="col">Student Name</th>
            <th scope="col">Semester</th>
            <th scope="col">English</th>
            <th scope="col">Maths</th>
            <th scope="col">Science</th>
          </tr>
        </thead>
    <?php 
      $query = "SELECT * FROM srs ORDER BY name;";
      $result = mysqli_query($conn, $query)or die(mysqli_error($conn));
      $results = mysqli_fetch_all($result, MYSQLI_ASSOC) or die(mysqli_error($conn));
      ?>
      <?php foreach($results as $srs): ?>
        <tbody>
          <tr>
            <td><?php echo $srs['name']; ?></td>
            <td><?php echo $srs['semester']; ?></td>
            <td><?php echo $srs['english']; ?></td>
            <td><?php echo $srs['maths']; ?></td>
            <td><?php echo $srs['science']; ?></td>
          </tr>
        </tbody>
        <?php endforeach ; ?>
        </table>
        <a href="form.php"><button type="button" class="btn btn-dark" >Add Student</button></a>
    </section>

    <section class="container mt-3 mb-5">
      <h1 class="text-center">Report</h1>
      <div class="row">
        <div class="col-12 col-md-6 col-lg-4 text-center">
        <h5>Average % of whole class in recent semester</h5>
        <?php 
        $sql = "SELECT  AVG(average) FROM srs where semester = 'sem2'"; 
        $result = $conn->query($sql); 
        while($row = mysqli_fetch_array($result)){ 
            echo $row['AVG(average)']." %";
            echo "<br />"; 
        } 
      ?>
      </div>
      <div class="col-12 col-md-6 col-lg-4 text-center">
        <h5>Average % of students in each subject</h5>
        <p>Maths - 
          <?php 
        $sql = "SELECT  AVG(maths) FROM srs where semester='sem1'"; 
        $result = $conn->query($sql); 
        while($row = mysqli_fetch_array($result)){ 
            echo "<br />"; 
            echo "Sem 01-".$row['AVG(maths)']." %"; 
        } 
        $sql = "SELECT  AVG(maths) FROM srs where semester='sem2'"; 
        $result = $conn->query($sql); 
        while($row = mysqli_fetch_array($result)){ 

            echo " Sem 02-".$row['AVG(maths)']." %"; 
            echo "<br />"; 
        } 
        ?>
        </p>
        <p>English - 
          <?php 
        $sql = "SELECT  AVG(english) FROM srs where semester='sem1'"; 
        $result = $conn->query($sql); 
        while($row = mysqli_fetch_array($result)){ 
            echo "<br />"; 
            echo "Sem 01-".$row['AVG(english)']." %"; 
        } 
        $sql = "SELECT  AVG(science) FROM srs where semester='sem2'"; 
        $result = $conn->query($sql); 
        while($row = mysqli_fetch_array($result)){ 
            echo " Sem 02-".$row['AVG(science)']." %"; 
            echo "<br/>"; 
        } 
        ?>
        </p>
        <p>Science - 
          <?php 
        $sql = "SELECT  AVG(science) FROM srs where semester='sem1'"; 
        $result = $conn->query($sql); 
        while($row = mysqli_fetch_array($result)){ 
          echo "<br/>"; 
            echo "Sem 01-".$row['AVG(science)']." %"; 
            
        } 
        $sql = "SELECT  AVG(science) FROM srs where semester='sem2'"; 
        $result = $conn->query($sql); 
        while($row = mysqli_fetch_array($result)){ 
            echo " Sem 02-".$row['AVG(science)']." %"; 
            echo "<br/>"; 
        } 
        ?>
        </p>
      </div>
      <div class="col-12 col-md-6 col-lg-4 text-center">
        <h5>Top 2 consistant students across all semester</h5>
        <?php 
      $query1 = "SELECT name FROM srs ORDER BY average desc limit 2";
      $result1 = mysqli_query($conn, $query1)or die(mysqli_error($conn));
      $results1 = mysqli_fetch_all($result1, MYSQLI_ASSOC) or die(mysqli_error($conn));
      ?>
      <?php foreach($results1 as $srs1): 
          echo $srs1['name'];
          echo "<br/>"; 
        endforeach ; ?>
      </div>
      </div>
    </section>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
<?php
}
?>