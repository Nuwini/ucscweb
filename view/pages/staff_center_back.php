<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>User Back-end</title>
<link rel="stylesheet" href="../layout/styles/bootstrap.min.css">
<script src="../layout/scripts/jquery-2.0.0.js"></script>
<script src="../layout/scripts/bootstrap.min.js"></script>
<link rel="stylesheet" href="../layout/styles/staff_center_back_style.css" type="text/css" media="all">
</head>
<body class="wp-admin wp-core-ui js  index-php auto-fold admin-bar branch-4-6 version-4-6-1 admin-color-fresh locale-en-gb customize-support svg sticky-menu">
<script type="text/javascript">
	document.body.className = document.body.className.replace('no-js','js');
</script>

	<script type="text/javascript">
		(function() {
			var request, b = document.body, c = 'className', cs = 'customize-support', rcs = new RegExp('(^|\\s+)(no-)?'+cs+'(\\s+|$)');

			request = true;

			b[c] = b[c].replace( rcs, ' ' );
			b[c] += ( window.postMessage && request ? ' ' : ' no-' ) + cs;
		}());
	</script>

<div class="scroll">
<div id="" role="navigation" aria-label="Main menu">
	<div id="adminmenuback"></div>
		<div id="adminmenuwrap">
			<ul id="adminmenu">


	<li class="wp-first-item wp-has-submenu wp-has-current-submenu wp-menu-open menu-top menu-top-first menu-icon-dashboard menu-top-last" id="menu-dashboard">
    <a href="#" class="wp-first-item wp-has-submenu wp-has-current-submenu wp-menu-open menu-top menu-top-first menu-icon-dashboard menu-top-last" aria-haspopup="false">
        <div class="logo"><img src="../images/demo/UCSClogopng.png" alt="logo" height="100" width="100"></div>
    </a>
    <ul class="wp-submenu wp-submenu-wrap">

        <li class="wp-first-item current">
			<a href="#" class="wp-first-item current">My account</a></li>
        <li>
			<a href="staff_center_back.php?type=update"  class="wp-first-item current">Updates</a></li>
    </ul>
</li>
<li class="wp-not-current-submenu wp-menu-separator" aria-hidden="true">
    <div class="separator"></div>
</li>
<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-post open-if-no-js menu-top-first" id="menu-posts">
    <a href="" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-post open-if-no-js menu-top-first" aria-haspopup="true">
        <div class="wp-menu-arrow">
            <div></div>
        </div>
        <div class="wp-menu-image dashicons-before dashicons-admin-post">
            <br>
        </div>
        <div class="wp-menu-name"><a href="staff_center_back.php?type=source">Staff</a></div>
    </a>
</li>
<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-media" id="menu-media">
    <a href="" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-media" aria-haspopup="true">
        <div class="wp-menu-arrow">
            <div></div>
        </div>
        <div class="wp-menu-image dashicons-before dashicons-admin-media">
            <br>
        </div>
        <div class="wp-menu-name"><a href="staff_center_back.php?type=dep">Department</a></div>
    </a>
</li>
<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-page" id="menu-pages">
    <a href="" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-page" aria-haspopup="true">
        <div class="wp-menu-arrow">
            <div></div>
        </div>
        <div class="wp-menu-image dashicons-before dashicons-admin-page">
            <br>
        </div>
        <div class="wp-menu-name"><a href="staff_center_back.php?type=divi">Division</a></div>
    </a>
</li>
<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-page" id="menu-pages">
    <a href="" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-page" aria-haspopup="true">
        <div class="wp-menu-arrow">
            <div></div>
        </div>
        <div class="wp-menu-image dashicons-before dashicons-admin-page">
            <br>
        </div>
        <div class="wp-menu-name"><a href="staff_center_back.php?type=centers">Centres</a></div>
        
    </a>
</li>
<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-page" id="menu-pages">
    <a href="" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-page" aria-haspopup="true">
        <div class="wp-menu-arrow">
            <div></div>
        </div>
        <div class="wp-menu-image dashicons-before dashicons-admin-page">
            <br>
        </div>
        <div class="wp-menu-name"><a href="staff_center_back.php?type=facility">Facility</div>
    </a>
