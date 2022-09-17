


<?php

include('../db.php');

$user=$_SESSION['dept_adlogin'];

if(!isset($_SESSION['dept_adlogin'])) {
	header('location:../dept_admin_login.php');
	die();
}




$res=mysqli_query($con,"select *from  dept_admin where user_id='".$_SESSION['dept_adlogin']."'");


$active_user=mysqli_fetch_assoc($res);
$user_id=$active_user['user_id'];
$dept_code=$active_user['dept_code'];

 
 $res1=mysqli_query($con,"select dept_code from dept_admin  where dept_code='$dept_code'");
 $row=mysqli_fetch_assoc($res1);
 $recent=$row['dept_code'];






 extract($_POST);
if(isset($_POST['submit'])){
	
	
	
	$imageName=$_FILES['img']['name'];
	
	$event_id=mysqli_real_escape_string($con,$_POST['event_id']);
	$event_name=mysqli_real_escape_string($con,$_POST['event_name']);
	// $dept_code=mysqli_real_escape_string($con,$_POST['dept_code']);
	 $start_date=mysqli_real_escape_string($con,$_POST['start_date']);
	 $start_time=mysqli_real_escape_string($con,$_POST['start_time']);
	 
	 $end_date=mysqli_real_escape_string($con,$_POST['end_date']);
	 $end_time=mysqli_real_escape_String($con,$_POST['end_time']);
	 $registration_fee=mysqli_real_escape_string($con,$_POST['registration_fee']);
	 $payment_required=mysqli_real_escape_string($con,$_POST['payment_required']);
     $guest_allowed=mysqli_real_escape_string($con,$_POST['guest_allowed']);
	 $target_dept=mysqli_real_escape_string($con,$_POST['target_dept']);
	 $target_participants=mysqli_real_escape_String($con,$_POST['target_participants']);
	  $registration_enable=mysqli_real_escape_string($con,$_POST['registration_enable']);
	  $event_details=mysqli_real_escape_String($con,$_POST['details']);
	 $event_status=mysqli_real_escape_String($con,$_POST['event_status']);
	   $fb_link=mysqli_real_escape_string($con,$_POST['fb_link']);
	 $url_link=mysqli_real_escape_String($con,$_POST['url_link']);
	    $notice_link=mysqli_real_escape_string($con,$_POST['notice_link']);
	 $link_status=mysqli_real_escape_String($con,$_POST['link_status']);
	 
	 $allowed_exttension=array('gif','png','jpg','jpeg');
	 $imageName=$_FILES['img']['name'];
	 $file_extension=pathinfo($imageName,PATHINFO_EXTENSION);
		if (!in_array($file_extension,$allowed_exttension))
		{
	    $_SESSION['error']="only gif,png,jpg and jpeg are allowed";
	
		}
		else {
	 
	  $sql="select * from event where event_id='$event_id' ;";
      $res=mysqli_query($con,$sql);
   if (mysqli_num_rows($res) > 0) {
$row = mysqli_fetch_assoc($res);

     if($event_id==$row['event_id'])
     {
           $errorMsg ='Event ID alredy Exists.<br> Give event user ID';
          } 
     
      }
	 if(!isset($errorMsg)){ 
	 
	 //$password = $con->real_escape_string(md5($_POST['password']));
	 $result=mysqli_query($con,"Insert into event (event_id,event_name,dept_code,start_date,start_time,end_date,end_time,registration_fee,payment_required,guest_allowed,target_dept,target_participants,
	  registration_enable,event_status,details,image,fb_link,url_link,notice_link,link_status)
	 values('$event_id','$event_name','$recent','$start_date','$start_time','$end_date','$end_time','$registration_fee','$payment_required','$guest_allowed','$target_dept','$target_participants',
	 '$registration_enable','$event_status','$event_details','$imageName','$fb_link','$url_link','$notice_link','$link_status')" );
	 
	 
	 if($result)
    {
     $done=2; 
	 mkdir("../image/$event_id");
move_uploaded_file($_FILES['img']['tmp_name'],"../image/$event_id/".$_FILES['img']['name']);


 
		 $_SESSION['message']="<h2> Event  $event_id added sucessfully </h2>";
header('location:event_list_views_for_da.php');
	die();
	 
    }
    else{
      $error[] ='Failed : Something went wrong';
    } 
 
	 

	 }
		}
}


?>


<?php include('../dept_a_dash_head_00.php'); ?>

<?php include('../message.php') ?>

 <h3 style="color:#3034B0;" class="mt-4">Add a New Event Below for <?php echo $dept_code;?></h3>
					
					
 <form method="post" enctype="multipart/form-data">
  
  <div class="col-md-6">
 <?php if (isset($errorMsg)) { ?>
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo $errorMsg; ?>
          </div>
        <?php } ?>
</div>

<table id="table1">




		


 <tr>
 
    <td>Event ID</td>
	
	<td>  <input type="textbox" name="event_id"  value  ="<?php if(isset($errorMsg)){ echo $_POST['event_id'];}?>" required  placeholder="Enter user ID"/> </td>
 </tr>
 

 
 
 <!--<tr>
 <td> Dept. Code </td>
 <td> <input type="textbox" name="dept_code" /> </td>
 
 </tr> -->
 
 <tr>
    <td> Event NAME</td>
	<td><input type="textbox" name="event_name" placeholder="enter a name" required value  ="<?php if(isset($errorMsg)){ echo $_POST['password'];}?>" /> </td>
 
 
 
 </tr>
 
  
  
  <tr>
  


   <td>
  Dept.code:Fixed value <!-- <label for="dept_code">Dept.code:</label> -->
   </td> 
   <td>
   <?php 
