@include('backend.dashboard.com.breadcrumb', ['title' => $config['seo']['create']['title']])

<form action="" method="" class="box">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-5">
                <div class="panel-head">
                    <div class="panel-title">Thông tin chung</div>
                    <div class="panel-description">Nhập thông tin chung của thành viên</div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Nhóm thành viên
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <select name="user_catalogue_id" class="form-control">
                                        <option value="0">[Chọn Nhóm Thành Viên]</option>
                                        <option value="1">Quản trị viên</option>
                                        <option value="2">Cộng tác viên</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Email
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input 
                                        type="text"
                                        name="email"
                                        value=""
                                        class="form-control"
                                        placeholder=""
                                        autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Họ và tên
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input 
                                        type="text"
                                        name="name"
                                        value=""
                                        class="form-control"
                                        placeholder=""
                                        autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Ngày sinh
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input 
                                        type="date"
                                        name="birthday"
                                        value=""
                                        class="form-control"
                                        placeholder=""
                                        autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Mật khẩu
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input 
                                        type="password"
                                        name="password"
                                        value=""
                                        class="form-control"
                                        placeholder=""
                                        autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Nhập lại mật khẩu
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input 
                                        type="password"
                                        name="re_password"
                                        value=""
                                        class="form-control"
                                        placeholder=""
                                        autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-5">
                <div class="panel-head">
                    <div class="panel-title">Thông Liên Hệ</div>
                    <div class="panel-description">Nhập thông tin liên hệ của thành viên</div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Thành phố
                                    </label>
                                    <select name="province_id" class="form-control setupSelect2 province">
                                        <option value="0">[Chọn thành phố]</option>
                                        @if(isset($provinces))
                                            @foreach($provinces as $province)
                                            <option value="{{ $province->code }}">{{ $province->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Quận/Huyện
                                    </label>
                                    <select name="district_id" class="form-control setupSelect2 districts">
                                        <option value="0">[Chọn Quận/Huyện]</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Phường/Xã
                                    </label>
                                    <select name="ward_id" class="form-control">
                                        <option value="0">[Chọn Phường/Xã]</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Địa chỉ
                                    </label>
                                    <input 
                                        type="text"
                                        name="address"
                                        value=""
                                        class="form-control"
                                        placeholder=""
                                        autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Số điện thoại
                                    </label>
                                    <input 
                                        type="phoneNumber"
                                        name="phone"
                                        value=""
                                        class="form-control"
                                        placeholder=""
                                        autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Ghi chú
                                    </label>
                                    <input 
                                        type="text"
                                        name="description"
                                        value=""
                                        class="form-control"
                                        placeholder=""
                                        autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p>- Lưu ý: Nhưng trường đánh dấu <span class="text-danger">(*) </span>là bắt buộc</p>
            </div>
        </div>
        <div class="text-right mb15">
            <button class="btn btn-primary" type="submit" name="send" value="send">Lưu lại</button>
        </div>
    </div>
</form>