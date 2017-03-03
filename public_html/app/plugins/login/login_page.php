<?php
/**
 * Created by PhpStorm.
 * User: Chubs
 * Date: 3/2/2017
 * Time: 4:58 PM
 */
if(UserOnline() == true) { ?>
    <script type="text/javascript">location.href = 'account';</script>

    <?php
}
else {
//Relient on Jquery
?>
<div class="col-xs-4 col-xs-offset-4">
<div class="panel panel-primary">
    <div class="panel-heading">Login</div>
    <div class="panel-body">
        <form id="login_form">
        <p class="breadcrumb username_login">Username</p>
        <input type="text" name="login_username" id="login_username">
        <p class="breadcrumb password_login">Password</p>
        <input type="password" name="login_password" id="login_password"><br /><br />
        <input type="hidden" name="process" value="login">
            <input type="submit" class="btn btn-success">
        </form>
        <div class="login_error"></div>
        No Account? Register or Sign in with facebook
    </div>
</div>
</div>
<input type="hidden" id="post_url" value="<?php echo LOGIN_PAGE_ACTION; ?>">
<?Php } ?>