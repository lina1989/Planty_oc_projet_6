</main>
</div>
<footer id="footer" role="contentinfo">
<?php 
// Affiche un menu de navigation WordPress nommé 'footer'. Chaque lien du menu est entouré par une balise <span> avec l'attribut 'itemprop' défini à 'name' pour la sémantique SEO.
wp_nav_menu( array( 'menu' => 'footer', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); 
?>
<?php 
    // Appelle la fonction `wp_footer()`, qui est essentielle pour charger les scripts et les ressources nécessaires à la fin de la page juste avant la fermeture de la balise </body>. Elle est souvent utilisée par les thèmes WordPress.
    wp_footer(); 
?>
</footer>
</div>
</body>
</html>