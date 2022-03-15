@extends('layouts.app')

@section('header')
<div class="background-img-gallery">
    <div class="about-cont">
        <h2 class="heading2-style">Contact</h2>
    </div>
</div>  
@endsection

@section('content')

<div class="contact-cont">
    <div class="contacttext-cont">
        <h3 class="heading3-style">My Contact Details</h3>
        <p>Ewa Pietruszewska</p>
        <p>Email: glassart.piet@gmail.com</p>
    </div>
</div>


        <!-- <div class="success-box">
           @if(Session::has('success'))
              <div class="alert alert-success">
        	    {{ Session::get('success') }}
               </div>
           @endif
        </div>
           

        <div class="contact-formular-cont">
          <form method="post" action="contact-me">
             {{csrf_field()}}
          
                <div class="labelinput-cont">
                   <label> Name </label>
                   <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name">
                   @error('name')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                </div>

                <div class="labelinput-cont">
                   <label> Email </label>
                   <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email">
                   @error('email')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                </div>
            
                <div class="labelinput-cont">
                   <label> Subject </label>
                   <input type="text" class="form-control @error('subject') is-invalid @enderror" placeholder="Subject" name="subject">
                   @error('subject')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                </div>

                <div class="labelinput-cont">
                   <label> Message </label>
                   <textarea class="form-control textarea @error('message') is-invalid @enderror" placeholder="Message" name="message"></textarea>
                   @error('message')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                </div>


              <div class="button-cont">
                <button type="submit" class="send-button">Send</button>
               </div>
            
            </div>

           </form>
         </div>
       </div>
     </div>
   </div>
</div> -->

@endsection