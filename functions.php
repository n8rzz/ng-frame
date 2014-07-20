<?php
//attach our function to the wp_pagenavi filter
add_filter( 'wp_pagenavi', 'ik_pagination', 10, 2 );
  
//customize the PageNavi HTML before it is output
function ik_pagination($html) {
    $out = '';
  
    //wrap a's and span's in li's
    $out = str_replace("<div","",$html);
    $out = str_replace("class='wp-pagenavi'>","",$out);
    $out = str_replace("<a","<li><a",$out);
    $out = str_replace("</a>","</a></li>",$out);
    $out = str_replace("<span","<li><span",$out);  
    $out = str_replace("</span>","</span></li>",$out);
    $out = str_replace("</div>","",$out);
  
    return '<ul class="pagination pagination-centered">'.$out.'</ul>';

}

//Bootstrap pager
//http://manofhustle.com/2013/12/25/bootstrap-pager-wordpress/
function bootstrap_wp_pager() {
    echo '<ul class="pager">';
 
    $next = get_next_posts_link( 'Newer →');
    $prev = get_previous_posts_link( 'Older ←' );
 
    if ( !empty($prev) )
        echo '<li class="previous">'.$prev.'</li>';
 
    if ( !empty($next) )
        echo '<li class="next">'.$next.'</li>';
 
    echo '</ul>';
}
?>