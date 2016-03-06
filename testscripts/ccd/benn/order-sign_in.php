<?php include("includes/global/header.php"); ?>
<div id="homepage">
<?php include("includes/content/header.php"); ?>
    <div class="container">
        <div class="row-fluid">
            <div class="span12">
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a> <span class="divider">/</span></li>
                    <li class="active">Sign-in Sheet Order</li>
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
                                    <th class="checkbox-td"></th>
                                    <th class="checkbox-td"><div class="checkbox"><input type="checkbox" class="checkall" /></div></th>
                                    <th>Item Name</th>
                                    <th class="text-right">Creation Date</th>
                                </tr>
                            </thead>
                            <tbody class="orderable">
                                <tr>
                                    <td><i class="icon icon-move"></i></td>
                                    <td><div class="checkbox"><input type="checkbox" /></div></td>
                                    <td class="edit">Title 1</td>
                                    <td class="edit text-right">03/09/13</td>
                                </tr>
                                <tr>
                                    <td><i class="icon icon-move"></i></td>
                                    <td><div class="checkbox"><input type="checkbox" /></div></td>
                                    <td class="edit">Title 2</td>
                                    <td class="edit text-right">03/09/13</td>
                                </tr>
                                <tr>
                                    <td><i class="icon icon-move"></i></td>
                                    <td><div class="checkbox"><input type="checkbox" /></div></td>
                                    <td class="edit">Title 3</td>
                                    <td class="edit text-right">03/09/13</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="span3 text-center">
                        <a href="#" class="btn btn-block"><i class="icon icon-plus"></i> <span class="add">Add Item</span></a>
                        <br />
                        <br />
                        <a href="#" class="btn btn-block"><i class="icon icon-minus"></i> <span class="delete">Delete Item(s)</span></a>
                        <br />
                        <br />
                    </div>
                </div>
            </div>
        </div><!-- .row-fluid -->
    </div><!-- .container -->
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script>
    $(function() {
        $('.orderable').sortable({
            containerSelector: 'tbody',
            itemSelector: 'tr',
            handle: '.icon-move',
            placeholder: '<tr class="placeholder"/>',
            vertical: 'true'
        })
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
    .icon-move {cursor:pointer;}
    .icon-move:active {cursor:move;}
    .checkbox-td {width:15px;}
    </style>
<?php include("includes/content/footer.php"); ?>

</div>
<?php include("includes/global/footer.php"); ?>