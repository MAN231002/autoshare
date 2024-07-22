<!-- BEGIN PAGE LEVEL STYLES -->
<link href="/assets/pages/css/login.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL STYLES -->

<x-layouts.index>
    <div class=" login">
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN REGISTRATION FORM -->
            <form class="register-form" action="/register" method="post">
                @if ($errors->any())
                    <ul class="alert alert-danger ">
                        <button class="close" data-close="alert"></button>
                        @foreach($errors->all() as $error)
                            <li> {{ $error }} </li>
                        @endforeach
                    </ul>
                @endif
                @csrf
                <h3 class="font-green">Sign Up</h3>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Name<span class="required"> * </span></label>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="Name" id="name" name="name" value="{{ old('name') }}" require /> 
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">UserName<span class="required"> * </span></label>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="UserName" id="username" name="username" value="{{ old('username') }}" require /> 
                </div>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Email<span class="required"> * </span></label>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="Email" id="email" name="email" value="{{ old('email') }}" require /> 
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password<span class="required"> * </span></label>
                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password" value="{{ old('password') }}" require/> 
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Re-type Your Password<span class="required"> * </span></label>
                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="rpassword" require/> 
                </div>
                <div class="form-actions">
                    <button type="submit" id="register-submit-btn" class="btn btn-success uppercase pull-right">Submit</button>
                </div>
            </form>
            <!-- END REGISTRATION FORM -->
        </div>
    </div>

</x-layouts.index>

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/assets/pages/scripts/login.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->