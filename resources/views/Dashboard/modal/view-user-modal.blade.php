
        <div class="modal fade" id="view_user{{$user->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <h5 class="modal-title" id="staticBackdropLabel">User Profile</h5>
                       <div class="profile-about dashboard-bg-box">
                                        <div class="row">
                                            <div class="col-xxl-7">
                                                <div class="dashboard-title mb-3">
                                                    <h3 class="text-dark">Welcome ! <span>{{$user->name}}</span></h3>
                                                </div>
                                                <div class="profile-img center text-center p-3">
                                                    <img src="{{asset('image/user')}}/{{$user->img}}" alt="Uer Image" width="150" >
                                                </div>

                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <td>Name :</td>
                                                                <td>{{$user->name}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Email :</td>
                                                                <td>{{$user->email}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Created Date :</td>
                                                                <td>{{$user->created_at}}</td>
                                                            </tr>
                                                           
                                                            <tr>
                                                                <td>Password :</td>
                                                                <td>●●●●●●●●●●●●</td>
                                                            </tr>
                                                           
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="col-xxl-5">
                                                <div class="profile-image">
                                                    <img src="../assets/images/inner-page/dashboard-profile.png"
                                                        class="img-fluid blur-up lazyload" alt="">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="button-box">
                        <button type="button" class="btn btn--yes btn-primary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
