<html>
<head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <nav>
        <div class="nav-navbar">
            <a href="read.php">Product</a>
            <a href="join.php">Join</a>
            <a href="read_categories.php">Categories</a>
        </div>
    </nav>
    <?php
    require_once 'koneksi.php';
    // include "koneksi.php";
    
    // Query untuk menampilkan data
    $query = "SELECT * FROM products";
    
    // Eksekusi query
    $result = mysqli_query($conn, $query);
    ?>
     <!-- Tampilkan data -->
    
    
    <table id="myTable">
    <thead>
        <th>ID</th>
        <th>Categori Id</th>
        <th>Nama</th>
        <th>Description</th>
        <th>Price</th>
        <th>Status</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Created By</th>
        <th>Verified At</th>
        <th>Verified By</th>

    </thead>
    <tbody>
        <?php  
    while ($row = mysqli_fetch_assoc($result)) : //mysqli_fetch_assoc
        ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['category_id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['description'] ?></td>
            <td><?= $row['price'] ?></td>
            <td><?= $row['status'] ?></td>
            <td><?= $row['created_at'] ?></td>
            <td><?= $row['updated_at'] ?></td>
            <td><?= $row['created_by'] ?></td>
            <td><?= $row['verified_at'] ?></td>
            <td><?= $row['verified_by'] ?></td>
        </tr>
        
    <?php endwhile; ?>
    
    </tbody>
    
    </table>
    
    
    
    
     <!-- Tutup koneksi -->
     <?php
    mysqli_close($conn);
    ?>
    
    
    </body>
    
    <script>
        $(document).ready( function () {
        $('#myTable').DataTable();
    } );
    </script>

    ?>
</body>
</html>