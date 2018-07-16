@extends('layouts.default')

@section('stylesheet')
  <link href="{{ asset('css/page-about.css') }}" rel="stylesheet">
@endsection

@section('javascript')
  <script src="{{ asset('js/page-about.js') }}"></script>
@endsection

@section('content')
  <div class="page page-about">
    <div class="page-header">
      <h1>Về chúng tôi</h1>
    </div>

    <section class="section-01">
      <div class="container">
        <div class="section-header">
          <div class="row">
            <div class="col-xl-12">
              <h2>Về Tavy Corporate</h2>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-xl-12">
              <img class="img-right" src="{{ asset('images/page-about/section-01/im-01.jpg') }}" alt=""/>
              <p class="hello">Chào bạn,</p>
              <p>Chúng tôi là Tavy Corporate, cảm ơn bạn rất nhiều vì đã ghé qua.  Chúng tôi rất vui được chia sẻ với bạn niềm đam mê của chúng tôi đối với các sản phẩm thủ công và những loại chất liệu đặc trưng vùng miền từ Việt Nam, không những đẹp mà còn thân thiện môi trường.</p>
              <blockquote>Tavy được ấp ủ những ý tưởng ban đầu khi chúng tôi đi thăm những làng nghề thủ công lâu đời ở Việt Nam. Ở những nơi này, nhất là khi bạn dành đủ thời gian thư thả để đi quanh làng, bạn sẽ thực sự xúc động và cảm thấy đầy cảm hứng bởi những hoạt động lao động thủ công trong làng: họ làm ra những sản phẩm không những bằng tay, mà còn bằng trái tim và sự tự hào về việc tiếp nối di sản từ cha ông truyền lại. Từ lòng trân quý những bàn tay khéo léo của nghệ nhân Việt nam, và tình yêu với  những chất liệu đặc trưng xứ An Nam, cuộc hành trình của Tavy bắt đầu.</blockquote>
              <p>Bên cạnh việc nghiên cứu và phát triển những dòng sản phẩm trang trí và nội thất từ vật liệu tự nhiên, chúng tôi còn tâm huyết duy trì và giữ gìn tinh túy của thủ công địa phương, song song với việc thổi vào những sản phẩm này hơi thở tươi mới của thẩm mỹ đương đại. Tavy Corporate là nhà của các dòng sản phẩm: đá thiên nhiên, gạch trang trí phong cách Đông Dương, sản phẩm nội thất từ vật liệu thiên nhiên, dòng sản phẩm Xanh; và ba trụ cột của triết lý sản xuất: thiết kế tinh tế, vật liệu chọn lọc và thợ thủ công tinh xảo.</p>
              <p>Chúng tôi nổ lực hết sức để mỗi ngày đều khám phá thêm vẻ đẹp đích thực của chất liệu thiên nhiên, cũng như sự tinh tế của tay nghề thủ công. Từ quan niệm khiêm tốn của chúng tôi về cái đẹp từ sự nguyên bản vốn có của thiên nhiên và bàn tay người thợ,  chúng tôi mong muốn được mang vẻ đẹp của sản phẩm Tavy vào từng góc nhỏ trong ngôi nhà của bạn. Hi vọng với những sản phẩm của Tavy, cũng như chúng tôi; mỗi ngày bạn đều cảm nhận được sự rung cảm và niềm thân thuộc với những góc đơn giản mà đậm bản sắc trong tổ ấm của mình.</p>
              <img class="img-left" src="{{ asset('images/page-about/section-01/im-02.jpg') }}" alt=""/>
              <p>Cảm ơn đã ghé thăm website của Tavy! Hãy đi dạo 1 vòng để cảm nhận về cái đẹp mà chúng tôi tâm huyết, có thể bạn sẽ tìm và lựa được những thứ chúng tôi vô tình làm ra dành cho không gian của bạn.</p>
              <p>Chúng tôi rất mong nhận được phản hồi từ phía bạn về các dịch vụ của chúng tôi, và luôn vui mừng khi thấy hộp thư đến với các bức ảnh về các sản phẩm của Tavy tỏa sáng dịu dàng trong nhà của bạn. Vui lòng tiếp tục theo dõi hành trình của chúng tôi thông qua các trang blog, Instagram và Facebook của chúng tôi nhé.</p>
              <p class="sign">Tavy team.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-02">
      <div class="container">
        <div class="section-header">
          <div class="row">
            <div class="col-xl-12">
              <h2>Triết lý của chúng tôi</h2>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-xl-12">
              <img class="img-right" src="{{ asset('images/page-about/section-02/im-01.jpg') }}" alt=""/>
              <p>Vẻ đẹp chúng tôi hướng đến là sự pha trộn của sự tinh xảo và duyên dáng của phương Đông và sự thanh thản của phong cách tối giản của Châu Âu. Tính nghệ thuật trong việc làm ra các món đồ bằng tay ở Việt Nam đã được minh chứng bằng việc những làng nghề truyền thống vẫn tồn tại và được tôn trọng dù trải qua hàng nghìn năm với nhiều xáo trộn về văn hóa và chính trị của đất nước.</p>
              <p>Tách rời khỏi dòng chảy của việc sản xuất công nghiệp dễ dãi và hàng loạt, chúng tôi đi theo tinh thần của người thợ thủ công: luôn kiên trì, đầy đam mê, và không ngừng sáng tạo để định hình và phản ánh những giá trị của cái đẹp từ phương pháp thủ công tinh xảo và lấy thiên nhiên làm cảm hứng. Chúng tôi hi vọng rằng sự thể hiện vẻ đẹp trong những sản phẩm chúng tôi mang tới sẽ được chào đón và trân trọng ngay giữa Berlin hiện đại và đa dạng, hay bất kì đâu mà cái đẹp từ thiên nhiên và đôi bàn tay khéo léo vẫn còn chỗ đứng.</p>
              <p>Tại sao là đá, gạch và sản phẩm từ vật liệu thiên nhiên? Thứ nhất là bởi chúng tôi tìm thấy ở Việt Nam những nguồn tài nguyên này với sự dồi dào và phẩm chất tuyệt vời. Thứ hai là nền tảng làng nghề với tay nghề cao vẫn được coi trọng và yêu mến bởi nhiều người, trong đó có Tavy, chúng tôi tự cảm thấy phải có trách nhiệm bảo vệ, duy trì, và phát triển, nếu có thể,  với một phần của tính văn hóa nơi đây. Thứ ba, bởi vì đó là những vật liệu lâu đời và cơ bản mà con người chúng ta, từ lâu đời, đã sử dụng để làm tạo nên ngôi nhà của mình. Ở đó chúng ta sống những giờ dễ chịu và riêng tư nhất trong một ngày.</p>
              <img class="img-left" src="{{ asset('images/page-about/section-02/im-02.jpg') }}" alt=""/>
              <p>Nơi sinh sống cần phải thể hiện đúng con người của bạn.  Chúng tôi biết bên cạnh những lựa chọn mang tính công nghiệp và tiện lợi, nhiều người trong chúng ta bắt đầu có xu hướng chuyển sang những sản phẩm có tính kết nối hơn với thiên nhiên và con người; chúng tôi tin rằng khi một món đồ có lịch sử từ tự nhiên và mang tính làm tay độc đáo, nó trở nên có tính kết nối hơn, và vì thế, chân thực hơn với cuộc sống.</p>
              <p>Bất cứ sản phẩm nào của Tavy, chúng tôi hy vọng rằng bạn sẽ luôn luôn cảm thấy một phần của thiên nhiên bên cạnh. Với chúng tôi, cái đẹp, sự thoải mái, sự thân mật đều quan trọng như nhau.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-03">
      <div class="container">
        <div class="section-header">
          <div class="row">
            <div class="col-xl-8 mx-auto">
              <h2>The team</h2>
              <p>Ở Tavy, ngoài đội ngũ nhân viên yêu công việc, tâm huyết và duy mỹ; những nghệ nhân lành nghề, những người bạn kiến trúc sư, những người thợ mỏ….hay bất cứ cá nhân nào đóng góp thời gian và chia sẻ giá trị doanh nghiệp với Tavy, đều là ‘teammate’ của chúng tôi.</p>
            </div>
          </div>
        </div>
        <div class="section-content">
            <div class="row">
              <div class="col-xl-4">
                <div class="block-user">
                  <img src="{{ asset('images/page-about/section-03/im-01.jpg') }}" alt=""/>
                  <div class="name">Vy Huynh</div>
                  <div class="position">Account</div>
                  <p>Ở Tavy, ngoài đội ngũ nhân viên yêu công việc, tâm huyết và duy mỹ; những nghệ nhân lành nghề, những người bạn kiến `trúc sư, những người thợ mỏ….hay bất cứ cá nhân nào đóng góp thời gian và chia sẻ giá trị doanh nghiệp với Tavy, đều là ‘teammate’ của chúng tôi.</p>
                </div>
              </div>
              <div class="col-xl-4">
                <div class="block-user">
                  <img src="{{ asset('images/page-about/section-03/im-01.jpg') }}" alt=""/>
                  <div class="name">Vy Huynh</div>
                  <div class="position">Account</div>
                  <p>Ở Tavy, ngoài đội ngũ nhân viên yêu công việc, tâm huyết và duy mỹ; những nghệ nhân lành nghề, những người bạn kiến `trúc sư, những người thợ mỏ….hay bất cứ cá nhân nào đóng góp thời gian và chia sẻ giá trị doanh nghiệp với Tavy, đều là ‘teammate’ của chúng tôi.</p>
                </div>
              </div>
              <div class="col-xl-4">
                <div class="block-user">
                  <img src="{{ asset('images/page-about/section-03/im-01.jpg') }}" alt=""/>
                  <div class="name">Vy Huynh</div>
                  <div class="position">Account</div>
                  <p>Ở Tavy, ngoài đội ngũ nhân viên yêu công việc, tâm huyết và duy mỹ; những nghệ nhân lành nghề, những người bạn kiến `trúc sư, những người thợ mỏ….hay bất cứ cá nhân nào đóng góp thời gian và chia sẻ giá trị doanh nghiệp với Tavy, đều là ‘teammate’ của chúng tôi.</p>
                </div>
              </div>
              <div class="col-xl-12">
                <blockquote>“Chúng tôi hi vọng tinh thần yêu thiên nhiên và trân quý giá trị thủ công truyền đến bạn!”</blockquote>
              </div>
            </div>
          </div>
      </div>
    </section>
  </div>
@endsection
