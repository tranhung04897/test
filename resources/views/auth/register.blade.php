<!DOCTYPE html>
<html lang="en">
<head>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"> --}}
<link href="templates/auth/css/style.css" rel="stylesheet" >
<!------ Include the above in your HEAD tag ---------->
</head>
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are 30 seconds away from earning your own money!</p>
                        <input type="submit" name="" value="Đăng Nhập"/ onclick="location.href='google.com'"><br/>
                    </div>
                                  
                    <div class="col-md-9 register-right">
                    	<form  method="post" >
                    		{{ csrf_field() }}
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h4 class="register-heading">Đăng Ký</h4>
                                 	@if (session('status'))
	                                 	<div class="register-heading">
									        <div class="alert alert-info">{{session('status')}}</div>
									     </div>
								    @endif
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Họ Và Tên *" name="fullname" value="" required="" />
                                            @if ($errors->has('fullname'))
												<span class="text-danger">{{ $errors->first('fullname') }}</span>
											@endif
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email *" value="" name="email" required=""/>
                                             @if ($errors->has('email'))
												<span class="text-danger">{{ $errors->first('email') }}</span>
											@endif
                                        </div>
                                        <div class="form-group">
                                            <input type="password" minlength="6" class="form-control" placeholder="Mật Khẩu *"  name= "password" value="" required=""/>
                                             @if ($errors->has('password'))
												<span class="text-danger">{{ $errors->first('password') }}</span>
											@endif
                                        </div>
                                     	<div class="form-group">
                                            <input type="password" class="form-control" name="cfpassword" placeholder="Xác Nhận Mật Khẩu *" value=""required=""/>
                                             @if ($errors->has('cfpassword'))
												<span class="text-danger">{{ $errors->first('cfpassword') }}</span>
											@endif
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-6">

                                    	<div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="1" checked>
                                                    <span> Nam </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="0">
                                                    <span>Nữ </span> 
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Địa Chỉ *" name="address" value="" required="" />
                                             @if ($errors->has('address'))
												<span class="text-danger">{{ $errors->first('address') }}</span>
											@endif
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="11" name="phone" class="form-control" placeholder="Số Điện Thoại *" value="" required="" numeric=""/>
                                             @if ($errors->has('phone'))
												<span class="text-danger">{{ $errors->first('phone') }}</span>
											@endif
                                        </div>
                                       
                                        
                                   
                                    </div>
                                    <label class="cbx"><input type="checkbox" name="terms" required> Tôi đồng ý với <a href="" data-toggle="modal" data-target="#exampleModalLong">Các điều khoản và điều kiện</a>.</label>
                                            @if ($errors->has('terms'))
                                                <span class="text-danger">{{ $errors->first('terms') }}</span>
                                            @endif                                  
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Điều Khoản và Điều Kiện</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                        <div>
                                            <span><h5>THÔNG TIN</h5></span>

                                            <p>Chương trình Amadeus Rewards nhằm tri ân sự ủng hộ và đóng góp của tất cả các thành viên sử dụng Amadeus với nhiều loại quà tặng đa dạng, phong phú. Trang web này được sở hữu và điều hành bởi Amadeus Việt Nam.</br>

                                            Là thành vien của Amadeus Rewards, mỗi đặt chỗ trên Amadeus sẽ được tích lũy điểm thưởng tương ứng vào tài khoản của thành viên và dễ dàng dùng để đổi quà hoặc các tặng phẩm có trong chương trình.</br>

                                            Sau đây là bản tóm tắt các điều khoản và điều kiện của Amadeus Reward. Các điều khoản và điều kiện có thể được sửa đổi bởi Amadeus Việt Nam mà không cần báo trước, Amadeus Việt Nam có quyền duy nhất đế áp dụng các điều khoản này </p>

                                            <span><h5>THÀNH VIÊN</h5></span>

                                            <p>Thành viên được giới hạn cho các cá nhân từ 18 tuổi trở lên cư trú tại Việt Nam, những người sử dụng hệ thống đặt giữ chỗ Amadeus,</br>

                                            Mỗi thành viên chỉ duy trì một tài khoản, dựa Mã Đăng Nhập (Sign-in) và Mã Đại lý (Office ID) của đại lý đã đăng ký với Amadeus</br>

                                            Để tham gia chương trình Amadeus Reward, thành viên phải hoàn thành bản đăng ký trực tuyến có sẵn trên trang chủ Amadeus Rewards và chấp nhận các Điều khoản & Điều kiện của chương trình.</br>

                                            Thành viên phải đăng ký đầy đủ các thông tin trong bản đăng ký. Thành viên có thể giữ lại tài khoản cá nhân trong trường hợp thay đổi Sign-in, Office ID hoặc thay đổi công ty làm việc - vẫn hoạt động trong ngành du lịch và là khách hàng Amadeus, và phải thông báo để Amadeus Việt Nam cập nhật tài khoản.</p>

                                            <span><h5>QUY ĐỊNH</h5></span>

                                            <p>Bất kỳ sự không tuân theo quy định, hoặc sự lạm dùng quyền hạn của chương trình gây tổn hại đến lợi ích, hình ảnh của Amadeus, hoặc các trường hợp sử dụng tài khoản sai mục đích sẽ dẫn đến việc chấm dứt quyền đăng nhập của thành viên.</br>

                                            Amadeus có quyền đóng băng tài khoản trong các trường hợp nghi ngờ mục đích sử dụng tài khoản của thành viên trong thời gian kiểm tra thông tin tài khoản.</p>
                                            <span><h5>PHÁP LÝ</h5></span> 

                                            <p>Các điều khoản và điều kiện này sẽ được điều chỉnh theo quy định của pháp luật Việt Nam. Trường hợp có một trong các quy định trên là không hợp lệ, điều này không ảnh hưởng đến các điều khoản còn lại.</br>

                                            Trang web và tất cả văn bản, hình ảnh, thông tin bao gồm đều thuộc sở hữu và cấp phép cho Amadeus Việt Nam. Bản quyền và các tài sản sở hữu trí tuệ khác trong nội dung của trang web thuộc về duy nhất và dành riêng cho Amadeus Việt Nam</p>

                                            Mọi thắc mắc hoặc yêu cầu vui lòng liên hệ với ban quản trị Administrator</br>

                                             
                                            Amadeus Việt Nam
                                        </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <input type="submit" class="btnRegister" name="submit"  value="Đăng Ký"/>

                                </div>
                            </div>
                            
                        </div>
                        </form>
                    </div>
                
                </div>

            </div>      
</html>
