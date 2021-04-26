<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      @foreach ($varPerso as $perso)
      <h1>{{$perso->prenom}} {{$perso->nom}}</h1>
      <p>I'm <span class="typed" data-typed-items="Designer, Developer, Freelancer, Photographer"></span></p>
      @endforeach
    </div>
</section><!-- End Hero -->