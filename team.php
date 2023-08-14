<?php
   define("TITLE", "Team | Franklin's Fine Dining");

   include('includes/header.php');

?>

    <div id="team-members" class="cf">

    <h1>Our Team at Franklin's</h1>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est iusto eius harum asperiores aliquam vel consequatur maxime,
         quasi iste, dolorum quae porro officia dolore alias modi. Laboriosam voluptates quae labore.<strong>the best food you've ever had. EVER</strong></p>

         <hr>

         <?php
foreach ($teamMembers as $member) {
?>
    <div class="member">
        <img src="./image/<?php echo $member['img']; ?>.png" alt="<?php echo $member['name']; ?>">
        <h2><?php echo $member['name']; ?></h2>
        <p><?php echo $member['bio']; ?></p>
    </div><!-- member -->
<?php
}
?>

           
    </div><!-- team members -->

    <hr>

<?php include('includes/footer.php');?>
           