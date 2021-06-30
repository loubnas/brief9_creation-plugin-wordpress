<?php 

/**
 *  Plugin Name: contactform plugin
*/


//supprimer les informationde headers

function reaload_headers()
{
    ob_start();
} 
add_action('init', 'reaload_headers');

//creation table contact avec l'activation du plugin :
function create_table(){

    // $connection = mysqli_connect('localhost','root','');
    // mysqli_select_db($connection,"plugin");
  
    global $wpdb;
  $table=$wpdb->prefix.'ContactUs';
  $wpdb->query( "CREATE TABLE IF NOT EXISTS $table(id int NOT NULL PRIMARY KEY AUTO_INCREMENT, fullname varchar(255) NOT NULL, email varchar(55) NOT NULL,subjecte varchar(55) NOT NULL, content varchar(255) NOT NULL)");
  
  }
  register_activation_hook(__FILE__,'create_table');



//supprimer la table contact en activant le plugin :

function Drop_table(){

  global $wpdb;
  $table=$wpdb->prefix.'ContactUs';
  $wpdb->query( "DROP TABLE if exists $table");  
  
  }
  register_uninstall_hook( __FILE__,'Drop_table');

  //---------------------------------------

function Plugin_Form_ContactUs(){
    require_once('form.php');
}


add_shortcode('form_contact','Plugin_Form_ContactUs');



function admin_dashborad(){
    add_menu_page('forms','Contact','manage_options','contact-dashbord','dashborad_admin_contact','dashicons-email',4);
}

add_action('admin_menu','admin_dashborad');

function dashborad_admin_contact(){
    require_once('dashborad.php');
}





?>