<x-app-layout>
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Enrollment list</h3>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="more-options"><em class="icon ni ni-more-v"></em></a>
                                    <div class="toggle-expand-content" data-content="more-options">
                                        <ul class="nk-block-tools g-3">
                                            <li class="nk-block-tools-opt">
                                                <a href="#" class="btn btn-icon btn-primary d-md-none" data-toggle="modal" data-target="#student-add"><em class="icon ni ni-plus"></em></a>
                                                <a href="#" class="btn btn-primary d-none d-md-inline-flex" data-toggle="modal" data-target="#student-add"><em class="icon ni ni-plus"></em><span>Add</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
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
                    <div class="card card-preview">
                        <div class="card-inner">
                            <table class="datatable-init-export nowrap table" data-export-title="Export">
                                <thead>
                                    <tr>
                                        <th>Full Name /???????? ?????? </th>
                                        <th>Father Name/???????? ???? ??????</th>
                                        <th>Reg No #/ ?????????? ???????? </th>
                                        <th>Mobile #/ ????????????</th>
                                        <th>Passing Year/ ?????? ?????? ??????</th>
                                        <th>Status/ ????????</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                    <tr>
                                        <td>{{ $student->name }}</td>
                                        <td>{{ $student->father_name }}</td>
                                        <td>{{ $student->reg_no }}</td>
                                        <td>{{ $student->mobile_no}}</td>
                                        <td>{{ $student->passing_year}}</td>
                                        <td>{{ $student->Enroll_type}}</td>

                                        <td>
                                            <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#student-add{{ $student->id}}">Add</button>
                                            <form action="{{route('students.destroy',$student->id)}}" method="POST">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger btn-xs">Delete</button>
                                        </form></td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 {{-- Add-Modal --}}
 <div class="modal fade" role="dialog" id="student-add">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-md">
                <h5 class="title">Add PassOut Students/ ?????? ?????? ?????????? ???? ???????? ??????????</h5>
                <ul class="nk-nav nav nav-tabs mt-n2">
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#student-info">Student Infomation</a>
                    </li>
                </ul><!-- .nav-tabs -->
                <div class="tab-content">
                    <div class="tab-pane active" id="student-info">
                        <form action="{{ route('students.store') }}" method="post">
                            @csrf
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Full Name / ???????? ??????</label>
                                        <input type="text" class="form-control" name="name" id="full-name" placeholder="Full Name / ???????? ??????">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name"> Addmission # / ?????????? ????????</label>
                                        <input type="text" class="form-control" name="reg_no" id="full-name" placeholder="Addmission # / ?????????? ????????">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Full Father Name/ ???????? ???? ???????? ??????</label>
                                        <input type="text" class="form-control" name="father_name" id="full-name" placeholder="Full Father Name/ ???????? ???? ???????? ??????">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label"> Enroll type/ ???????????? ???? ??????</label>
                                        <div class="form-control-wrap">
                                            <select class="form-select" name="Enroll_type" data-placeholder="Enroll Type/ ???????????? ???? ??????">
                                                <option value="Temporary/??????????">Left out/ ??????????????</option>
                                                <option value="Kicked out/???????? ??????">Kicked out/???????? ??????</option>
                                                <option value="Completed/???????? ???? ?????? ">Completed/???????? ???? ??????</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Passing Year/ ?????? ?????? ??????</label>
                                        <input type="date" class="form-control" name="passing_year" id="full-name" placeholder="Passing Year/ ?????? ?????? ??????">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Mobile Number/ ???????????? ????????</label>
                                        <input type="text" class="form-control" name="mobile_no" id="phone-no" value="0300-0000000" placeholder="Mobile Number/ ???????????? ????????">
                                    </div>
                                </div>
                                {{-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">#form B/CNIC / ???????? B/CNIC </label>
                                        <input type="text" class="form-control" name="cnic" id="phone-no" value="37603-2342322-2" placeholder="#form B/CNIC / ???????? B/CNIC">
                                    </div>
                                </div> --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="birth-day">Date of Birth/ ???????????? ???? ??????????</label>
                                        <input type="date" class="form-control" name="dob" id="birth-day" placeholder="Date of Birth/ ???????????? ???? ??????????">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address-l1">Home Address/ ?????? ???? ??????</label>
                                        <input type="text" class="form-control" name="home_address" id="address-l1" value="" >
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <button type="submit" class="btn btn-primary">Add Student</button>
                                        </li>
                                        <li>
                                            <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div><!-- .tab-pane -->

                </div><!-- .tab-content -->
            </div><!-- .modal-body -->
        </div><!-- .modal-content -->
    </div><!-- .modal-dialog -->
</div><!-- .modal -->
</x-app-layout>
