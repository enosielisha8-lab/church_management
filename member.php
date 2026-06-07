<?php
include "DBConnection.php";

$sql = "SELECT * FROM members";
$stm = $conn->prepare($sql);
$stm->execute();

$members = $stm->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="memberc.css">
        <title>church member section</title>
    </head>
    <body>
        <section class="mcontainer">
            <h1>THE CHURCH MEMBER SECTION</h1>

            <section class="inner_mcontainer">

                <div class="leftmember">
                    <h3>WELCOME TO ASSIGN A NEW MEMBERS HERE AT THIS SECTION</h3>
                    <div class="formContainer">
                    <form  method="POST">
                        <label for="">Full_Name</label>
                        <input type="text" name="fullname" required><br>

                        <label for="">Phone_Number</label>
                        <input type="number" name="phonenumber" required><br>

                        <label for="">Gender</label>
                        <input type="text" name="gender" required><br>
                        
                        <label for="">Date_of_Joining</label>
                        <input type="date" name="Date" required><br>
                        <button type="submit">R E G I S T E R</button>
                    </form>

                    </div>

                    <button id="btnn" > <a href="MainPage.html">BACK TO MAIN PAGE</a></button>

                </div>
                <div class="rightmember">
                    <h3>WELCOME TO VIEW MEMBERS OF CHURCH</h3>
                    <h4>This table below contain a members of this church but that apears first are members who have joined at recently days for more sclow down</h4>

                    <div class="tabledata">
                        <table  border="2" cellpadding="10">
                            <tr>
                                <td>No</td>
                                <td>Full_name</td>
                                <td>PhoneNumber</td>
                                <td>Gender</td>
                                <td>date_of_joining</td>
                            </tr>
                        
                           <?php
                              foreach($members as $data):  ?>
                           
                           
                            <tr>
                               <td><?= $data['member_id']; ?> </td>
                               <td><?= $data['full_name']; ?> </td>
                               <td><?= $data['phone']; ?> </td>
                               <td><?= $data['gender']; ?> </td>
                               <td><?= $data['join_date']; ?> </td>
                            </tr>
                        
                            <?php endforeach; ?>

                        </table>

                    </div>
                </div>
                </section>
        </section>
        
    </body>
</html>