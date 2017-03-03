<?php
/**
 * Created by PhpStorm.
 * User: Chubs
 * Date: 3/2/2017
 * Time: 10:24 PM
 */
?>
<div class="col-xs-12">
    <div class="panel panel-info">
        <div class="panel-heading"><b>Viewing <?php echo ucfirst(UserDetail(UserID(), "username")); ?>'s Profile</b></div>
    <div class="panel-body">
        <div class="col-xs-4">
        <ol class="text-center" style="list-style-type: none;">
            <li class="list-group-item-danger">Administrator</li>
            <li class="list-group-item" style="cursor:hand"><?php echo UserDetail(UserID(), "reg_mail"); ?><br /><i>
            <?php if(ProfileInfo(UserID(),"email_hidden")==0) {
                echo "Visible to Public";
                }  else {
                echo "Hidden from Public";
                }
                ?>
                </i>
            </li>
            <li class="list-group-item">
                <?php echo CreateGravatar(UserDetail(UserID(), "reg_mail"),80, "mm", "g", true, array(), "img-thumbnail"); ?></li>
            <li class="list-group-item">Location: <?php echo ProfileInfo(UserID(), "location"); ?></li>
            <li class="list-group-item">Name: <?php echo ProfileInfo(UserID(), "fname").' '. ProfileInfo(UserID(), "lname"); ?></li>
            <li class="list-group-item">Operating System: <?php echo ProfileInfo(UserID(), "os"); ?></li>
            <li class="list-group-item">Member Since: <?php echo ProfileInfo(UserID(), "member_since"); ?></li>
            <li class="list-group-item">Posts: 25</li>
            <li class="list-group-item">Reputation: 100
            <hr />
            </li>
        </ol>

        </div>

        <div class="col-xs-8"><h3>Recent Activity</h3>
        <hr />
        No Recent Activity
        </div>
    </div>
    </div>
</div>
