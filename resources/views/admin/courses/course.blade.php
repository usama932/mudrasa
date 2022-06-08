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
                            @if(session()->has('success'))
                            <div class="alert alert-success">
                               {{ session()->get('success') }}
                            </div>
                            @endif
                            @if(session()->has('danger'))
                            <div class="alert alert-danger">
                               {{ session()->get('danger') }}
                            </div>
                            @endif
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
                            @foreach ($courses as $course)

                            <div class="col-sm-6 col-lg-4 col-xxl-3">
                                <div class="card h-100">
                                    <form action="{{route('courses.destroy',$course->id)}}" method="POST">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger btn-xs">Delete</button>
                                    </form>
                                    <div class="card-inner">
                                        <div class="d-flex justify-content-between align-items-start mb-3">
                                            <a href="html/lms/courses.html" class="d-flex align-items-center">

                                                <div class="ml-3">
                                                    <h6 class="title mb-1">{{ $course->course_name }}</h6>

                                                </div>
                                            </a>

                                        </div>
                                        <p>{{  $course->description}}</p>
                                        <ul class="d-flex flex-wrap g-1">
                                            <li><span class="badge badge-dim badge-primary">Tajweed/ تجوید</span></li>
                                            <li><span class="badge badge-dim badge-danger">Nazra/ ناظرہ</span></li>
                                            <li><span class="badge badge-dim badge-info">Hifz/ قاری</span></li>
                                            <li><span class="badge badge-dim badge-warning">Qari/ قاری</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach

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
                    <form action="{{ route('courses.store') }}" class="pt-2" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="form-label" for="full-name">Course Name/ کورس کا نام</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="course_name" id="full-name" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="description">Description/ تفصیل</label>
                            <div class="form-control-wrap">
                                <textarea class="form-control" name="description" id="description" placeholder="Write Course Description"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <button  type="submit" class="btn btn-primary">Save Informations</button>
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
