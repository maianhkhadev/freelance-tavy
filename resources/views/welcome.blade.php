@extends('layouts.default')

@section('stylesheet')
  <link href="{{ asset('css/page-welcome.css') }}" rel="stylesheet">
@endsection

@section('javascript')
  <script src="{{ asset('js/page-welcome.js') }}"></script>
@endsection

@section('content')
  <div class="page page-welcome">
    <section class="section-01">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-12">
            <div class="slick">
      				<div>
      					<img class="w-100" src="{{ asset('images/page-welcome/section-01/slide-01.jpg') }}" alt=""/>
      				</div>
      				<div>
      					<img class="w-100" src="{{ asset('images/page-welcome/section-01/slide-01.jpg') }}" alt=""/>
      				</div>
      				<div>
      					<img class="w-100" src="{{ asset('images/page-welcome/section-01/slide-01.jpg') }}" alt=""/>
      				</div>
      				<div>
      					<img class="w-100" src="{{ asset('images/page-welcome/section-01/slide-01.jpg') }}" alt=""/>
      				</div>
      			</div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-02">
      <div class="container">
        <div class="row">
          <div class="col-xl-2">
            <h2>Về chúng tôi</h2>
          </div>
          <div class="col-xl-5">
            <p class="normal-font">Những năm gần đây, thị trường hình thành xu hướng chú trọng đến các vật liệu xây dựng và trang trí có nguồn gốc thiên nhiên, cũng như các ứng dụng thẩm mỹ có hướng thân thiện với môi trường, bên cạnh xu thế ưa chuộng các sản phẩm thủ công mang bản sắc vùng miền. Nhận thấy đây là phân khúc tiềm năng mang lại giá trị bền vững và ý nghĩa tích cực.</p>
          </div>
          <div class="col-xl-5">
            <p class="normal-font">Tavy Corporate khởi dựng mô hình liên kết giữa: các vùng khai thác nguyên liệu - làng nghề thủ công truyền thống - giới kiến trúc sư và nhà thầu cùng chí hướng, để đánh dấu việc cam kết kiến tạo giá trị bền vững trong lĩnh vực cung cấp, khai thác và sản xuất các vật liệu/sản phẩm xây dựng và trang trí công trình/nhà ở, cũng như góp phần định hình phong cách sống thân thiện với môi trường.</p>
          </div>
          <div class="col-xl-9 ml-auto">
            <p class="large-font">Tavy Corporate là nhà của các dòng sản phẩm: đá thiên nhiên, gạch vẽ tay phong cách Đông Dương, sản phẩm nội thất từ thiên nhiên, dòng sản phẩm Xanh; và bốn trụ cột của triết lý sản xuất: <strong>khai thác bền vững, thiết kế tinh tế, vật liệu thân thiện và thợ thủ công tinh xảo.</strong></p>
            <p class="large-font">Bên cạnh đó, với mong muốn giới thiệu các sản phẩm chất lượng, đầy bản sắc từ Việt Nam đến thế giới, chúng tôi mở rộng dịch vụ xúc tiến thương mại, tư vấn nhập khẩu, tìm nhà cung cấp / gia công sản phẩm bạn có nhu cầu bằng kinh nghiệm làm việc với các đối tác Việt Nam, cùng đội ngũ nhân sự am hiểu thị trường và văn hóa địa phương.</p>
            <p class="large-font">Đừng ngần ngại liên lạc với Tavy Corporate để chúng tôi có cơ hội cung cấp cho bạn những thông tin chi tiết hữu ích và chiến lược hơn!</p>

            <a class="call-to-action" href="#">Liên Hệ &rarr;</a>
          </div>
        </div>
      </div>

      <img class="deco-01" src="{{ asset('images/page-welcome/section-02/deco-01.png') }}" alt=""/>
      <img class="deco-02" src="{{ asset('images/page-welcome/section-02/deco-02.png') }}" alt=""/>
    </section>

    <section class="section-03">
      <div class="container">
        <div class="section-header">
          <h2>Sản phẩm</h2>
        </div>
        <div class="section-content">
          <div class="block-product">
            <div class="row">
              <div class="col-xl-6">
                <div class="block-content">
                  <h3>Đá - Gạch</h3>
                  <p>Đá hình thành do sự tác động của thổ nhưỡng mỗi vùng sẽ mang tới những mẫu đá khác nhau, màu và họa tiết không giống nhau, mang nhiều kiểu dáng riêng. Những loại đá hoa cương xanh, trắng, hồng, xám, kem, đỏ, đen…được tạo thành theo từng vùng khí hậu và có độ phổ biến khác nhau ví dụ như đá xanh, xám, trắng thường nhiều hơn so với đá đỏ, đen bởi cấu tạo đá màu đỏ, đen khác biệt và khó tạo thành hơn.</p>
                  <button class="btn btn-main">Xem thêm</button>
                </div>
              </div>
              <div class="col-xl-6">
                <figure>
                  <img src="{{ asset('images/page-welcome/section-03/im-01.jpg') }}" alt=""/>
                </figure>
              </div>
            </div>
          </div>
          <div class="block-product">
            <div class="row">
              <div class="col-xl-6">
                <figure>
                  <img src="{{ asset('images/page-welcome/section-03/im-02.jpg') }}" alt=""/>
                </figure>
              </div>
              <div class="col-xl-6">
                <div class="block-content">
                  <h3>Nội thất từ thiên nhiên</h3>
                  <p>Phong cách nội thất Á Đông có xu hướng gấn gũi với thiên nhiên, chính vì thế các đồ nội thất được sử dụng thường có nguồn gốc là các nguyên liệu tự nhiên. Những vật liệu Tavy giới thiệu đến bạn là mây, tre, nứa, trúc … có nguồn gốc Đông Nam Á và được làm tay tinh xảo bởi những Làng nghề thủ công địa phương; vừa có nét đẹp giản dị, mộc mạc nhưng không kém phần tinh tế.</p>
                  <button class="btn btn-main">Xem thêm</button>
                </div>
              </div>
            </div>
          </div>
          <div class="block-product">
            <div class="row">
              <div class="col-xl-6">
                <div class="block-content">
                  <h3>Sản phẩm xanh</h3>
                  <p>Sản phẩm Xanh là một trong những niềm đam mê của Tavy, mong muốn mang lại sức khỏe cho người dùng thông mình, và đóng góp một phần nhỏ vào cuộc cách mạng bảo vệ môi trường sống. Chúng tôi chọn lọc , nghiên cứu và sản xuất các sản phẩm xanh hay sản phẩm hữu cơ, không dùng hóa chất để những vật dụng này có thể thay thế các vật dụng bằng nhựa hoặc những vật liệu kém thân thiện môi trường.</p>
                  <button class="btn btn-main">Xem thêm</button>
                </div>
              </div>
              <div class="col-xl-6">
                <figure>
                  <img src="{{ asset('images/page-welcome/section-03/im-03.jpg') }}" alt=""/>
                </figure>
              </div>
            </div>
          </div>
        </div>
      </div>

      <img class="deco-01" src="{{ asset('images/page-welcome/section-03/deco-01.png') }}" alt=""/>
      <img class="deco-02" src="{{ asset('images/page-welcome/section-03/deco-02.png') }}" alt=""/>
      <img class="deco-03" src="{{ asset('images/page-welcome/section-03/deco-03.png') }}" alt=""/>
    </section>

    <section class="section-04">
      <div class="container">
        <div class="section-header">
          <h2>Xúc tiến xuất nhập khẩu</h2>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-xl-12">
              <div class="embed-responsive embed-responsive-16by9">
                <video controls>
                  <source src="https://www.youtube.com/watch?v=WUgvvPRH7Oc" type="video/mp4">
                  <source src="https://www.youtube.com/watch?v=WUgvvPRH7Oc" type="video/ogg">
                  Your browser does not support the video tag.
                </video>
              </div>
            </div>
            <div class="col-xl-9 mx-auto">
              <p>Bên cạnh việc cug cấp trực tiếp cho thị trường Đức và Châu Âu các sản phẩm vật liệu xây dựng thiên nhiên,  sản phẩm trang trí nội thất và sản phẩm Xanh, Tavy còn tập trung vào các hoạt động nâng cao năng lực, hỗ trợ xuất khẩu và là cầu nối giúp các nhà nhập khẩu các sản phẩm từ Việt Nam sang thị trường Châu Âu. Chúng tôi kết nối nhà cung cấp và khách hàng, giúp họ gặp gỡ tại các triển lãm thương mại,  tổ chức các cuộc gặp gỡ giao thương, các đoàn ra đoàn vào và kết hợp với các chuyến khảo sát và nghiên cứu thị trường.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-05">
      <div class="container">
        <div class="row">
          <div class="col-xl-5">
            <div class="section-header">
              <h2>Liên hệ</h2>
              <h4>Bên cạnh việc cug cấp trực tiếp cho thị trường Đức và Châu Âu các sản phẩm vật liệu xây dựng thiên nhiên</h4>
            </div>
            <div class="section-content">
              <form>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Fullname">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Phone">
                </div>
                <div class="form-group">
                  <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                </div>

                <div class="form-footer">
                  <a class="" href="#">Gửi &rarr;</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <img class="deco-01" src="{{ asset('images/page-welcome/section-05/deco-01.png') }}" alt=""/>
    </section>
  </div>
@endsection
