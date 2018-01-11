<?php 
		include'../db.php';
		$lect_id = $_SESSION['id'];
		$r1 = mysqli_query($db,"SELECT count(*) FROM course WHERE lect_id = '$lect_id' ");
        $r2 = mysqli_query($db,"SELECT count(*) FROM student WHERE lect_id = '$lect_id' ");
        $r3 = mysqli_query($db,"SELECT count(DISTINCT dater) FROM course_attend WHERE lect_id = '$lect_id'"); 
        $r4 = mysqli_query($db,"SELECT count(DISTINCT course_id) FROM course_result WHERE lect_id  = '$lect_id'"); 

        $count1 = mysqli_fetch_array($r1);
        $count2 = mysqli_fetch_array($r2);
        $count3 = mysqli_fetch_array($r3);
        $count4 = mysqli_fetch_array($r4);
?>


<div class="row">
			<h3 class = "container">Your data Statistics </h3>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked blank document"><use xlink:href="#stroked-blank-document"/></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><b> <?php echo $count1[0]; ?> </b></div>
							<div class="text-muted">Course(s)</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-orange panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>

						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><b> <?php echo $count2[0]; ?> </b></div>
							<div class="text-muted">Student(s)</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3" >
				<div class="panel panel-teal panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large" style="padding-top:-2px; margin-top:-3px"><b> <?php echo $count3[0]; ?> </b></div>
							<div class="text-muted">Class attendance</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-red panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><b> <?php echo $count4[0]; ?> </b></div>
							<div class="text-muted">total result(s)</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->