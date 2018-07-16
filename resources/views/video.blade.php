@extends('layouts.default')

@section('stylesheet')
  <link href="{{ asset('css/page-video.css') }}" rel="stylesheet">
@endsection

@section('javascript')
  <script src="{{ asset('js/page-video.js') }}"></script>
@endsection

@section('content')
  <div class="page page-video">
    <div class="page-header">
      <h1>Xúc tiến thương mại</h1>
    </div>

    <section>
      <div class="container">
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
  </div>
@endsection
