<html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/userstyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        input {
            margin-top: 10px;
            width: 230px;
            height: 40px;
            border-radius: 5px;
            outline: none;
        }

        ::placeholder {
            padding: 10px;
            color: orange;
        }

        button {
            color: #7A3DAF;
            background: white;
            border-color: #7A3DAF;
            padding: 14px 20px;
            cursor: pointer;
            width: 100%;

        }

        button:hover {
            color: white;
            background: #4CAF50;
            border: none;
            opacity: 0.8;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Sparks Bank</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Customer Management
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item"  href="viewcustomers.php">Users Details</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact" tabindex="-1" aria-disabled="true">Contact us</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="card text-center" style="margin-top:76px;background-color:#7A3DAF;border-radius:10px;color:black">
                    <form method="POST">

                        <?php
                        include 'connection.php';
                        $ids = $_GET['idtransfer'];
                        $showquery = "SELECT * FROM `customers_details` WHERE ID=($ids) ";
                        $showdata = mysqli_query($conn, $showquery);
                        if (!$showdata) {
                            printf("Error: %s\n", mysqli_error($conn));
                            exit();
                        }
                        $arrdata = mysqli_fetch_array($showdata);

                        ?>

                        <div class="card-body">

                            <h3>Transfer Details</h3>
                            <label>Name</label>
                            <input type="text" name="name1" value="<?php echo $arrdata['Name']; ?>" required placeholder="Enter your name" /><br><br>
                            <label>Email</label>
                            <input type="text" name="email1" value="<?php echo $arrdata['Email']; ?>" required placeholder="Enter email id" /><br><br>
                            <label>Amount</label>
                            <input type="text" name="amount1" value="" style="width:210px;" required placeholder="Enter amount" /><br><br>
                            <img src="lal.jpg" style="width:130px;height:60px;">
                        </div>

                </div>
            </div>

            <div class="col-sm-4">
                <div class="card text-center" style="margin-top:60px;height:380px;">
                    <div class="card-body">
                        <img src="logo.jpg" style="width:250px;height:220px;margin-top:40px;">
                        <button name="submit">Proceed to Pay</button>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card text-center" style="margin-top:76px;background-color:#7A3DAF;border-radius:10px;color:white">

                    <div class="card-body">
                        <h3>Transfer Details</h3>

                        <label>Name</label>
                        <input type="text" name="name2" value="" required placeholder="Enter your name" /><br><br>
                        <label>Email</label>
                        <input type="text" name="email2" value="" required placeholder="Enter email id" /><br><br>


                        <img src="lal.jpg" style="width:130px;height:60px;">
                    </div>

                </div>
            </div>

        </div>

    </div>
    </div>
    </form>
    <?php

    include 'connection.php';

    if (isset($_POST['submit'])) {


        $Sender_name = $_POST['name1'];
        $Sender_email = $_POST['email1'];
        $Sender = $_POST['amount1'];
        $Receiver_name = $_POST['name2'];
        $Receiver_email = $_POST['email2'];



        $ids = $_GET['idtransfer'];
        $senderquery = "SELECT * FROM `customers_details` WHERE ID=$ids ";
        $senderdata = mysqli_query($conn, $senderquery);

        if (!$senderdata) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
        $arrdata = mysqli_fetch_array($senderdata);

        //receiverquery
        $receiverquery = "SELECT * FROM `customers_details` WHERE Email='$Receiver_email' ";
        $receiver_data = mysqli_query($conn, $receiverquery);

        if (!$receiver_data) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
        $receiver_arr = mysqli_fetch_array($receiver_data);
        $id_receiver = $receiver_arr['ID'];


        if ($arrdata['Amount'] >= $Sender) {
            $decrease_sender = $arrdata['Amount'] - $Sender;
            $increase_receiver = $receiver_arr['Amount'] + $Sender;
            $query = "UPDATE `customers_details` SET `ID`=$ids,`Amount`= $decrease_sender  WHERE `ID`=$ids ";
            $rec_query = "UPDATE`customers_details` SET `ID`=$id_receiver,`Amount`= $increase_receiver WHERE  `ID`=$id_receiver ";
            $res = mysqli_query($conn, $query);
            $rec_res = mysqli_query($conn, $rec_query);
            // $res_receiver=mysqli_query($conn,$query_receiver);
            if ($res && $rec_res) {
    ?>
                <script>
                    swal("Done!", "Transaction Successful!", "success");
                </script>

            <?php

            } else {
            ?>
                <script>
                    swal("Error!", "Error Occured!", "error");
                </script>

            <?php

            }
        } else {
            ?>
            <script>
                swal("Insufficient Balance", "Transaction Not  Successful!", "warning");
            </script>
    <?php

        }
    }
    ?>





</body>

</html>