$res=mysqli_query($con,"select *from  dept_admin where user_id='".$_SESSION['dept_adlogin']."'");
//$row=mysqli_fetch_assoc($res);

$active_user=mysqli_fetch_assoc($res);
$user_id=$active_user['user_id'];
$dept_code1=$active_user['dept_code'];

 
 $res1=mysqli_query($con,"select dept_code from dept_admin  where dept_code='$dept_code1'");
 $row=mysqli_fetch_assoc($res1);
 $recent=$row['dept_code'];
 
  ?>
  
 <?php echo  $recent; ?> 
	
	
  

  </td>
  
  
 
 </tr>
 

 

 
 <tr>
  <td> Start Date </td>
  <td> <input type="DATE" name="start_date" placeholder="Enter start date " required value  ="<?php if(isset($errorMsg)){ echo $_POST['start_date'];}?>" /> </td>
 
 </tr>
 
 
      <tr>
           <td> start time </td>
           <td> <input type="time" name="start_time" placeholder="Enter start time" required value  ="<?php if(isset($errorMsg)){ echo $_POST['start_time'];}?>" /> </td>
 
        </tr>
 
 
 
 <tr>
       <td> End DAte</td>
        <td> <input type="DATE" name="end_date" placeholder="Enter endind date" required value  ="<?php if(isset($errorMsg)){ echo $_POST['end_date'];}?>"/> </td>
 
 </tr>
 <tr>
           <td> end time </td>
           <td> <input type="time" name="end_time" placeholder="Enter a fee" required value  ="<?php if(isset($errorMsg)){ echo $_POST['end_time'];}?>" /> </td>
 
        </tr>
		
		
		<tr>
           <td> registration fee </td>
           <td> <input type="number" name="registration_fee" placeholder="Enter a fee" required value  ="<?php if(isset($errorMsg)){ echo $_POST['registration_fee'];}?>" /> </td>
 
        </tr>
 
    
                 <tr>
                    <td>
					     payment requred:</td>
						 
					<td>
					yes<input type="radio"   name="payment_required" value="1"  required />
		           no<input type="radio"   name="payment_required" value="0" required /> 	
					</td>
					
                      
				 </tr>
 
  
 
 
    
                 <tr>
                    <td>
					     Guest Allowed </td>
						 
					<td>
					yes<input type="radio"   name="guest_allowed" value="1"  required />
		           no<input type="radio"   name="guest_allowed" value="0" required /> 	
					</td>
					
                      
				 </tr>
 
               <tr>
   <td>
   <label for="target_Department">Target Department::</label>
   </td>
   <td>
  <select id="Target_dept" name="target_dept" required  >
   <option value="">--select--</option> 
	<option value="1">1.ALL</option>
    <option value="0">0.Others Dept</option>
	
	
  </select>
  </td>
  
  </tr>
					
						
						<tr>
   <td>
   <label for="target_participants">Target Participants::</label>
   </td>
   <td>
  <select id="target_participants" name="target_participants" required  >
   <option value="">--select--</option> 
	<option value="1">1.ALL</option>
    <option value="2">2.only student</option>
	<option value="3">3.Student+Academic staff</option>
	<option value="4">4.Student+Academic staff+Non_Academic staff</option>
    <option value="5">5.only academic Staff</option>
   
	<option value="6">6.academic staff+non_academic staff</option>
	<option value="7">7.only non academic staff</option>
	<option value="8">8.Alumni</option>
	<option value="9">9.Student+academic staff+alumni</option>
	<option value="10">10.Alumni+Academic staff+Non Academic_Staff</option> 
	
  </select>
  </td>
  
  </tr>
  
   <tr>
                    <td>
					     Registration Enable </td>
						 
					<td>
					yes<input type="radio"   name="registration_enable" value="1"  required />
		           no<input type="radio"   name="registration_enable" value="0" required /> 	
					</td>
					
                      
				 </tr>
				 
				 
				 <tr>
                    <td>
					    Event Status </td>
						 
					<td>
					yes<input type="radio"   name="event_status" value="1"  required />
		           no<input type="radio"   name="event_status" value="0" required /> 	
					</td>
					
                      
				 </tr>
				 
				 	 <tr>
                    <td>
					    Event Details/comments </td>
						 
					<td>
					<fieldset>
                      <textarea name="details" type="text" class="form-control" id="details" placeholder="write here..." required=""></textarea>
                    </fieldset>
					</td>
					
                      
				 </tr>
				  
				 
				   <tr>
				
   <td> Upload  Your Image  </td>
   <td> <input type="file" name="img"   /> </td>

					</tr>
				 
				 <tr>
				 
				 <td> Fb link </td>
				 <td> <input type="url" id="homepage2" name="fb_link" required> </td>
				 
				 </tr>
				  <tr>
				 
				 <td> URL  link </td>
				 <td> <input type="url" id="homepage1" name="url_link" required> </td>
				 
				 </tr>
				 
				   <tr>
				 
				 <td>Notice  link </td>
				 <td> <input type="url" id="1homepage" name="notice_link" required> </td>
				 
				 </tr>
				 
				 
				  <tr>
                    <td>
					    link Status </td>
						 
					<td>
					yes<input type="radio"   name="link_status" value="1"  required />
		           no<input type="radio"   name="link_status" value="0" required /> 	
					</td>
					
                      
				 </tr>
				
				
 <tr>
 
 <td> <input type="submit" name="submit" class="btn btn-primary btn-lg"  /> </td>
 
 </tr>
 
 


</table>

</form>


<br>
<div>


 <a href="event_list_views_for_da.php" class="upadmin"> Go Back to event list</a> 

</div>



<?php include('../dept_a_dash_footer_00.php') ;?>