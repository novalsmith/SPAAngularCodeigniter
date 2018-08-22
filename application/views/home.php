<!--  <h2>Home Pages</h2>
	<div class="container">
		  <p>{{ message }}</p>
	</div> -->
 <style>
.demo-card-wide.mdl-card {
  width: 512px;
  padding-top: 20px;
}
.demo-card-wide > .mdl-card__title {
  color: #fff;
  height: 176px;
  background: url('https://www.tristatetechnology.com/blog/wp-content/uploads/2017/09/Why-AngularJS-A1.jpg') center / cover;
}
.demo-card-wide > .mdl-card__menu {
  color: #fff;
}
.mdl-card__title-text{
	color: black;
}
</style>

<div class="demo-card-wide mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Home Pages</h2>
  </div>
  <div class="mdl-card__supporting-text">
     <p>{{ message }}</p>
  </div>
  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
      Get Started
    </a>
  </div>
  <div class="mdl-card__menu">
    <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
      <i class="material-icons">share</i>
    </button>
  </div>
</div>