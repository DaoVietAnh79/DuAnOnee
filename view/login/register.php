    <!--=============== MAIN ===============-->
    <main class="main">
      <!--=============== BREADCRUMB ===============-->
      <section class="breadcrumb">
        <ul class="breadcrumb__list flex container">
          <li><a href="index.php" class="breadcrumb__link">Trang Chủ</a></li>
          <li><span class="breadcrumb__link">></span></li>
          <li><span class="breadcrumb__link">Đăng Nhập / Đăng Ký</span></li>
        </ul>
      </section>

      <!--=============== LOGIN-REGISTER ===============-->
      <section class="login-register section--lg">
        <div class="login-register__container container grid">
          <div class="register">
            <h3 class="section__title">Tạo Tài Khoản Mới</h3>

            <form action="index.php?act=register" method="POST" class="form grid">
              <input type="text" name="user" placeholder="Nhập tên đăng nhập của bạn" class="form__input">
              <input type="email" name="email" placeholder="Nhập email của bạn" class="form__input">
              <input type="password" name="pass" placeholder="Nhập password của bạn" class="form__input">
              <input type="password" name="pass" placeholder="Nhập lại password của bạn" class="form__input">
              <!-- <input type="password" name="pass" placeholder="Nhập lại password của bạn" class="form__input"> -->
              
              <div class="form__btn">
                <input type="submit" value="Đăng ký" name="submit" class="btn">
              </div>
            </form>
          </div>
        </div>
        
      </section>

      <!--=============== NEWSLETTER ===============-->
      <section class="newsletter section">
        <div class="newsletter__container container grid">
          <h3 class="newsletter__title flex">
            <img src="assets/img/icon-email.svg" alt="" class="newsletter__icon">
            Đăng ký để nhận thêm nhiều ưu đãi
          </h3>

          <p class="newsletter__description">
            ...và nhận phiếu giảm giá 35% cho lần mua sắm đầu tiên.
          </p>

          <form action="" class="newsletter__form">
            <input type="text" placeholder="Nhập email của bạn" class="newsletter__input">
            <button type="submit" class="newsletter__btn">ĐăngKý</button>
          </form>
        </div>
      </section>
    </main>
