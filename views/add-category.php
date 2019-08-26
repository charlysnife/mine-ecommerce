<?php 
    include_once("header.php");
?>
<div class="container-fluid">
    <div class="row page">
        <?php include_once("sidebar.php"); ?>
        <div class="col-md-8">
            <h4>Add Category</h4>
            <form class="col-md-4 add-category" style="padding-left:0;">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="category" aria-describedby="emailHelp" placeholder="Category Name">
                    <small id="emailHelp" class="form-text text-muted err">Please enter category name</small>
                    <small id="emailHelp" class="form-text text-muted exist">Category name already exist</small>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Parent Categry(Optional)</label>
                    <select class="form-control" name="parent_category" id="exampleFormControlSelect1">
                        <option value="Select Category">Select Category</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>
<?php include_once('footer.php'); ?>