
<?php 
    include "config.php";
    //{//not present

     if(isset($_POST['update'])){
        $s_id=$_POST['s_id'];
        $s_name=$_POST['s_name'];
        $gender=$_POST['gender'];
        $email=$_POST['email'];
        $ph_no=$_POST['ph_no'];
    
        $sql ="UPDATE student SET s_name ='$s_name',gender='$gender',email='$email',ph_no='$ph_no' WHERE s_id ='$s_id'";

       // $sql= "UPDATE `student` SET `s_name`='$s_name',`gender`='$gender',`email`='$email', where `s_name`='$s_name'";
       
       $result=$conn->query($sql);{
         if($result==TRUE){
    //   if (mysqli_query($conn, $sql)==TRUE) {
             //echo "records are updated successfully";
             echo"RECORD UPDATED SUCCESSFULLY.";
        }
        else{
            echo "Error:".$sql ."<br>".$conn->error;
        }
    }

        header("Refresh:4; url=view_student.php");

{
     if(isset($_GET['s_name'])){
        $s_name=$_GET['s_name'];

        $sql="SELECT * FROM  `student` WHERE 's_name'='$s_name'";

        $result=$conn->query($sql);
       
        if($result->num_rows > 0){
            while($row=$result->fetch_assoc()){
                $s_id=$_POST['s_id'];
                $s_name =$row['s_name'];
                $gender   =$row['gender'];
                $email=$row['email'];
                $ph_no=$row['ph_no'];

            }

        }
        else{
            //if s_name value is not valid redirect the user to view php page
            // header(' Location: view.php ');
            header("Refresh:4; url=view_student.php");
             
        }
    }
     }
    }
            
  ?>
<!DOCTYPE html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.5.1/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha385-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD55VohhpuuCOmLASjC" crossorigin="anonymous">
  <scripx src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.0/jquery.min.js"></scripx>
  <scripx src="https://maxcdn.bootstrapcdn.com/bootstrap/3.5.1/js/bootstrap.min.js"></scripx>

<body style="background: url(index_bg.jpeg);
background-size: 100%;
background-repeat: no-repeat;line-height:2.9">
    <h2 align="center" style= "color:rgb(255, 255, 255); font-size:85px; font-family:Gill Sans MT;line-height:2.9;">UPDATE STUDENT</h2>
        <br>
        
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                <form  class="formclass" method="POST" action="" align="center">      
                 <div class="row mb-3" align="center">
                         <label for="inputEmail3" class="col-sm-2 col-form-label" style= "color:rgb(255, 255, 255); font-size:18px; font-family:Gill Sans MT;">STUDENT ID </label>
                             <div class="col-sm-5">
                                 <input type="text" class="form-control" id="inputEmail3" name="s_id">
                             </div>
                     </div> 


            <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label" style= "color:rgb(255, 255, 255); font-size:18px; font-family:Gill Sans MT;">STUDENT NAME </label>
            <div class="col-sm-5">
            <input type="text" class="form-control" id="inputEmail3" name="s_name">
            </div>
        </div> 


        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label" style= "color:rgb(255, 255, 255); font-size:18px; font-family:Gill Sans MT;">GENDER </label>
            <div class="col-sm-5">
            <input type="text" class="form-control" id="inputEmail3" name="gender">
            </div>
        </div>

        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label" style= "color:rgb(255, 255, 255); font-size:18px; font-family:Gill Sans MT;">EMAIL </label>
            <div class="col-sm-5">
            <input type="email" class="form-control" id="colFormLabelSm" name="email" >
            </div>
        </div>
        
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label" style= "color:rgb(255, 255, 255); font-size:18px; font-family:Gill Sans MT;">PHONE NO </label>
            <div class="col-sm-5">
            <input type="text" class="form-control " id="colFormLabelSm" name="ph_no" >
            <br>

            <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-primary btn-lg" type="submit" name="update"><b>UPDATE</b></button>
            <a class="btn btn-primary btn-lg" href="view_student.php"><b> VIEW</b></a>
        </div>
            </div>
           
        </div>  
       <br><br>
       </form>
                </div>
                <div class="col-sm-3">
                <img src="student.jpg" class="img-fluid" alt="...">
                </div>

            </div>
        </div>
</body>
        
</html>
        
       
