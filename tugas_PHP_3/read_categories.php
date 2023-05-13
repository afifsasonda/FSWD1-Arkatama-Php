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
            <a href="categories.php">Categories</a>
        </div>
    </nav>
    <?php
    require_once 'koneksi.php';
    // include "koneksi.php";
    
    // Query untuk menampilkan data
    $querycategori = "SELECT * FROM categories";
    
    // Eksekusi query
    $resultcategori = mysqli_query($conn, $querycategori);
    ?>
     <!-- Tampilkan data -->
    
    
    <table id="myTable">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Created At</th>
        <th>Updated At</th>

    </thead>
    <tbody>
        <?php  
    while ($row = mysqli_fetch_assoc($resultcategori)) : //mysqli_fetch_assoc
        ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['created_at'] ?></td>
            <td><?= $row['updated_at'] ?></td>
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