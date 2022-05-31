<div class="wrap"> 
    <h2> En-tête de page de configuration du plug-in personnalisé </h2> 
        <form method = "post" action="options.php"> 
            <?php settings_fields ('cw_options_group'); ?> 
            <table class="form-table"> 
                <tr> 
                    <th> 
                        <label for="param1">Param1:</label> 
                    </th> 
                    <td> 
                        <input type='text' class="regular-text" id="param1" name="param1" value="<?php echo get_option ('param1');?>"> 
                    </td> 
                </tr> 
                <tr> 
                    <th> <label for="param2">Param2:</label></th> 
                    <td> <input type='text' class="regular-text" id="param2" name="param2" value="<?php echo get_option ('param2');?> "> </td> 
                </tr> 
                <tr> 
                    <th> <label for="param3">Param3:</label> </th>
                    <td> <input type='text' class="regular-text" id="param3" name="param3" value="<?php echo get_option ('param3');?>"> </td>
                 </tr> 
            </table> 
            <?php submit_button (); ?>
    </form>
</div>