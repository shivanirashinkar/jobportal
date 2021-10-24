<?php
include("include/header.php");
include("include/sidebar.php");

?>
<?php
include('connection/db.php');
//echo $edit= $_GET['edit'];
$query=mysqli_query($conn,"select * from all_jobs where job_id='$edit'");
//var_dump($query);
while ($row=mysqli_fetch_array($query)) {
$title=$row['job_title'];
$Description=$row['des'];
$country=$row['country'];
$state=$row['state'];
$city=$row['city'];
}
?>  
      
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="create_company.php">all job list</a></li>
                <li class="breadcrumb-item"><a href="#">Add job</a></li>
                
            </ol>
        </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <nav aria-label="breadcrumb">
            <h2 class="h2">Add job</h2>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              </div>
              <!--<a class="btn btn-primary" href="add_customer.php">Add Customer</a>-->
            </div>
          </div>
          
          <div style="width:60%; margin-left:20%; background-color:#F2F4F4">
              
          <form action="" method="post" name="job_form" id="job_form" style="margin:3%; padding:3%">
            <div id="msg"></div>       
                  <div class="form-group">
                      <label for="Customer Email"> job title</label>
                      <!--<input type="text" value="<?php //echo $title; ?>" name="job_title" id="job_title"class="form-control" placeholder="Enter job title">-->
                      <input type="text" name="job_title" id="job_title"class="form-control" placeholder="Enter job title">
                      <!-- <input type="email" name="email" id="email" class="form-control" placeholder="Enter Customer Email"> -->
                  </div>

                  <div class="form-group">
                      <label for="Customer Username">Description</label>
                      <textarea name="Description" id="Description" class="form-control" cols="30" rows="10">
                        <?php // echo $Description; ?>
                        
                      </textarea>             
                    </div>
                    <!--<input type="hidden" name="id" id="id" value="-->
                    <?php //echo $_GET['edit'];?>"

                
                   <div class="form-group">
                      <label for="country"></label>
                      <!--<select name="country" class="countries form-control"  value= "<?php //echo $country; ?>" id="countryId">-->
                      <select name="country" class="countries form-control"  name="countryId" id="countryId">
                        <option value="">Select Country</option>
                        <option value="">India</option>

                      </select>
                      
                  </div> 

                   <div class="form-group">
                      <label for="state"></label>
                      <!--<select name="state" class="states form-control" value= "<?php //echo $state; ?>" id="stateId">-->
                      <select name="state" class="states form-control" name="stateId" id="stateId">
                        <option value="">Select State</option>
                        <option value="">Maharashtra</option>
                      </select>

                  </div> 

                   <div class="form-group">
                      <label for="city"></label>
                      <!--<select name="city" class="cities form-control" value= "<?php //echo $city; ?>" id="cityId">-->
                      <select name="city" class="cities form-control" name="cityId" id="cityId">
                        <option value="">Select City</option>
                        <option value="">Nashik</option>
                      </select>
                  </div> 

                  <div class="form-group">
                        
                        <input type="submit" class="btn btn-block btn-success" placeholder="save" name="submit" id="submit">
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
            var Description=$("#Description").val();
            var job_title=$("#job_title").val();
            var countryId=$("#countryId").val();
            var stateId=$("#stateId").val();
            var cityId=$("#cityId").val();
           //if(job_title=='')
           //{
             //  alert("Please Enter job title");
              // return false;

          // }

           //if(Description=='')
           //{
             //  alert("Please Enter Description");
              // return false;
               
          // }

           //if(countryId=='')
           //{
              // alert("Please select country");
               //return false;

           //}

           //if(stateId=='')
          // {
            //   alert("Please select state");
             //  return false;

           //}
           //if(cityId=='')
           //{
               //alert("Please select city");
              // return false;

           //}




            var data =$("#job_form").serialize();
            //alert(email);

           

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
    $job_title=$_POST['job_title'];
    $Description=$_POST['Description'];
    $country=$_POST['country'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    

    $query1=mysqli_query($conn,"update all_jobs set job_title='$job_title',Des='$Description',country='$country',state='$state',city='$city' where job_id='$id'");

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