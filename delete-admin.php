<?php include('partials/menu.php') ?>
    <?php
        //get the id of admin to be deleted
        $id=$_GET['id'];
        //create SQL query to delete admin
        $sql="DELETE FROM tbl_admin WHERE id=$id";

        //execute the query
        $res=mysqli_query($conn,$sql);
        //wheather query executed successfully or not
        if($res==TRUE){
            //session varible to display
            $_SESSION['delete']="<div class='success'>Admin Deleted Successfully</div>";
            //redirector to manage admin
            header("location:".SITEURL.'admin/manage-admin.php');
        }
        else{
            $_SESSION['delete']="<div class='error'>Failed to delete admin</div>";
            header("location:".SITEURL.'admin/manage-admin.php');
        }
    ?>
<?php include('partials/footer.php')  ?>