</li>
<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-page" id="menu-pages">
    <a href="" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-page" aria-haspopup="true">
        <div class="wp-menu-arrow">
            <div></div>
        </div>
        <div class="wp-menu-image dashicons-before dashicons-admin-page">
            <br>
        </div>
        <div class="wp-menu-name"><a href="staff_center_back.php?type=publication">Publication</div>
    </a>
</li>
<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-page" id="menu-pages">
    <a href="" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-page" aria-haspopup="true">
        <div class="wp-menu-arrow">
            <div></div>
        </div>
        <div class="wp-menu-image dashicons-before dashicons-admin-page">
            <br>
        </div>
        <div class="wp-menu-name"><a href="staff_center_back.php?type=course">Course</div>
    </a>
</li>
<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-page" id="menu-pages">
    <a href="" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-page" aria-haspopup="true">
        <div class="wp-menu-arrow">
            <div></div>
        </div>
        <div class="wp-menu-image dashicons-before dashicons-admin-page">
            <br>
        </div>
        <div class="wp-menu-name"><a href="staff_center_back.php?type=payment">Payment</div>
    </a>
</li>
<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-page" id="menu-pages">
    <a href="" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-page" aria-haspopup="true">
        <div class="wp-menu-arrow">
            <div></div>
        </div>
        <div class="wp-menu-image dashicons-before dashicons-admin-page">
            <br>
        </div>
        <div class="wp-menu-name"><a href="staff_center_back.php?type=post">Posts</div>
    </a>
</li>
<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-page" id="menu-pages">
    <a href="" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-page" aria-haspopup="true">
        <div class="wp-menu-arrow">
            <div></div>
        </div>
        <div class="wp-menu-image dashicons-before dashicons-admin-page">
            <br>
        </div>
        <div class="wp-menu-name"><a href="staff_center_back.php?type=reservation">Reservations</div>
    </a>
</li>
<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-page" id="menu-pages">
    <a href="" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-page" aria-haspopup="true">
        <div class="wp-menu-arrow">
            <div></div>
        </div>
        <div class="wp-menu-image dashicons-before dashicons-admin-page">
            <br>
        </div>
        <div class="wp-menu-name">Visitor</div>
    </a>
</li>
<li class="" aria-hidden="true">
    <div class="separator"></div>
</li>

<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-users" id="menu-users">
    <a href="" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-users" aria-haspopup="true">
        <div class="wp-menu-arrow">
            <div></div>
        </div>
        <div class="wp-menu-image dashicons-before dashicons-admin-users">
            <br>
        </div>
        <div class="wp-menu-name">Users</div>
    </a>
</li>

<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-settings menu-top-last" id="menu-settings">
    <a href="" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-settings menu-top-last" aria-haspopup="true">
        <div class="wp-menu-arrow">
            <div></div>
        </div>
        <div class="wp-menu-image dashicons-before dashicons-admin-settings">
            <br>
        </div>
        <div class="wp-menu-name">Settings</div>
    </a>
</li>
</ul>
</div>
</div>
</div>
<div class="container23">
<?php
	if(isset($_GET['type'])){
		if($_GET['type'] == 'update'){
			require "updateprofile.php";
		}	
		else if($_GET['type'] == 'source'){
				require "edit_profile.php";
		}
		else if($_GET['type'] == 'dep'){
				require "add_department.php";
		}
		else if($_GET['type'] == 'divi'){
				require "adddivision.php";
		}
		else if($_GET['type'] == 'centers'){
				require "add_center.php";
		}
		else if($_GET['type'] == 'facility'){
				require "add_facility.php";
		}
		else if($_GET['type'] == 'publication'){
				require "addpublication.php";
		}
		else if($_GET['type'] == 'course'){
				require "courses.php";
		}
		else if($_GET['type'] == 'payment'){
				require "payment.php";
		}
		else if($_GET['type'] == 'post'){
				require "posts.php";
		}
		else if($_GET['type'] == 'reservation'){
				require "add_reservation.php";
		}
		
	}
	else{
			require "../images/demo/back.png";
		}

?>
<div id="navbarmini">
		<div id="navbarwrap">
			<ul>
				<li>
					<a href="#">
					<!--<img src="UCSClogopng.png" alt="logo" height="40" width="40" class="logo">-->
					</a>
				
			</ul>
		</div>
	</div>
</body>

<div>
</body>
</html>
