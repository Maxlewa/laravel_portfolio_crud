<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container">

    <div class="section-title">
      <h2>About</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    @foreach ($varPerso as $perso)
    <div class="row">
      <div class="col-lg-4" data-aos="fade-right">
        @if (File::exists('storage/img/' . $perso->image))
          <img src={{asset('storage/img/' . $perso->image)}} class="img-fluid" alt="">
        @else
          <img src={{asset('img/' . $perso->image)}} class="img-fluid" alt="">
        @endif
      </div>
      <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
        <h3>{{$perso->job}}</h3>
        <p class="font-italic">{{$perso->italic}}</p>
        <div class="row">
          <div class="col-lg-6">
            <ul>
              <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> 1 May 1995</li>
              <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> {{$perso->website}}</li>
              <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> +32 {{$perso->phone}}</li>
              <li><i class="icofont-rounded-right"></i> <strong>City:</strong> City : {{$perso->city}}, {{$perso->country}}</li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul>
              <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> {{$perso->age}}</li>
              <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> {{$perso->degree}}</li>
              <li><i class="icofont-rounded-right"></i> <strong>PhEmailone:</strong> {{$perso->email}}</li>
              <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> {{$perso->state}}</li>
            </ul>
          </div>
        </div>
        <p>{{$perso->bio}}</p>
      </div>
    </div>
    @endforeach

  </div>
</section><!-- End About Section -->