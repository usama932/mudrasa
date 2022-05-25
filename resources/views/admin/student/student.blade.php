<x-app-layout>
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Students</h3>
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
                    <div class="card card-preview">
                        <div class="card-inner">
                            <table class="datatable-init-export nowrap table" data-export-title="Export">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Donna Snider</td>
                                        <td>Customer Support</td>
                                        <td>New York</td>
                                        <td>27</td>
                                        <td>2011/01/25</td>
                                        <td>$112,000</td>
                                    </tr>
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
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="full-name">Full Name / پورا نام</label>
                                    <input type="text" class="form-control" id="full-name" placeholder="Full Name / پورا نام">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="full-name">Full Father Name/ والد کا پورا نام</label>
                                    <input type="text" class="form-control" id="full-name" placeholder="Full Father Name/ والد کا پورا نام">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="full-name">Father Occupation / باپ کا پیشہ</label>
                                    <input type="text" class="form-control" id="full-name" placeholder="Father Occupation / باپ کا پیشہ">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Course to Enroll/ داخلہ لینے کے لیے کورس</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select" data-placeholder="Course to Enroll/ داخلہ لینے کے لیے کورس">
                                            <option value="default_option">Hifz /حفظ</option>
                                            <option value="option_select_name">Tajweed</option>
                                            <option value="option_select_name">Round Hifz/ گردان</option>
                                            <option value="option_select_name">Nazra/ ناظرہ</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Mobile Number/ موبائل نمبر</label>
                                    <input type="text" class="form-control" id="phone-no" value="0300-0000000" placeholder="Mobile Number/ موبائل نمبر">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">#form B/CNIC / فارم B/CNIC </label>
                                    <input type="text" class="form-control" id="phone-no" value="37603-2342322-2" placeholder="#form B/CNIC / فارم B/CNIC">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="birth-day">Date of Birth/ پیدائش کی تاریخ</label>
                                    <input type="text" class="form-control date-picker" id="birth-day" placeholder="Date of Birth/ پیدائش کی تاریخ">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="address-l1">Home Address/ گھر کا پتہ</label>
                                    <input type="text" class="form-control" id="address-l1" value="" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="address-l2">Previous Mudrasa Address/پچھلا مدرسہ کا پتہ </label>
                                    <input type="text" class="form-control" id="address-l2" value="">
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Payment Methods</label>
                                    <div class="form-group">
                                        <label class="form-label">Admit Type/ داخلہ کی قسم</label>
                                        <div class="form-control-wrap">
                                            <select class="form-select" data-placeholder="Admit Type/ داخلہ کی قسم">
                                                <option value="default_option">Hostel and tution/ ہاسٹل اور ٹیوشن</option>
                                                <option value="option_select_name">Lunch and Tution/ دوپہر کا کھانا اور ٹیوشن</option>
                                                <option value="option_select_name">Tution/ ٹیوشن</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <a href="#" class="btn btn-primary">Add Student</a>
                                    </li>
                                    <li>
                                        <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- .tab-pane -->

                </div><!-- .tab-content -->
            </div><!-- .modal-body -->
        </div><!-- .modal-content -->
    </div><!-- .modal-dialog -->
</div><!-- .modal -->

</x-app-layout>
