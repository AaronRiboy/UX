<?php
include('server.php');
$page_title = "Services";
include("top_layout.php");
?>
<style>
.mb-4{
  margin-bottom: 1.5rem !important;
}
.noborder1{
    border-left: 0px !important;
    border-bottom: 0px !important;
    border-right:0px !important;
}
.serviceCard img{
    height: 250px;
}
.card {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #F9FAF9;
  background-clip: border-box;
  border: 1px solid rgba(0, 0, 0, 0.125);
  border-radius: 0.25rem;
}
.card-group {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
}

.card-group > .card {
  margin-bottom: 15px;
}
.mt-5 {
  margin-top: 3rem !important;
}

@media (min-width: 576px) {
  .card-group {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-flow: row wrap;
    flex-flow: row wrap;
  }
  .card-group > .card {
    -webkit-box-flex: 1;
    -ms-flex: 1 0 0%;
    flex: 1 0 0%;
    margin-bottom: 0;
  }
  .card-group > .card + .card {
    margin-left: 0;
    border-left: 0;
  }
  .card-group > .card:first-child {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }
  .card-group > .card:first-child .card-img-top,
  .card-group > .card:first-child .card-header {
    border-top-right-radius: 0;
  }
  .card-group > .card:first-child .card-img-bottom,
  .card-group > .card:first-child .card-footer {
    border-bottom-right-radius: 0;
  }
  .card-group > .card:last-child {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }
  .card-group > .card:last-child .card-img-top,
  .card-group > .card:last-child .card-header {
    border-top-left-radius: 0;
  }
  .card-group > .card:last-child .card-img-bottom,
  .card-group > .card:last-child .card-footer {
    border-bottom-left-radius: 0;
  }
  .card-group > .card:only-child {
    border-radius: 0.25rem;
  }
  .card-group > .card:only-child .card-img-top,
  .card-group > .card:only-child .card-header {
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem;
  }
  .card-group > .card:only-child .card-img-bottom,
  .card-group > .card:only-child .card-footer {
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
  }
  .card-group > .card:not(:first-child):not(:last-child):not(:only-child) {
    border-radius: 0;
  }
  .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-img-top,
  .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-img-bottom,
  .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-header,
  .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-footer {
    border-radius: 0;
  }
}
.rounded-0 {
border-radius: 0 !important;
}
.card-footer {
  padding: 0.75rem 1.25rem;
  background-color: rgba(0, 0, 0, 0.03);
  border-top: 1px solid rgba(0, 0, 0, 0.125);
}

.card-footer:last-child {
  border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px);
}
.justify-content-md-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important;
  }
  .text-muted {
    color: #868e96 !important;
  }
</style>
<div class="container serviceCard">
    <h1 class="mb-4 text-center">OUR SERVICES</h1>
    <div class="card-group">
        <div class="card rounded-0">
            <img class="card-img-top" src="image/grocery.jpg" alt="Card image cap">
            <div class="card-footer">
                <div class="row justify-content-md-center">
                    <div class="col-md-6 text-center">
                        <small class="text-muted">SV001</small>
                    </div>
                    <div class="col-md-6 text-center">
                        <small class="text-muted">Shopping</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="card rounded-0">
            <img class="card-img-top" src="image/cook.jpg" alt="Card image cap">
            <div class="card-footer">
                <div class="row justify-content-md-center">
                    <div class="col-md-6 text-center">
                        <small class="text-muted">SV002</small>
                    </div>
                    <div class="col-md-6 text-center">
                        <small class="text-muted">Meals</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="card rounded-0">
            <img class="card-img-top" src="image/personalcare.jpg" alt="Card image cap">
            <div class="card-footer">
                <div class="row justify-content-md-center">
                    <div class="col-md-6 text-center">
                        <small class="text-muted">SV003</small>
                    </div>
                    <div class="col-md-6 text-center">
                        <small class="text-muted">Personal Care</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-group">
        <div class="card rounded-0">
            <img class="card-img-top" src="image/health.jpg" alt="Card image cap">
            <div class="card-footer">
                <div class="row justify-content-md-center">
                    <div class="col-md-6 text-center">
                        <small class="text-muted">SV004</small>
                    </div>
                    <div class="col-md-6 text-center">
                        <small class="text-muted">Health Care</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="card rounded-0">
            <img class="card-img-top" src="image/transport.jpg" alt="Card image cap">
            <div class="card-footer">
                <div class="row justify-content-md-center">
                    <div class="col-md-6 text-center">
                        <small class="text-muted">SV005</small>
                    </div>
                    <div class="col-md-6 text-center">
                        <small class="text-muted">Transportation</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="card rounded-0">
            <img class="card-img-top" src="image/clean.jpg" alt="Card image cap">
            <div class="card-footer">
                <div class="row justify-content-md-center">
                    <div class="col-md-6 text-center">
                        <small class="text-muted">SV006</small>
                    </div>
                    <div class="col-md-6 text-center">
                        <small class="text-muted">Home Cleaning</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-group">
        <div class="card rounded-0 noborder1"></div>
        <div class="card rounded-0">
            <img class="card-img-top" src="image/companion.jpg" alt="Card image cap">
            <div class="card-footer">
                <div class="row justify-content-md-center">
                    <div class="col-md-6 text-center">
                        <small class="text-muted">SV007</small>
                    </div>
                    <div class="col-md-6 text-center">
                        <small class="text-muted">Companion</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="card rounded-0 noborder1"></div>
    </div>
    <div class="row" style="padding:20px;">
        <div class="col-md-4 col-md-offset-4">
            <a href="<?php if(isset($_SESSION['accountType'])){
              if($_SESSION['accountType']==$SENIOR){
                echo "requestService.php";
              }else{
                echo "account.php";
              }
            }else{
              echo "joinus.php";
            }?>" class="btn btn-danger btn-md btn-block text-dark">Make Appointment</a>
        </div>
    </div>
</div>
    <?php include('btm_layout.php'); ?>
