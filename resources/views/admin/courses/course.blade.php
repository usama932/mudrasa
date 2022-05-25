<x-app-layout>
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Course/ کورس</h3>
                                <div class="nk-block-des text-soft">
                                    <p>You have total 8 Courses</p>
                                </div>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                           
                                            <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalCreate"><em class="icon ni ni-plus"></em><span>Add Course/ کورس شامل کریں۔</span></a></li>
                                        </ul>
                                    </div>
                                </div><!-- .toggle-wrap -->
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="row g-gs">
                            <div class="col-sm-6 col-lg-4 col-xxl-3">
                                <div class="card h-100">
                                    <div class="card-inner">
                                        <div class="d-flex justify-content-between align-items-start mb-3">
                                            <a href="html/lms/courses.html" class="d-flex align-items-center">
                                                <div class="user-avatar sq bg-purple"><span>GD</span></div>
                                                <div class="ml-3">
                                                    <h6 class="title mb-1">Graphics Design</h6>
                                                    <span class="sub-text">4 SubCourses</span>
                                                </div>
                                            </a>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 mr-n1" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#" data-toggle="modal" data-target="#modalEdit"><em class="icon ni ni-edit"></em><span>Edit Course</span></a></li>
                                                        <li><a data-toggle="modal" data-target="#modalDelete" href="#"><em class="icon ni ni-delete"></em><span>Delete Course</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <p>Website Design & Develop the website with web applications</p>
                                        <ul class="d-flex flex-wrap g-1">
                                            <li><span class="badge badge-dim badge-primary">Photoshop</span></li>
                                            <li><span class="badge badge-dim badge-danger">Adobe Illustrator</span></li>
                                            <li><span class="badge badge-dim badge-info">Logo Design</span></li>
                                            <li><span class="badge badge-dim badge-warning">Drawing</span></li>
                                            <li><span class="badge badge-dim badge-secondary">Figma</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
    {{-- Modals --}}
    <div class="modal fade" id="modalCreate">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal" aria-label="Close"> <em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title">Add Course</h5>
                    <form action="#" class="pt-2">
                        <div class="form-group">
                            <label class="form-label" for="full-name">Course Name</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="full-name" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="description">Description</label>
                            <div class="form-control-wrap">
                                <textarea class="form-control" name="description" id="description" placeholder="Write Course Description"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <button data-dismiss="modal" type="submit" class="btn btn-primary">Save Informations</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- .Edit Modal-Content -->
    <div class="modal fade" id="modalEdit">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal" aria-label="Close"> <em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title">Edit Course</h5>
                    <form action="#" class="pt-2">
                        <div class="form-group">
                            <label class="form-label" for="edit-full-name">Course Name</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="edit-full-name" value="Web Development">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="edit-description">Description</label>
                            <div class="form-control-wrap">
                                <textarea class="form-control" name="description" id="edit-description" value="Website Design & Develop the website with web applications"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <button data-dismiss="modal" type="submit" class="btn btn-primary">Save Informations</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- .Edit Modal-Content -->
    <div class="modal fade" id="modalDelete">
        <div class="modal-dialog" role="document">
            <div class="modal-content"> <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg text-center">
                    <div class="nk-modal py-4"> <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-cross bg-danger"></em>
                        <h4 class="nk-modal-title">Are You Sure ?</h4>
                        <div class="nk-modal-text mt-n2">
                            <p class="text-soft">This event data will be removed permanently.</p>
                        </div>
                        <ul class="d-flex justify-content-center gx-4 mt-4">
                            <li>
                                <button data-dismiss="modal" id="deleteEvent" class="btn btn-success">Yes, Delete it</button>
                            </li>
                            <li>
                                <button data-dismiss="modal" data-toggle="modal" data-target="#editEventPopup" class="btn btn-danger btn-dim">Cancel</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
