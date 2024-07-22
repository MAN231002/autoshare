
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="/assets/pages/css/login.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL STYLES -->

<x-layouts.index>
    <div class=" login">
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <form class="login-form" action="/login" method="post">
                @csrf
                <h3 class="form-title font-green">Sign In</h3>
                @if ($errors->any())
                    <ul class="alert alert-danger ">
                        <button class="close" data-close="alert"></button>
                        @foreach($errors->all() as $error)
                            <li> {{ $error }} </li>
                        @endforeach
                    </ul>
                @endif
            
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Email</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" /> </div>
                <div class="form-actions">
                    <button type="submit" class="btn green uppercase">Login</button>
                    <!-- <label class="rememberme check mt-checkbox mt-checkbox-outline">
                        <input type="checkbox" name="remember" value="1" />Remember
                        <span></span>
                    </label> -->
                </div>
    
                <!-- <div class="create-account">
                    <p>
                        <a href="javascript:;" id="register-btn" class="uppercase">Create an account</a>
                    </p>
                </div> -->
            </form> 
            <!-- END LOGIN FORM -->
        </div>
        <!-- BEGIN FORGOT PASSWORD FORM -->
        <!-- <form class="forget-form" action="index.html" method="post">
            <h3 class="font-green">Forget Password ?</h3>
            <p> Enter your e-mail address below to reset your password. </p>
            <div class="form-group">
                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
            <div class="form-actions">
                <button type="button" id="back-btn" class="btn green btn-outline">Back</button>
                <button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
            </div>
        </form> -->
        <!-- END FORGOT PASSWORD FORM -->
    </div>
</x-layouts.index>

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/assets/pages/scripts/login.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->