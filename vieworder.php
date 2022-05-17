<?php include('partials-front/menu.php'); ?>
<h1> Orders by <?php echo $_POST['name'];?></h1>
<?php
if (empty($_POST["name"]) || empty($_POST["email"])){
    echo "One of the fields were empty";
}
    else{
        $name=$_POST['name'];
        $email=$_POST['email'];
        $sql=$conn->prepare("SELECT `food`, `price`, `qty`, `total`, `order_date`, `status`, `customer_name`, `customer_contact`, `customer_email`, `customer_address` FROM `tbl_order` WHERE customer_name=? and customer_email=?");
        $sql->bind_param("ss", $name, $email);
        $sql->execute();
        //$res=mysqli_query($conn, $sql);
        $result = $sql -> get_result();
        //Count Rows
        //$count = mysqli_num_rows($res);

        $sn = 1;

        //CHeck whether the foods are availalable or not
        if($result->num_rows >0)
        {
            ?>
            <br><br>

                <table class="tbl-full">
                    <tr>
                        <th width="5%">#</th>
                        <th width="10%">Order Date</th>
                        <th width="10%">Food</th>
                        <th width="5%">Price</th>
                        <th width="5%">Qty</th>
                        <th width="6%">Total</th>
                        <th width="8%">Status</th>
                        <th width="10%">Customer</th>
                        <th width="10%">Contact</th>
                        <th width="15%">Email</th>
                        <th width="10%">Address</th>
                        <th>Actions</th>
                    </tr>
                <?php
            //Foods Available
            while($row = $result->fetch_assoc())
            {
                //Get the Values
                $food = $row['food'];
                $price = $row['price'];
                $qty = $row['qty'];
                $total = $row['total'];
                $orderdate = $row['order_date'];
                $status = $row['status'];
                $customer_name = $row['customer_name'];
                $customer_contact = $row['customer_contact'];
                $customer_email = $row['customer_email'];
                $customer_address = $row['customer_address'];
                ?>
                <tr>
                                        <td><?php echo $sn++; ?> </td>
                                        <td><?php echo $orderdate; ?></td>
                                        <td><?php echo $food; ?></td>
                                        <td><?php echo '$'.$price; ?></td>
                                        <td><?php echo $qty; ?></td>
                                        <td><?php echo '$'.$total; ?></td>
                                        <td><?php echo $customer_name; ?></td>
                                        <td><?php echo $customer_contact; ?></td>
                                        <td><?php echo $customer_email; ?></td>
                                        <td><?php echo $customer_address; ?></td>
                                            </tr>
                                            <?php

                            }
                        }
                        else
                        {
                            //Order not Available
                            echo "<tr><td colspan='12' class='error'>Orders not Available</td></tr>";
                        }
                    ?>

 
                </table>
    </div>
    
</div>
                    <?php
                    }
                    ?>
