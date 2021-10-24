<?php
include('connection/db.php');

include("include/header.php");
include("include/sidebar.php");

$id=$_GET['edit'];
$query=mysqli_query($conn,"select * from admin_login where id='$id'");

while($row=mysqli_fetch_array($query))
{
    $email=$row['admin_email'];
    $first_name=$row['first_name'];
    $last_name=$row['last_name'];
    $admin_pass=$row['admin_pass'];
    $admin_username=$row['admin_username'];
    $admin_type=$row['admin_type'];

}

?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="customers.php">Customers</a></li>
                <li class="breadcrumb-item"><a href="#">Update Customer</a></li>
                
            </ol>
        </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <nav aria-label="breadcrumb">
            <h2 class="h2">Update Customer</h2>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              </div>
              <!--<a class="btn btn-primary" href="add_customer.php">Add Customer</a>-->
            </div>
          </div>
          
          <div style="width:60%; margin-left:20%; background-color:#F2F4F4">
              
          <form action="" method="post" name="customer_form" id="customer_form" style="margin:3%; padding:3%">
            <div id="msg"></div>       
                  <div class="form-group">
                      <label for="Customer Email">Enter Customer Email</label>
                      <input type="email" name="email" id="email" value="<?php echo $email?>" class="form-control" placeholder="Enter Customer Email">
                  </div>

                  <div class="form-group">
                      <label for="Customer Username">Enter Customer Username</label>
                      <input type="text" name="username"  value="<?php echo $admin_username?>" id="username" class="form-control" placeholder="Enter Customer Username">
                  </div>

                  <div class="form-group">
                      <label for=" First Name">Enter Password </label>
                      <input type="password" name="password"  value="<?php echo $admin_pass?>"id="password" class="form-control" placeholder="Enter Password">
                  </div>

                  <div class="form-group">
                      <label for=" First Name">Enter Customer First Name </label>
                      <input type="text" name="first_name"  value="<?php echo $first_name?>" id="first_name" class="form-control" placeholder="Enter Customer First Name">
                  </div>

                  <div class="form-group">
                      <label for="Last Name">Enter Customer Last Name</label>
                      <input type="text" name="last_name"   value="<?php echo $last_name?>" id="last_name" class="form-control" placeholder="Enter Customer Last Name">
                  </div>

                  <div class="form-group">
                      <label for="Admin Type">Admin Type</label>
                      <select name="admin_type" class="form-control" name="admin_type"  value="<?php echo $admin_type?>" id="admin_type">
                          <option value="1">Super Admin</option>
                          <option value="2">Customer Admin</option>
                      </select>

                    <input type="hidden" name="id" id="id" value="<?php echo $_GET['edit'] ?>">

                      <p>

                      </p>
                  </div>
                  <div class="form-group">
                        
                     <input type="submit" class="btn btn-block btn-success" placeholder="Update" name="submit" id="submit">
                 </div>
                  

              </form>
          </div>
          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>
          
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
    <!--datatables plugin-->
    <script src="https://code.jquery.com/jquery-3.5.1.js">

    </script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js">

    </script>
    <script>
        $(document).ready(function() {
             $('#example').DataTable();
        } );
    </script>

    <script>
      $(document).ready(function(){
          $("#submit").click(function(){
            var email=$("#email").val();
            var username=$("#username").val();
            var password=$("#password").val();
            var first_name=$("#first_name").val();
            var last_name=$("#last_name").val();
            var admin_type=$("#admin_type").val();
            var data =$("#customer_form").serialize();
            //alert(email);

            $.ajax({
              type:"POST",
              url:"Customer_add.php",
              data:data,
              success:function(data){
               $("#msg").html(data);
              }
            });

          });
      });
    </script>

  </body>
</html>

<?php

include('connection/db.php');
if(isset($_POST['submit']))
{
    $id=$_POST['id'];
    $email=$_POST['email'];
    $admin_username=$_POST['admin_username'];
    $admin_pass=$_POST['admin_pass'];
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $admin_type=$_POST['admin_type'];

    $query1=mysqli_query($conn,"update admin_login set admin_email='$email',admin_username='$admin_username',admin_pass='$admin_pass',first_name='$first_name',last_name='$last_name',admin_type='$admin_type' where id='$id'");

      if($query1)
      {
        echo "<script>alert('Record has been successfully updated!!')</script>";
        header('location:customers.php');
    }
    else{
        echo "<script>alert('some error please try again!! ')</script>";  
    }

}

?>