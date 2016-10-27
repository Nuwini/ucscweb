<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>UCSC</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="../layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="../layout/scripts/jquery-s3slider.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$("#featured_slide_").s3Slider({
		timeOut:10000 
	});
});
</script>

</head>
<body id="top">
<?php include('../layout/styles/header.html');?>

<?php include('../../model/config.php'); 


$maxcols = 1;

$i = 0;

echo "Professors";

$all_profiles_q="SELECT profile_pic,name_initials,designation,qualifications,email FROM staff where designation='Professor' or designation='Director'";

        $all_profiles=mysqli_query($connect,$all_profiles_q);
		
        if(!$all_profiles){
			//echo "hi";
            die("Database query failed: ".mysqli_error($connect));
        }
		
		echo "<table cellspacing=3 cellpadding=3 align=center border=0>";
    
        while($profile_info=mysqli_fetch_assoc($all_profiles)){
			
	echo "<tr>";
        echo "<td rowspan=5><img src=data:image/png;base64,".base64_encode($profile_info['profile_pic']) ."/></td>";
		echo "<td>".$profile_info['name_initials']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['designation']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['qualifications']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['email']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td><button>View Profile</button><button>View Location</button></td>";
		
		echo "</tr>";
		
		$i++;
            } 
			
			echo "</tr>";
echo "</table>";





echo "Senior Lecturers";

$all_profiles_q="SELECT profile_pic,name_initials,designation,qualifications,email FROM staff where designation='Senior Lecturer'";

        $all_profiles=mysqli_query($connect,$all_profiles_q);
		
        if(!$all_profiles){
			//echo "hi";
            die("Database query failed: ".mysqli_error($connect));
        }
		
		echo "<table cellspacing=3 cellpadding=3 align=center border=0>";
    
        while($profile_info=mysqli_fetch_assoc($all_profiles)){
			
	echo "<tr>";
        echo "<td rowspan=5><img src=data:image/png;base64,".base64_encode($profile_info['profile_pic']) ."/></td>";
		echo "<td>".$profile_info['name_initials']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['designation']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['qualifications']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['email']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td><button>View Profile</button><button>View Location</button></td>";
		
		echo "</tr>";
		
		$i++;
            } 
			
			echo "</tr>";
echo "</table>";





echo "Lecturers";

$all_profiles_q="SELECT profile_pic,name_initials,designation,qualifications,email FROM staff where designation='Lecturer'";

        $all_profiles=mysqli_query($connect,$all_profiles_q);
		
        if(!$all_profiles){
			//echo "hi";
            die("Database query failed: ".mysqli_error($connect));
        }
		
		echo "<table cellspacing=3 cellpadding=3 align=center border=0>";
    
        while($profile_info=mysqli_fetch_assoc($all_profiles)){
			
	echo "<tr>";
        echo "<td rowspan=5><img src=data:image/png;base64,".base64_encode($profile_info['profile_pic']) ."/></td>";
		echo "<td>".$profile_info['name_initials']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['designation']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['qualifications']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['email']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td><button>View Profile</button><button>View Location</button></td>";
		
		echo "</tr>";
		
		$i++;
            } 
			
			echo "</tr>";
echo "</table>";

echo "Academic Support Staff";

$all_profiles_q="SELECT profile_pic,name_initials,designation,qualifications,email FROM staff where designation='Academic Support Staff'";

        $all_profiles=mysqli_query($connect,$all_profiles_q);
		
        if(!$all_profiles){
			//echo "hi";
            die("Database query failed: ".mysqli_error($connect));
        }
		
		echo "<table cellspacing=3 cellpadding=3 align=center border=0>";
    
        while($profile_info=mysqli_fetch_assoc($all_profiles)){
			
	echo "<tr>";
        echo "<td rowspan=5><img src=data:image/png;base64,".base64_encode($profile_info['profile_pic']) ."/></td>";
		echo "<td>".$profile_info['name_initials']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['designation']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['qualifications']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['email']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td><button>View Profile</button><button>View Location</button></td>";
		
		echo "</tr>";
		
		$i++;
            } 
			
			echo "</tr>";
echo "</table>";




echo "Temporary Academic Staff";

$all_profiles_q="SELECT profile_pic,name_initials,designation,qualifications,email FROM staff where designation='Temporary Academic Staff'";

        $all_profiles=mysqli_query($connect,$all_profiles_q);
		
        if(!$all_profiles){
			//echo "hi";
            die("Database query failed: ".mysqli_error($connect));
        }
		
		echo "<table cellspacing=3 cellpadding=3 align=center border=0>";
    
        while($profile_info=mysqli_fetch_assoc($all_profiles)){
			
	echo "<tr>";
        echo "<td rowspan=5><img src=data:image/png;base64,".base64_encode($profile_info['profile_pic']) ."/></td>";
		echo "<td>".$profile_info['name_initials']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['designation']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['qualifications']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['email']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td><button>View Profile</button><button>View Location</button></td>";
		
		echo "</tr>";
		
		$i++;
            } 
			
			echo "</tr>";
echo "</table>";
?>


<?php include('../layout/styles/footer.html');?>
</body>
</html>