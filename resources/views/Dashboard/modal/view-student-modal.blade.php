
        <div class="modal fade" id="viewStudent{{$student->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <h5 class="modal-title" id="staticBackdropLabel">Student Profile</h5>
                       <div class="profile-about dashboard-bg-box">
                                        <div class="row">
                                            <div class="col-xxl-7">
                                                <div class="dashboard-title mb-3">
                                                    <h3 class="text-dark">Welcome ! <span>{{$student->name}}</span></h3>
                                                </div>
                                                <div class="profile-img center text-center p-3">
                                                    <img src="{{asset('image/student')}}/{{$student->img}}" alt="Uer Image" width="150" >
                                                </div>

                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <td>Name :</td>
                                                                <td>{{$student->name}}</td>
                                                            </tr>
                                                            
                                                            <tr>
                                                                <td>Father`s Name :</td>
                                                                <td>{{$student->fa_name}}</td>
                                                            </tr>

                                                            <tr>
                                                                <td>Mother`s Name :</td>
                                                                <td>{{$student->ma_name}}</td>
                                                            </tr>

                                                            <tr>
                                                                <td>Address :</td>
                                                                <td>{{$student->address}}</td>
                                                            </tr>

                                                            <tr>
                                                                <td>Student Phone :</td>
                                                                <td>{{$student->student_phone}}</td>
                                                            </tr>

                                                            <tr>
                                                                <td>Student Email :</td>
                                                                <td>{{$student->email}}</td>
                                                            </tr>

                                                            <tr>
                                                                <td>Parents Phone :</td>
                                                                <td>{{$student->parents_phone}}</td>
                                                            </tr>

                                                            <tr>
                                                                <td>Birthdate :</td>
                                                                <td>{{$student->birthdate}}</td>
                                                            </tr>

                                                            <tr>
                                                                <td>Class :</td>
                                                                <td>{{$student->class}}</td>
                                                            </tr>

                                                            <tr>
                                                                <td>Gender :</td>
                                                                <td>{{$student->gender}}</td>
                                                            </tr>

                                                            <tr>
                                                                <td>Blood Group :</td>
                                                                <td>{{$student->blood}}</td>
                                                            </tr>

                                                            <tr>
                                                                <td>Roll :</td>
                                                                <td>{{$student->roll}}</td>
                                                            </tr>

                                                            <tr>
                                                                <td>Reg :</td>
                                                                <td>{{$student->reg}}</td>
                                                            </tr>

                                                            <tr>
                                                                <td>Created Date :</td>
                                                                <td>{{$student->created_at}}</td>
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
