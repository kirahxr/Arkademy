<!DOCTYPE html>
<html lang="en">
<head>
  <title>Grand Bootcamp Arkademy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>APLIKASI SEDERHANA</h1>
  <p>Arkademy</p> 
</div>
  <?php 
$koneksi = mysqli_connect("localhost","root","","arkademy");
 
// Check connection
if (mysqli_connect_errno()){
  echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>
<div class="container">
  <table class="table table-condensed">
   <thead>
        <tr>
          <th>No</th>
          <th>Name</th>
          <th>Category</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
    $data = mysqli_query($koneksi,"SELECT products.id, products.name, product_categories.name as category FROM products INNER JOIN product_categories ON product_categories.id = products.category_id ORDER BY products.id");
    while($d = mysqli_fetch_array($data)){
      ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $d['name']; ?></td>
          <td><?php echo $d['category']; ?></td>
        </tr>
        <?php 
    }
    ?>
      </tbody>
</table>
</div>

</body>
</html>