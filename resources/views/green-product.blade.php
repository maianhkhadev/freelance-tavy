@extends('layouts.default')

@section('stylesheet')
  <link href="{{ asset('css/page-green-product.css') }}" rel="stylesheet">
@endsection

@section('javascript')
  <script src="{{ asset('js/page-green-product.js') }}"></script>
@endsection

@section('content')
  <div class="page page-green-product">
    <div class="page-header">
      <h1>Sản phẩm xanh</h1>
    </div>

    <div class="page-content">
      <section>
        <div class="container">
          <div class="section-header">
            <div class="row">
              <div class="col-xl-10 mx-auto">
                <h2>Sản phẩm xanh</h2>
              </div>
            </div>
          </div>
          <div class="section-content">
            <div class="row">
              <div class="col-xl-5 ml-auto align-self-center">
                <p>Sản phẩm Xanh là một trong những niềm đam mê của Tavy, mong muốn mang lại sức khỏe cho người dùng thông mình, và đóng góp một phần nhỏ vào cuộc cách mạng bảo vệ môi trường sống. Chúng tôi chọn lọc , nghiên cứu và sản xuất các sản phẩm xanh hay sản phẩm hữu cơ, không dùng hóa chất để những vật dụng này có thể thay thế các vật dụng bằng nhựa hoặc những vật liệu kém thân thiện môi trường.</p>
              </div>
              <div class="col-xl-5 mr-auto">
                <img class="w-100" src="{{ asset('images/page-green-product/im-01.jpg') }}" alt=""/>
              </div>
            </div>
            <div class="dsadsa"></div>
            <div class="row">
              <div class="col-xl-5 ml-auto">
                <img class="w-100" src="{{ asset('images/page-green-product/im-02.jpg') }}" alt=""/>
              </div>
              <div class="col-xl-5 mr-auto align-self-center">
                <p>Với Tavy, bạn có thể thử sử dụng sản phẩm xanh “từ A đến Z” bằng cách mang theo ống hút làm bằng tre hoặc cỏ bàng, đem cơm đến văn phòng bằng loại hộp làm từ bã mía, ăn uống trong những chiếc chén hoặc đĩa bằng mo cau. Ngoài ra, những chiếc khay tre, đũa muỗng, thớt và các vật dụng nhà bếp khác bằng mây tre cũng tạo hứng khởi cho việc nấu nướng. Nhiều người nội trợ không cần túi nylon nữa mà dùng túi cói để đựng đồ khi đi chợ. Khi lựa chọn kĩ và thông thái những sản phẩm dùng hàng ngày, bạn đã đóng góp rất nhiều trong việc làm Xanh môi trường. Chúng tôi hi vọng nhận được nhiều ủng hộ trong việc thử nghiệm này.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <img class="deco" src="{{ asset('images/page-green-product/deco-01.jpg') }}" alt=""/>
      <img class="deco" src="{{ asset('images/page-green-product/deco-02.jpg') }}" alt=""/>
      <img class="deco" src="{{ asset('images/page-green-product/deco-03.jpg') }}" alt=""/>
    </div>
  </div>
@endsection
