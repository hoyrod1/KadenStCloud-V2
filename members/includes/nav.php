<?php 

 ?>
 	<!-- NAVIGATION BAR-->
	<nav class="navbar navbar-expand navbar-light bg-white">
		<div class="container">
			<a href="home.php" class="navbar-brand"><h3>St. Cloud's Members Registration System inc</h3></a>
				<ul class="navbar-nav">
					<?php  
						if (logged_in_session()) 
						{
					?>
							<li class="nav-item">
							<a href="members_home" class="nav-link">Home</a>
							</li>
							<li class="nav-item">
							<a href="members_update" class="nav-link">Update</a>
							</li>
							<li class="nav-item">
							<a href="members_video" class="nav-link">Video</a>
							</li>
							<li class="nav-item">
							<a href="members_contact" class="nav-link">Contact</a>
							</li>
							<li class="nav-item">
							<a href="../logout.php" class="nav-link" style="color: red;">Log Out</a>
							</li>
					<?php
						}else
						{
							header("location:../login.php");
					?>
							
					<?php
						}						
					?>
				</ul>
		</div>
	</nav>