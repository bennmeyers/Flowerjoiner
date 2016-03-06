<?php include("includes/global/header.php"); ?>
<div id="committee">
<?php include("includes/content/header.php"); ?>
    <div class="container">
        <div class="row-fluid">
            <div class="span12">
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a> <span class="divider">/</span></li>
                    <li class="active">Committee</li>
                </ul>
            </div>
        </div>
        <div class="row-fluid">
            <form action="attendance.php" method="get" class="pull-left span12">
                <div class="row-fluid">
                    <div class="span9">
                        <table class="table table-striped2 sortable">
                            <thead>
                                <tr>
                                    <th><div class="checkbox"><input type="checkbox" id="all-checkboxes" class="checkall" /></div></th>
                                    <th>Name</th>
                                    <th>Inception Date</th>
                                    <th>Type</th>
                                    <th>Meeting Day &amp; Time</th>
                                    <th>Location</th>
                                    <th>Previous</th>
                                    <th class="text-right">Next</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><div class="checkbox"><input type="checkbox" value="1" /></div></td>
                                    <td>Committee 1</td>
                                    <td>01/24/10</td>
                                    <td>Committee Type Description</td>
                                    <td>05/01 at 16:30</td>
                                    <td>12345 Main Street, San Mateo</td>
                                    <td>04/24</td>
                                    <td class="text-right">05/08 at 16:30</td>
                                </tr>
                                <tr>
                                    <td>
                                        Notes
                                    </td>
                                    <td colspan="7">
                                        <textarea rows="3" class="span12"></textarea>
                                    </td>
                                </tr>

                                <tr>
                                    <td><div class="checkbox"><input type="checkbox" value="1" /></div></td>
                                    <td>Committee 2</td>
                                    <td>02/12/10</td>
                                    <td>Committee Type Description</td>
                                    <td>04/01 at 16:30</td>
                                    <td>12345 Main Street, San Mateo</td>
                                    <td>03/25</td>
                                    <td class="text-right">04/08 at 16:30</td>
                                </tr>
                                <tr>
                                    <td>
                                        Notes
                                    </td>
                                    <td colspan="7">
                                        <textarea rows="3" class="span12"></textarea>
                                    </td>
                                </tr>

                                <tr>
                                    <td><div class="checkbox"><input type="checkbox" value="1" /></div></td>
                                    <td>Committee 3</td>
                                    <td>02/12/10</td>
                                    <td>Committee Type Description</td>
                                    <td>04/01 at 16:30</td>
                                    <td>12345 Main Street, San Mateo</td>
                                    <td>03/25</td>
                                    <td class="text-right">04/08 at 16:30</td>
                                </tr>
                                <tr>
                                    <td>
                                        Notes
                                    </td>
                                    <td colspan="7">
                                        <textarea rows="3" class="span12"></textarea>
                                    </td>
                                </tr>

                                <tr>
                                    <td><div class="checkbox"><input type="checkbox" value="1" /></div></td>
                                    <td>Committee 4</td>
                                    <td>02/12/10</td>
                                    <td>Committee Type Description</td>
                                    <td>04/01 at 16:30</td>
                                    <td>12345 Main Street, San Mateo</td>
                                    <td>03/25</td>
                                    <td class="text-right">04/08 at 16:30</td>
                                </tr>
                                <tr>
                                    <td>
                                        Notes
                                    </td>
                                    <td colspan="7">
                                        <textarea rows="3" class="span12"></textarea>
                                    </td>
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
<?php include("includes/content/footer.php"); ?>
</div>
<?php include("includes/global/footer.php"); ?>