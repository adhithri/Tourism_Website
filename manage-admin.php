<?php	include('partials/menu.php')  ?>
<div class="main-content">
	<div class="wrapper">
            <h1>Admin</h1>
            <?php
            if(isset($_SESSION['add'])){
                echo $_SESSION['add'];
                unset( $_SESSION['add']);
            }
            if(isset($_SESSION['delete'])){
                echo $_SESSION['delete'];
                unset( $_SESSION['delete']);
            }
            if(isset($_SESSION['update'])){
                echo $_SESSION['update'];
                unset( $_SESSION['update']);
            }
            if(isset($_SESSION['user-not-found'])){
                echo $_SESSION['user-not-found'];
                unset( $_SESSION['user-not-found']);
            }
            if(isset($_SESSION['change-pwd'])){
                echo $_SESSION['change-pwd'];
                unset( $_SESSION['change-pwd']);
            }
            ?>
            <br>
            <a href="add-admin.php" class="btn-primary">Add Admin</a>
        <table class="tbl-full">
            <tr>
                <th>S.No</th>
                <th>Full Name</th>
                <th>Username</th>
                <th>Action</th>
            </tr>
            <?php
            //query to get all admin
            $sql="SELECT*FROM tbl_admin";
            //execute query
            $res=mysqli_query($conn,$sql);
            //checking
            $sn=1;
            if($res==TRUE){
                //count rows
                $count=mysqli_num_rows($res);
                if($count>0){
                    while($rows=mysqli_fetch_assoc($res)){
                            $sn++;
                            $id=$rows['id'];
                            $full_name=$rows['full_name'];
                            $username=$rows['username'];
                         ?>
                           <tr>
                <td><?php echo $id ?></td>
                <td><?php echo $full_name ?></td>
                <td><?php echo $username ?></td>
                <td><a href="<?php echo SITEURL;?>admin/update-password.php?id=<?php echo $id;?>" class="btn-primary">Change Password</a>
                <a href="<?php echo SITEURL;?>admin/update-admin.php?id=<?php echo $id;?>" class="btn-secondary">Update Admin </a>
                    <a href="<?php echo SITEURL;?>admin/delete-admin.php?id=<?php echo $id;?>" class="btn-danger">Delete Admin</a>
                </td>
            </tr>
                         <?php
                    }
                }
                    else{

              }
   
            }
            ?>
        </table>
</div>
</div>
<?php
 //check submit btn click or not
 if(isset($_POST['submit'])){
//get all values from form
$id=$_POST['id'];
$full_name=$_POST['full_name'];
$username=$_POST['username'];

//create sql to update admin
$sql="UPDATE tbl_admin SET
full_name='$full_name',
username='$username'
WHERE id='$id'";
//execute query
$res=mysqli_query($conn,$sql);

//check query success or not
if($res==TRUE){
    $_SESSION['update']="<div class='success'>  Successfully</div>";
    header("location:".SITEURL.'admin/manage-admin.php');
}
else{
    $_SESSION['update']="<div class='error'>  Failed</div>";
    header("location:".SITEURL.'admin/manage-admin.php');
}
}
?>
<?php include('partials/footer.php')  ?>