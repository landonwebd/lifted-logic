<?php get_header(); ?>
<div class="container" style="margin: 200px auto;">
  <p>Because I couldn't stop thinking about this exercise, I knew I had to solve it. Plus, it gave
  me an opportunity for one of those 'WooHoo Moments!'<p>
  <p>Here is what I came up with. I've also added this file to my git repository.</p>
  <pre>
  $phpArray = array("Johnny", "Billy", "Landon", "Aaron", "Steve", "Aaron", "Landon", 
  "Billy", "Kyle", "Samantha", "Janelle", "Aaron", "Alaine", "Claire", "Joney", "Megan", 
  "Janelle", "Alaine", "Billy", "Landon", "Johnny", "Kyle", "Landon");
  
  function getMostSeenName($phpArray) {
    $newAssociativeArray = array();
    for($i = 0; $i < count($phpArray); $i++) {
      $key = $phpArray[$i];
      $value = 0;
      foreach($phpArray as $item) {
        if($item == $key) {
          $value++;
        }
      }
      $newAssociativeArray += array(
        $key => $value
      );
    }
    arsort($newAssociativeArray);
    echo "The most seen name in the array is " . key($newAssociativeArray) . "!";
    }

  </pre>
  <?php 

  $phpArray = array("Johnny", "Billy", "Landon", "Aaron", "Steve", "Aaron", "Landon", "Billy", "Kyle", "Samantha", "Janelle", "Aaron", "Alaine", "Claire", "Joney", "Megan", "Janelle", "Alaine", "Billy", "Landon", "Johnny", "Kyle", "Landon");
  
  function getMostSeenName($phpArray) {
    $newAssociativeArray = array();
    for($i = 0; $i < count($phpArray); $i++) {
      $key = $phpArray[$i];
      $value = 0;
      foreach($phpArray as $item) {
        if($item == $key) {
          $value++;
        }
      }
      $newAssociativeArray += array(
        $key => $value
      );
    }
    arsort($newAssociativeArray);
    echo "The most seen name in the array is " . key($newAssociativeArray) . "!";
    }

  ?>
  <p>And here is the result when calling the function!</p>
  <?php getMostSeenName($phpArray); ?>
</div>


<?php get_footer(); ?>