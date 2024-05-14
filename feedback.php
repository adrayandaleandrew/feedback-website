<?php include './inc/header.php'; ?>

<?php
// $feedback = [
//   [
//     'id'=> '1',
//     'name'=> 'Mark John',
//     'email'=> 'mark@gmail.com',
//     'body'=> 'This is john',
//   ],
//   [
//     'id'=> '2',
//     'name'=> 'Jose Pecson',
//     'email'=> 'jose@gmail.com',
//     'body'=> 'This is jose',
//   ],
//   [
//     'id'=> '3',
//     'name'=> 'Tadej Pogacar',
//     'email'=> 'tadej@gmail.com',
//     'body'=> 'This is tadej',
//   ]
// ];

// SELECT all from feedback table
$sql = 'SELECT * FROM feedback';
$result = mysqli_query($conn, $sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<h2>Past Feedback</h2>

<?php if (empty($feedback)) : ?>
  <p class="lead mt3">There is no feedback</p>
<?php endif; ?>

<?php foreach ($feedback as $item): ?>
  <div class="card my-3 w-75">
    
    <div class="card-body text-center">
      
      <?php echo $item['body']; ?>

      <div class="text-secondary mt-2">
        By   <?php echo $item['name']; ?> on <?php echo $item['date']; ?> 
      </div>
    
    </div>
  
  </div>
<?php endforeach; ?>

<?php include './inc/footer.php'; ?>