<?php
    include("class/users.php");
    $qus=new users;
    $cat=$_POST['cat'];
    $qus->qus_show($cat);
	$_SESSION['cat']=$cat;
	$name=$_SESSION['name'];
	$profile=new users;
	$profile->users_profile($name);
	







 ?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta name="description" content="VTOP : An Official VIT, Vellore Web Portal">
	<meta name="”robots”" content="”NOODP,NOYDIR”">
	<meta name="keywords" content="VTOP, vtop, SDC,sdc ">
    <meta property="og:image" content="https://cullenwebservices.com/wp-content/uploads/2018/09/rawpixel-579231-unsplash.jpg" />
   	<meta http-equiv="cache-control" content="max-age=0">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">
    <meta charset="utf-8">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    

    <title>Vellore Institute of Technology (VIT)</title>
    
    

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>VIT University - VTOP</title>
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<link rel="icon" type="image/png" href="assets/img/favicon.png">
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="jquery-ui.css">
		<link rel="stylesheet" href="bootstrap.css">
 		<link rel="stylesheet" href="bootstrapValidator.css">
		<link rel="stylesheet" href="font-awesome.min.css">
		<link rel="stylesheet" href="AdminLteCompatibility.css">
		<link rel="stylesheet" href="VTopScrollbar.css">
		<link rel="stylesheet" href="VTop.css">		
		<link rel="stylesheet" href="scrollableTable.css">
		<script src="jquery-3.3.1.js"></script>
		
		 <script type="text/javascript">
            function timeout()
            {
                var minute=Math.floor(timeLeft/60);
                var second=timeLeft%60;
                if(second==0)
                {
                    clearTimeout(tm);
                    document.getElementById("form1").submit();
                }
                else
                {
                    document.getElementById("time").innerHTML=minute+":"+second;
                }
                timeLeft--;
                var tm=setTimeout(function(){timeout()},1000);
            }
        </script>
		
	
	
    
</head>
<style id="global-dark-mode" media="screen">html:before {
    content: " ";
    z-index: 100000000000000;
    pointer-events: none;
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.10);
  }</style>
  
  
<body style="padding-top: 50px;" onload="timeout()">

