<div class="text-center">
    <h1 class="heading-h1"><b>Password</b></h1>
</div>

<form class="register-form" action="Profile/UpdatePassword" method="post">
    <div>
        <label for="CurrentPassword">Current password<span class="text-danger">*</span></label>
        <input id="CurrentPassword" type="password" name="CurrentPassword" required="required" />
    </div>    
    <div>
        <label for="NewPassword">New password<span class="text-danger">*</span></label>
        <input id="NewPassword" type="password" name="NewPassword" required="required" />
    </div>
    <div>
        <label for="RepeatNewPassword">Repeat password<span class="text-danger">*</span></label>
        <input id="RepeatNewPassword" type="password" name="RepeatNewPassword" required="required" />
    </div>
    <button type="submit" class="button regbutton"><i class="fa fa-edit"></i> Modify</button>
</form>

<div class="text-center pt-5">
<a class="button" href='<?=explode("index", preg_quote($_SERVER['PHP_SELF']))[0]?>Profile'><i class="fa fa-arrow-left"></i> Back</a>
<p class="pt-5"><b>Marked with <span class="text-danger">*</span> are required!</b></p>
</div>