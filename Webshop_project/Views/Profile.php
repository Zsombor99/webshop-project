<h1 class="heading-h1">User profile</h1>
<h1 class="heading-h1">Marked with <span class="text-danger">*</span> are required!</h1>
<?php echo '<h1 class="heading-h1">', $_SESSION["UserInfo"]; '</h1>' ?>
<h2 class="heading-h2">Personal informations</h2>

<form class="register-form" action="<?php Profile::UpdatePersonal() ?>" method="post">
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
    <button type="submit" class="button regbutton">Update</button>
</form>

<h2 class="heading-h2">E-mail address</h2>

<form class="register-form" action="<?php Profile::UpdateEmail() ?>" method="post">
    <div>
        <label for="CurrentEmailAddress">Current e-mail<span class="text-danger">*</span></label>
        <input id="CurrentEmailAddress" type="email" name="CurrentEmailAddress" required="required" />
    </div>
    <div>
        <label for="NewEmailAddress">New e-mail<span class="text-danger">*</span></label>
        <input id="NewEmailAddress" type="email" name="NewEmailAddress" required="required" />
    </div>
    <button type="submit" class="button regbutton">Update</button>
</form>

<h2 class="heading-h2">Password</h2>

<form class="register-form" action="<?php Profile::UpdatePassword() ?>" method="post">
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
    <button type="submit" class="button regbutton">Update</button>
</form>