<x-app-layout>
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Enroll a student</h3>
                            </div>
                        </div>
                    </div>
                    <!--.nk-block-head -->
                    <div class="nk-block">
                        <div class="card">
                            <div class="card-inner">
                                <div class="row gy-4">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-label">Full Name</label>
                                            <input type="text" class="form-control" id="name" placeholder="Full Name">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-label">Course to enroll</label>
                                            <div class="form-control-wrap">
                                                <select class="form-select" data-placeholder="Select multiple options">
                                                    <option value="default_option">Hifz</option>
                                                    <option value="option_select_name">Tajweed</option>
                                                    <option value="option_select_name">Nazra</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!--col-->
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-label"># Form_B/CNIC</label>
                                            <input type="number" name="form_b" class="form-control" id="name" placeholder="37406-6952823-1">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-label">Qaulification</label>
                                            <input type="text" name="education" class="form-control" id="name" placeholder="Grade 5">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-label">Date of Birth</label>
                                            <input type="date" name="dob" class="form-control" id="name" placeholder="19-jan-2000">
                                        </div>
                                    </div>
                                    <!--col-->
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-label">Temporary Address</label>
                                            <textarea class="form-control"  name="temp_address" >

                                                </textarea>
                                        </div>
                                    </div>
                                    <!--col-->
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-label">Permanent Address</label>
                                            <textarea class="form-control" rows="1" name="permanent_address" >

                                                </textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-label" for="address">Previous Mudrasa Address</label>
                                            <textarea class="form-control"  rows="1" name="previous_school" >

                                                </textarea>

                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <ul class="preview-list ">
                                            <li class="preview-item">
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAlert">Enroll Student</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--col-->
                                </div>
                                <!--row-->
                            </div>
                            <!--card inner-->
                        </div>
                        <!--card-->
                    </div>
                    <!--.nk-block -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
