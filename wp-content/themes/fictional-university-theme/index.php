<!-- <?php 
function myFirstFunction(){
    echo 2+2;
}
myFirstFunction()
?>

<h1><?php bloginfo("name")?></h1>
<p><?php bloginfo("description")?></p> -->


<!-- <?php 

$names = array("Brad", "John", "Jane", "Meosalot");

$count = 0;

while($count < count($names)) {
    echo"<li>Hi, My name is $names[$count]</li>";    
    $count++;
}



?> -->

<?php get_header();

    while(have_posts()) {
     the_post(); ?>
     <h2><a href="<?php the_permalink()?>"><?php the_title();?></a></h2>
        <?php the_content() ?>
      <hr>
    <?php }
    get_footer();
?>


