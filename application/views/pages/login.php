    <!-- Page Title Area Start -->
    <div id="pageTitle" class="bg--overlay" data-bg-img="<?=base_url()?>assets/img/page-header-img/bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-title">
                        <h2>Login</h2>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <ul class="breadcrumb">
                        <li><span>You are here:</span></li>
                        <li><a href="#">Home</a></li>
                        <li class="active">Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Title Area End -->
    
    <!-- Login Area Start -->
    <div id="login">
        <div class="container">
            <div data-form-validation="true">
                <form action="<?=base_url('dashboard')?>" method="post" id="loginForm">
                    <div class="form-group">
                        <label for="loginEmail">Email address *</label>
                        <input type="email" name="email" class="form-control" id="loginEmail" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="loginPassword">Password *</label>
                        <input type="password" name="password" class="form-control" id="loginPassword" placeholder="Password" required>
                    </div>
                    <p class="help-block clearfix">
                        <a href="http://billing.ywhmcs.com/pwreset.php?systpl=CloudServer01" class="pull-left"><i class="fa fa-fw fa-key"></i>Forget Password ?</a>
                    </p>
                    <button type="submit" class="btn btn-block submit-button">login</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Login Area End -->
