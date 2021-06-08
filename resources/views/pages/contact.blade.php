@extends('layouts.layout')

<link rel="stylesheet" href="{{ asset('css/contact.css') }}">

@section('content')

<section class="section pb-5">

    <div class="header-contact">
        <h2 class="section-heading h1 pt-4">Kontaktirajte nas</h2>
    </div>
  
    <div class="row">
  
      <div class="col-lg-5 mb-4">

        <form action="" method="POST">
          @csrf
          <div class="card">
  
            <div class="card-body">
              <div class="form-header blue accent-1">
                <h3><i class="fas fa-envelope"></i> Pisite nam:</h3>
              </div>
    
              <p>Odgovaramo na svaki vas mejl.</p>
              <br>

              <div class="md-form">
                  <i class="fas fa-user prefix grey-text"></i>
                  <input type="text" class="form-control" placeholder="Vase ime" name="ime" value="{{ old('ime') }}">
              </div>
              @error('ime')
                <p style="color: #FF5145">{{ $message }}</p>
              @enderror
    
              <div class="md-form">
                <i class="fas fa-envelope prefix grey-text"></i>
                <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
              </div>
              @error('email')
                <p style="color: #FF5145">{{ $message }}</p>
              @enderror
    
              <div class="md-form">
                <i class="fas fa-tag prefix grey-text"></i>
                <input type="text" class="form-control" placeholder="Naslov poruke" name="naslov" value="{{ old('naslov') }}">
              </div>
              @error('naslov')
                <p style="color: #FF5145">{{ $message }}</p>
              @enderror
    
              <div class="md-form">
                <i class="fas fa-pencil-alt prefix grey-text"></i>
                <textarea name="tekst" class="form-control md-textarea" rows="3" placeholder="Tekst poruke" value="{{ old('tekst') }}"></textarea>
              </div>
              @error('tekst')
                <p style="color: #FF5145">{{ $message }}</p>
              @enderror
    
              <div class="text-center mt-4">
                <button type="submit" class="btn submit">Posalji</button>
              </div>
            </div>
    
          </div>
        </form>
  
      </div>

      <div class="col-lg-7">
        <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 400px">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d22653.092338826988!2d20.479999999999997!3d44.78821465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2srs!4v1621886173427!5m2!1sen!2srs" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
  
        <br>
        <div class="row text-center">
          <div class="col-md-4">
            <i class="contact-icon fas fa-map-marker-alt icon-map"></i>
            <p>Beograd, Srbija</p>
            <p>Belgrade, Serbia</p>
          </div>
  
          <div class="col-md-4">
            <i class="contact-icon fas fa-phone  icon-map"></i>
            <p>+ 11 234 567 89</p>
            <p>Pon - Pet, 8:00-22:00</p>
          </div>
  
          <div class="col-md-4">
            <i class="contact-icon fas fa-envelope icon-map"></i>
            <p>verbena@gmail.com</p>
            <p>verbena.info@gmail.com</p>
          </div>
        </div>
  
      </div>
  
    </div>
  
</section>

@endsection