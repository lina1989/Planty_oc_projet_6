<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}
/**
 * Attache la fonction 'ajouter_lien_admin' à l'action 'afficher_admin_si_connecte'.
 * Lorsque l'action 'afficher_admin_si_connecte' est déclenchée, la fonction 'ajouter_lien_admin' est exécutée.
 */
add_action('afficher_admin_si_connecte', 'ajouter_lien_admin');
/**
 * Vérifie si un utilisateur est connecté.
 * Si un utilisateur est connecté, affiche un lien vers le tableau de bord administrateur.
 */
function ajouter_lien_admin() {
    // Vérifie si l'utilisateur est connecté
    if(is_user_logged_in()) {
        // Si connecté, affiche un lien vers le tableau de bord administrateur
        echo '<a href="'. admin_url() .'" class="admin-link">Admin</a>';
    }
}
?>