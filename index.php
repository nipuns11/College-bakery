<?php include 'header.php';?>
<?php include 'footer.php';?>
<?php require 'menuItem.php';?>
<?php getHeader(); ?>
<?php  
$special1 = new menuItem('WP Burger', 14, 'Freshly made all-beef patty served up with homefries');
$special2 = new menuItem('WP Kebobs', 17, 'Tender cuts of beef and chicken, served with your choice of side');
?>
<aside>
        <h2><?php echo date('l'); ?>'s Specials</h2>
        <hr>
        <img src="images/burger_small.jpg" alt="Burger" title="Monday's Special - Burger">
        <h3><?php echo $special1->getItemName();?></h3>
        <p><?php echo $special1->getDescription();?> - $<?php echo $special1->getPrice();?></p>
        <hr>
        <img src="images/kebobs.jpg" alt="Kebobs" title="WP Kebobs">
        <h3><?php echo $special2->getItemName();?></h3>
        <p><?php echo $special2->getDescription();?> - $<?php echo $special2->getPrice();?></p>
        <hr>
</aside>
<div class="main">
    <h1>Welcome</h1>
    <img src="images/dining_room.jpg" alt="Dining Room" title="The WP Eatery Dining Room" class="content_pic">
    <p> college Bakery opened its first location on a quiet street corner in the heart of ottawa City’s algonquin college. From its inception, college Bakery has been cherished for its classic American baked goods, vintage decor and warm, inviting atmosphere</p>
    <h2>Book your Christmas Party!</h2>
    <p></p>
    <p></p>
</div><!-- End Main -->
<?php getFooter(); ?>