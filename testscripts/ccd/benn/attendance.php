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
            <form action="attendance.php" method="get" class="pull-left span12">
                <div class="row-fluid">
                    <span class="span5 pull-right align-right">Meeting Date: <strong>May 05, 2013</strong></span>
                </div>
                <div class="row-fluid">
                    <div class="span9">
                        <table class="table table-striped table-hover sortable">
                            <thead>
                                <tr>
                                    <th class="checkbox-td"><div class="checkbox"><input type="checkbox" id="all-checkboxes" class="checkall" /></div></th>
                                    <th>Name</th>
                                    <th class="text-right">Role</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><div class="checkbox"><input type="checkbox" value="1" /></div></td>
                                    <td>Douglas, Michael</td>
                                    <td class="text-right">Chair</td>
                                </tr>
                                <tr>
                                    <td><div class="checkbox"><input type="checkbox" value="2" /></div></td>
                                    <td>Smith, John</td>
                                    <td class="text-right">Admin</td>
                                </tr>
                                <tr>
                                    <td><div class="checkbox"><input type="checkbox" value="3" /></div></td>
                                    <td>Clark, Maggie</td>
                                    <td class="text-right">Member</td>
                                </tr>
                                <tr>
                                    <td><div class="checkbox"><input type="checkbox" value="4" /></div></td>
                                    <td>Chang, Carolyn</td>
                                    <td class="text-right">Member</td>
                                </tr>
                            </tbody>
                        </table>
                        <button class="btn btn-block btn-primary">Done</button>
                    </div>
                    <div class="span3">
                        <div class="dropdown btn-group btn-block">
                            <a class="btn span12 dropdown-toggle" id="committee" data-toggle="dropdown" href="#">
                                <i class="icon icon-plus-sign"></i> Other Committee
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                <li><a tabindex="-1" href="#" class="active">Committee 1</a></li>
                                <li><a tabindex="-1" href="#">Committee 2</a></li>
                                <li><a tabindex="-1" href="#">Committee 3</a></li>
                                <li><a tabindex="-1" href="#">Committee 4</a></li>
                                <li><a tabindex="-1" href="#">Committee 5</a></li>
                            </ul>
                        </div>
                        <br /><br />
                        <a href="#" class="btn btn-block"><i class="icon-info-sign"></i> Information</a><br /><br />
                    </div>
                </div>
            </form>
            
        </div><!-- .row-fluid -->

    </div><!-- .container -->
    <script type="application/javascript">
        $(document).ready(function(){
            $('tbody tr').click(function(event) {
                $(this).toggleClass('info');
                if (event.target.type !== 'checkbox') {
                    $(':checkbox', this).attr('checked', function() {
                        return !this.checked;
                    });
                }
            });
            $('.checkall').click(function () {
                $(this).closest('table').find(':checkbox').prop('checked', this.checked);
                if (this.checked) {
                    $(this).closest('table').find("tr:not('.info')").addClass('info');
                } else{
                    $(this).closest('table').find('tr').removeClass('info');
                }
            });
            $(":checkbox:not('.checkall')").click(function () {
                if ($(":checkbox:not('.checkall')").size() == $(":checkbox:not('.checkall'):checked").size()) {
                    $('.checkall').prop("checked", "checked");
                } else {
                    $('.checkall').prop("checked", "");
                }
            })
        });
    </script>
    <style>
    .checkbox-td {width:15px;}
    </style>
<?php include("includes/content/footer.php"); ?>
</div>
<?php include("includes/global/footer.php"); ?>