<?php include("includes/global/header.php"); ?>
<div id="attendance">
<?php include("includes/content/header.php"); ?>

    <div class="container">
        <div class="row-fluid">
            <div class="span12">
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a> <span class="divider">/</span></li>
                    <li class="active">Attendance</li>
                </ul>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <form action="attendance.php" method="get" class="pull-lef t span12">
                    <select class="span5">
                        <option>Committee A</option>
                        <option>Committee B</option>
                        <option>Committee C</option>
                        <option>Committee D</option>
                        <option>Committee E</option>
                    </select>
                    <span class="span5 pull-right align-right">Meeting Date: <strong>May 05, 2013</strong></span>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th><input type="checkbox" id="all-checkboxes" /></th>
                                <th>Name</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="checkbox" value="1" /></td>
                                <td>Douglas, Michael</td>
                                <td>Chair</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" value="2" /></td>
                                <td>Smith, John</td>
                                <td>Admin</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" value="3" /></td>
                                <td>Clark, Maggie</td>
                                <td>Member</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" value="4" /></td>
                                <td>Chang, Carolyn</td>
                                <td>Member</td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-block btn-primary">Done</button>
                </form>
            </div>
        </div><!-- .row-fluid -->

    </div><!-- .container -->
    <script type="application/javascript">
        $(document).ready(function(){
            $('tbody tr ').click (function () {
                $(this).addClass("warning");
				console.log($(this).children("input[type=checkbox]").size());
            });
        });
    </script>
<?php include("includes/content/footer.php"); ?>
</div>
<?php include("includes/global/footer.php"); ?>