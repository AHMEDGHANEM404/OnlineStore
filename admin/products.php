<?php

use TechStore\Classes\Models\Product;

include_once("inc/header.php");?>
<?php
$pr = new Product;
$productss=$pr->selectAl();

// echo "<pre>";
// print_r($productss);
// echo "</pre>";


?>

    <div class="container-fluid py-5">
        <div class="row">

            <div class="col-md-10 offset-md-1">

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3>All Products</h3>
                    <a href="<?= AURL."add-product.php" ?>" class="btn btn-success">
                        Add new
                    </a>
                </div>

                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Image</th>
                        <th scope="col">Pieces</th>
                        <th scope="col">Price</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                
                    <tbody>

                    <?php foreach ($productss as $index=> $pr1)  :?>
               
                      <tr>
                      <?php $index+=1; ?>
                       <td><?= $index; ?></td>
                        <td><?= $pr1['name']; ?></td>
                        <!-- cat_id -->
                        <td><?= $pr1['cat_id']; ?></td>
                        <td>
                            <img src="<?= URL."uploads/".$pr1['img']; ?>" height="50px" alt="<?=$pr1['id']?>">
                        </td>
                        <td>3</td>
                        <!-- price -->
                        <td>$<?= $pr1['price']; ?></td>
                        <!-- create_at -->
                        <td><?= date("D,M Y h:m a",strtotime($pr1['create_at'])); ?></td>
                        <td>
                            <!-- <a class="btn btn-sm btn-primary" href="#">
                                <i class="fas fa-eye"></i>
                            </a> -->
                            <a class="btn btn-sm btn-info" href="<?= AURL . "edit-product.php?id=".$pr1['id'] ?>">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a class="btn btn-sm btn-danger" href="<?= AURL . "handlers/delet-product.php?id=".$pr1['id'] ?>">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                      </tr>
                    </tbody>
                  
                    <?php  endforeach;?>
                </table>
            </div>

        </div>
    </div>
    <?php include_once("inc/footer.php");?>
