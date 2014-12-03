<nav id="top" ng-controller="topbarController" ng-hide="$location.path() === '/'">
  <div class="nav-wrapper">
    <a href="#/" class="brand-logo right">Servicios Especializados</a>
    <ul id="nav-mobile" class="left side-nav">
      <li ng-class="navClass('proyecto')"><a href="#/proyecto">Projecto</a></li>
      <li ng-class="navClass('portafolios')"><a href="#/portafolios">Portafolios</a></li>
      <li ng-class="navClass('blogs')"><a href="#/blogs">Blogs</a></li>
      <li ng-class="navClass('contactanos')"><a href="#/contactanos">Contactanos</a></li>
    </ul>
    <a class="button-collapse" href="#" data-activates="nav-mobile"><i class="mdi-navigation-menu"></i></a>
  </div>
</nav>