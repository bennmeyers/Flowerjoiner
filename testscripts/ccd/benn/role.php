<?php include("includes/global/header.php"); ?>
<div id="category">
<?php include("includes/content/header.php"); ?>

    <div class="container">
        <div class="row-fluid">
            <div class="span12">
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a> <span class="divider">/</span></li>
                    <li class="active">Role</li>
                </ul>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <div class="row-fluid">
                    <div class="span9">
                        <table class="table table-striped table-hover sortable">
                            <thead>
                                <tr>
                                    <th class="checkbox-td"><div class="checkbox"><input type="checkbox" class="all" /></div></th>
                                    <th>Role Name</th>
                                    <th class="text-right">Creation Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><div class="checkbox"><input type="checkbox" /></div></td>
                                    <td class="edit">Chair</td>
                                    <td class="edit text-right">03/09/13</td>
                                </tr>
                                <tr>
                                    <td><div class="checkbox"><input type="checkbox" /></div></td>
                                    <td class="edit">Member</td>
                                    <td class="edit text-right">03/09/13</td>
                                </tr>
                                <tr>
                                    <td><div class="checkbox"><input type="checkbox" /></div></td>
                                    <td class="edit">Admin</td>
                                    <td class="edit text-right">03/09/13</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="span3 text-center">
                        <a href="#" class="btn btn-block"><i class="icon icon-plus"></i> <span class="add">Add Role</span></a>
                        <br />
                        <br />
                        <a href="#" class="btn btn-block"><i class="icon icon-minus"></i> <span class="delete">Delete Role(s)</span></a>
                        <br />
                        <br />
                    </div>
                </div>
            </div>
        </div><!-- .row-fluid -->
    </div><!-- .container -->
    <script type="application/javascript">
        $(document).ready(function(){
            $('.add').click(function(){
                $('.table').append('<tr><td><div class="checkbox"><input type="checkbox" /></div></td><td class="editable">Member</td><td class="editable">New Member</td></tr>')
            });
            $('.edit').editable('save.php', {
                indicator : 'Saving...',
                tooltip   : 'Click to edit...'
            });
            $('.edit_area').editable('save.php', {
                type      : 'textarea',
                cancel    : '<a href="#" class="btn btn-danger pull-left"><i class="icon-white icon-remove"></i></a>',
                submit    : '<a href="#" class="btn btn-success pull-right"><i class="icon-ok"></i></a>',
                indicator : '<img src="img/indicator.gif">',
                tooltip   : 'Click to edit...'
            });
        });
    </script>
    <style>
    .checkbox-td {width:15px;}
    </style>
<?php include("includes/content/footer.php"); ?>
</div>
<?php include("includes/global/footer.php"); ?>