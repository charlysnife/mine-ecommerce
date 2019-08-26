<?php 
    include_once("header.php");
?>
<div class="container-fluid">
    <div class="row page">
        <?php include_once("sidebar.php"); ?>
        <div class="col-md-9">
            <h4>Add Product</h4>
            <form class="col-md-4" style="padding-left:0;">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Product Name">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Product Price">
                    <small id="emailHelp" class="form-text text-muted">*Required</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Quantity</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Product Quantity">
                    <small id="emailHelp" class="form-text text-muted">*Required</small>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Categry</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option value="Select Category">Select Category</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Brand(Optional)</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option value="Select Category">Select Brand</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Color(Optional)</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option value="Select Category">Select Color</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>
<?php include_once('footer.php'); ?>