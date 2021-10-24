<?php
include('connection/db.php');

include("include/header.php");
include("include/sidebar.php");

$id=$_GET['edit'];
$query=mysqli_query($conn,"select * from job_category where id='$id'");

while($row=mysqli_fetch_array($query))
{
    $category=$row['category'];
    $des=$row['des'];
   
}

?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="category.php">Company</a></li>
                <li class="breadcrumb-item"><a href="#">Update Company</a></li>
                
            </ol>
        </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <nav aria-label="breadcrumb">
            <h2 class="h2">Update Company</h2>
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
                      <label for="Customer Email">Enter category Name</label>
                      <input type="category" name="category" id="Company" value="<?php echo $category?>" class="form-control" placeholder="Enter Company name">
                  </div>

                  <div class="form-group">
                      <label for="Customer Username">Enter Description</label>
                      <textarea name="des" id="des" class="form-control" cols="30" rows="10">
                          <?php echo $des;?>
                        </textarea>
                  </div>

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
    $category=$_POST['category'];
    $des=$_POST['des'];
  

    $query1=mysqli_query($conn,"update job_category set category='$category',des='$des' where id='$id'");

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