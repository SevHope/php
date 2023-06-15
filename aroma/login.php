  <!--================Login Box Area =================-->
	<section class="login_box_area section-margin">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<div class="hover">
							<h4>New to our website?</h4>
							<p>There are advances being made in science and technology everyday, and a good example of this is the</p>
							<a class="button button-account" href="register.html">Зарегистрироваться</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Авторизоваться</h3>
						<form class="row login_form"  onsubmit="sendFormUser(this); return false;" id="contactForm" >
							<div class="col-md-12 form-group">
								<input type="email" class="form-control" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" name="pass" placeholder="Пароль" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Пароль'">
							</div>
							<div class="col-md-12 form-group">
								</div>
							<div class="col-md-12 form-group">
                              <p id="info" style="color: red; padding-left: 2.5rem"></p>
								<button type="submit" value="submit" class="button button-login w-100">Войти</button>
								<a href="#">Забыли пароль?</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->
<script>
			async function sendFormUser(form) {
				let response = await fetch("authUser", {
					method: "POST",
					body: new FormData(form),
				});
				let result = await response.text();
				if (result == "ok") {
					location.href = "/pages/lk.php";
				} else if (result == "user_not_found") {
					info.innerText = "Такого пользователя не существует";
				}
			}
		</script>
