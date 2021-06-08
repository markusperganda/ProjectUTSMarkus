<?php 
include "../Model/data.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>RegistrationForm_v2 by Colorlib</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="css/style1.css">
</head>

<body>

    <div class="wrapper" style="background-image: url('images/sepatu3.jpg');">
        <div class="inner">
            <form method="POST" action="../Controller/proses.php?aksi=update_order">
                <?php 
                    $no = $_GET['no'];
                    $db = new data();
                    foreach ($db->add_order($no) as $a){
                    ?>
                <h3>Edit Order</h3>
                <div class="">
                    <div class="form-wrapper">
                        <label for="">Shoes Name</label>
                        <input type="hidden" class="form-control" name="no" value="<?php echo $a['no'];?>">
                        <input type="text" class="form-control" name="name" value="<?php echo $a['nama'];?>">
                    </div>
                    <div class="form-wrapper">
                        <label for="">Size</label>
                        <input type="number" class="form-control" name="size" value="<?php echo $a['ukuran'];?>">
                    </div>
                    <div class="form-wrapper">
                        <label for="">Address</label>
                        <input type="text" class="form-control" name="address" value="<?php echo $a['alamat'];?>">
                    </div>
                    <button>Edit</button>
                </div>
                <?php } ?>
            </form>
        </div>
    </div>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>