<div id="page_outline">


	<div id="page-holder" class="trim">	
	
	
	<header>
 	
		<nav class="navbar navbar-default navbar-fixed-top VTopHeader">
			 <div class="container-fluid">
			    <div class="navbar-header">
				    

			            <div class="navbar-brand">
							
					      <span>
						    <!-- page-holder -->
						    
						   </span>  
						    	
						    
						   
						  
						   
						   <span class="VITLogoStyle">VIT</span> 
						   <span class="VITSubLogoStyle">(Vellore Campus)</span> &nbsp;
						   
						   <input type="hidden" name="authorizedID" id="authorizedID" value="18BIT0348">
						   <!-- <button type="button" class="btn btn-default btn-sm" th:onclick="'javascript:goHomePage();'"><span class="glyphicon glyphicon-home"></span></button> -->
						   <!-- <button type="button" th:onclick="'javascript:goHomePage();'"><span style="color:blue" class="glyphicon glyphicon-home"></span></button> -->
						   <a href="vtophome.php" data-toggle="tooltip" title="Go To Home Page"><span style="color:white" class="glyphicon glyphicon-home"></span></a>
						
						   
						  
		                     		    
		                    		    
		                    	       
						</div>
			    </div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="hidden-xs nav navbar-nav navbar-right" style="margin:auto;">
						<li>
			                <a data-toggle="dropdown" class="dropdown-toggle small" href="#menu1">
				                <span class="VTopHeaderStyle">
								<?php
	foreach($profile->data as $prof)
	{?>
      <tr>
        <td><?php echo $prof['name'];?>(STUDENT)</td>
        
      </tr>
      
    </tbody>
	<?php }?>
				                
				                <span><b class="caret"></b></span></span>
			                </a>
			               <ul class="dropdown-menu VTopHeaderMenu">
			                   <?php
							   foreach($profile->data as $prof)
							   {?>
      
							   <h4 style="color:white;">NAME:-</h4>
							   <h4 style="color:white;"><?php echo $prof['user'];?></h4>
							   <h4 style="color:white;">EMAIL-ID</h4>
							   <h4 style="color:white;"><?php echo $prof['email'];?></h4>
		
		                     <div class="btn-group btn-group-justified">
				                    			                    
				                    <a class="btn btn-success" href="vitlogin.php" >Sign out</a>
				                </div>
      
      
    </tbody>
	<?php }?>
			                    <li><a href="#" class="text-center"><span style="white-space: initial;"></span></a></li>
			                    <li>
			                    </li>
			                </ul>
			            </li>						
		            </ul>
					
										    
				 </div>
			   
			</div>
		</nav>
		<script>
 			function toggleVTopMenu() {
				$("#wrapper").toggleClass("menuDisplayed");
				if (window.matchMedia('(max-width: 767px)').matches) {
					$('#button-panel').toggle();
				}
			}
 			
 			
		</script>			
	</header>



			<input type="hidden" name="authorizedIDX" id="authorizedIDX" value="18BIT0348">
			
			<div class="container-fluid">
			<div class="row">
			<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 trim">
			
					
	
					<div id="wrapper" class="">
						<div id="sidebar-wrapper" class="hidden-xs nav nav-sidebar">
			 				<aside>

		
			<div class="panel panel-default"><div class="panel-heading"></div>  <div id="MenuBody2"><div class="panel-body"> <ul class="nav"><li><a href="javascript:loadmydiv('hrms/contactDetails')" id="HRM0062">	 <i class="fa fa-phone-square" style="padding-right:12px;"></i>&nbsp;&nbsp; Contact Us</a></li>
		
			</ul><div class="panel-group" role="tablist" id="accordian0"><div class="panel panel-default"><div class="panel-heading" role="tab">  <h4 class="menu-title"><a data-toggle="collapse" class="text-capitalize" data-parent="#accordian0" href="#MenuBody3" aria-expanded="false">  <i class="fa fa-briefcase" style="width:23px" ;=""></i>&nbsp;&nbsp; My Info </a></h4></div> <div id="MenuBody3" class="panel-collapse collapse"><div class="panel-body"> <ul class="nav">
		
			<li><a href="javascript:loadmydiv('studentsRecord/StudentProfileAllView')" id="STA002">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Profile</a></li>
		
			<li><a href="javascript:loadmydiv('proctor/viewStudentCredentials')" id="ADM0218">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Your Credentials</a></li>
		
			<li><a href="javascript:loadmydiv('admissions/dayboarderForMenu')" id="ADM0216">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Dayboarder Info</a></li>
		
			<li><a href="javascript:loadmydiv('admissions/AcknowledgmentView')" id="ADM0217">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Acknowledgement View</a></li>
		
			<li><a href="javascript:loadmydiv('studentBankInformation/BankInfoStudent')" id="FIN0140">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Student Bank Info</a></li>
		
			<li><a href="javascript:loadmydiv('examinations/examPadCrendentials')" id="EXM0033">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; DigitalPad Device Credentials</a></li>
		
			</ul></div></div></div><div class="panel panel-default"><div class="panel-heading" role="tab">  <h4 class="menu-title"><a data-toggle="collapse" class="text-capitalize" data-parent="#accordian0" href="#MenuBody4" aria-expanded="false">  <i class="fa fa-info-circle" style="width:23px" ;=""></i>&nbsp;&nbsp; Info Corner </a></h4></div> <div id="MenuBody4" class="panel-collapse collapse"><div class="panel-body"> <ul class="nav">
		
			<li><a href="javascript:loadmydiv('academics/common/FaqPreview')" id="ACD0273">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; FAQ</a></li>
		
			<li><a href="javascript:loadmydiv('spotlight/spotlightViewOld')" id="CPL0038">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Spotlight </a></li>
		
			<li><a href="javascript:loadmydiv('admissions/costCentreCircularsViewPageController')" id="ACD0147">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; View Circular(s)</a></li>
		
			</ul></div></div></div><div class="panel panel-default"><div class="panel-heading" role="tab">  <h4 class="menu-title"><a data-toggle="collapse" class="text-capitalize" data-parent="#accordian0" href="#MenuBody5" aria-expanded="false">  <i class="fa fa-paw" style="width:23px" ;=""></i>&nbsp;&nbsp; Proctor </a></h4></div> <div id="MenuBody5" class="panel-collapse collapse"><div class="panel-body"> <ul class="nav">
		
			<li><a href="javascript:loadmydiv('proctor/viewProctorDetails')" id="PRC0001">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; View Proctor Details</a></li>
		
			<li><a href="javascript:loadmydiv('proctor/viewMessagesSendByProctor')" id="PRC0002">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; View VTOP Message from Proctor</a></li>
		
			</ul></div></div></div><div class="panel panel-default"><div class="panel-heading" role="tab">  <h4 class="menu-title"><a data-toggle="collapse" class="text-capitalize" data-parent="#accordian0" href="#MenuBody6" aria-expanded="false">  <i class="fa fa-graduation-cap" style="width:23px" ;=""></i>&nbsp;&nbsp; Academics </a></h4></div> <div id="MenuBody6" class="panel-collapse collapse"><div class="panel-body"> <ul class="nav">
		
			<li><a href="javascript:loadmydiv('hrms/viewHodDeanDetails')" id="ACD0163">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; HOD and Dean Info</a></li>
		
			<li><a href="javascript:loadmydiv('hrms/employeeSearchForStudent')" id="ACD0167">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Faculty Info</a></li>
		
			<li><a href="javascript:loadmydiv('academics/common/BiometricInfo')" id="ACD0200">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Biometric Info</a></li>
		
			<li><a href="javascript:loadmydiv('academics/common/StudentClassMessage')" id="ACD0152">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Class Messages</a></li>
		
			<li><a href="javascript:loadmydiv('academics/council/CouncilRegulationView/new')" id="ACD0120">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Regulation</a></li>
		
			<li><a href="javascript:loadmydiv('academics/common/Curriculum')" id="ACD0104">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; My Curriculum</a></li>
		
			<li><a href="javascript:loadmydiv('academics/additionalLearning/AdditionalLearningStudentView')" id="ACD0211">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Minor/ Honour</a></li>
		
			<li><a href="javascript:loadmydiv('academics/common/StudentTimeTable')" id="ACD0034">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Time Table</a></li>
		
			<li><a href="javascript:loadmydiv('academics/OnlineCOC/StudentOnlineCOC')" id="ACD0241">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Course Option Change</a></li>
		
			<li><a href="javascript:loadmydiv('academics/common/CourseWithDraw')" id="ACD0236">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Course Withdraw</a></li>
		
			<li><a href="javascript:loadmydiv('academics/common/StudentAttendance')" id="ACD0042">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Class Attendance</a></li>
		
			<li><a href="javascript:loadmydiv('academics/common/StudentCoursePage')" id="ACD0045">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Course Page</a></li>
		
			<li><a href="javascript:loadmydiv('internship/InternshipRegistration')" id="ACD0057">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Industrial Internship </a></li>
		
			<li><a href="javascript:loadmydiv('academics/common/ProjectView')" id="ACD0088">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Project</a></li>
		
			<li><a href="javascript:loadmydiv('examinations/StudentDA')" id="EXM0017">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Digital Assignment Upload</a></li>
		
			<li><a href="javascript:loadmydiv('academics/common/QCMStudentLogin')" id="ACD0071">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; QCM View </a></li>
		
			<li><a href="javascript:loadmydiv('set/setRegistrationViewPage')" id="ACD0059">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; SET Conference Registration</a></li>
		
			<li><a href="javascript:loadmydiv('academics/common/ExtraCurricular')" id="ACD0047">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Co-Extra Curricular</a></li>
		
			<li><a href="javascript:loadmydiv('academics/common/WishlistStudent')" id="ACD0079">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; WishList Registraion </a></li>
		
			<li><a href="javascript:loadmydiv('academics/common/CalendarPreview')" id="ACD0128">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Academic Calendar</a></li>
		
			</ul></div></div></div><div class="panel panel-default"><div class="panel-heading" role="tab">  <h4 class="menu-title"><a data-toggle="collapse" class="text-capitalize" data-parent="#accordian0" href="#MenuBody7" aria-expanded="false">  <i class="fa fa-bank" style="width:23px" ;=""></i>&nbsp;&nbsp; Research </a></h4></div> <div id="MenuBody7" class="panel-collapse collapse"><div class="panel-body"> <ul class="nav">
		
			<li><a href="javascript:loadmydiv('research/researchProfile')" id="RSH0001">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; My Research Profile</a></li>
		
			<li><a href="javascript:loadmydiv('admissions/semTransactionPageControllerGeneral')" id="RSH0104">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; SEM Request</a></li>
		
			<li><a href="javascript:loadmydiv('research/CourseworkRegistration')" id="RSH0053">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Course Work Registration</a></li>
		
			<li><a href="javascript:loadmydiv('research/CourseworkRegistrationViewtoScholar')" id="RSH0054">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Registration Status</a></li>
		
			<li><a href="javascript:loadmydiv('research/scholarsMeetingView')" id="RSH0056">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Meeting info</a></li>
		
			<li><a href="javascript:loadmydiv('research/scholarsAttendanceView')" id="RSH0055">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Attendance view</a></li>
		
			<li><a href="javascript:loadmydiv('research/scholar/leave/request')" id="RSH0068">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; ScholarLeave Request</a></li>
		
			</ul></div></div></div><div class="panel panel-default"><div class="panel-heading" role="tab">  <h4 class="menu-title"><a data-toggle="collapse" class="text-capitalize" data-parent="#accordian0" href="#MenuBody8" aria-expanded="false">  <i class="fa fa-book" style="width:23px" ;=""></i>&nbsp;&nbsp; Examination </a></h4></div> <div id="MenuBody8" class="panel-collapse collapse"><div class="panel-body"> <ul class="nav">
		
			<li><a href="javascript:loadmydiv('examinations/StudExamSchedule')" id="EXM0006">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Exam Schedule</a></li>
		
			<li><a href="finalresult.php" id="EXM0011">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Marks</a></li>
		
			<li><a href="javascript:loadmydiv('examinations/examGradeView/StudentGradeView')" id="EXM0065">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Grades</a></li>
		
			<li><a href="javascript:loadmydiv('examinations/paperSeeing/PaperSeeing')" id="EXM0070">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Paper See/Rev</a></li>
		
			<li><a href="javascript:loadmydiv('examinations/examGradeView/StudentGradeHistory')" id="EXM0023">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Grade History</a></li>
		
			<li><a href="javascript:loadmydiv('examinations/projectFileUpload/ProjectView')" id="EXM0069">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Project File Upload</a></li>
		
			<li><a href="javascript:loadmydiv('examinations/gotToMoocCourseInitial')" id="EXM0172">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; MOOC File upload</a></li>
		
			<li><a href="javascript:loadmydiv('examinations/ecaUpload/viewCourse')" id="EXM0046">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; ECA File Upload</a></li>
		
			<li><a href="javascript:loadmydiv('compre/eptScheduleShow')" id="VEX0009">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; EPT schedule</a></li>
		
			</ul><div class="panel-group" role="tablist" id="accordian2"><div class="panel panel-default"><div class="panel-heading" role="tab">  <h4 class="menu-title"><a data-toggle="collapse" class="text-capitalize" data-parent="#accordian2" href="#MenuBody9" aria-expanded="false"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp; Comprehensive </a></h4></div> <div id="MenuBody9" class="panel-collapse collapse"><div class="panel-body"> <ul class="nav">
		
			<li><a href="javascript:loadmydiv('compre/registrationForm')" id="COM0001">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Comprehensive Exam</a></li>
		
			<li><a href="javascript:loadmydiv('compre/questionPreview')" id="COM0005">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Question Preview</a></li>
		
			<li><a href="javascript:loadmydiv('compre/studentExamInfo')" id="COM0002">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Exam Information</a></li>
		
			</ul></div></div></div><div class="panel panel-default"><div class="panel-heading" role="tab">  <h4 class="menu-title"><a data-toggle="collapse" class="text-capitalize" data-parent="#accordian2" href="#MenuBody10" aria-expanded="false"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp; Arrear Details </a></h4></div> <div id="MenuBody10" class="panel-collapse collapse"><div class="panel-body"> <ul class="nav">
		
			</ul><div class="panel-group" role="tablist" id="accordian3"><div class="panel panel-default"><div class="panel-heading" role="tab">  <h4 class="menu-title"><a data-toggle="collapse" class="text-capitalize" data-parent="#accordian3" href="#MenuBody11" aria-expanded="false"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp; Regular Arrear </a></h4></div> <div id="MenuBody11" class="panel-collapse collapse"><div class="panel-body"> <ul class="nav">
		
			<li><a href="javascript:loadmydiv('examinations/arrearRegistration/RegularArrearStudentReg')" id="EXM0088">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Registration</a></li>
		
			<li><a href="javascript:loadmydiv('examinations/arrearRegistration/LoadRegularArrearViewPage')" id="EXM0093">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Registration Details</a></li>
		
			<li><a href="javascript:loadmydiv('examinations/arrearRegistration/viewRARExamSchedule')" id="EXM0107">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Exam Schedule</a></li>
		
			<li><a href="javascript:loadmydiv('examinations/arrearRegistration/StudentArrearGradeView')" id="EXM0127">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Grade View</a></li>
		
			<li><a href="javascript:loadmydiv('examinations/regularArrear/RegularArrearPaperSeeing')" id="EXM0131">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Paper See/Rev</a></li>
		
			</ul></div></div></div></div></div></div><ul class="nav"><li><a href="javascript:loadmydiv('examinations/reFAT/StudentReFATRequestPageController')" id="EXM0138">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; ReFAT Application</a></li>
		
			</ul></div></div></div></div></div><div class="panel panel-default"><div class="panel-heading" role="tab">  <h4 class="menu-title"><a data-toggle="collapse" class="text-capitalize" data-parent="#accordian0" href="#MenuBody12" aria-expanded="false">  <i class="fa fa-space-shuttle" style="width:23px" ;=""></i>&nbsp;&nbsp; Services </a></h4></div> <div id="MenuBody12" class="panel-collapse collapse"><div class="panel-body"> <ul class="nav">
		
			<li><a href="javascript:loadmydiv('hrms/onlineBookRecommendation')" id="LIB0002">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Online Book Recommendation</a></li>
		
			<li><a href="javascript:loadmydiv('alumni/alumniTranscriptPageControl')" id="EXM0205">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Transcript Request</a></li>
		
			<li><a href="javascript:loadmydiv('admissions/scholarshipPageController')" id="ADM0161">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Financial Assistance Scholarship</a></li>
		
			<li><a href="javascript:loadmydiv('admissions/SpecialAchieversAward')" id="ADM0163">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Special Achievers</a></li>
		
			<li><a href="javascript:loadmydiv('admissions/programmeMigration')" id="ADM0194">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Programme Migration</a></li>
		
			<li><a href="javascript:loadmydiv('hostels/late/hour/student/request/1')" id="HSL0143">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Late Hour Request</a></li>
		
			<li><a href="javascript:loadmydiv('vitaa/finalyearcheck')" id="ALU0002">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Final Year Registration</a></li>
		
			<li><a href="javascript:loadmydiv('admissions/reserachFresherCertUpload')" id="ADM0202">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Fresher Certificate Upload</a></li>
		
			</ul></div></div></div><div class="panel panel-default"><div class="panel-heading" role="tab">  <h4 class="menu-title"><a data-toggle="collapse" class="text-capitalize" data-parent="#accordian0" href="#MenuBody13" aria-expanded="false">  <i class="fa fa-bank" style="width:23px" ;=""></i>&nbsp;&nbsp; Library </a></h4></div> <div id="MenuBody13" class="panel-collapse collapse"><div class="panel-body"> <ul class="nav">
		
			<li><a href="javascript:loadmydiv('p2p/studentScanningRequest')" id="LIB0005">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Scanning Request</a></li>
		
			<li><a href="javascript:loadmydiv('library/studentScanningRequestKeys')" id="LIB0006">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; My Keys</a></li>
		
			</ul></div></div></div><div class="panel panel-default"><div class="panel-heading" role="tab">  <h4 class="menu-title"><a data-toggle="collapse" class="text-capitalize" data-parent="#accordian0" href="#MenuBody14" aria-expanded="false">  <i class="fa fa-certificate" style="width:23px" ;=""></i>&nbsp;&nbsp; Bonafide </a></h4></div> <div id="MenuBody14" class="panel-collapse collapse"><div class="panel-body"> <ul class="nav">
		
			<li><a href="javascript:loadmydiv('others/bonafide/StudentBonafidePageControl')" id="OTH0011">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Apply Bonafide</a></li>
		
			</ul></div></div></div><div class="panel panel-default"><div class="panel-heading" role="tab">  <h4 class="menu-title"><a data-toggle="collapse" class="text-capitalize" data-parent="#accordian0" href="#MenuBody15" aria-expanded="false">  <i class="fa fa-cc-visa" style="width:23px" ;=""></i>&nbsp;&nbsp; Online Payments </a></h4></div> <div id="MenuBody15" class="panel-collapse collapse"><div class="panel-body"> <ul class="nav">
		
			<li><a href="javascript:loadmydiv('p2p/Payments')" id="FIN0135">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Payments</a></li>
		
			<li><a href="javascript:loadmydiv('p2p/getReceiptsApplno')" id="FIN0136">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Payment Receipts</a></li>
		
			<li><a href="javascript:loadmydiv('finance/getFeesIntimation')" id="FIN0137">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Fees Intimation</a></li>
		
			<li><a href="javascript:loadmydiv('finance/getOnlineTransfer')" id="FIN0139">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Online Transfer</a></li>
		
			<li><a href="javascript:loadmydiv('p2p/library')" id="LIB0001">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Library</a></li>
		
			</ul></div></div></div><div class="panel panel-default"><div class="panel-heading" role="tab">  <h4 class="menu-title"><a data-toggle="collapse" class="text-capitalize" data-parent="#accordian0" href="#MenuBody16" aria-expanded="false">  <i class="fa fa-home" style="width:23px" ;=""></i>&nbsp;&nbsp; Hostels </a></h4></div> <div id="MenuBody16" class="panel-collapse collapse"><div class="panel-body"> <ul class="nav">
		
			<li><a href="javascript:loadmydiv('hostels/student/counselling/registration/3')" id="HSL0172">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Freshers Hostel Registration</a></li>
		
			<li><a href="javascript:loadmydiv('hostels/student/leave/1')" id="HSL0021">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Leave Request</a></li>
		
			<li><a href="javascript:loadmydiv('hostels/counselling/mess/registration/1')" id="HSL0100">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Mess Selection 2020-2021</a></li>
		
			<li><a href="javascript:loadmydiv('hostels/onlineMessChange')" id="HSL0124">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Mess Change </a></li>
		
			<li><a href="javascript:loadmydiv('hostels/summerRoomDetails')" id="HSL0116">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Fall 19-20 Room-Details</a></li>
		
			</ul></div></div></div><div class="panel panel-default"><div class="panel-heading" role="tab">  <h4 class="menu-title"><a data-toggle="collapse" class="text-capitalize" data-parent="#accordian0" href="#MenuBody17" aria-expanded="false">  <i class="fa fa-inr" style="width:23px" ;=""></i>&nbsp;&nbsp; Receipt Book </a></h4></div> <div id="MenuBody17" class="panel-collapse collapse"><div class="panel-body"> <ul class="nav">
		
			<li><a href="javascript:loadmydiv('finance/ReceiptBookExternalBilling')" id="FIN0093">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; External Billing</a></li>
		
			<li><a href="javascript:loadmydiv('finance/getTotstudentReport')" id="FIN0098">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; My Collection Report</a></li>
		
			<li><a href="javascript:loadmydiv('finance/ReceiptBookInternalBilling')" id="FIN0094">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Internal Billing</a></li>
		
			</ul></div></div></div><div class="panel panel-default"><div class="panel-heading" role="tab">  <h4 class="menu-title"><a data-toggle="collapse" class="text-capitalize" data-parent="#accordian0" href="#MenuBody18" aria-expanded="false">  <i class="fa fa-book" style="width:23px" ;=""></i>&nbsp;&nbsp; ASC FDP </a></h4></div> <div id="MenuBody18" class="panel-collapse collapse"><div class="panel-body"> <ul class="nav">
		
			<li><a href="javascript:loadmydiv('events/ASC/EventsRegistration')" id="EVE0009">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; FDP Registration</a></li>
		
			<li><a href="javascript:loadmydiv('events/ASC/EventsCertificateDownload')" id="EVE0010">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; Participant Certificate</a></li>
		
			</ul></div></div></div><div class="panel panel-default"><div class="panel-heading" role="tab">  <h4 class="menu-title"><a data-toggle="collapse" class="text-capitalize" data-parent="#accordian0" href="#MenuBody19" aria-expanded="false">  <i class="fa fa-shield" style="width:23px" ;=""></i>&nbsp;&nbsp; Events </a></h4></div> <div id="MenuBody19" class="panel-collapse collapse"><div class="panel-body"> <ul class="nav">
		
			</ul><div class="panel-group" role="tablist" id="accordian1001"><div class="panel panel-default"><div class="panel-heading" role="tab">  <h4 class="menu-title"><a data-toggle="collapse" class="text-capitalize" data-parent="#accordian1001" href="#MenuBody20" aria-expanded="false"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp; University Day </a></h4></div> <div id="MenuBody20" class="panel-collapse collapse"><div class="panel-body"> <ul class="nav">
		
			<li><a href="javascript:loadmydiv('event/uday/certificates')" id="EVE0076">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o" style="padding-right:2px"></i>&nbsp;&nbsp; eCertificates</a></li>
		
			</ul></div></div></div></div></div></div></div><div class="panel panel-default"><div class="panel-heading" role="tab">  <h4 class="menu-title"><a data-toggle="collapse" class="text-capitalize" data-parent="#accordian0" href="#MenuBody21" aria-expanded="false">  <i class="glyphicon glyphicon-lock" style="width:23px" ;=""></i>&nbsp;&nbsp; My Account </a></h4></div> <div id="MenuBody21" class="panel-collapse collapse"><div class="panel-body"> <ul class="nav">
		
			<li><a href="javascript:loadmydiv('controlpanel/ChangePassword')" id="CNTXXX1">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="glyphicon glyphicon-lock" style="padding-right:2px"></i>&nbsp;&nbsp; Change Password</a></li>
		
			<li><a href="javascript:loadmydiv('controlpanel/ChangePreferredUser')" id="CNTXXX3">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="glyphicon glyphicon-lock" style="padding-right:2px"></i>&nbsp;&nbsp; Update LoginID</a></li></ul></div></div></div></div>
		
		
	</div></div></div></aside>

						</div>
		 				<div id="button-panel">
			 				<aside>
	
			

	<section>
		<div class="btn-group-vertical dropright">
					
			
				<div class="dropdown">	 <a class="btn btn-default btn-group-justified dropdown-toggle " type="button"><span class="fa fa-phone-square"></span></a> <div class="dropdown-menu btnList "><div class="panel panel-default"><div class="panel-body" style="padding-left:25px;font-size:12px;"><ul class="nav"><li><a href="javascript:loadmydiv('hrms/contactDetails')" id="HRM0062" class="btnItem" onclick="toggleButtonMenuItem()">  <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Contact Us</a></li></ul></div></div></div></div>
			
				<div class="dropdown">	 <a class="btn btn-default btn-group-justified dropdown-toggle " type="button"><span class="fa fa-briefcase"></span></a> <div class="dropdown-menu btnList "><div class="panel-group" role="tablist" id="BtnAccordian1"><div class="panel panel-default"><div class="panel-heading"> <h4 class="disabled text-capitalize text-center menu-header">&nbsp;&nbsp;My Info</h4> </div> <div id="BtnBody21112"><div class="panel-body"> <ul class="nav">
			
				<li><a href="javascript:loadmydiv('studentsRecord/StudentProfileAllView')" id="STA002" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Profile</a></li>
			
				<li><a href="javascript:loadmydiv('proctor/viewStudentCredentials')" id="ADM0218" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Your Credentials</a></li>
			
				<li><a href="javascript:loadmydiv('admissions/dayboarderForMenu')" id="ADM0216" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Dayboarder Info</a></li>
			
				<li><a href="javascript:loadmydiv('admissions/AcknowledgmentView')" id="ADM0217" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Acknowledgement View</a></li>
			
				<li><a href="javascript:loadmydiv('studentBankInformation/BankInfoStudent')" id="FIN0140" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Student Bank Info</a></li>
			
				<li><a href="javascript:loadmydiv('examinations/examPadCrendentials')" id="EXM0033" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;DigitalPad Device Credentials</a></li>
			
				</ul></div></div></div></div></div></div><div class="dropdown">	 <a class="btn btn-default btn-group-justified dropdown-toggle " type="button"><span class="fa fa-info-circle"></span></a> <div class="dropdown-menu btnList "><div class="panel-group" role="tablist" id="BtnAccordian2"><div class="panel panel-default"><div class="panel-heading"> <h4 class="disabled text-capitalize text-center menu-header">&nbsp;&nbsp;Info Corner</h4> </div> <div id="BtnBody21113"><div class="panel-body"> <ul class="nav">
			
				<li><a href="javascript:loadmydiv('academics/common/FaqPreview')" id="ACD0273" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;FAQ</a></li>
			
				<li><a href="javascript:loadmydiv('spotlight/spotlightViewOld')" id="CPL0038" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Spotlight </a></li>
			
				<li><a href="javascript:loadmydiv('admissions/costCentreCircularsViewPageController')" id="ACD0147" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;View Circular(s)</a></li>
			
				</ul></div></div></div></div></div></div><div class="dropdown">	 <a class="btn btn-default btn-group-justified dropdown-toggle " type="button"><span class="fa fa-paw"></span></a> <div class="dropdown-menu btnList "><div class="panel-group" role="tablist" id="BtnAccordian3"><div class="panel panel-default"><div class="panel-heading"> <h4 class="disabled text-capitalize text-center menu-header">&nbsp;&nbsp;Proctor</h4> </div> <div id="BtnBody21114"><div class="panel-body"> <ul class="nav">
			
				<li><a href="javascript:loadmydiv('proctor/viewProctorDetails')" id="PRC0001" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;View Proctor Details</a></li>
			
				<li><a href="javascript:loadmydiv('proctor/viewMessagesSendByProctor')" id="PRC0002" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;View VTOP Message from Proctor</a></li>
			
				</ul></div></div></div></div></div></div><div class="dropdown">	 <a class="btn btn-default btn-group-justified dropdown-toggle " type="button"><span class="fa fa-graduation-cap"></span></a> <div class="dropdown-menu btnList "><div class="panel-group" role="tablist" id="BtnAccordian4"><div class="panel panel-default"><div class="panel-heading"> <h4 class="disabled text-capitalize text-center menu-header">&nbsp;&nbsp;Academics</h4> </div> <div id="BtnBody21115"><div class="panel-body"> <ul class="nav">
			
				<li><a href="javascript:loadmydiv('hrms/viewHodDeanDetails')" id="ACD0163" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;HOD and Dean Info</a></li>
			
				<li><a href="javascript:loadmydiv('hrms/employeeSearchForStudent')" id="ACD0167" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Faculty Info</a></li>
			
				<li><a href="javascript:loadmydiv('academics/common/BiometricInfo')" id="ACD0200" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Biometric Info</a></li>
			
				<li><a href="javascript:loadmydiv('academics/common/StudentClassMessage')" id="ACD0152" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Class Messages</a></li>
			
				<li><a href="javascript:loadmydiv('academics/council/CouncilRegulationView/new')" id="ACD0120" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Regulation</a></li>
			
				<li><a href="javascript:loadmydiv('academics/common/Curriculum')" id="ACD0104" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;My Curriculum</a></li>
			
				<li><a href="javascript:loadmydiv('academics/additionalLearning/AdditionalLearningStudentView')" id="ACD0211" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Minor/ Honour</a></li>
			
				<li><a href="javascript:loadmydiv('academics/common/StudentTimeTable')" id="ACD0034" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Time Table</a></li>
			
				<li><a href="javascript:loadmydiv('academics/OnlineCOC/StudentOnlineCOC')" id="ACD0241" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Course Option Change</a></li>
			
				<li><a href="javascript:loadmydiv('academics/common/CourseWithDraw')" id="ACD0236" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Course Withdraw</a></li>
			
				<li><a href="javascript:loadmydiv('academics/common/StudentAttendance')" id="ACD0042" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Class Attendance</a></li>
			
				<li><a href="javascript:loadmydiv('academics/common/StudentCoursePage')" id="ACD0045" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Course Page</a></li>
			
				<li><a href="javascript:loadmydiv('internship/InternshipRegistration')" id="ACD0057" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Industrial Internship </a></li>
			
				<li><a href="javascript:loadmydiv('academics/common/ProjectView')" id="ACD0088" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Project</a></li>
			
				<li><a href="javascript:loadmydiv('examinations/StudentDA')" id="EXM0017" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Digital Assignment Upload</a></li>
			
				<li><a href="javascript:loadmydiv('academics/common/QCMStudentLogin')" id="ACD0071" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;QCM View </a></li>
			
				<li><a href="javascript:loadmydiv('set/setRegistrationViewPage')" id="ACD0059" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;SET Conference Registration</a></li>
			
				<li><a href="javascript:loadmydiv('academics/common/ExtraCurricular')" id="ACD0047" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Co-Extra Curricular</a></li>
			
				<li><a href="javascript:loadmydiv('academics/common/WishlistStudent')" id="ACD0079" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;WishList Registraion </a></li>
			
				<li><a href="javascript:loadmydiv('academics/common/CalendarPreview')" id="ACD0128" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Academic Calendar</a></li>
			
				</ul></div></div></div></div></div></div><div class="dropdown">	 <a class="btn btn-default btn-group-justified dropdown-toggle " type="button"><span class="fa fa-bank"></span></a> <div class="dropdown-menu btnList "><div class="panel-group" role="tablist" id="BtnAccordian5"><div class="panel panel-default"><div class="panel-heading"> <h4 class="disabled text-capitalize text-center menu-header">&nbsp;&nbsp;Research</h4> </div> <div id="BtnBody21116"><div class="panel-body"> <ul class="nav">
			
				<li><a href="javascript:loadmydiv('research/researchProfile')" id="RSH0001" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;My Research Profile</a></li>
			
				<li><a href="javascript:loadmydiv('admissions/semTransactionPageControllerGeneral')" id="RSH0104" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;SEM Request</a></li>
			
				<li><a href="javascript:loadmydiv('research/CourseworkRegistration')" id="RSH0053" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Course Work Registration</a></li>
			
				<li><a href="javascript:loadmydiv('research/CourseworkRegistrationViewtoScholar')" id="RSH0054" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Registration Status</a></li>
			
				<li><a href="javascript:loadmydiv('research/scholarsMeetingView')" id="RSH0056" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Meeting info</a></li>
			
				<li><a href="javascript:loadmydiv('research/scholarsAttendanceView')" id="RSH0055" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Attendance view</a></li>
			
				<li><a href="javascript:loadmydiv('research/scholar/leave/request')" id="RSH0068" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;ScholarLeave Request</a></li>
			
				</ul></div></div></div></div></div></div><div class="dropdown">	 <a class="btn btn-default btn-group-justified dropdown-toggle " type="button"><span class="fa fa-book"></span></a> <div class="dropdown-menu btnList "><div class="panel-group" role="tablist" id="BtnAccordian6"><div class="panel panel-default"><div class="panel-heading"> <h4 class="disabled text-capitalize text-center menu-header">&nbsp;&nbsp;Examination</h4> </div> <div id="BtnBody21117"><div class="panel-body"> <ul class="nav">
			
				<li><a href="javascript:loadmydiv('examinations/StudExamSchedule')" id="EXM0006" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Exam Schedule</a></li>
			
				<li><a href="finalresult.php" id="EXM0011" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Marks</a></li>
			
				<li><a href="javascript:loadmydiv('examinations/examGradeView/StudentGradeView')" id="EXM0065" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Grades</a></li>
			
				<li><a href="javascript:loadmydiv('examinations/paperSeeing/PaperSeeing')" id="EXM0070" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Paper See/Rev</a></li>
			
				<li><a href="javascript:loadmydiv('examinations/examGradeView/StudentGradeHistory')" id="EXM0023" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Grade History</a></li>
			
				<li><a href="javascript:loadmydiv('examinations/projectFileUpload/ProjectView')" id="EXM0069" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Project File Upload</a></li>
			
				<li><a href="javascript:loadmydiv('examinations/gotToMoocCourseInitial')" id="EXM0172" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;MOOC File upload</a></li>
			
				<li><a href="javascript:loadmydiv('examinations/ecaUpload/viewCourse')" id="EXM0046" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;ECA File Upload</a></li>
			
				<li><a href="javascript:loadmydiv('compre/eptScheduleShow')" id="VEX0009" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;EPT schedule</a></li>
			
				<div class="panel-group" role="tablist" id="BtnAccordian7"><div class="panel panel-default"><div class="panel-heading" role="tab">  <h4 class="menu-title"><a data-toggle="collapse" data-parent="#BtnAccordian7" class="btnList" href="#BtnBody21118" aria-expanded="false"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Comprehensive</a></h4></div> <div id="BtnBody21118" class="panel-collapse collapse"><div class="panel-body"> <ul class="nav">
			
				<li><a href="javascript:loadmydiv('compre/registrationForm')" id="COM0001" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Comprehensive Exam</a></li>
			
				<li><a href="javascript:loadmydiv('compre/questionPreview')" id="COM0005" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Question Preview</a></li>
			
				<li><a href="javascript:loadmydiv('compre/studentExamInfo')" id="COM0002" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Exam Information</a></li>
			
				</ul></div></div></div><div class="panel panel-default"><div class="panel-heading" role="tab">  <h4 class="menu-title"><a data-toggle="collapse" data-parent="#BtnAccordian7" class="btnList" href="#BtnBody21119" aria-expanded="false"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Arrear Details</a></h4></div> <div id="BtnBody21119" class="panel-collapse collapse"><div class="panel-body"> <ul class="nav">
			
				<div class="panel-group" role="tablist" id="BtnAccordian8"><div class="panel panel-default"><div class="panel-heading" role="tab">  <h4 class="menu-title"><a data-toggle="collapse" data-parent="#BtnAccordian8" class="btnList" href="#BtnBody21120" aria-expanded="false"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Regular Arrear</a></h4></div> <div id="BtnBody21120" class="panel-collapse collapse"><div class="panel-body"> <ul class="nav">
			
				<li><a href="javascript:loadmydiv('examinations/arrearRegistration/RegularArrearStudentReg')" id="EXM0088" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Registration</a></li>
			
				<li><a href="javascript:loadmydiv('examinations/arrearRegistration/LoadRegularArrearViewPage')" id="EXM0093" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Registration Details</a></li>
			
				<li><a href="javascript:loadmydiv('examinations/arrearRegistration/viewRARExamSchedule')" id="EXM0107" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Exam Schedule</a></li>
			
				<li><a href="javascript:loadmydiv('examinations/arrearRegistration/StudentArrearGradeView')" id="EXM0127" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Grade View</a></li>
			
				<li><a href="javascript:loadmydiv('examinations/regularArrear/RegularArrearPaperSeeing')" id="EXM0131" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Paper See/Rev</a></li>
			
				</ul></div></div></div></div></ul></div></div></div><li><a href="javascript:loadmydiv('examinations/reFAT/StudentReFATRequestPageController')" id="EXM0138" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;ReFAT Application</a></li>
			
				</div></ul></div></div></div></div></div></div><div class="dropdown">	 <a class="btn btn-default btn-group-justified dropdown-toggle " type="button"><span class="fa fa-space-shuttle"></span></a> <div class="dropdown-menu btnList "><div class="panel-group" role="tablist" id="BtnAccordian8"><div class="panel panel-default"><div class="panel-heading"> <h4 class="disabled text-capitalize text-center menu-header">&nbsp;&nbsp;Services</h4> </div> <div id="BtnBody21121"><div class="panel-body"> <ul class="nav">
			
				<li><a href="javascript:loadmydiv('hrms/onlineBookRecommendation')" id="LIB0002" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Online Book Recommendation</a></li>
			
				<li><a href="javascript:loadmydiv('alumni/alumniTranscriptPageControl')" id="EXM0205" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Transcript Request</a></li>
			
				<li><a href="javascript:loadmydiv('admissions/scholarshipPageController')" id="ADM0161" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Financial Assistance Scholarship</a></li>
			
				<li><a href="javascript:loadmydiv('admissions/SpecialAchieversAward')" id="ADM0163" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Special Achievers</a></li>
			
				<li><a href="javascript:loadmydiv('admissions/programmeMigration')" id="ADM0194" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Programme Migration</a></li>
			
				<li><a href="javascript:loadmydiv('hostels/late/hour/student/request/1')" id="HSL0143" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Late Hour Request</a></li>
			
				<li><a href="javascript:loadmydiv('vitaa/finalyearcheck')" id="ALU0002" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Final Year Registration</a></li>
			
				<li><a href="javascript:loadmydiv('admissions/reserachFresherCertUpload')" id="ADM0202" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Fresher Certificate Upload</a></li>
			
				</ul></div></div></div></div></div></div><div class="dropdown">	 <a class="btn btn-default btn-group-justified dropdown-toggle " type="button"><span class="fa fa-bank"></span></a> <div class="dropdown-menu btnList "><div class="panel-group" role="tablist" id="BtnAccordian9"><div class="panel panel-default"><div class="panel-heading"> <h4 class="disabled text-capitalize text-center menu-header">&nbsp;&nbsp;Library</h4> </div> <div id="BtnBody21122"><div class="panel-body"> <ul class="nav">
			
				<li><a href="javascript:loadmydiv('p2p/studentScanningRequest')" id="LIB0005" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Scanning Request</a></li>
			
				<li><a href="javascript:loadmydiv('library/studentScanningRequestKeys')" id="LIB0006" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;My Keys</a></li>
			
				</ul></div></div></div></div></div></div><div class="dropdown">	 <a class="btn btn-default btn-group-justified dropdown-toggle " type="button"><span class="fa fa-certificate"></span></a> <div class="dropdown-menu btnList "><div class="panel-group" role="tablist" id="BtnAccordian10"><div class="panel panel-default"><div class="panel-heading"> <h4 class="disabled text-capitalize text-center menu-header">&nbsp;&nbsp;Bonafide</h4> </div> <div id="BtnBody21123"><div class="panel-body"> <ul class="nav">
			
				<li><a href="javascript:loadmydiv('others/bonafide/StudentBonafidePageControl')" id="OTH0011" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Apply Bonafide</a></li>
			
				</ul></div></div></div></div></div></div><div class="dropdown">	 <a class="btn btn-default btn-group-justified dropdown-toggle " type="button"><span class="fa fa-cc-visa"></span></a> <div class="dropdown-menu btnList "><div class="panel-group" role="tablist" id="BtnAccordian11"><div class="panel panel-default"><div class="panel-heading"> <h4 class="disabled text-capitalize text-center menu-header">&nbsp;&nbsp;Online Payments</h4> </div> <div id="BtnBody21124"><div class="panel-body"> <ul class="nav">
			
				<li><a href="javascript:loadmydiv('p2p/Payments')" id="FIN0135" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Payments</a></li>
			
				<li><a href="javascript:loadmydiv('p2p/getReceiptsApplno')" id="FIN0136" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Payment Receipts</a></li>
			
				<li><a href="javascript:loadmydiv('finance/getFeesIntimation')" id="FIN0137" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Fees Intimation</a></li>
			
				<li><a href="javascript:loadmydiv('finance/getOnlineTransfer')" id="FIN0139" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Online Transfer</a></li>
			
				<li><a href="javascript:loadmydiv('p2p/library')" id="LIB0001" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Library</a></li>
			
				</ul></div></div></div></div></div></div><div class="dropdown">	 <a class="btn btn-default btn-group-justified dropdown-toggle " type="button"><span class="fa fa-home"></span></a> <div class="dropdown-menu btnList "><div class="panel-group" role="tablist" id="BtnAccordian12"><div class="panel panel-default"><div class="panel-heading"> <h4 class="disabled text-capitalize text-center menu-header">&nbsp;&nbsp;Hostels</h4> </div> <div id="BtnBody21125"><div class="panel-body"> <ul class="nav">
			
				<li><a href="javascript:loadmydiv('hostels/student/counselling/registration/3')" id="HSL0172" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Freshers Hostel Registration</a></li>
			
				<li><a href="javascript:loadmydiv('hostels/student/leave/1')" id="HSL0021" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Leave Request</a></li>
			
				<li><a href="javascript:loadmydiv('hostels/counselling/mess/registration/1')" id="HSL0100" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Mess Selection 2020-2021</a></li>
			
				<li><a href="javascript:loadmydiv('hostels/onlineMessChange')" id="HSL0124" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Mess Change </a></li>
			
				<li><a href="javascript:loadmydiv('hostels/summerRoomDetails')" id="HSL0116" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Fall 19-20 Room-Details</a></li>
			
				</ul></div></div></div></div></div></div><div class="dropdown">	 <a class="btn btn-default btn-group-justified dropdown-toggle " type="button"><span class="fa fa-inr"></span></a> <div class="dropdown-menu btnList "><div class="panel-group" role="tablist" id="BtnAccordian13"><div class="panel panel-default"><div class="panel-heading"> <h4 class="disabled text-capitalize text-center menu-header">&nbsp;&nbsp;Receipt Book</h4> </div> <div id="BtnBody21126"><div class="panel-body"> <ul class="nav">
			
				<li><a href="javascript:loadmydiv('finance/ReceiptBookExternalBilling')" id="FIN0093" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;External Billing</a></li>
			
				<li><a href="javascript:loadmydiv('finance/getTotstudentReport')" id="FIN0098" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;My Collection Report</a></li>
			
				<li><a href="javascript:loadmydiv('finance/ReceiptBookInternalBilling')" id="FIN0094" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Internal Billing</a></li>
			
				</ul></div></div></div></div></div></div><div class="dropdown">	 <a class="btn btn-default btn-group-justified dropdown-toggle " type="button"><span class="fa fa-book"></span></a> <div class="dropdown-menu btnList "><div class="panel-group" role="tablist" id="BtnAccordian14"><div class="panel panel-default"><div class="panel-heading"> <h4 class="disabled text-capitalize text-center menu-header">&nbsp;&nbsp;ASC FDP</h4> </div> <div id="BtnBody21127"><div class="panel-body"> <ul class="nav">
			
				<li><a href="javascript:loadmydiv('events/ASC/EventsRegistration')" id="EVE0009" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;FDP Registration</a></li>
			
				<li><a href="javascript:loadmydiv('events/ASC/EventsCertificateDownload')" id="EVE0010" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Participant Certificate</a></li>
			
				</ul></div></div></div></div></div></div><div class="dropdown">	 <a class="btn btn-default btn-group-justified dropdown-toggle " type="button"><span class="fa fa-shield"></span></a> <div class="dropdown-menu btnList "><div class="panel-group" role="tablist" id="BtnAccordian15"><div class="panel panel-default"><div class="panel-heading"> <h4 class="disabled text-capitalize text-center menu-header">&nbsp;&nbsp;Events</h4> </div> <div id="BtnBody21128"><div class="panel-body"> <ul class="nav">
			
				<div class="panel-group" role="tablist" id="BtnAccordian16"><div class="panel panel-default"><div class="panel-heading" role="tab">  <h4 class="menu-title"><a data-toggle="collapse" data-parent="#BtnAccordian16" class="btnList" href="#BtnBody21129" aria-expanded="false"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;University Day</a></h4></div> <div id="BtnBody21129" class="panel-collapse collapse"><div class="panel-body"> <ul class="nav">
			
				<li><a href="javascript:loadmydiv('event/uday/certificates')" id="EVE0076" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;eCertificates</a></li>
			
				</ul></div></div></div></div></ul></div></div></div></div></div></div><div class="dropdown">	 <a class="btn btn-default btn-group-justified dropdown-toggle " type="button"><span class="fa fa-book"></span></a> <div class="dropdown-menu btnList "><div class="panel-group" role="tablist" id="BtnAccordian17"><div class="panel panel-default"><div class="panel-heading"> <h4 class="disabled text-capitalize text-center menu-header">&nbsp;&nbsp;My Quiz</h4> </div> <div id="BtnBody21130"><div class="panel-body"> <ul class="nav">
			
				<li><a href="home4.php" id="CNTXXX1" class="btnItem" onclick="toggleButtonMenuItem()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class=" fa fa-book"></i>QUIZ</a></li>
			
				</ul></div></div></div></div></div></div>
			
			
		</div>
	</section>
