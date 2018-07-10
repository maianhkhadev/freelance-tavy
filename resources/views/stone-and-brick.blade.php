@extends('layouts.default')

@section('stylesheet')
  <link href="{{ asset('css/page-stone-and-brick.css') }}" rel="stylesheet">
@endsection

@section('javascript')
  <script src="{{ asset('js/page-stone-and-brick.js') }}"></script>
@endsection

@section('content')
  <div class="page page-stone-and-brick">

    <div class="page-header">
      <h1>Đá - Gạch</h1>
    </div>

    <ul class="page-nav nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#tab-01">Đá thiên nhiên</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#tab-02">Gạch làm tay</a>
      </li>
    </ul>

    <div class="page-content tab-content">
      <div id="tab-01" class="tab-pane fade show active">

        <section class="section-01">
          <div class="container">
            <div class="row">
              <div class="col-xl-10 mx-auto">
                <h1>Đá thiên nhiên</h1>
                <p>Đá hình thành do sự tác động của thổ nhưỡng mỗi vùng sẽ mang tới những mẫu đá khác nhau, màu và họa tiết không giống nhau, mang nhiều kiểu dáng riêng. Những loại đá hoa cương xanh, trắng, hồng, xám, kem, đỏ, đen…được tạo thành theo từng vùng khí hậu và có độ phổ biến khác nhau ví dụ như đá xanh, xám, trắng thường nhiều hơn so với đá đỏ, đen bởi cấu tạo đá màu đỏ, đen khác biệt và khó tạo thành hơn. </p>
                <blockquote>“Tavy trân trọng sự đa dạng và ngẫu hứng của tự nhiên nên cũng muốn đưa tinh thần ấy vào trong không gian hay bất cứ dự án nào của bạn.”</blockquote>
              </div>
              <div class="col-xl-5 ml-auto">
                <img class="w-100" src="{{ asset('images/page-stone-and-brick/tab-01/section-01/im-01.jpg') }}" alt=""/>
              </div>
              <div class="col-xl-5 mr-auto">
                <img class="w-100" src="{{ asset('images/page-stone-and-brick/tab-01/section-01/im-02.jpg') }}" alt=""/>
              </div>
              <div class="col-xl-10 mx-auto">
                <p>Các loại đá này đều được khai thác từ các mỏ đá thiên nhiên nằm trong quy hoạch có trữ lượng lớn và phẩm chất đá tốt. Trong lúc khai thác, chúng tôi cố gắng để không tác động nhiều kết cấu liên kết tự nhiên của đá .Các chủng loại đá thiên nhiên có vô số các dạng bề mặt của sản phẩm cuối, phổ biến nhất trong số đó là đá có bề mặt đánh bóng hoặc mài mờ, bên cạnh nhiều bề mặt mộc hoặc cổ xưa, tất cả đều phản ánh vẻ sang trọng và vẻ đẹp nguyên thủy của nó bằng các hoa văn tinh tế. Các tia sáng phản chiếu của ánh sáng sau khi tắt của một sàn đá cẩm thạch đánh bóng tạo ra cái nhìn thanh lịch và cổ điển về phong cách.</p>
              </div>
            </div>
          </div>
        </section>

        <img class="deco-01" src="{{ asset('images/page-stone-and-brick/tab-01/deco-01.jpg') }}" alt=""/>

        <section class="section-02">
          <div class="container">
            <ul class="stone-nav nav nav-tabs">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#stone-tab-01">White Marble Slabs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#stone-tab-02">White Marble Block</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#stone-tab-03">White Marble Tiles</a>
              </li>
            </ul>
            <div class="stone-content tab-content">
              <div id="stone-tab-01" class="tab-pane fade show active">
                <h2>White Marble Slabs</h2>

                <div class="block-figures">
                  <div class="row">
                    <div class="col-xl-3">
                      <figure class="figure">
                        <img class="w-100" src="{{ asset('images/page-stone-and-brick/tab-01/section-02/im-01.jpg') }}" alt="">
                        <figcaption>A1 grade & big sizes</figcaption>
                      </figure>
                    </div>
                    <div class="col-xl-3">
                      <figure class="figure">
                        <img class="w-100" src="{{ asset('images/page-stone-and-brick/tab-01/section-02/im-01.jpg') }}" alt="">
                        <figcaption>A1 grade & big sizes</figcaption>
                      </figure>
                    </div>
                    <div class="col-xl-3">
                      <figure class="figure">
                        <img class="w-100" src="{{ asset('images/page-stone-and-brick/tab-01/section-02/im-01.jpg') }}" alt="">
                        <figcaption>A1 grade & big sizes</figcaption>
                      </figure>
                    </div>
                    <div class="col-xl-3">
                      <figure class="figure">
                        <img class="w-100" src="{{ asset('images/page-stone-and-brick/tab-01/section-02/im-01.jpg') }}" alt="">
                        <figcaption>A1 grade & big sizes</figcaption>
                      </figure>
                    </div>
                    <div class="col-xl-3">
                      <figure class="figure">
                        <img class="w-100" src="{{ asset('images/page-stone-and-brick/tab-01/section-02/im-01.jpg') }}" alt="">
                        <figcaption>A1 grade & big sizes</figcaption>
                      </figure>
                    </div>
                    <div class="col-xl-3">
                      <figure class="figure">
                        <img class="w-100" src="{{ asset('images/page-stone-and-brick/tab-01/section-02/im-01.jpg') }}" alt="">
                        <figcaption>A1 grade & big sizes</figcaption>
                      </figure>
                    </div>
                    <div class="col-xl-3">
                      <figure class="figure">
                        <img class="w-100" src="{{ asset('images/page-stone-and-brick/tab-01/section-02/im-01.jpg') }}" alt="">
                        <figcaption>A1 grade & big sizes</figcaption>
                      </figure>
                    </div>
                    <div class="col-xl-3">
                      <figure class="figure">
                        <img class="w-100" src="{{ asset('images/page-stone-and-brick/tab-01/section-02/im-01.jpg') }}" alt="">
                        <figcaption>A1 grade & big sizes</figcaption>
                      </figure>
                    </div>
                  </div>
                </div>

                <div class="block-marble-slab-sizes">
                  <h3>Polished White Marble Slabs are available in various sizes up to gang-saw size:</h3>

                  <div class="row">
                    <div class="col-xl-3 text-center mx-auto">
                      <img class="" src="{{ asset('images/page-stone-and-brick/tab-01/section-02/size-01.png') }}" alt=""/>
                      <div class="type">Width ranging</div>
                      <div class="size">from 1m to 2m</div>
                    </div>
                    <div class="col-xl-3 text-center mx-auto">
                      <img class="" src="{{ asset('images/page-stone-and-brick/tab-01/section-02/size-02.png') }}" alt=""/>
                      <div class="type">Length ranging</div>
                      <div class="size">from 2m to 3m</div>
                    </div>
                    <div class="col-xl-3 text-center mx-auto">
                      <img class="" src="{{ asset('images/page-stone-and-brick/tab-01/section-02/size-03.png') }}" alt=""/>
                      <div class="type">Thickness</div>
                      <div class="size">from 1.5m to 5m</div>
                      <small>(based on requests from customers)</small>
                    </div>
                  </div>
                </div>
              </div>
              <div id="stone-tab-02" class="tab-pane fade">
                <h2>White Marble Block</h2>
              </div>
              <div id="stone-tab-03" class="tab-pane fade">
                <h2>White Marble Tiles</h2>
              </div>
            </div>
          </div>
        </section>
      </div>
      <div id="tab-02" class="tab-pane fade">

        <section class="section-01">
          <div class="container">
            <div class="row">
              <div class="col-xl-12">
                <h1>Gạch làm tay</h1>
              </div>
              <div class="col-xl-6">
                <p>Gạch bông là sản phẩm được làm bằng tay, hoàn toàn thủ công, vì vậy, viên gạch không thể giống hệt nhau từng viên một. Những sai lệch nhỏ về kích thước, màu sắc, mức độ không hoàn hảo nhỏ, các cạnh gạch không đều là những đặc tính gắn liền với sản phẩm. Chính điều này làm tăng thêm vẻ đẹp tự nhiên mà không làm ảnh hưởng đến chất lượng. Sản xuất gạch bông là một nghệ thuật, được lưu truyền từ đời này qua đời khác. </p>
                <blockquote>“Mỗi viên gạch ra đời là niềm tự hào của mỗi người thợ, người nghệ nhân.”</blockquote>
              </div>
              <div class="col-xl-6">
                <img src="{{ asset('images/page-stone-and-brick/tab-02/section-01/im-01.jpg') }}" alt=""/>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-6">
                <img class="left" src="{{ asset('images/page-stone-and-brick/tab-02/section-01/im-02.jpg') }}" alt=""/>
              </div>
              <div class="col-xl-6">
                <p>Với họ, viên gạch là thành quả của sự lao động và là một di sản được truyền lại cho tất cả mọi người. Gạch bông không nung chúng tôi cung cấp có thể tái chế và thân thiện với môi trường với những nguyên vật liệu tự nhiên và không sử dụng nhiên liệu đốt trong quá trình sản xuất. Vẫn là những phương pháp sản xuất thủ công truyền thống, nhưng với sự cải tiết vượt bậc về công nghệ và không ngừng học hỏi kỹ- mỹ thuật tiên tiến nên mỗi viên gạch bông được thiết kế và làm ra luôn đem lại điều mới lạ cho không gian của bạn.</p>
              </div>
            </div>
          </div>
        </section>

        <img class="deco-01" src="{{ asset('images/page-stone-and-brick/tab-02/deco-01.jpg') }}" alt=""/>

        <section class="section-02">
          <div class="container">
            <ul class="brick-nav nav nav-tabs">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#brick-tab-01">Producing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#brick-tab-02">Shapes & sizes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#brick-tab-03">Color Palette</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#brick-tab-04">Matt finish</a>
              </li>
            </ul>
            <div class="brick-content tab-content">

              <div id="#brick-tab-01" class="tab-pane fade show active">
                <div class="row">
                  <div class="col-xl-10 mx-auto">
                    <div class="step">
                      <h4>Step 1:</h4>
                      <p>Testing colors (in case of new colors requested by clients) for matching and preparing copper divider molds as well as pressing molds based on order requests. This step will determine size of tile and quality of top layer of cement tile.</p>
                      <img class="" src="{{ asset('images/page-stone-and-brick/tab-02/section-02/im-01.jpg') }}" alt=""/>
                      <img class="" src="{{ asset('images/page-stone-and-brick/tab-02/section-02/im-02.jpg') }}" alt=""/>
                      <img class="" src="{{ asset('images/page-stone-and-brick/tab-02/section-02/im-03.jpg') }}" alt=""/>
                    </div>
                    <div class="step">
                      <h4>Step 2:</h4>
                      <p>Insert divider mold into pressing mold. Then pouring the prepared colors into the pattern divider chambers as designs.</p>
                      <img class="" src="{{ asset('images/page-stone-and-brick/tab-02/section-02/im-04.jpg') }}" alt=""/>
                      <img class="" src="{{ asset('images/page-stone-and-brick/tab-02/section-02/im-05.jpg') }}" alt=""/>
                      <img class="" src="{{ asset('images/page-stone-and-brick/tab-02/section-02/im-06.jpg') }}" alt=""/>
                    </div>
                    <div class="step">
                      <h4>Step 3:</h4>
                      <p>The pattern divider to be removed and then the first coat will be covered with another two layers of dried mortars and humidified one as basement. This step requires special technique to guarantee same thickness for every tile.</p>
                      <img class="" src="{{ asset('images/page-stone-and-brick/tab-02/section-02/im-07.jpg') }}" alt=""/>
                      <img class="" src="{{ asset('images/page-stone-and-brick/tab-02/section-02/im-08.jpg') }}" alt=""/>
                      <img class="" src="{{ asset('images/page-stone-and-brick/tab-02/section-02/im-09.jpg') }}" alt=""/>
                    </div>
                    <div class="step">
                      <h4>Step 4:</h4>
                      <p>Put whole mold into hydraulic pressing machine for a while.</p>
                      <img class="" src="{{ asset('images/page-stone-and-brick/tab-02/section-02/im-10.jpg') }}" alt=""/>
                      <img class="" src="{{ asset('images/page-stone-and-brick/tab-02/section-02/im-11.jpg') }}" alt=""/>
                      <img class="" src="{{ asset('images/page-stone-and-brick/tab-02/section-02/im-12.jpg') }}" alt=""/>
                    </div>
                    <div class="step">
                      <h4>Step 5:</h4>
                      <p>The tiles to be removed from molds carefully by the craftsman, then tile is inspected carefully for desired quality by himself before leaving for next steps.</p>
                      <img class="" src="{{ asset('images/page-stone-and-brick/tab-02/section-02/im-13.jpg') }}" alt=""/>
                      <img class="" src="{{ asset('images/page-stone-and-brick/tab-02/section-02/im-14.jpg') }}" alt=""/>
                      <img class="" src="{{ asset('images/page-stone-and-brick/tab-02/section-02/im-15.jpg') }}" alt=""/>
                    </div>
                    <div class="step">
                      <h4>Step 6:</h4>
                      <p>After curing in clean open air areas, tiles will be cured in water tanks for hardenning.</p>
                      <img class="" src="{{ asset('images/page-stone-and-brick/tab-02/section-02/im-16.jpg') }}" alt=""/>
                      <img class="" src="{{ asset('images/page-stone-and-brick/tab-02/section-02/im-17.jpg') }}" alt=""/>
                    </div>
                    <div class="step">
                      <h4>Step 7:</h4>
                      <p>The tiles will be cleaned and taken out to cooling rooms and put on drying racks for 3-4 days for being dried enough (less than 17% humidity) before waxing and packing in carton boxes for packing and loading. A serious quality control on every piece will be conducted in this step.</p>
                      <img class="" src="{{ asset('images/page-stone-and-brick/tab-02/section-02/im-18.jpg') }}" alt=""/>
                      <img class="" src="{{ asset('images/page-stone-and-brick/tab-02/section-02/im-19.jpg') }}" alt=""/>
                      <img class="" src="{{ asset('images/page-stone-and-brick/tab-02/section-02/im-20.jpg') }}" alt=""/>
                    </div>
                  </div>
                </div>
              </div>

              <div id="#brick-tab-02" class="tab-pane fade">
              </div>

              <div id="#brick-tab-03" class="tab-pane fade">
              </div>

              <div id="#brick-tab-04" class="tab-pane fade">
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>

  </div>
@endsection
