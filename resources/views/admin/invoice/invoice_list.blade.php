<x-app-layout>
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title"> Invoices/انوائس </h3>

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
                                            <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalCreate"><em class="icon ni ni-plus"></em><span>Add Fees/فیس شامل کریں</span></a></li>
                                            <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#others"><em class="icon ni ni-plus"></em><span>Donations/عطیات-صدقات</span></a></li>
                                        </ul>
                                    </div>
                                </div><!-- .toggle-wrap -->
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="card card-preview">
                        <div class="card-inner">
                            <div class="table-responsive">
                                <table class="datatable-init-export nowrap table" data-auto-responsive="false">
                                    <thead>
                                        <tr>
                                            <th>Name/  نام</th>
                                            <th>Date/ تاریخ</th>
                                            <th>Amount #/رقم</th>
                                            <th>Type/ مد</th>
                                            <th>Description/ تفصیل</th>
                                            <th>Action/عمل</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($invoices as $invoice)
                                            <tr>
                                                <td>{{ $invoice->student_Name }}</td>
                                                <td>{{ $invoice->date }}</td>
                                                <td>{{ $invoice->amount }}</td>
                                                <td>{{ $invoice->type }}</td>
                                                <td>{{ $invoice->description }}</td>
                                                <td>
                                                    <div class="tb-odr-btns d-none d-sm-inline">
                                                    <a href="" target="_blank" class="btn btn-icon btn-white btn-dim btn-sm btn-primary"><em class="icon ni ni-printer-fill"></em></a>
                                                    <a href="{{ route('invoices.show',$invoice->id) }}" class="btn btn-dim btn-sm btn-primary">View</a>
                                                    </div>
                                                </td>
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
    </div>
    {{-- fees modal --}}
    <div class="modal fade" id="modalCreate">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal" aria-label="Close"> <em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title">Add Fees</h5>
                    <form action="{{ route('invoices.store') }}" class="pt-2" method="post">
                        @csrf
                        <input type="hidden" name="fees" value="1" >
                        <div class="form-group">
                            <label class="form-label" for="full-name">Student Reg #/ طالب علم اندراج نمبر </label>
                            <div class="form-control-wrap">
                                <select class="form-select" name="student_id" data-placeholder="Enroll Type/ اندراج کی قسم">
                                    @foreach ($students as $student)
                                    <option value="{{ $student->id }}">{{ $student->reg_no }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="full-name">Pay Amount / ادائیگی کی رقم  </label>
                            <div class="form-control-wrap">
                                <input type="number" class="form-control" name="amount" id="full-name" placeholder="">
                            </div>
                        </div>


                        <div class="form-group">
                            <button  type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- End fees Modal --}}
    {{-- Donations modal --}}
    <div class="modal fade" id="others">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal" aria-label="Close"> <em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title">Add Donations/عطیات </h5>
                    <form action="{{ route('invoices.store') }}" class="pt-2" method="post">
                        @csrf
                        <input type="hidden" value="2" name="fees">
                        <div class="form-group">
                            <label class="form-label" for="full-name">Name /نام   </label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="student_name" id="full-name" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="full-name">Pay Amount / ادائیگی کی رقم  </label>
                            <div class="form-control-wrap">
                                <input type="number" class="form-control" name="amount" id="full-name" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="full-name">Type / مد  </label>
                            <select class="form-select" name="type" data-placeholder="Enroll Type/ اندراج کی قسم">
                                <option value="Sadqa/صدقہ">Sadqa/صدقہ</option>
                                <option value="Zakat/زکوٰۃ">Sadqa/زکوٰۃ</option>
                                <option value="Addmission_form/داخلہ_فارم">Addmission_form/داخلہ_فارم</option>
                                <option value="Uniform/مدرسہ لباس">Uniform/مدرسہ لباس</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="full-name">Description / تفصیل</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="description" id="full-name" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <button  type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
     {{-- End Donations modal --}}
</x-app-layout>
