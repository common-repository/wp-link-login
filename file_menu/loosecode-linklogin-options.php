<?php
function lsc_ll_options(){
    if( $_POST['save_new'] ){
        lsc_ll_saveChoice( $_POST['choice'] );
        lsc_ll_saveStyleLink( $_POST['style_link'] );
    }
    if( $_POST['restore_default'] ){
        lsc_ll_saveChoice( LSC_LOGIN_CHOICE_FOOTER );
        lsc_ll_saveStyleLink( LSC_LOGIN_STYLE_DEFAULT );
    }
?>
    <div class="wrap">
        <h2>WP Link Login - Setting</h2>
        <form name="frm-save-css" id="frm-save-css" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>" method="post">
            <table class="form-table">
                <tr valign="top">
                    <th scope="row" style="width:53%;">
                        <label>
                            <em>Manual</em>: <?=__("you can insert the 'login link' in your post or page using the function:",'loosecode_wp_link_login');?> <code>&lsaquo;?php echo lsc_ll_insert_link(); ?&rsaquo;</code> <?=__("or using the shortcode ",'loosecode_wp_link_login');?> <code>lsc_ll_link</code>
                            <?=__("For optional attribute and help, you can see",'loosecode_wp_link_login');?> <a href="http://lab.loosecode.com/wordpress-plugins/wp-link-login.html" target="_blank">post on Lab Loosecode</a>.
                        </label>
                    </th>
                    <td>
                        <label for="choice_manual"><input type="radio" name="choice" id="choice_manual" value="<?=LSC_LOGIN_CHOICE_MANUAL?>" <?=( lsc_ll_getChoice() == LSC_LOGIN_CHOICE_MANUAL )?'checked="checked"':'';?>/>&nbsp;Manual</label>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row" style="width:53%;">
                        <label><em>Automatic</em>: <?=__("the 'login link' will be placed in the footer",'loosecode_wp_link_login');?> <small><em><?=__("( the wp_footer() must be triggered near the </body> tag of your template )",'loosecode_wp_link_login');?></em></small></label>
                    </th>
                    <td>
                        <label for="choice_footer"><input type="radio" name="choice" id="choice_footer" value="<?=LSC_LOGIN_CHOICE_FOOTER?>" <?=( lsc_ll_getChoice() == LSC_LOGIN_CHOICE_FOOTER )?'checked="checked"':'';?> />&nbsp;Automatic</label>
                    </td>
                </tr>
            </table>
            <br/>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row" style="width:53%;">
                        <label for="style_link"><?=__('You can change the style of \'login link\':','loosecode_wp_link_login');?><em><?=__('only for automatic mode:','loosecode_wp_link_login');?></em></label><br/>
                        <small><?=__('Now:','loosecode_wp_link_login');?> <code>.lsc_ll_linklogin{float:right;clear:both;display:block;padding-right:15px;}</code></small>
                    </th>
                    <td>
                        <input type="text" name="style_link" id="style_link" value="<?=lsc_ll_getStyleLink();?>" class="large-text" <?=( lsc_ll_getChoice() == LSC_LOGIN_CHOICE_MANUAL )?'readonly="readonly"':'';?>/>
                    </td>
                </tr>
            </table>
            <p class="submit">
                <input type="submit" name="save_new" id="save_new" value="<?=__('Update','loosecode_wp_link_login');?>" class="button-primary" style="float:right;"/>
                <input type="submit" name="restore_default" id="restore_default" value="<?=__('Restore default','loosecode_wp_link_login');?>"  class="button-secondary" style="float:left;" />
            </p>
        </form>
    </div>
<?php
}
?>