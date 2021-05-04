<?php
    $user = selectSingle(4);
    $welcome = 'Welcome, '.$user['fname'].'';
 ?>
<header>
   <div class="container fluid">
     <div class="row">
        <div class="col">
        [LOGO HERE]
        </div>
        <div class="col-md-8">
           <nav>
              <ul>
                <li><a href="/beginner/crud">Dashboard</a></li>
                <li><a href="/beginner/crud/create.php">Create New</a></li>
                <li><?php echo $welcome ?></li>
              </ul>
           </nav>
        </div>
    </div>
    </div>
</header>
