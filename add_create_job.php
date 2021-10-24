<?php
include("include/header.php");
include("include/sidebar.php");

?>
<?
$query=mysqli_query($conn,"select * from job_category");
?>
      
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="create_company.php">all job list</a></li>
                <li class="breadcrumb-item"><a href="#">edit job</a></li>
                
            </ol>
        </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <nav aria-label="breadcrumb">
            <h2 class="h2">edit job</h2>
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
                      <input type="text" name="job_title" id="job_title"class="form-control" placeholder="Enter job title">
                      <!-- <input type="email" name="email" id="email" class="form-control" placeholder="Enter Customer Email"> -->
                  </div>

                  <div class="form-group">
                      <label for="Customer Username">Description</label>
                      <textarea name="Description" id="Description"  class="form-control" cols="30" rows="10"></textarea>             
                    </div>

                    <div class="form-group">
                      <label for="Customer Username">enter keyword</label>
                      <input type="text" class="form-control" name="keyword" id="keyword" placeholder="enter keyword">            
                    </div>


                
                   <div class="form-group">
                      <label for="country"></label>
                      <select name="country" class="countries form-control" id="countryId">
                      <option value=" Australia "> Australia </option>
                      <option value="Bhutan">Bhutan</option>
                      <option value=" China"> China</option>
                      <option value="korea">korea</option>
                      <option value="japan">japan</option>
                      <option value="USA">USA</option>
                      <option value="canada">canada</option>
                      <option value="indonesia">indonesia</option>

</select>
                      
                  </div> 

                  


                   <div class="form-group">
                      <label for="state"></label>
                      <select name="state" class="states form-control" id="stateId">
    


<option value="Assam – Dispur">Assam – Dispur</option>
<option value="Bihar – Patna">Bihar – Patna</option>
<option value="Goa – Panaji">Goa – Panaji</option>
<option value="Gujarat – Gandhinagar
">Gujarat – Gandhinagar
</option>
<option value="Haryana – Chandigarh">Haryana – Chandigarh</option>
<option value="Maharashtra – Mumbai">Maharashtra – Mumbai</option>
<option value="Meghalaya – Shillong">pMeghalaya – Shillongune</option>
<option value="Tamil Nadu – Chennai
">Tamil Nadu – Chennai
</option>
<option value="Sikkim – Gangtok
">Sikkim – Gangtok
</option>
<option value="Rajasthan – Jaipur – Patna">Rajasthan – Jaipur – Patna</option>
<option value="Chhattisgarh – Raipur – Patna">Bihar – Patna</option>
<option value="Bihar Jharkhand – Ranchi Patna">Bihar – Jharkhand – Ranchi</option>
<option value="Bihar 
West Bengal – Kolkata Patna">Bihar – 
West Bengal – Kolkata</option>
<option value="Bihar Uttarakhand – Dehradun Patna">Uttarakhand – Dehradun – Patna</option>
</select>

                  </div> 

                   <div class="form-group">
                      <label for="city"></label>
                      <select name="city" class="cities form-control" id="cityId">
    <option value="pune">pune</option>
     <option value="mumbai">mumbai</option>
      <option value="Bangalore">Bangalore</option>
       <option value="Hyderabad">Hyderabad</option>
        <option value="Surat">Surat</option>
         <option value="Jaipur">Jaipur</option>
          <option value="Nagpur">Nagpur</option>
           <option value="Indore">Indore</option>
            <option value="Thane">Thane</option>
             <option value="Patna">Patna</option>
              <option value="Vadodara">Vadodara</option>
               <option value="Nashik">Nashik</option>
                <option value="Faridabad">Faridabad</option>
                 <option value="Aurangabad">Aurangabad</option>
</select>
                  </div> 

                  <div class="form-group">
                        
                        <input type="submit" class="btn btn-block btn-success" placeholder="save" name="submit" id="submit">
                 </div>

                 <div class="form-group">
                      <label for="select category"></label>
                      <select name="category" class="form-control" id="category">
                      <? php 
                      while ($row=mysqli_fetch_array($query)){

                        ?>
                        <option value="<?php echo $row['id']?>"><?php echo $row['category']; ?> </option>
                        <?php
                      }
                      ?>
                      <option value="  "> select city </option>
                     

</select>
                      
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
           if(job_title=='')
           {
               alert("Please Enter job title");
               return false;

           }

           if(Description=='')
           {
               alert("Please Enter Description");
               return false;
               
           }

           if(countryId=='')
           {
               alert("Please select country");
               return false;

           }

           if(stateId=='')
           {
               alert("Please select state");
               return false;

           }
           if(cityId=='')
           {
               alert("Please select city");
               return false;

           }




            var data =$("#job_form").serialize();
            //alert(email);

            $.ajax({
           type:"POST",
            url:"add_new_job.php",
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
