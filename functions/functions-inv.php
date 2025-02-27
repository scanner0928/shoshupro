<?php


class inv_pageInfo {
  public $meta;
  public $bodyclass;

  public function __construct() {
  global $wp_query;

  $tmp = get_queried_object();

  if ( is_single() /*|| is_singular()*/ ) {
  $thisposttype = get_post_type_object( $tmp->post_type );
  $tax = ( $subjects = get_the_terms( $tmp->ID, 'category' ) ) ? reset( $subjects ) : false;
  if ( $tax ) {
  $pagemeta[ 'slug' ] = $tax->slug;
  $pagemeta[ 'label' ] = $tax->name;
  }
  $pagemeta[ 'label' ] = $thisposttype->labels->name;
  $pagemeta[ 'slug' ] = $tmp->post_type;
  $pagemeta[ 'post_type' ] = $tmp->post_type;
  $pagemeta[ 'post_type_label' ] = $thisposttype->labels->name;
  $body_class[] = 'single';
  $body_class[] = '--'.$tmp->post_type;
  } else if ( is_category() || is_tax() ) {
  $pagemeta[ 'label' ] = $tmp->name;
  $pagemeta[ 'tax' ] = $tmp->taxonomy;
  $pagemeta[ 'slug' ] = $tmp->slug;
  $pagemeta[ 'description' ] = $tmp->description;
  if ( $tmp->post_type ) {
  $pagemeta[ 'post_type' ] = $tmp->post_type;
  $thisposttype = get_post_type_object( $tmp->post_type );
  $pagemeta[ 'post_type_label' ] = $thisposttype->labels->name;
  } else {
  $pagemeta[ 'post_type' ] = $tmp->slug;
  $pagemeta[ 'post_type_label' ] = $tmp->name;
  }
  $body_class[] = 'archive';
  $body_class[] = '--news';

  } else if ( is_archive() ) {
  $rewrite = $tmp->rewrite[ 'slug' ];
  $rewrite = str_replace( '/', ' ', $rewrite );
  $pagemeta[ 'label' ] = $tmp->labels->name;
  $pagemeta[ 'slug' ] = $tmp->name;
  $pagemeta[ 'post_type' ] = $tmp->name;
  $pagemeta[ 'post_type_label' ] = $tmp->labels->name;
  $pagemeta[ 'description' ] = $tmp->description;
  $body_class[] = 'archive';
  $body_class[] = '--'.$rewrite;
  } else if ( is_page() ) {
  $pagemeta[ 'label' ] = $tmp->post_title;
  $pagemeta[ 'slug' ] = $tmp->post_name;
  $pagemeta[ 'post_type' ] = 'page';
  $pagemeta[ 'post_type_label' ] = 'ページ';
  // if($tmp->post_parent != 0){
  // $thisPage = gm_topparent( $tmp );
  // $parentPage = get_post( $thisPage->ID );
  // $pagemeta[ 'parentPageID' ] = $parentPage->ID;
  // }
  $body_class[] = 'page';
  $body_class[] = '--'.$tmp->post_name;

  } else if ( is_front_page() || is_home() ) {
  $pagemeta[ 'label' ] = __( 'ホーム', 'psyclone' );
  $pagemeta[ 'slug' ] = 'home';
  $body_class[] = 'home';

  } else if ( is_404() ) {
  $pagemeta[ 'label' ] = __( '404 Not found', 'psyclone' );
  $body_class[] = 'page404';

  } else if ( is_search() ) {
  $pagemeta[ 'label' ] = __( '検索', 'psyclone' );
  $pagemeta[ 'slug' ] = 'search';
  $body_class[] = 'archive';

  } else {
  $pagemeta[ 'label' ] = 'その他';
  $pagemeta[ 'slug' ] = 'etc';
  $body_class[] = 'etc';
  }
  if ( is_post_type_archive() ) {
  $originalwp = $wp_query;
  $pagemeta[ 'post_type' ] = $originalwp->query[ 'post_type' ];
  }

  $this->meta = $pagemeta;
  $this->bodyclass = $body_class;

  }

}
function inv_the_title(){
  $title = null;
  if ( is_post_type_archive() ) {
  $title = post_type_archive_title( '', false );
  } elseif ( is_category() ) {
  $title = single_cat_title( '', false );
  } elseif ( is_tag() ) {
  $title = single_tag_title( '', false );
  } elseif ( is_search() ) {
  $title = '検索結果';
  } elseif ( is_author() ) {
  $title = '<span class="vcard">' . get_the_author() . '</span>';
  }elseif ( is_page() ) {
    $title = get_the_title();
  }
  echo $title;
}

function inv_yobi($date){
  $week = array( "日", "月", "火", "水", "木", "金", "土" );
  return $week[date('w',strtotime($date))];
}
function inv_yobi_eng($date){
  $week = array( "Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat" );
  return $week[date('w',strtotime($date))];
}
function inv_shownew() {
  $days = 14; //Newを表示させたい期間の日数
  $today = date_i18n( 'U' );
  $entry = get_the_time( 'U' );
  $kiji = date( 'U', ( $today - $entry ) ) / 86400;
  if ( $days > $kiji ) {
  echo '<div class="new">NEW</div>';
  }
}