</aside>
						</div>
						
						<div id="pageContent-wrapper">
							<div id="page-wrapper" class="col-md-12 content-center">
								<div>


		<div class="modal fade" id="academicsModal" role="dialog">
		  <div class="modal-dialog">
		  
		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">×</button>
		        <h4 class="modal-title" style="color:red;">ACADEMICS</h4>
		      </div>
		      <div class="modal-body">
		        		
		        
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		    
		  </div>
		</div>

		<div class="modal fade" id="eventsModal" role="dialog">
		  <div class="modal-dialog">
		  
		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">×</button>
		        <h4 class="modal-title" style="color:red;">EVENTS</h4>
		      </div>
		      <div class="modal-body">

						

		        
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		    
		  </div>
		</div>

		<div class="modal fade" id="coeModal" role="dialog">
		  <div class="modal-dialog">
		  
		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">×</button>
		        <h4 class="modal-title" style="color:red;">COE</h4>
		      </div>
		      
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		    
		  </div>
		</div>


		<div class="modal fade" id="othersModal" role="dialog">
		  <div class="modal-dialog">
		  
		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">×</button>
		        <h4 class="modal-title" style="color:red;">OTHERS</h4>
		      </div>
		      <div class="modal-body">
					
						<ul class="news-slice">
							<li class="text-primary news_card_text">
								<p>
									
									
									
										<a target="_blank" href="javascript:void(0);" onclick="javascript:vtopDownload('downloadSpotLightViewFile/304');">Document Submission for UG Admitted Students (2020-21 Batch)</a>									
									
								</p>
							</li>
						</ul>
					
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		    
		  </div>
		</div>


					 <div class="container">
					 
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <h1>QUIZ
				<script type="text/javascript" >
				
				var timeLeft=10;
				
				</script>
				 
                    
                    <div id="time" style="float: right;"></div></h1>
				
					<h4>Each Question carries 2 marks with no  negative marking.</h4> 
                    
                    
                    
                    
          
              <?php 
                        $i=1;
						    foreach ($qus->qus as $qust)
                        {
						
                    ?>
                <form action="finalresult.php" method="post" id="form1">
                     
                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="background-color:#2980B9;color:#EAF2F8"><h4>&nbsp<?php echo "$i";?>.&nbsp<?php echo $qust['question'];?>.&nbsp</h4></th>
                            </tr>
                        </thead>
						<tbody>
						
						
					
			     <?php if (isset($qust['ans1'])){?>
						<tr>
						
						<td>1 .&nbsp<?php echo $qust['ans1'];?> <input type="radio"  value="0" name=" <?php echo $qust['id'];?>"/> </td>
						</tr>
				       <?php }?> 
				<?php if (isset($qust['ans2'])){?>
						<tr>    
						
						
						<td>2 .&nbsp<?php echo $qust['ans2'];?> <input type="radio" value="1" name="<?php echo $qust['id'];?>"/> </td>
						</tr>
						<?php }?>
			    <?php if (isset($qust['ans3'])){?><tr>
						
						<td>3.&nbsp<?php echo $qust['ans3'];?> <input type="radio" value="2" name="<?php echo $qust['id'];?>"/>  </td>
						</tr>
						<?php }?>
				<?php if (isset($qust['ans4'])){?>
				
				
						<tr>
						
						<td>4.&nbsp<?php echo $qust['ans4'];?> <input type="radio" value="3" name=" <?php echo $qust['id'];?>" </td>
						</tr>
						
						<?php }?>
					
						
						<tr class="info">
						
						<input type="checkbox" checked="checked" style="display:none" value="no_attempt" name="<?php echo $qust['id'];?>"/>
						</tr>
						
						
						</tbody>
						
						
                        
                    </table>
                    <?php $i++; }
					
					?>
                    <center><input type="submit" value="Submit Quiz" name="submit" class="btn btn-success"></center>
                </form>
                <br>
            </div>
            <div class="col-sm-2"></div>
        </div>




					</div>
						</div>
					</div>
					
				
			
			</div>
			</div>
			</div>


		
			 
		
	</div>	 
	
				
			
 
			  

</div>
</div>

<script src="jquery-3.3.1.js"></script>
		<script src="moment.js"></script>
		<script src="jquery.hotkeys.js"></script>
		<script src="jquery.slimscroll.js"></script>
		<script src="jquery.blockUI.js"></script>		
		<script src="jquery-ui.js"></script>
		<script src="popper.js"></script>
		<script src="bootstrap.js"></script>
		<script src="bootstrapValidator.js"></script>
		<script src="vtop-validation.js"></script>
		<script type="text/javascript" src="vit-custom.js"></script>
		<script type="text/javascript" src="jquery.validationEngine-en.js"></script>
 		<script type="text/javascript" src="jquery.validationEngine.js"></script>
		
</body>

</html>