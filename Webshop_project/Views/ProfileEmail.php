<div class="text-center">
    <h1 class="heading-h1"><b>E-mail address</b></h1>
</div>

<form class="register-form" action="Profile/UpdateEmail" method="post">
    <div>
        <label for="CurrentEmailAddress">Current e-mail<span class="text-danger">*</span></label>
        <input id="CurrentEmailAddress" type="email" name="CurrentEmailAddress" required="required" />
    </div>
    <div>
        <label for="NewEmailAddress">New e-mail<span class="text-danger">*</span></label>
        <input id="NewEmailAddress" type="email" name="NewEmailAddress" required="required" />
    </div>
    <button type="submit" class="button regbutton"><i class="fa fa-edit"></i> Modify</button>
</form>

<div class="text-center pt-5">
<a class="button" href='<?=explode("index", preg_quote($_SERVER['PHP_SELF']))[0]?>Profile'><i class="fa fa-arrow-left"></i> Back</a>
<p class="pt-5"><b>Marked with <span class="text-danger">*</span> are required!</b></p>
</div>