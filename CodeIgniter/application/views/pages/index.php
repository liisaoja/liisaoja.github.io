<h1><?php echo $title; ?></h1>
<section class="row">
    <div class="col-12">
<ul>
<?php foreach($member as $member_row){
  echo "<li>" . $member_row["last_name"] . " " . $member_row["first_name"] . "</li>";  
}
?>


</ul>
</div>
</section>