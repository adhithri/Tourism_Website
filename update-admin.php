<?php	include('partials/menu.php')  ?>
<div class-="main-content">
    <div class="wrapper">
        <h1>Update Admin</h1>
        <br><br>
        <?php
        //get id of selected admin
        $id=$_GET['id'];
        //create sql query to get details
        $sql="SELECT*FROM tbl_admin WHERE id=$id";
        //execute the query
        $res=mysqli_query($conn,$sql);
        //check wheather query execute or not
        if($res==TRUE){
            //check data is available or not
            $count=mysqli_num_rows($res);
            if($count==1){
                $row=mysqli_fetch_assoc($res);
                $full_name=$row['full_name'];
                $username=$row['username'];
            }
            else{
            //redirectory to manage admin
            header("location:".SITEURL.'admin/manage-admin.php');
            }
        }
        ?>
        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full Name :</td>
                    <td><input type="text" name="full_name" value="<?php echo $full_name; ?>"></td>
                </tr>
                <tr>
                    <td>UserName :</td>
                    <td><input type="text" name="username" value="<?php echo $username; ?>"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>"></td>
                        <input type="submit" name="submit" value="Update Admin" class="btn-secondary">
</table>
</form>
</div>
    </div>

<?php	include('partials/footer.php')  ?>