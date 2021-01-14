<div class="text-center">
    <h1 class="heading-h1"><b>Personal informations</b></h1>
</div>

<div>
    <form class="register-form" action="Profile/UpdatePersonal" method="post">
        <div>
            <label for="FirstName">First name<span class="text-danger">*</span></label>
            <input id="FirstName" type="text" name="FirstName" value="<?php print_r($_SESSION["UserFirstName"][0][0]); ?>" required="required" />
        </div>
        <div>
            <label for="LastName">Last name<span class="text-danger">*</span></label>
            <input id="LastName" type="text" name="LastName" value="<?php print_r($_SESSION["UserLastName"][0][0]); ?>" required="required" />
        </div>
        <div>
            <label for="Address">Address<span class="text-danger">*</span></label>
            <input id="Address" type="text" name="Address" value="<?php print_r($_SESSION["UserAddress"][0][0]); ?>" required="required" />
        </div>
        <div>
            <label for="PhoneNumber">Phone number<span class="text-danger">*</span></label>
            <input id="PhoneNumber" type="text" name="PhoneNumber" value="<?php print_r($_SESSION["UserPhoneNumber"][0][0]); ?>" required="required" />
        </div>
        <button type="submit" class="button regbutton"><i class="fa fa-edit"></i> Modify</button>
    </form>
</div>

<div class="text-center pt-5">
<a class="button" href='<?=explode("index", preg_quote($_SERVER['PHP_SELF']))[0]?>Profile'><i class="fa fa-arrow-left"></i> Back</a>
<p class="pt-5"><b>Marked with <span class="text-danger">*</span> are required!</b></p>
</div>