<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">							
                <div class="main-content-area">
                    <div class="wrap-login-item">
                        <div class="register-form form-item">
                            <x-validation-errors class="mb-4" />
                            <form class="form-stl" wire:submit.prevent="create" name="frm-login" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Create an accountt</h3> <!-- Close the <h3> tag -->
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{ route('admin.users') }}" class="btn btn-success pull-right">All Clients</a>
                                    </div>
                                </div>								
                                <fieldset class="wrap-input">
                                    <label for="frm-reg-lname">Name*</label>
                                    <input type="text" id="frm-reg-lname" name="name" placeholder="Your Name" wire:model="name" required autofocus autocomplete="name">
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="frm-reg-email">Email Address*</label>
                                    <input type="email" id="frm-reg-email" name="email" placeholder="Email address" wire:model="email">
                                </fieldset>
                                <fieldset class="wrap-title">
                                    <h3 class="form-title">Login Information</h3>
                                </fieldset>
                                <fieldset class="wrap-input item-width-in-half left-item">
                                    <label for="frm-reg-pass">Password *</label>
                                    <input type="password" id="frm-reg-pass" name="password" placeholder="Password" required autocomplete="new-password" wire:model="password">
                                </fieldset>
                                <fieldset class="wrap-input item-width-in-half">
                                    <label for="frm-reg-cfpass">Confirm Password *</label>
                                    <input type="password" id="frm-reg-cfpass" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                                </fieldset>
                                <input type="submit" class="btn btn-sign" value="enregister">
                            </form>
                        </div>											
                    </div>
                </div><!--end main products area-->		
            </div>
        </div><!--end row-->
    </div>
</div>

  
  
  