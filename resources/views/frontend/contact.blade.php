  <!-- Contact -->
  
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1>Contact Me</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="{{ route('contact.send') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Your Name *" required name="name">
                                    
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="telp" type="number" placeholder="Your Phone Number *">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="email" type="email" placeholder="Your email *" required>
                                    
                                </div>
                      
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" placeholder="Your Message *" required="required"></textarea>
                                    
                                </div>
                            </div>
                            <div class="col-lg-12 text-center">
                      
                                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@if(Session::get('contact'))
<script>
 alert('Email telah terkirim, saya akan menghubungi anda secepatnya.')
</script>
<?php Session::forget('contact') ?>
@endif
   