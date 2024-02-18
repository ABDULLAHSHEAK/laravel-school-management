
        <div class="modal fade" id="delete_user{{$user->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <h5 class="modal-title" id="staticBackdropLabel">Delete User</h5>
                    <p>Are you sure you want to delete?</p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="button-box">
                        <button type="button" class="btn btn--no" data-bs-dismiss="modal">No</button>
                          <a href="{{url('/all-users',$user->id)}}" class="btn  btn--yes btn-primary">
                        Yes</a>
                    </div>
                </div>
            </div>
        </div>
