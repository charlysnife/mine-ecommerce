<?php
    include_once(dirname(dirname(__FILE__)).'/classes/category.php');
    include_once("header.php");

    $model = new Category();
    $categories = $model->getCategory();
?>
<div class="container-fluid">
    <div class="row page">
        <?php include_once("sidebar.php"); ?>
        <div class="col-md-9">
            <h4>Category</h4>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Parent Category</th>
                    <th scope="col">Total Product</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if(sizeof($categories) > 0):
                        foreach($categories as $row => $category):
                    ?>
                    <tr>
                        <th scope="row"><?php print $row; ?></th>
                        <td><?php print $category->name; ?></td>
                        <td><?php print $category->parent_category; ?></td>
                        <td><?php print $category->total_product; ?></td>
                        <td>
                            <a href="/views/edit-category.php?id=<?php print $category->id; ?>">Edit Category</a>
                            <a data-id="<?php print $category->id; ?>">Delete Category</a>
                        </td>
                    </tr>
                    <?php
                        endforeach;
                        else:
                    ?>
                        <tr>
                            <th scope="row" colspan="3">No record found</th>
                        </tr>
                    <?php 
                        endif;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include_once('footer.php'); ?>