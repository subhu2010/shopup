<!-- Modal -->
<div class="">
    <div class="modal fade account-modal" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel"
        aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0 p-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <ul class="nav nav-pills w-100" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link account-link active" id="pills-login-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-login" type="button" role="tab" aria-controls="pills-login"
                                aria-selected="true">login</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-signup-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-signup" type="button" role="tab" aria-controls="pills-signup"
                                aria-selected="false">signup</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-login" role="tabpanel"
                            aria-labelledby="pills-login-tab">
                            <form action="" class="account-form">
                                <div class="form-group mb-3">
                                    <label for="">Username or email address *</label>
                                    <input type="text" class="from-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Password *</label>
                                    <input type="password" class="from-control">
                                </div>
                                <div class="form-footer">
                                    <a href="{{url('user-dashboard')}}" class="form-btn">Login <i
                                            class="las la-long-arrow-alt-right"></i></a>
                                    <!-- <button type="submit" class="form-btn">Login <i
                                            class="las la-long-arrow-alt-right"></i></button> -->
                                    <a href="javascript:void(0)">Forgot Your Password?</a>
                                </div>
                                <hr>
                                <p>or sign in with</p>
                                <div class="form-social">
                                    <a href="javascript:(0)" class="btn form-social-btn"><i
                                            class="lab la-google"></i>login with google</a>
                                    <a href="javascript:(0)" class="btn form-social-btn"><i
                                            class="lab la-facebook-f"></i>login with facebook</a>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="pills-signup" role="tabpanel" aria-labelledby="pills-signup-tab">
                            <form action="" class="account-form">
                                <div class="form-group mb-3">
                                    <label for="">Your email address *</label>
                                    <input type="text" class="from-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Password *</label>
                                    <input type="password" class="from-control">
                                </div>
                                <div class="form-footer">
                                    <button type="submit" class="form-btn">Sign up <i
                                            class="las la-long-arrow-alt-right"></i></button>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">I agree to the privacy
                                            policy</label>
                                    </div>
                                </div>
                                <hr>
                                <p>or sign in with</p>
                                <div class="form-social">
                                    <a href="javascript:(0)" class="btn form-social-btn"><i
                                            class="lab la-google"></i>login with google</a>
                                    <a href="javascript:(0)" class="btn form-social-btn"><i
                                            class="lab la-facebook-f"></i>login with facebook</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>