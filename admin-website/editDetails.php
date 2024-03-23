<?php
    session_start();
    require_once('../php/connectdb.php');

    $isAdmin=include('../php/isAdmin.php');
    // echo "$isAdmin"

    if(!$isAdmin || !isset($_SESSION['username'])){
        header("Location: ../index.php");
        exit();
        echo'being redirected';
    }

    $customerID = $_GET["customerID"];

    if (isset($_POST['submit-reset'])) {
        if (!isset($_POST['admin-passwordReset'])) {
            echo 'new password not set';
            exit('Please fill the password reset field');
        }
        echo 'requiring';
        require_once("php/resetPassword.php?customerID=' . $customerID .'");
    }
?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petopia</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" href="CSS/style.css" />
</head>

<body>

        <section id="textholder1">
            <?php
                try {
                    $query = "select * from customer where Customer_ID like " . "'" . $customerID . "'";
                    $rows =  $db->query($query);

                    if ($rows && $rows->rowCount() > 0) {

            ?>
                    <table cellspacing="10" cellpadding="15" id="projectTable">
                        <tr>
                            <th align='left'><b>Customer ID</b></th>
                            <th align='left'><b>First name</b></th>
                            <th align='left'><b>Last name</b></th>
                            <th align='left'><b>Contact Email</b></th>
                            <th align='left'><b>Phone_Number</b></th>
                            <th align='left'><b>Home_Address</b></th>
                            <th align='left'><b>Postcode</b></th>
                            <th align='left'><b>Username</b></th>
                            <th align='left'><b>Reset Password</b></th>
                        </tr>
            <?php
                    foreach ($rows as $row) {
                        echo  "<td align='left'>" .$row['Customer_ID'] . "</td>";
                        echo "<td align='left'>" . $row['First_Name'] . "</td>";
                        echo "<td align='left'>" . $row['Last_Name'] . "</td>";
                        echo "<td align='left'>" . $row['Contact_Email'] . "</td>";
                        echo "<td align='left'>" . $row['Phone_Number'] . "</td>";
                        echo "<td align='left'>" . $row['Home_Address'] . "</td>";
                        echo "<td align='left'>" . $row['Postcode'] . "</td>";
                        echo "<td align='left'>" . $row['Username'] . "</td>";
                        echo "<td align='left'>" 
                                .
                                '<form>'
                                    . 
                                    '<input type="password" id="admin-passwordReset" name="admin-passwordReset" class="passwordReset-input" placeholder="Reset Password"
                                    required />'
                                    .
                                    '<button type="submit" class="reset-btn">Reset</button>
                                    <input type="hidden" name="submit-reset" value="TRUE" />'
                                    .
                                '</form>'
                                .
                              "</td>";
                    }
                    echo  '</table>';
                    } else {
                        echo  "<p>No customer found.</p>\n";
                    }
                } catch (PDOexception $ex) {
                    echo "Sorry, a database error occurred! <br>";
                    echo "Error details: <em>" . $ex->getMessage() . "</em>";
                }
            ?>
        </section>

        <br>

            <a href="adminCustomer.php">
                <button type="button">Back</button>
            </a>
            <form>                        
                <button type="submit" class="delete-btn">Delete</button>
                <input type="hidden" name="submit-delete" value="TRUE" />
            </form>
            
            <?php
                if (isset($_POST['submit-reset'])) {
                    echo 'requiring';
                    require_once("deleteRecord.php?customerID=' . $customerID .'");
                }
            ?>
        </div>
    </div>
</body>

</html>