<?php
  include 'functions.php';
  $pdo = pdo_connect_mysql();
  session_start();

  $roll_no = $_SESSION['roll_no'];
  $stmt = $pdo->prepare("SELECT * FROM books WHERE roll_no = $roll_no"); 
  $stmt->execute();
  $books = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<?=template_header('SemBooks')?>

<html>
    <form method="post">
      <textarea id="mytextarea" name = "myTextArea"></textarea>
    </form>
    
    <nav class="navtop">
      <ul class="navbar-nav">
      <?php foreach($books as $book): 
        $book_id = $book['book_id'];
        $stmt = $pdo->prepare("SELECT * FROM pages WHERE book_id = $book_id");
        $stmt->execute();
        $pages = $stmt->fetchAll(PDO::FETCH_ASSOC); ?>
        <li class="nav-item dropup">
          <a button="nav-link dropup-toggle" role = "button" data-toggle = "dropdown"><?=$book['book_name']?></button>
          <div class="dropdown-menu">
            <?php foreach($pages as $page): ?>
              <a class = "dropdown-item" onclick = "displayContent()">Page 1</a> 
            <?php endforeach; ?>
          </div>
        </li>
      <?php endforeach; ?>
      </ul>  
    </nav>
  
  <script>
      tinymce.init({
        selector: '#mytextarea',
        height: 921,
      });
  </script>
</html>