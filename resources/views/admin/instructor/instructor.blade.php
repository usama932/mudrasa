<x-app-layout>
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Instructors/ استاد</h3>
                            </div>
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="more-options"><em class="icon ni ni-more-v"></em></a>
                                    <div class="toggle-expand-content" data-content="more-options">
                                        <ul class="nk-block-tools g-3">
                                            <li class="nk-block-tools-opt">
                                                <a href="#" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                                <a href="#" class="btn btn-primary d-none d-md-inline-flex" data-toggle="modal" data-target="#instructor-add"><em class="icon ni ni-plus"></em><span>Add</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                        @if(session()->has('success'))
                        <div class="alert alert-success">
                           {{ session()->get('success') }}
                        </div>
                        @endif
                    </div> <div class="card card-preview">
                        <div class="card-inner">
                            <table class="datatable-init-export nowrap table" data-export-title="Export">
                                <thead>
                                    <tr>
                                        <th>Full Name/ پورا نام</th>
                                        <th>Degree/ سناد</th>
                                        <th>Phone #/فون</th>
                                        <th>Experiance/ تجربہ</th>
                                        <th>Address/ پتہ</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($instructors as $instructor)
                                    <tr>
                                        <td>{{ $instructor->full_name }}</td>
                                        <td>{{ $instructor->last_degree }}</td>
                                        <td>{{ $instructor->phone_number  }}</td>
                                        <td>{{ $instructor->experiance  }}</td>
                                        <td>{{ $instructor->address  }}</td>
                                        <td>{{ $instructor->about_instructor  }}</td>
                                        <td>
                                            <span>
                                            <a href="{{ route('instructors.edit', $instructor->id) }}" data-toggle="modal" data-target="#instructor-add{{ $instructor->id}}"><em class="icon ni ni-edit-fill"></em></a>
                                            <form action="{{ route('instructors.destroy', $instructor->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-icon btn-danger"><em class="icon ni ni-trash-fill"></em></button>
                                            </form>
                                            </span>
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
    <div class="modal fade" role="dialog" id="instructor-add">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title">Add Instructor/ انسٹرکٹر شامل کریں۔</h5>
                    <form action="{{ route('instructors.store') }}" class="pt-2" method="post">
                        @csrf
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="first-name">Full Name/ پورا نام</label>
                                    <input type="text" class="form-control" id="first-name" name="full_name" placeholder="Full name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Last Degree/ آخری ڈگری</label>
                                    <input type="text" class="form-control" name="last_degree" id="phone-no" value="+92301-0000000" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Phone Number/ فون نمبر</label>
                                    <input type="text" class="form-control" name="phone_number" id="phone-no" value="+92301-0000000" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Experiance/ تجربہ</label>
                                    <input type="text" class="form-control" name="experiance" id="phone-no" value="+92301-0000000" placeholder="Phone Number">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="address-l1">Address </label>
                                    <input type="text" class="form-control" id="address-l1"  name="address" value="2337 Kildeer Drive">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="about-instractor">About Instructor/انسٹرکٹر کے بارے میں</label>
                                    <textarea class="form-control textarea-sm" id="about-instractor" name="about_description" placeholder="Discribe a little bit"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <div class="form-group">
                                            <button  type="submit" class="btn btn-primary">Add Instructor/ انسٹرکٹر شامل کریں</button>
                                        </div>

                                    </li>
                                    <li>
                                        <a href="#" data-dismiss="modal" class="link link-light">Cancel/ منسوخ کریں۔</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    @foreach ($instructors as $instructor)
    <div class="modal fade" role="dialog" id="instructor-add{{ $instructor->id }}">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title">Update Instructor/ اانسٹرکٹر کو اپ ڈیٹ کریں۔۔</h5>
                    <form action="{{ route('instructors.update',$instructor->id) }}" class="pt-2" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="first-name">Full Name/ پورا نام</label>
                                    <input type="text" class="form-control" id="first-name" value="{{ $instructor->full_name}}" name="full_name" placeholder="Full name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Last Degree/ آخری ڈگری</label>
                                    <input type="text" class="form-control" name="last_degree" id="phone-no" value="{{ $instructor->last_degree}}" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Phone Number/ فون نمبر</label>
                                    <input type="text" class="form-control" name="phone_number" id="phone-no" value="{{ $instructor->phone_number}}" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Experiance/ تجربہ</label>
                                    <input type="text" class="form-control" name="experiance" id="phone-no" value="{{ $instructor->experiance}}" placeholder="Phone Number">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="address-l1">Address </label>
                                    <input type="text" class="form-control" id="address-l1"  name="address" value="{{ $instructor->address}}">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="about-instractor">About Instructor/انسٹرکٹر کے بارے میں</label>
                                    <textarea class="form-control textarea-sm" id="about-instractor" name="about_description" placeholder="Discribe a little bit">{{ $instructor->about_description}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <div class="form-group">
                                            <button  type="submit" class="btn btn-primary">Update Instructor/ انسٹرکٹر شامل کریں</button>
                                        </div>

                                    </li>
                                    <li>
                                        <a href="#" data-dismiss="modal" class="link link-light">Cancel/ منسوخ کریں۔</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    @endforeach


</x-app-layout>
