<?php include("includes/global/header.php"); ?>
<div id="homepage">
<?php include("includes/content/header.php"); ?>
    <div class="container">
        <div class="row-fluid">
            <div class="span12">
                <ul class="breadcrumb">
                    <li>Home</li>
                </ul>
            </div>
        </div>
        <div class="row-fluid">
                <div class="span3">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                            Attendance
                        </a>
                   </div>
                   <div id="collapseFour" class="accordion-body collapse in">
                       <div class="accordion-inner">
                           <ul class="unstyled">
                               <li><a href="attendance.php" class="btn btn-primary btn-block">Member Attendance</a></li>
                           </ul>
                       </div>
                    </div><!-- #collapseFour -->
                </div><!-- .span3 -->
                <div class="span3">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                            Master Edit
                        </a>
                    </div>
                    <div id="collapseOne" class="accordion-body collapse in">
                        <div class="accordion-inner">
                            <ul class="unstyled">
                                <li><a href="committee.php" class="btn btn-info btn-block">Committee List</a></li>
                                <li><a href="members.php" class="btn btn-info btn-block">Member List</a></li>
                                <li><a href="order-sign_in.php" class="btn btn-action btn-block">Sign-in Sheet Sort Order</a></li>
                                <li><a href="category.php" class="btn btn-admin btn-block">Category list</a></li>
                                <li><a href="role.php" class="btn btn-admin btn-block">Role list</a></li>
                                <li><a href="titles.php" class="btn btn-admin btn-block disabled">Title List</a></li>
                                <li><a href="types-committee.php" class="btn btn-admin btn-block disabled">Committee Types</a></li>
                            </ul>
                        </div>
                    </div><!-- #collapseOne -->
                </div><!-- .span3 -->
                <div class="span3">
                    <br class="visible-phone" />
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                            Reports
                        </a>
                    </div>
                    <div id="collapseTwo" class="accordion-body collapse in">
                        <div class="accordion-inner">
                            <ul class="unstyled">
                                <li><a href="report-attendance.php" class="btn btn-info btn-block disabled">Attendance Reports</a></li>
                                <li><a href="report-committee.php" class="btn btn-info btn-block disabled">Committe Roster for Kryuus</a></li>
                            </ul>
                        </div>
                    </div><!-- #collapseTwo -->
                </div><!-- .span3-->
                <div class="span3">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                            Roster
                        </a>
                    </div>
                    <div id="collapseThree" class="accordion-body collapse in">
                        <div class="accordion-inner">
                            <ul class="unstyled">
                                <li><a href="committee-roster.php" class="btn btn-action btn-block disabled">Committee Roster</a></li>
                            </ul>
                        </div>
                    </div><!-- #collapseThree -->
                </div><!-- .span3 -->
        </div><!-- #mainContent -->

    </div><!-- .container -->
<?php include("includes/content/footer.php"); ?>

</div>
<?php include("includes/global/footer.php"); ?>