<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
      i{
        cursor: pointer;
      }
      .email-value{
        display: none;
      }
    </style>
</head>
<body>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
  <tbody>
  <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sudreshya";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    $i=0;

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $i+=1;
            echo "<tr>
                <th scope='row'>". $i ."</th>
                <td class='uname'>". $row["uname"] ."</td>
                <td class='email'>". $row["email"] ."</td>
                <td class='phone'>". $row["phone"] ."</td>
                <td><i class='fa-solid fa-pen'></i></td>
            </tr>";
        }
    }
    $conn->close();
    ?>
    </tbody>

    <form action="update.php" method="post">
      <div class="form-group">
        <label for="exampleInputUname">Username</label>
        <input type="text" class="form-control uname-inp" id="exampleInputUname" aria-describedby="emailHelp" placeholder="Enter username" name="uname">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control email-inp" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Phone number</label>
        <input type="text" class="form-control phone-inp" id="exampleInputPassword1" placeholder="Phone" name="phone">
      </div>
      <input type="text" value="" class="email-value" name="emailvalue">
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
    <script src="./update.js"></script>
</body>
</html>