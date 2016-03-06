<?php include("includes/global/header.php"); ?>
<div id="homepage">
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
                    <div class="span3 text-center">
                        <a href="#" class="btn"><i class="icon icon-plus"></i> <span class="add">Add Category</span></a>
                        <br />
                        <br />
                        <a href="#" class="btn"><i class="icon icon-minus"></i> <span class="delete">Delete Category(s)</span></a>
                        <br />
                        <br />
                    </div>
                    <div class="span9">
                        <table class="orderable">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Category Name</th>
                                    <th>Creation Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><i class="icon icon-resize-vertical"></i> 1</td>
                                    <td class="edit">Title 1</td>
                                    <td class="edit">03/09/13</td>
                                </tr>
                                <tr>
                                    <td><i class="icon icon-resize-vertical"></i> 2</td>
                                    <td class="edit">Title 2</td>
                                    <td class="edit">03/09/13</td>
                                </tr>
                                <tr>
                                    <td><i class="icon icon-resize-vertical"></i> 3</td>
                                    <td class="edit">Title 3</td>
                                    <td class="edit">03/09/13</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!-- .row-fluid -->
    </div><!-- .container -->
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <style>
        #sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
        #sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
        #sortable li span { position: absolute; margin-left: -1.3em; }
    </style>
    <script>
    $(function() {
$('.orderable').sortable({
    containerSelector: 'tbody',
    itemSelector: 'tr',
    placeholder: '<tr class="placeholder"/>'
})
    });
    </script>
<?php include("includes/content/footer.php"); ?>

</div>
<?php include("includes/global/footer.php"); ?>