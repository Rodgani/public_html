<style>
    .navbar-custom .nav-item {
        font-size: 15px;
        margin: 0 0.5rem;
    }

    .navbar-custom .nav-link {
        padding: 0 1rem;
    }

    .navbar-custom .nav-item a {
        color: #212529 !important;
    }
    .navbar-expand.navbar-custom .navbar-nav .nav-link{
        padding: 3px 9px;
        border-radius: 5px;
        border:1px solid #fff;
    }
    .navbar-expand.navbar-custom .navbar-nav .nav-link:hover{
        border-color:var(--primary-color);
    }
    .navbar-expand.navbar-custom .navbar-nav .nav-item.active > a {
        color: #fff !important;
        background: var(--primary-color);
        border:1px solid var(--primary-color);
    }

    @media(max-width: 1199px) {
        .navbar-custom .nav-item {
            margin: 0 0;
        }
    }

    .navbar-brand {
        padding: 0;
    }

    .navbar-custom-mobile .nav-item {
        font-size: 20px;
        padding: 10px;
        border-bottom: 1px solid #d5d5d5;
    }

    .navbar-custom-mobile .dropdown-item {
        font-size: 20px;
    }

    .navbar-custom .dropdown-item:active, .navbar-custom-mobile .dropdown-item:active, .navbar-custom a.dropdown-item.active:hover, .navbar-custom-mobile a.dropdown-item.active:hover {
        text-decoration: none;
        background-color: #f8f9fa;
    }

    .navbar-custom a.dropdown-item.active, .navbar-custom-mobile a.dropdown-item.active {
        background: none;
        color: var(--primary-accent-color) !important;
    }
</style>


<?php
  $current_url = get_instance()->uri->segment_array();
  $slug = $this->uri->segment(1) ? $this->uri->segment(1) : 'home';
  $sub = $this->uri->segment(2) ? $this->uri->segment(2) : '_no_sub_page_';
?>
<!-- Desktop Navigation -->
<nav class="navbar navbar-expand navbar-light bg-white shadow-sm navbar-custom d-none d-xl-block sticky-top">
  <div class="container">
        <a class="navbar-brand" href="/" title="Automobile Wohlensee"><img height="45" src="/assets/front/images/logo/automobile-wohlensee.svg" title="Autoankauf und Autoverkauf – Automobile Wohlensee" alt="Autoankauf und Autoverkauf – Automobile Wohlensee"></a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item <?= $slug == 'home' ? 'active' : '' ?>">
          <a class="nav-link" href="/">
            <i class="fa fa-home"></i>
          </a>
        </li>

        <!--<li class="nav-item dropdown <?= $slug == 'fahrzeugverkauf' || $slug == 'autos' ? 'active' : '' ?>">
          <a class="nav-link dropdown-toggle" href="/fahrzeugverkauf">
            Fahrzeugverkauf
          </a>
          <div class="dropdown-menu text-right" aria-labelledby="navbarDropdownFahrzeugankauf">
            <a class="dropdown-item p-2 pr-3 <?= $slug == 'fahrzeugverkauf' && $sub == '_no_sub_page_' ? 'active' : '' ?>" href="/fahrzeugverkauf">Übersicht</a>
            <a class="dropdown-item p-2 pr-3 <?= $slug == 'autos' ? 'active' : '' ?>" href="/autos">Fahrzeuge</a>
          </div>
        </li>-->

        <li class="nav-item <?= $slug == 'autos' ? 'active' : '' ?>">
          <a class="nav-link" href="/autos">Unsere Autos</a>
        </li>

        <li class="nav-item <?= $slug == 'autoverkauf' ? 'active' : '' ?>">
          <a class="nav-link" href="/autoverkauf">Autoverkauf</a>
        </li>

        <li class="nav-item <?= $slug == 'autoankauf' ? 'active' : '' ?>">
          <a class="nav-link" href="/autoankauf">Autoankauf</a>
        </li>

        <li class="nav-item <?= $slug == 'werkstatt' ? 'active' : '' ?>">
          <a class="nav-link" href="/werkstatt">Werkstatt</a>
        </li>


        <li class="nav-item <?= $slug == 'miete-mich-taeglich' ? 'active' : '' ?>">
          <a class="nav-link" href="/miete-mich-taeglich/peugeot-boxer">Lieferwagen mieten</a>
        </li>

        <li class="nav-item <?= $slug == 'ueber-uns' ? 'active' : '' ?>">
          <a class="nav-link" href="/ueber-uns">Über uns</a>
        </li>

        <li class="nav-item <?= $slug == 'kontakt' ? 'active' : '' ?>">
          <a class="nav-link" href="/kontakt">Kontakt</a>
        </li>

      </ul>
    </div>

  </div>
