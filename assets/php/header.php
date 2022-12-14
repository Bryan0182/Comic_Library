<div class="mobile_menu">
    <div class="topnav">
        <div id="myLinks">
            <a class="<?php if($page== 'home'){echo 'mobile_active';} ?>" href="index.php">Home</a>
            <a class="<?php if($page== 'profielen'){echo 'mobile_active';} ?>" href="profiles.php">Profielen</a>
            <a class="<?php if($page== 'login'){echo 'mobile_active';} ?>" href="login.php">Login</a>
        </div>
        <a href="javascript:void(0);" class="icon" onclick="mobileMenu()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
</div>
<header class="header">
    <div class="desktop_menu header">
        <div class="menu">
            <ul>
                <li><a class="<?php if($page== 'shop'){echo 'active';} ?>" href="shop.php">Shop</a></li>
                <li><a class="<?php if($page== 'library'){echo 'active';} ?>" href="library.php">Library</a></li>
                <li><a class="<?php if($page== 'cart'){echo 'active';} ?>" href="cart.php">Cart</a></li>
                <?php if (isset($_SESSION['user']) === true) : ?>
                <?php
                    $id = $_SESSION['user'];
                    $sql = $conn->prepare("SELECT * FROM `user` WHERE `user_ID`='$id'");
                    $sql->execute();
                    $fetch = $sql->fetch();
                ?>
                <div class="dropdown">
                    <li><button class="dropbtn"><i class="fa-solid fa-user"></i>
                            <?php echo "Welkom " . $fetch['name']?>
                            <i class="fa fa-caret-down"></i></button>
                        <div class="dropdown-content">
                            <a href="my_profile.php">Mijn profiel</a>
                            <a href="./assets/php/logout.php">Uitloggen</a>
                        </div>
                    </li>
                </div>
                    <?php else : ?>
                    <li><a class="<?php if($page== 'login'){echo 'active';} ?>" href="<?= ('login.php') ?>">Login</a></li>
                    <?php endif; ?>
            </ul>
        </div>
    </div>
</header>