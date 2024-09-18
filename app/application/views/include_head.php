<div class="app-sidebar">
    <div class="logo">
        <a href="#" class="logo-icon" style="background: url(<?= _assets('images/velixs.png') ?>) no-repeat; background-position: center center;background-size: 35px;"><span class="logo-text">WALIX</span></a>
        <div class="sidebar-user-switcher user-activity-online">
            <a href="#">
                <img src="<?= _assets() ?>/images/avatars/avatar.gif">
                <span class="activity-indicator"></span>
                <span class="user-info-text"><?= $user->username ?><br><span class="user-state-info">WALIX</span></span>
            </a>
        </div>
    </div>
    <div class="app-menu">
        <ul class="accordion-menu">
            <li class="sidebar-title">
                Home
            </li>
            <li>
                <a href="<?= base_url('home') ?>" class="active"><i class="material-icons-two-tone">dashboard</i>Dashboard</a>
            </li>
            <li class="sidebar-title">
                Main Fitur
            </li>
            <li>
                <a href="<?= base_url('autoresponder') ?>" class="active"><i class="material-icons-two-tone">message</i>Auto Reply</a>
            </li>
            <li>
                <a href="<?= base_url('contacts') ?>" class="active"><i class="material-icons-two-tone">contacts</i>Contacat | Number</a>
            </li>
            <li>
                <a href="<?= base_url('blast') ?>" class="active"><i class="material-icons-two-tone">question_answer</i>WA Blast</a>
            </li>
            <li>
                <a href="<?= base_url('schedule') ?>" class="active"><i class="material-icons-two-tone">schedule</i>Scheduled Message</a>
            </li>
            <li>
                <a href="<?= base_url('send') ?>" class="active"><i class="material-icons-two-tone">send</i>Single Send</a>
            </li>
            <li>
                <a href="javascript:void()"><i class="material-icons-two-tone">report</i>Reports<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                <ul class="sub-menu">
                    <li>
                        <a href="<?= base_url("report/single") ?>">Single Messages</a>
                    </li>
                    <li>
                        <a href="<?= base_url("report/received") ?>">Received Messages</a>
                    </li>
                    <li>
                        <a href="<?= base_url("report/api") ?>">API Messages</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-title">
                Other
            </li>
            <li>
                <a href="<?= base_url('api') ?>" class="active"><i class="material-icons-two-tone">api</i>Rest Api</a>
            </li>
            <?php if ($user->level == 1) { ?>
                <li>
                    <a href="<?= base_url('users') ?>" class="active"><i class="material-icons-two-tone">account_circle</i>Users Manager</a>
                </li>
            <?php } ?>
            <li>
                <a href="<?= base_url('settings') ?>" class="active"><i class="material-icons-two-tone">settings</i>Settings</a>
            </li>
            <li>
                <a href="<?= base_url('logout') ?>" class="active"><i class="material-icons-two-tone">logout</i>Logout</a>
            </li>
        </ul>
    </div>
</div>