    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
        <div class="container">
  
          <div class="section-title">
            <h2>Facts</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          </div>
  
          <div class="row no-gutters">
            
            @foreach ($varFacts as $facts)  
            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
              <div class="count-box">
                <i class="{{$facts->icon}}"></i>
                <span data-toggle="counter-up">{{$facts->number}}</span>
                <p><strong>{{$facts->title}}</strong> {{$facts->phrase}}</p>
                <div class="mt-3">
                    <div class="mb-2">
                        <a href={{route('factsEdit', $facts->id)}}><button class="btn btn-primary">Edit</button></a>
                    </div>
                    <form method="post" action="{{route('factsDestroy', $facts->id)}}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </div>
              </div>
            </div>
            @endforeach
          </div>

          <div class="text-center mt-3">
            <a href={{route('factsCreate')}}><button class="btn btn-warning">Ajouter un élément</button></a>
          </div>
        </div>

      </section><!-- End Facts Section -->