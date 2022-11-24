<?php
// $conn = mysqli_connect("localhost","root","","employee");

// $sql = "SELECT * FROM empdata";
// $result = mysqli_query($conn , $sql);


// while($row = mysqli_fetch_assoc($result)){
//     echo $row['id']." ".$row['name']." ".$row['dob']." ".$row['gender']. " ".$row['image']." ".$row['subject']." ".$row['address']." ".$row['emailid']." ".$row['password']." ".$row['contact']. "<br>";

// }
 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
      <style>
        table, td, th {
            border: 1px solid #ddd;
            text-align: left;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 15px;
        }
    </style>
  </head>
  <body>
 <table border=1>
        <tr>
          <th>id</th>
            <th>name</th>
            <th>dob</th>
            <th>gender</th>
            <th>image</th>
            <th>subject</th>
            <th>address</th>
            <th>emailid</th>
            <th>password</th>
            <th>contact</th>
            <th>check</th>
             <th>edit</th>
              <th>delete</th>
        </tr>
        <?php
        $conn =mysqli_connect("localhost","root","","employee")or die("query failed");
        $rows = mysqli_query($conn, "SELECT * FROM empdata");
        $i = 1;
?>
<?php foreach($rows as $row) :  ?>
<tr id = <?php echo $row["id"]; ?>>
<td><?php echo $i++; ?></td>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["dob"]; ?></td>
<td><?php echo $row["gender"]; ?></td>
<td><img src='<?php echo $row["image"]; ?>' height="100" width="100"></td>
<td><?php echo $row["subject"]; ?></td>
<td><?php echo $row["address"]; ?></td>
<td><?php echo $row["emailid"]; ?></td>
<td><?php echo $row["password"]; ?></td>
<td><?php echo $row["contact"]; ?></td>
<td><?php echo $row["check"]; ?></td>
<td>
<a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
</td>
<td>
<!-- <input type="submit" id="delete" value="delete" onClick="submitData(<?php echo $row['id']; ?>);" > -->
<button type="submit" onclick = "submitData(<?php echo $row['id']; ?>);">Delete</button>
</td>
</tr>

    <?php endforeach;  ?>
</table>
  <br>
    <a href="form1.php">Add User</a>
    <?php require 'script.php'; ?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    
  </body>
</html>