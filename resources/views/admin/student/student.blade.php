<x-app-layout>
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Students/ طلباء</h3>
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
                                        <th>Name /پورا نام</th>
                                        <th>Father Name /والد کا نام</th>
                                        <th>Reg No # / رجسٹر نمبر</th>
                                        <th>Course/ کورس</th>
                                        <th>Instructor/ استاد</th>
                                        <th>Image/ تصویر</th>
                                        <th>Mobile # / موبائل</th>
                                        <th>Action/ عمل</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                    <tr>
                                        <td>{{ $student->name }}</td>
                                        <td>{{ $student->father_name }}</td>
                                        <td>{{ $student->reg_no }}</td>
                                        <td>{{ $student->course_id }}</td>
                                        <td>{{ $student->instructor }}</td>
                                        <td>{{ $student->image }}</td>
                                        <td>{{ $student->mobile_no}}</td>
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
{{-- Modals --}}
<div class="modal fade" role="dialog" id="student-add">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-md">
                <h5 class="title">Add Students</h5>
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
                                        <label class="form-label" for="full-name">Full Name / پورا نام</label>
                                        <input type="text" class="form-control" name="name" id="full-name" placeholder="Full Name / پورا نام">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name"> Addmission # / داخلہ نمبر</label>
                                        <input type="text" class="form-control" name="reg_no" id="full-name" placeholder="Addmission # / داخلہ نمبر">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Full Father Name/ والد کا پورا نام</label>
                                        <input type="text" class="form-control" name="father_name" id="full-name" placeholder="Full Father Name/ والد کا پورا نام">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Father Occupation / باپ کا پیشہ</label>
                                        <input type="text" class="form-control" name="father_occupation" id="full-name" placeholder="Father Occupation / باپ کا پیشہ">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Course to Enroll/ داخلہ لینے کے لیے کورس</label>
                                        <div class="form-control-wrap">
                                            <select class="form-select" name="course_id" data-placeholder="Enroll Type/ اندراج کی قسم">
                                                @foreach ($courses as $course)
                                                <option value="{{ $course->course_name }}">{{ $course->course_name }}</option>
                                                @endforeach



                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label"> Enroll type/ اندراج کی قسم</label>
                                        <div class="form-control-wrap">
                                            <select class="form-select" name="Enroll_type" data-placeholder="Enroll Type/ اندراج کی قسم">

                                                <option value="Temporary/عارضی">Temporary/ عارضی</option>
                                                <option value="Accepted/مقبول ">Accepted/ مقبول </option>
                                                <option value="Temporary/عارضی">Left out/ چھوڑگیا</option>
                                                <option value="Kicked out/نکال دیا">Kicked out/نکال دیا</option>
                                                <option value="Completed/مکمل کر گیا ">Completed/مکمل کر گیا</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Assign Teacher/استاد کو تفویض کریں۔</label>
                                        <div class="form-control-wrap">
                                            <select class="form-select" name="instructor" data-placeholder="Assign Teacher/ستاد کو تفویض کریں۔">
                                                @foreach ($instructors as $instructor)
                                                <option value="{{ $instructor->full_name }}">{{ $instructor->full_name }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Mobile Number/ موبائل نمبر</label>
                                        <input type="text" class="form-control" name="mobile_no" id="phone-no" value="0300-0000000" placeholder="Mobile Number/ موبائل نمبر">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">#form B/CNIC / فارم B/CNIC </label>
                                        <input type="text" class="form-control" name="cnic" id="phone-no" value="37603-2342322-2" placeholder="#form B/CNIC / فارم B/CNIC">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="birth-day">Date of Birth/ پیدائش کی تاریخ</label>
                                        <input type="date" class="form-control" name="dob" id="birth-day" placeholder="Date of Birth/ پیدائش کی تاریخ">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address-l1">Home Address/ گھر کا پتہ</label>
                                        <input type="text" class="form-control" name="home_address" id="address-l1" value="" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address-l2">Previous Mudrasa Address/پچھلا مدرسہ کا پتہ </label>
                                        <input type="text" class="form-control" name="previous_school" id="address-l2" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address-l2">Image (Passport Size)</label>
                                        <input type="file" name="image" class="form-control" id="address-l2"  value="">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Payment Methods</label>
                                        <div class="form-group">
                                            <label class="form-label">Admit Type/ داخلہ کی قسم</label>
                                            <div class="form-control-wrap">
                                                <select class="form-select" name="add_type" data-placeholder="Admit Type/ داخلہ کی قسم">
                                                    <option value="Hostel and tution/ ہاسٹل اور ٹیوشن">Hostel and tution/ ہاسٹل اور ٹیوشن</option>
                                                    <option value="Lunch and Tution/ دوپہر کا کھانا اور ٹیوشن">Lunch and Tution/ دوپہر کا کھانا اور ٹیوشن</option>
                                                    <option value="Tution/ ٹیوشن">Tution/ ٹیوشن</option>
                                                    <option value="Tution with lunch break/ ٹیوشن دوپہر کے کھانے کے وقفے کے ساتھ">Tution with lunch break/ ٹیوشن دوپہر کے کھانے کے وقفے کے ساتھ</option>
                                                </select>
                                            </div>
                                        </div>
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
{{-- Edit Modal --}}
@foreach ($students as $student)
<div class="modal fade" role="dialog" id="student-add{{ $student->id}}">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-md">
                <h5 class="title">Update Students</h5>
                <ul class="nk-nav nav nav-tabs mt-n2">
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#student-info">Student Infomation</a>
                    </li>
                </ul><!-- .nav-tabs -->
                <div class="tab-content">
                    <div class="tab-pane active" id="student-info">
                        <form action="{{ route('students.update', $student->id) }}" method="post">
                            @csrf
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Full Name / پورا نام</label>
                                        <input type="text" class="form-control" name="name" id="full-name" value="{{ $student->name}}" placeholder="Full Name / پورا نام">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name"> Addmission # / داخلہ نمبر</label>
                                        <input type="text" class="form-control" name="reg_no" id="full-name" value="{{ $student->reg_no}}" placeholder="Addmission # / داخلہ نمبر">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Full Father Name/ والد کا پورا نام</label>
                                        <input type="text" class="form-control" name="father_name" id="full-name" value="{{ $student->father_name}}" placeholder="Full Father Name/ والد کا پورا نام">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Father Occupation / باپ کا پیشہ</label>
                                        <input type="text" class="form-control" name="father_occupation" id="full-name" value="{{ $student->father_occupation}}" placeholder="Father Occupation / باپ کا پیشہ">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Course to Enroll/ داخلہ لینے کے لیے کورس</label>
                                        <div class="form-control-wrap">
                                            <select class="form-select" name="course_id" data-placeholder="Enroll Type/ اندراج کی قسم">
                                                @foreach ($courses as $course)
                                                <option value="{{ $course->course_name }}">{{ $course->course_name }}</option>
                                                @endforeach



                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label"> Enroll type/ اندراج کی قسم</label>
                                        <div class="form-control-wrap">
                                            <select class="form-select" name="Enroll_type" data-placeholder="Enroll Type/ اندراج کی قسم">

                                                <option value="Temporary/عارضی">Temporary/ عارضی</option>
                                                <option value="Accepted/مقبول ">Accepted/ مقبول </option>
                                                <option value="Temporary/عارضی">Left out/ چھوڑگیا</option>
                                                <option value="Kicked out/نکال دیا">Kicked out/نکال دیا</option>
                                                <option value="Completed/مکمل کر گیا ">Completed/مکمل کر گیا</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Assign Teacher/استاد کو تفویض کریں۔</label>
                                        <div class="form-control-wrap">
                                            <select class="form-select" name="instructor" data-placeholder="Assign Teacher/ستاد کو تفویض کریں۔">
                                                @foreach ($instructors as $instructor)
                                                <option value="{{ $instructor->full_name }}">{{ $instructor->full_name }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Mobile Number/ موبائل نمبر</label>
                                        <input type="text" class="form-control" name="mobile_no" value="{{ $student->mobile_no}}" id="phone-no" value="0300-0000000" placeholder="Mobile Number/ موبائل نمبر">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">#form B/CNIC / فارم B/CNIC </label>
                                        <input type="text" class="form-control" name="cnic" id="phone-no" value="{{ $student->cnic}}" placeholder="#form B/CNIC / فارم B/CNIC">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="birth-day">Date of Birth/ پیدائش کی تاریخ</label>
                                        <input type="date" class="form-control" name="dob" id="birth-day" value="{{ $student->dob}}" placeholder="Date of Birth/ پیدائش کی تاریخ">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address-l1">Home Address/ گھر کا پتہ</label>
                                        <input type="text" class="form-control" name="home_address" value="{{ $student->home_address}}"id="address-l1" value="" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address-l2">Previous Mudrasa Address/پچھلا مدرسہ کا پتہ </label>
                                        <input type="text" class="form-control" name="previous_school" value="{{ $student->previous_school}}" id="address-l2" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address-l2">Image (Passport Size)</label>
                                        <input type="file" name="image" class="form-control" id="address-l2"  value="">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Payment Methods</label>
                                        <div class="form-group">
                                            <label class="form-label">Admit Type/ داخلہ کی قسم</label>
                                            <div class="form-control-wrap">
                                                <select class="form-select" name="add_type" data-placeholder="Admit Type/ داخلہ کی قسم">
                                                    <option value="Hostel and tution/ ہاسٹل اور ٹیوشن">Hostel and tution/ ہاسٹل اور ٹیوشن</option>
                                                    <option value="Lunch and Tution/ دوپہر کا کھانا اور ٹیوشن">Lunch and Tution/ دوپہر کا کھانا اور ٹیوشن</option>
                                                    <option value="Tution/ ٹیوشن">Tution/ ٹیوشن</option>
                                                    <option value="Tution with lunch break/ ٹیوشن دوپہر کے کھانے کے وقفے کے ساتھ">Tution with lunch break/ ٹیوشن دوپہر کے کھانے کے وقفے کے ساتھ</option>
                                                </select>
                                            </div>
                                        </div>
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
</div>
@endforeach
</x-app-layout>
