
<?php include 'header.php';
      include 'Menuitem.php';

$option1 = new Menuitem('The WP Burgeraaaaa', 'Freshly made all-beef patty served up with homefries','$14');
$option2 = new Menuitem('WP Kebobs', 'Tender cuts of beef and chicken, served with your choice of side','$17');

?>

<aside>
        <h2>Today's Specials</h2>
        <hr>
        <img src="images/burger_small.jpg" alt="Burger" title="Monday's Special - Burger">
        <h3><?php echo $option1->getitemName();?> </h3>
        <p> - </p>
        <hr>
        <img src="images/kebobs.jpg" alt="Kebobs" title="WP Kebobs">
        <h3></h3>
        <p>Tender cuts of beef and chicken, served with your choice of side - $17</p>
        <hr>
</aside>
<div class="main">
    <h1>Welcome</h1>
    <img src="images/dining_room.jpg" alt="Dining Room" title="The WP Eatery Dining Room" class="content_pic">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
    <h2>Book your Christmas Party!</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
</div><!-- End Main -->
<?php include 'footer.php'; ?>
