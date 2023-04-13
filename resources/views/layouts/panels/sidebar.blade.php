<div id="mySidenav" class="sidenav text-center">
  <div class="card-img-sidebar">
    <img class="card-img-sidebar" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
  </div>

  <div class="op-colum">
    <div class="side-username">
      <span class="white-text">
        {{Auth::user()->name}}
      </span>
    </div>
    <a href="{{ route('favorite') }}">FAVORITOS</a>
    <a href="#">CRIAÇÕES</a>
    <a href="#">COMUNIDADE</a>
  </div>

</div>

<div id="main">
  <span onclick="controlNav()">&#9776;</span>
</div>

<script>
  function controlNav() {
  if (document.getElementById("mySidenav").offsetWidth == 0) {
    document.getElementById("mySidenav").style.width = "200px";
    document.getElementById("main").style.marginLeft = "200px";
  }
  else{
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
  }
}
</script>
<style>
  span.white-text {
    color: white !important;
    display: flex;
    word-break: break-all;
  }

  .op-colum {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    padding-left: 2rem;
  }
</style>