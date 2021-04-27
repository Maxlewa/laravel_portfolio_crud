<!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2>Services</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row">

        @foreach ($varServices as $services)
        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay={{$services->delay}}>
          <div class="icon"><i class={{$services->icon}}></i></div>
          <h4 class="title"><a href="">{{$services->title}}</a></h4>
          <p class="description">{{$services->text}}</p>

          <div class="mb-4">
            <a href={{route('servicesEdit', $services->id)}}><button class="btn btn-primary mb-2">Edit</button></a>
            <form method="post" action="{{route('servicesDestroy', $services->id)}}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
          </div>
        </div>
        @endforeach
        
      </div>

      <div class="text-center mt-3">
        <a href={{route('servicesCreate')}}><button class="btn btn-warning">Ajouter un élément</button></a>
      </div>

    </div>
  </section><!-- End Services Section -->