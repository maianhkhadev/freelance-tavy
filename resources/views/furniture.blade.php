@extends('layouts.default')

@section('stylesheet')
  <link href="{{ asset('css/page-furniture.css') }}" rel="stylesheet">
@endsection

@section('javascript')
  <script src="{{ asset('js/page-furniture.js') }}"></script>
@endsection

@section('content')
  <div class="page page-furniture">

    <div class="page-header">
      <h1>Nội thất từ thiên nhiên</h1>
    </div>

    <ul class="page-nav nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#tab-01">‘Feel good’ furniture</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#tab-02">Eco small beauties</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#tab-03">Eco bamboo flooring</a>
      </li>
    </ul>

    <div class="page-content">
      <div class="tab-content">
        <div id="tab-01" class="tab-pane fade show active">
          <section>
            <div class="container">
              <div class="section-header">
                <div class="row">
                  <div class="col-xl-10 mx-auto">
                    <h2>‘Feel good’ furniture</h2>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xl-10 mx-auto">
                  <p>Phong cách nội thất Á Đông có xu hướng gấn gũi với thiên nhiên, chính vì thế các đồ nội thất được sử dụng thường có nguồn gốc là các nguyên liệu tự nhiên. Những vật liệu Tavy giới thiệu đến bạn là mây, tre, nứa, trúc … có nguồn gốc Đông Nam Á và được làm tay tinh xảo bởi những Làng nghề thủ công địa phương; vừa có nét đẹp giản dị, mộc mạc nhưng không kém phần tinh tế.</p>
                  <p>Những món nội thất thuần tự nhiên này giúp bạn tạo không gian thẩm mỹ, tiện ích và thân thiện môi trường cũng như sức khỏe: giúp kiểm soát độ ẩm, nhiệt độ, âm thanh và không hóa chất. Chắc chắn với phong cách này bạn và người thân sẽ có một không gian sống Xanh, thoải mái và phong cách.</p>
                </div>
              </div>
            </div>
          </section>

          <img class="deco" src="{{ asset('images/page-furniture/tab-01/deco-01.jpg') }}" alt=""/>
          <img class="deco" src="{{ asset('images/page-furniture/tab-01/deco-02.jpg') }}" alt=""/>
          <img class="deco" src="{{ asset('images/page-furniture/tab-01/deco-03.jpg') }}" alt=""/>
        </div>
        <div id="tab-02" class="tab-pane fade">
          <section>
            <div class="container">
              <div class="section-header">
                <div class="row">
                  <div class="col-xl-10 mx-auto">
                    <h2>Eco small beauties</h2>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xl-10 mx-auto">
                  <p>Những ngôi nhà được thiết kế theo phong cách thiên nhiên thường có màu chủ đạo nhã nhặn điểm xuyết những món trang trí nhỏ xinh làm điểm nhấn cho cả căn phòng. Không gian sống của người yêu thiên nhiên thường giản dị và đồng thuận cùng thiên nhiên. Tavy mang đến cho bạn những thiết kế đơn giản nhưng không kém phần cá tính từ các vật liệu tự nhiên làm tay. Không những tinh tế và đầy phong cách, những món đồ nhỏ này còn giúp bạn sinh hoạt tiện lợi hơn. Chắc chắn những ai tới thăm không gian của bạn cũng sẽ trầm trồ vì một chi tiết xinh xắn nói lên gu thẩm mỹ của chủ nhân.</p>
                </div>
              </div>
            </div>
          </section>

          <img class="deco" src="{{ asset('images/page-furniture/tab-02/deco-01.jpg') }}" alt=""/>
          <img class="deco" src="{{ asset('images/page-furniture/tab-02/deco-02.jpg') }}" alt=""/>
          <img class="deco" src="{{ asset('images/page-furniture/tab-02/deco-03.jpg') }}" alt=""/>
        </div>
        <div id="tab-03" class="tab-pane fade">
          <section>
            <div class="container">
              <div class="section-header">
                <div class="row">
                  <div class="col-xl-10 mx-auto">
                    <h2>Eco bamboo flooring </h2>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xl-10 mx-auto">
                  <p>Sản phẩm sàn tre Tavy cung cấp cho ngôi nhà bạn từ vùng nguyên liệu rừng Tre được trồng đủ tuổi khai thác và có trữ lượng lớn. Loài sàn đặc biệt này giúp cân bằng sinh thái bởi sẽ hạn chế tình trạng khai thác cây thân gỗ đang trở nên quá đà. Đặc điểm của cây tre là chỉ trong vòng 6 năm là đã có thu hoạch đưa vào sản xuất, do vậy, việc sử dụng ván sàn tre được xem là một đóng góp tích cực để bảo vệ các khu rừng nhiệt đới. Ván sàn tre được sản xuất theo công nghệ ép sợi và xử lý nhiệt tiên tiến, giúp tăng tính bền vững, đặc biệt giảm âm, cách âm tốt hơn so với các thành phẩm khác. Không gian của bạn sẽ thật ấm cúng, thân thiện và phong cách với vật liệu sàn thuần tự nhiên này.</p>
                </div>
              </div>
            </div>
          </section>

          <img class="deco" src="{{ asset('images/page-furniture/tab-03/deco-01.jpg') }}" alt=""/>
          <img class="deco" src="{{ asset('images/page-furniture/tab-03/deco-02.jpg') }}" alt=""/>
          <img class="deco" src="{{ asset('images/page-furniture/tab-03/deco-03.jpg') }}" alt=""/>
        </div>
      </div>

      <section class="section-02">
        <div class="container">
          <div class="section-header">
            <div class="row">
              <div class="col-xl-12">
                <h2>Thư viện ảnh</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-12">
              <img src="{{ asset('images/page-furniture/tab-01/im-01.jpg') }}" alt=""/>
              <img src="{{ asset('images/page-furniture/tab-01/im-02.jpg') }}" alt=""/>
              <img src="{{ asset('images/page-furniture/tab-01/im-03.jpg') }}" alt=""/>
              <img src="{{ asset('images/page-furniture/tab-01/im-04.jpg') }}" alt=""/>
              <img src="{{ asset('images/page-furniture/tab-01/im-05.jpg') }}" alt=""/>
              <img src="{{ asset('images/page-furniture/tab-01/im-06.jpg') }}" alt=""/>
              <img src="{{ asset('images/page-furniture/tab-01/im-07.jpg') }}" alt=""/>
              <img src="{{ asset('images/page-furniture/tab-01/im-08.jpg') }}" alt=""/>
              <img src="{{ asset('images/page-furniture/tab-01/im-09.jpg') }}" alt=""/>
              <img src="{{ asset('images/page-furniture/tab-01/im-10.jpg') }}" alt=""/>
              <img src="{{ asset('images/page-furniture/tab-01/im-11.jpg') }}" alt=""/>
              <img src="{{ asset('images/page-furniture/tab-01/im-12.jpg') }}" alt=""/>
            </div>
          </div>
        </div>
      </section>
    </div>

  </div>
@endsection
