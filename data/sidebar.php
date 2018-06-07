<div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">
<?php

?>
<div class="sidebar-wrapper">
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text">
            Creative Tim
        </a>
    </div>

    <ul class="nav">
        <li class="<?php $a = $_SERVER["REQUEST_URI"];if (strpos($a, 'dashboard') !== false) { echo 'active';} ?>">
            <a href="dashboard.php">
                <i class="pe-7s-graph"></i>
                <p>Dashboard</p>
            </a>
        </li>
        <li class="<?php $a = $_SERVER["REQUEST_URI"];if (strpos($a, 'user') !== false) { echo 'active';} ?>">
            <a href="user.php">
                <i class="pe-7s-user"></i>
                <p>User Profile</p>
            </a>
        </li>
        <li class="<?php $a = $_SERVER["REQUEST_URI"];if (strpos($a, 'table') !== false) { echo 'active';} ?>">
            <a href="table.php">
                <i class="pe-7s-note2"></i>
                <p>Table List</p>
            </a>
        </li>
        <li class="<?php $a = $_SERVER["REQUEST_URI"];if (strpos($a, 'typography') !== false) { echo 'active';} ?>">
            <a href="typography.php">
                <i class="pe-7s-news-paper"></i>
                <p>Typography</p>
            </a>
        </li>
        <li class="<?php $a = $_SERVER["REQUEST_URI"];if (strpos($a, 'icons') !== false) { echo 'active';} ?>">
            <a href="icons.php">
                <i class="pe-7s-science"></i>
                <p>Icons</p>
            </a>
        </li>
        <li class="<?php $a = $_SERVER["REQUEST_URI"];if (strpos($a, 'maps') !== false) { echo 'active';} ?>">
            <a href="maps.php">
                <i class="pe-7s-map-marker"></i>
                <p>Maps</p>
            </a>
        </li>
        <li class="<?php $a = $_SERVER["REQUEST_URI"];if (strpos($a, 'notifications') !== false) { echo 'active';} ?>">
            <a href="notifications.php">
                <i class="pe-7s-bell"></i>
                <p>Notifications</p>
            </a>
        </li>
        <li class="active-pro">
            <a href="upgrade.php">
                <i class="pe-7s-rocket"></i>
                <p>Upgrade to PRO</p>
            </a>
        </li>
    </ul>
</div>
</div>