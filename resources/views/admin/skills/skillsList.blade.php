    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
        <div class="container">
  
          <div class="section-title">
            <h2>Skills</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          </div>
  
          <div class="row skills-content">
              
              @foreach ($varSkills as $skills)
              <div class="col-lg-6" data-aos="fade-up">
                  <div class="progress">
                    <span class="skill">{{$skills->codelg}} <i class="val">{{$skills->progress}}%</i></span>
                    <div class="progress-bar-wrap">
                      <div class="progress-bar" role="progressbar" aria-valuenow="{{$skills->progress}}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="mt-1 mb-3">
                    <div>
                        <a href={{route('skillsEdit', $skills->id)}}><button class="btn btn-primary">Edit</button></a>
                    </div>
                </div>
              </div>
              @endforeach
  
          </div>
  
        </div>
      </section><!-- End Skills Section -->