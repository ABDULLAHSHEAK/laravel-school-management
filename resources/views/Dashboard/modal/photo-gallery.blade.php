    <!-- Insert Media modal start -->
    <div class="modal fade media-modal" id="mediaModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2>Insert Media</h2>
                    <button type="button" class="btn btn-close" data-bs-dismiss="modal"><span
                            class="lnr lnr-cross"></span></button>
                </div>
                <div class="modal-body">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#upload">Upload New</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="upload">
                            <div class="content-section drop-files-sec">
                                <div>
                                    <i class="ri-upload-cloud-2-line"></i>
                                    <a href="#" class="font-blue">browse
                                            files</a></h2>
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="file" name="file" class="form-control"> <br/>
                                        <button type="submit" class="btn btn-solid form-control">Upload Photo</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
