<?php $menu_items = wp_get_nav_menu_items('Menu principal') ?>
<?php $current_path = get_permalink() ?>

<?php $color = isset($color) && !empty($color) ? $color: 'blue'; ?>

 <!-- Navbar -->
 <div class="w3-top">
        <div class="w3-bar w3-<?php print $color; ?> w3-card w3-left-align w3-large">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-<?php print $color; ?>"
                href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i
                    class="fa fa-bars"></i></a>           
            <?php foreach ($menu_items as $item) : ?>
                <?php  $current_link =  ($current_path === $item->url) ? 'w3-white' : 'w3-hide-small w3-hover-white'; ?> 
               
            <a href="<?php print $item->url; ?>" class="w3-bar-item w3-button w3-padding-large <?php print $current_link; ?>">
                <?php print $item->title; ?>
            </a>
            <?php endforeach; ?>         
        </div>

        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
            <?php foreach ($menu_item as $item) : ?>
            <a href="<?php print $item->url; ?>" class="w3-bar-item w3-button w3-padding-large">
                <?php print $item->title; ?>
            </a>           
            <?php endforeach; ?>           
        </div>
</div>