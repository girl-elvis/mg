<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{

     /**
     * Return Home fieldss from Advanced Custom Fields
     *
     * @return array
     */
    public function homeExtras() {

      // global $post;

      $homeData = [];

      if( have_rows('home_blocks') ):
          while( have_rows('home_blocks') ) : the_row();
              $pageObj = get_sub_field('page');
              array_push($homeData, $pageObj);
          endwhile;
      endif;



    
      return $homeData;

    } //end public function homeExtras





     /**
     * Return home footer fieldss from Advanced Custom Fields
     *
     * @return array
     */
    public function authorFooter() {

      // global $post;


      $authorData = [];
      if( have_rows('author_footer') ):
          while( have_rows('author_footer') ) : the_row();
              // $author = get_sub_field('author');
              array_push($authorData, get_sub_field('title'));
              $img = get_sub_field('image');
              $imgID = $img['ID'];
              array_push($authorData, $img);
              array_push($authorData, get_sub_field('text'));
              array_push($authorData, get_sub_field('link'));
              $fullimg = wp_get_attachment_image($imgID, 'thumbnail',"", array( "class" => "rounded-full mx-auto" ));
              array_push($authorData, $fullimg);
          endwhile;
      endif;



      return $authorData;

    } //end public function homeExtras


}

