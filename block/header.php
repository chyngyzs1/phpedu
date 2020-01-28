
<div class="image_header">
<header>
  <div class="header">
  <div class="logo">
    <a href="/" class="link_home_page"></a>
    <span class="for_php"><i class="fab fa-php"></i></span>
    <span class="for_edu">edu</span>
  </div>
  <nav class="navigation">
    <ul class="list">
      <li>
           <a class="block" href="../">Главная</a>
      </li>
      <li>
           <a class="block" href="../about.php">Контакты</a>
      </li>
       <?php
      if(isset($_SESSION['username'])){
       echo ' 
       <li>
        <a href="../recources/personalArea/personal_area_page.php" class="block">Личный кабинет</a>
      </li>';
      }
    ?>
    </ul>
    </nav>
    <?php
      if(isset($_SESSION['username'])){
       echo ' <div class="btn_sign_in">
    <a href="../recources/log_out.php">Выход <i class="fas fa-sign-in-alt"></i>
    </a>
  </div>';
      }
      else{
        echo '<div class="btn_sign_in"><a href="../recources/Registration&Authorization_sheet.php"><i class="fas fa-sign-in-alt"></i>  Войти</a></div>';
      }
    ?>
    <!-- <a href="../recources/Registration&Authorization_sheet.php" class="btn_sign_in">Войти <i class="fas fa-sign-in-alt"></i></a> -->  
  </div>
</header>
    <?php if(isset($_SESSION["username"])){
            echo '<a href="/user_task/index_usertask.php" class="btn_start_course_header">Начать курс по PHP</a>';
          }else{
            echo '<a href="/recources/Registration&Authorization_sheet.php" class="btn_start_course_header">Начать курс по PHP</a>';
          }
          ?>
</div>
<script src="../js/js_for_header.js" defer></script>