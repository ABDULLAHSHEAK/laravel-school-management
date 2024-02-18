
        <div class="modal fade" id="viewDirector{{$director->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <h5 class="modal-title" id="staticBackdropLabel">Director Profile</h5>
                       <div class="profile-about dashboard-bg-box">
                                        <div class="row">
                                            <div class="col-xxl-7">
                                                <div class="dashboard-title mb-3">
                                                    <h3 class="text-dark">Welcome ! <span>{{$director->name}}</span></h3>
                                                </div>
                                                <div class="profile-img center text-center p-3">
                                                    <img src="{{asset('image/director')}}/{{$director->img}}" alt="Uer Image" width="150" >
                                                </div>

                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <td>Name :</td>
                                                                <td>{{$director->name}}</td>
                                                            </tr>
                                                            
                                                            <tr>
                                                                <td>director Title :</td>
                                                                <td>{{$director->title}}</td>
                                                            </tr>

                                                            <tr>
                                                                <td>Address :</td>
                                                                <td>{{$director->address}}</td>
                                                            </tr>

                                                            <tr>
                                                                <td>Phone :</td>
                                                                <td>{{$director->phone}}</td>
                                                            </tr>

                                                            <tr>
                                                                <td>Email :</td>
                                                                <td>{{$director->email}}</td>
                                                            </tr>

                                                            <tr>
                                                                <td>Join Date :</td>
                                                                <td>{{$director->date}}</td>
                                                            </tr>

                                                            <tr>
                                                                <td>Created Date :</td>
                                                                <td>{{$director->created_at}}</td>
                                                            </tr>
                                                           
                                                           
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                    <div class="button-box">
                        <button type="button" class="btn btn--yes btn-primary mt-2" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
