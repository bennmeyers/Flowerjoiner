<?php include("includes/global/header.php"); ?>
<div id="homepage">
<?php include("includes/content/header.php"); ?>

    <div id="content">

        <div id="mainContent">
            <div class="accordion" id="accordion">
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                            Attendance
                        </a>
                       </div>
                       <div id="collapseFour" class="accordion-body collapse">
                           <div class="accordion-inner">
                               <ul>
                                   <li><a href="attendance.php" class="btn btn-primary">Member Attendance</a></li>
                               </ul>
                           </div>
                        </div>
                    </div><!-- #collapseFour -->
                </div><!-- .accordion-group -->
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                            Master Edit
                        </a>
                    </div>
                    <div id="collapseOne" class="accordion-body collapse in">
                        <div class="accordion-inner">
                            <ul>
                                <li><a href="committee.php" class="btn btn-info">Committee List</a></li>
                                <li><a href="list-members.php" class="btn btn-info">Member List</a></li>
                                <li><a href="sign_in-order.php" class="btn btn-action">Sign-in Sheet Sort Order</a></li>
                                <li><a href="category.php" class="btn btn-admin">Category list</a></li>
                                <li><a href="role.php" class="btn btn-admin">Role list</a></li>
                                <li><a href="titles.php" class="btn btn-admin">Title List</a></li>
                                <li><a href="types-committee.php" class="btn btn-admin">Committee Types</a></li>
                            </ul>
                        </div>
                    </div><!-- #collapseOne -->
                </div><!-- .accordion-group -->
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                            Reports
                        </a>
                    </div>
                    <div id="collapseTwo" class="accordion-body collapse">
                        <div class="accordion-inner">
                            <ul>
                                <li><a href="report-attendance.php" class="btn btn-info">Attendance Reports</a></li>
                             </ul>
                             <hr />
                             <ul>
                                <li><a href="report-committee.php" class="btn btn-info">Committe Roster for Kryuus</a></li>
                            </ul>
                        </div>
                    </div><!-- #collapseTwo -->
                </div><!-- .accordion-group -->
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                            Roster
                        </a>
                    </div>
                    <div id="collapseThree" class="accordion-body collapse">
                        <div class="accordion-inner">
                            <ul>
                                <li><a href="committee-roster.php" class="btn btn-action">Committee Roster</a></li>
                            </ul>
                        </div>
                    </div><!-- #collapseThree -->
                </div><!-- .accordion-group -->
            </div><!-- #accordion -->
        </div><!-- #mainContent -->

    </div><!-- #content -->
<?php include("includes/content/footer.php"); ?>

</div>
<?php include("includes/global/footer.php"); ?>