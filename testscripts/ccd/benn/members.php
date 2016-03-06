<?php include("includes/global/header.php"); ?>
<div id="category">
<?php include("includes/content/header.php"); ?>
    <div class="container">
        <div class="row-fluid">
            <div class="span12">
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a> <span class="divider">/</span></li>
                    <li class="active">Members</li>
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
                                    <th class="checkbox-td"><div class="checkbox"><input type="checkbox" class="checkall" /></div></th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><div class="checkbox"><input type="checkbox" /></div></td>
                                    <td class="edit">Dog, Goofy</td>
                                    <td class="edit">goofy@disney.com</td>
                                    <td class="edit">333-444-5555</td>
                                </tr>
                                <tr>
                                    <td><div class="checkbox"><input type="checkbox" /></div></td>
                                    <td class="edit">Duck, Donald</td>
                                    <td class="edit">donald@disney.com</td>
                                    <td class="edit">333-444-5555</td>
                                </tr>
                                <tr>
                                    <td><div class="checkbox"><input type="checkbox" /></div></td>
                                    <td class="edit">Mouse, Mickey</td>
                                    <td class="edit">mickey@disney.com</td>
                                    <td class="edit">333-444-5555</td>
                                </tr>
                                <tr>
                                    <td><div class="checkbox"><input type="checkbox" /></div></td>
                                    <td class="edit">Mouse, Minney</td>
                                    <td class="edit">minney@disney.com</td>
                                    <td class="edit">333-444-5555</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="span3 text-center">
                        <a href="#" class="btn btn-block"><i class="icon icon-plus"></i> <span class="add">Add Member</span></a>
                        <br />
                        <br />
                        <div class="dropdown btn-group btn-block">
                            <a class="btn span12 disabled dropdown-toggle" id="committee" data-toggle="dropdown" href="#">
                                <i class="icon icon-plus-sign"></i> Add to Committee
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
                        <br />
                        <br />
                        <br />
                        <a href="#" class="btn btn-block disabled" id="delete"><i class="icon icon-minus"></i> <span class="delete">Delete Member(s)</span></a>
                        <br />
                        <br />
                    </div>
                </div>
            </div>
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
                };
            });
            $('.checkall').click(function () {
                $(this).closest('table').find(':checkbox').prop('checked', this.checked);
                if (this.checked) {
                    $(this).closest('table').find("tr:not('.info')").addClass('info');
                } else{
                    $(this).closest('table').find('tr').removeClass('info');
                }
                fnChecked();
            });
            $(":checkbox:not('.checkall')").click(function () {
                if ($(":checkbox:not('.checkall')").size() == $(":checkbox:not('.checkall'):checked").size()) {
                    $('.checkall').prop("checked", "checked");
                } else {
                    $('.checkall').prop("checked", "");
                }
                fnChecked();
            })
            function fnChecked() {
                if($(":checkbox:checked").size() > 0) {
                    $('#committee').removeClass('disabled');
                    $('#delete').removeClass('disabled');
                } else {
                    $('#committee').addClass('disabled');
                    $('#delete').addClass('disabled');
                }
            }
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