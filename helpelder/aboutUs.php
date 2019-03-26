<?php
include("defaultValues.php");
$page_title = $ABOUTUS;
session_start();
include("top_layout.php")?>

    <div class="container cardstyle">
        <div class="card-group">
            <div class="card col-md-8">
                <div class="card-body">
                    <img class="card-img-top img-fluid rounded" src="image/older-adults.jpg" alt="older-adults" width="100%">
                </div>
            </div>
            <div class="card col-md-4 secondcard">
                <div class="card-body">
                    <h1 class="card-title">WHY JOIN HELPElder</h1>
                    <p class="card-text text-danger">BECAUSE...</p>
                    <p class="card-text text-justify">
                        We help families find the best elderly care services and products they need in the fastest,
                        most transparent, and most convenient way possible. Based in Kuala Lumpur,
                        HELPELder is a network of elderly home care professionals, and related service and product
                        providers. We connect our qualified and vetted providers with elderly clients and their families.
                    </p>
                </div>
            </div>
        </div>
  <?php include ('btm_layout.php') ?>