</nav>


<!-- Mobile Navigation -->
<nav class="navbar navbar-light bg-white shadow-sm navbar-custom navbar-custom-mobile d-xl-none sticky-top">
	<div class="container">
				<a class="navbar-brand" href="/"><img height="45" src="/assets/front/images/logo/automobile-wohlensee-logo.png"
																							alt="Automobile Wohlensee"></a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
						aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav my-4">
        <li class="nav-item <?= $slug == 'home' ? 'active' : '' ?>">
          <a class="nav-link" href="/">Startseite</a>
        </li>

        <!--<li class="nav-item dropdown <?= $slug == 'fahrzeugverkauf' || $slug == 'autos' ? 'active' : '' ?>">
          <a class="nav-link dropdown-toggle d-flex" href="/fahrzeugverkauf">
            <span class="flex-grow-1">Fahrzeugverkauf</span>
            <span id="navbarDropdownFahrzeugankauf" role="button"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <svg width="17" class="ml-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9.2828 4.89817"><path
                        class="style-jt322lel1_noLink"
                        d="M4.64116,4.89817a.5001.5001,0,0,1-.34277-.13574L.15727.86448A.50018.50018,0,0,1,.84282.136L4.64116,3.71165,8.44.136a.50018.50018,0,0,1,.68555.72852L4.98393,4.76243A.5001.5001,0,0,1,4.64116,4.89817Z"></path></svg>
                </span>
          </a>
          <div class="dropdown-menu border-0 rounded-0 mt-2 <?= $slug == 'autos' ? 'd-block' : '' ?>" aria-labelledby="navbarDropdownFahrzeugankauf">
            <a class="dropdown-item <?= $slug == 'fahrzeugverkauf' && $sub == '_no_sub_page_' ? 'active' : '' ?>" href="/fahrzeugverkauf">Übersicht</a>
            <a class="dropdown-item <?= $slug == 'autos' ? 'active' : '' ?>" href="/autos">Fahrzeuge</a>
          </div>
        </li>-->

        <li class="nav-item <?= $slug == 'autos' ? 'active' : '' ?>">
					<a class="nav-link" href="/autos">Unsere Autos</a>
				</li>

				<li class="nav-item <?= $slug == 'autoverkauf' ? 'active' : '' ?>">
					<a class="nav-link" href="/autoverkauf">Autoverkauf</a>
				</li>

				<li class="nav-item <?= $slug == 'autoankauf' ? 'active' : '' ?>">
					<a class="nav-link" href="/autoankauf">Autoankauf</a>
				</li>

				<li class="nav-item <?= $slug == 'werkstatt' ? 'active' : '' ?>">
					<a class="nav-link" href="/werkstatt">Werkstatt</a>
				</li>

        <li class="nav-item <?= $slug == 'lieferwagen' ? 'active' : '' ?>">
          <a class="nav-link" href="/miete-mich-taeglich/peugeot-boxer">Lieferwagen mieten</a>
        </li>

				<li class="nav-item <?= $slug == 'ueber-uns' ? 'active' : '' ?>">
					<a class="nav-link" href="/ueber-uns">Über uns</a>
				</li>

				<li class="nav-item <?= $slug == 'kontakt' ? 'active' : '' ?>">
					<a class="nav-link" href="/kontakt">Kontakt</a>
				</li>

			</ul>
		</div>

	</div>
</nav>
