<?php
/*
Template Name: Found Angels Main Index 5 ORDERED
*/
?>
<html>
<style type="text/css">
@font-face {
  font-family: 'IM Fell English';
  font-style: normal;
  font-weight: 400;
  src: local('IM FELL English Roman'), local('IM_FELL_English_Roman'), url(https://found-angels.com/wp-content/themes/foundangels/images/IMFellEnglish-Regular.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

body {
width: 97%;
background-color: white;
color: black;
font-family: 'IM Fell English', serif !important;
}
.post-entry {
}
.categoryl {
height: 1045px;
width: 430px;
float: left;
}

.category2 {
height: 100px;
width: 430px;
display: block;
}
a.titlecat2 {
font-size: 13px;
color: #e91e63;
}
a.titlecat3 {
font-size: 13px;
color: black;
}

.models {
width: 100%;
    float: left;
    background-color: #e91e63;
    color: white;
    padding: 10px;

}

.studios {
width: 100%;
    float: left;
    background-color: #e91e63;
    color: white;
    padding: 10px;
}


.grid-item {
}
a.titlecat {
font-size: 30px;
color: #e91e63;
}
a {
text-decoration: none;
font-size: 20px;
color: black;
}
.headtitle {
text-align: center;
font-size: 80px;
}
.descr {
text-align: center;
font-size: 20px;
}
.lists {
/*padding-left: 350;*/
}
p.recent {
font-size: 12px;
}


</style>

<?php /* get_header(); */ ?>

<title>Found Angels - Galleries of beautiful girls</title>



<center><a href="/"><img width="300" src="/wp-content/themes/foundangels/images/fa-logo.jpg" /></a></center>
<div class="descr">Site dedicated to beautiful girls. <br>
<a href="/archives/blog">Instagram</a> | <a href="/archives/blog">Models</a> | <a href="/archives/blog">Wallpaper</a> | <a href="/archives/blog">Films</a>
</div>



<body>

<?php get_search_form(); ?>

<form method='post' action='/?page_id=20794'>
<div><input type='text' name='fname' placeholder='File name'>
<input type='submit' value="Search">
</div>
</form>


<div class="lists">
<div class="categoryl">
<a class="titlecat" href="/post-list"><h1>All posts</a> (5 latest)</h1>
<?php
$args = array('post_type' => array('post'), 'showposts' => 5, 'orderby' => 'date');
$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
        $the_query->the_post(); ?>
        <h2><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post_id, 'thumbnail', array( 'class' => 'alignleft' ) ); ?><?php the_title(); ?></a></h2>
<?php
    }
} else {
    // no posts found
}
wp_reset_postdata();
?>
</div>
</div>



<div class="lists">
<div class="categoryl">
<a class="titlecat" href="https://found-angels.com/?cat=2"><h1>Instagram models</a>
(<?php $category = get_category(2); $count = $category->category_count; if( $count > $something ) { echo $count; } ?> galleries)<h1>
<p class="recent">Recently updated galleries on top</p>

<?php
    $args = array( 'category' => 2, 'post_type' =>  'post', 'orderby'     => 'modified', 'order'       => 'DESC' );
    $postslist = get_posts( $args );
    foreach ($postslist as $post) :  setup_postdata($post);
    ?>
    <h2><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post_id, 'thumbnail', array( 'class' => 'alignleft' ) ); ?><?php the_title(); ?></a></h2>
    <?php endforeach; ?>
</div>
</div>

<div class="lists">
<div class="categoryl">
<a class="titlecat" href="https://found-angels.com/?cat=7"><h1>Instagram models teens</a>
(<?php $category = get_category(7); $count = $category->category_count; if( $count > $something ) { echo $count; } ?> galleries)<h1>
<p class="recent">Recently updated galleries on top</p>

<?php
    $args = array( 'category' => 7, 'post_type' =>  'post', 'orderby'     => 'modified', 'order'       => 'DESC' );
    $postslist = get_posts( $args );
    foreach ($postslist as $post) :  setup_postdata($post);
    ?>
    <h2><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post_id, 'thumbnail', array( 'class' => 'alignleft' ) ); ?><?php the_title(); ?></a></h2>
    <?php endforeach; ?>
</div>
</div>

<div class="lists">
<div class="categoryl">
<a class="titlecat" href="https://found-angels.com/?cat=3"><h1>Instagram Archives</a>
(<?php $category = get_category(3); $count = $category->category_count; if( $count > $something ) { echo $count; } ?> galleries)<h1>

<?php
    $args = array( 'category' => 3, 'post_type' =>  'post' );
    $postslist = get_posts( $args );
    foreach ($postslist as $post) :  setup_postdata($post);
    ?>
    <h2><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post_id, 'thumbnail', array( 'class' => 'alignleft' ) ); ?><?php the_title(); ?></a></h2>
    <?php endforeach; ?>
</div>
</div>



</div>
</div>
</div>



</body>


</html>
