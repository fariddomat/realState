@extends('layouts.site')

@section('content')
<div id="home" class="hero flex">
    <div class="hero-content">
      <h1>
        <span>ابحث</span>

        <span>عن المنزل المثالي</span>
        <span>الذي تريده ..!</span>
      </h1>
      <p>
        نضمن ان يقدم لك موقعنا تجربة مميزة بأسعار منافسة، أولويتنا هي راحة
        العملاء.
      </p>
      <div class="stats flex">
        <div>
          <i class="fa-solid fa-plus"></i>
          <span class="counter" data-target="300">0</span>

          <div class="flex">
            <p>عميل</p>
            <p>سعيد</p>
          </div>
        </div>
        <div>
          <i class="fa-solid fa-plus"></i>
          <span class="counter" data-target="260">0</span>

          <div class="flex">
            <p>عقار</p>
            <p>مميز</p>
          </div>
        </div>
        <div>
          <i class="fa-solid fa-plus"></i>
          <span class="counter" data-target="10">0</span>

          <div class="flex">
            <p>وكيل</p>
          </div>
        </div>
      </div>
    </div>
    <div class="hero-img">
      <img src="./assets/images/2.png" alt="house" />
    </div>
    <div class="bar">
      <ul class="bar-list flex">
        <li>الجميع</li>
        <li class="active">للبيع</li>
        <li>للآجار</li>
      </ul>
      <div class="bar-inputs flex">
        <div class="input-wrapper">
          <input type="text" placeholder="جميع المناطق" />
          <div class="control">
            <i class="fa-solid fa-chevron-up"></i>
            <i class="fa-solid fa-chevron-down"></i>
          </div>
        </div>
        <div class="input-wrapper">
          <input class="wdth" type="text" placeholder=" النوع" />
          <div class="control">
            <i class="fa-solid fa-chevron-down"></i>
          </div>
        </div>
        <div class="input-wrapper">
          <input class="wdth" type="text" placeholder=" عدد الغرف" />
          <div class="control">
            <i class="fa-solid fa-chevron-down"></i>
          </div>
        </div>
        <button class="search-btn">بحث</button>
      </div>
    </div>
  </div>
 <!-- start of main -->
 <main class="bg">
    <section id="overview" class="overview container flex">
      <div class="overview-text">
        <h3 class="title">نبذة عامة</h3>
        <p class="desc">
          موقع الوساطة العقارية الذكية هو موقع تم ايجاده لخدمة العملاء وتسهيل
          عملية الشراء و البيع، من خلال موقعنا تستطيع العثور على منزلك المناسب
          بالسعر الأفضل، كما تستطيع عرض عقاراتك للبيع مقابل عمولة بسيطة، نضمن
          لك جودة الخدمة وسرعتها
        </p>
      </div>
      <div class="overview-gallery flex">
        <div class="box">
          <img src="./assets/images/first-section2.png" alt="#" />
          <img src="./assets/images/first-section1.png" alt="#" />
        </div>
        <div class="box">
          <img src="./assets/images/first-section3.png" alt="houses" />
        </div>
        <img
          class="first circle"
          src="./assets/images/Ellipse 19.png"
          alt="circle1"
        />
        <img
          class="second circle"
          src="./assets/images/Ellipse 19.png"
          alt="circle1"
        />
        <img
          class="third circle"
          src="./assets/images/Ellipse 19.png"
          alt="circle1"
        />
      </div>
    </section>

    <!-- start of the second section -->
    <section class="cards-slider-section container">
      <div class="section-header">
        <h3 class="title">التوصيات</h3>
        <p class="desc">
          نقدم لكم أفضل البيوت بأرخص الأسعار بناءً على تجارب عملائنا و تحليلنا
          للسوق.
        </p>
      </div>
      <div class="swiper-container">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="card">
                <div class="card-img">
                  <img
                    src="assets/images/card3.png"
                    alt="Two-storey house"
                  />
                  <i class="fa-regular fa-heart heart-icon"></i>
                  <span>للبيع</span>
                </div>
                <div class="card-content">
                  <p>950,000,00 ل.س</p>
                  <h4>نظام فيلا، جاهز للسكن مباشرة</h4>
                  <div class="card-location flex">
                    <span>حمص، شارع عكرمة الجديدة</span>
                    <img
                      src="./assets/images/locationIcon.png"
                      alt="location dot"
                    />
                  </div>
                  <div class="details flex">
                    <div class="flex">
                      <img
                        src="assets/images/Shower.png"
                        alt="shower icon"
                      />
                      <span>1</span>
                    </div>
                    <div class="flex">
                      <img src="./assets/images/bed.png" alt="bed icon" />
                      <span>2</span>
                    </div>
                  </div>
                  <div class="area flex">
                    <img src="./assets/images/triangle.png" alt="ruler" />
                    <span>120 متر مربع</span>
                  </div>
                  <div class="card-btn flex">
                    <a href="./details.html">التفاصيل</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card">
                <div class="card-img">
                  <img
                    src="assets/images/card2.png"
                    alt="Two-storey house"
                  />
                  <i class="fa-regular fa-heart heart-icon"></i>
                  <span>للبيع</span>
                </div>
                <div class="card-content">
                  <p>450,000,00 ل.س</p>
                  <h4>شقة ط1، سوبر ديلوكس</h4>
                  <div class="card-location flex">
                    <span>حمص، شارع الأرمن الجنوبي</span>
                    <img
                      src="./assets/images/locationIcon.png"
                      alt="location dot"
                    />
                  </div>
                  <div class="details flex">
                    <div class="flex">
                      <img
                        src="./assets/images/Shower.png"
                        alt="shower icon"
                      />
                      <span>1</span>
                    </div>
                    <div class="flex">
                      <img src="./assets/images/bed.png" alt="bed icon" />
                      <span>3</span>
                    </div>
                  </div>
                  <div class="area flex">
                    <img src="./assets/images/triangle.png" alt="ruler" />
                    <span>110 متر مربع</span>
                  </div>
                  <div class="card-btn flex">
                    <a href="./details.html">التفاصيل</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="card">
                <div class="card-img">
                  <img
                    src="assets/images/card1.png"
                    alt="Two-storey house"
                  />
                  <i class="fa-regular fa-heart heart-icon"></i>
                  <span>للبيع</span>
                </div>
                <div class="card-content">
                  <p>900,000,00 ل.س</p>
                  <h4>منزل طابقين مع طاقة شمسية</h4>
                  <div class="card-location flex">
                    <span>حمص، الوعر </span>
                    <img
                      src="./assets/images/locationIcon.png"
                      alt="location dot"
                    />
                  </div>
                  <div class="details flex">
                    <div class="flex">
                      <img
                        src="./assets/images/Shower.png"
                        alt="shower icon"
                      />
                      <span>2</span>
                    </div>
                    <div class="flex">
                      <img src="./assets/images/bed.png" alt="bed icon" />
                      <span>6</span>
                    </div>
                  </div>
                  <div class="area flex">
                    <img src="./assets/images/triangle.png" alt="ruler" />
                    <span>240 متر مربع</span>
                  </div>
                  <div class="card-btn flex">
                    <a href="./details.html">التفاصيل</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card">
                <div class="card-img">
                  <img
                    src="assets/images/card2.png"
                    alt="Two-storey house"
                  />
                  <i class="fa-regular fa-heart heart-icon"></i>
                  <span>للبيع</span>
                </div>
                <div class="card-content">
                  <p>900,000,00 ل.س</p>
                  <h4>منزل طابقين مع طاقة شمسية</h4>
                  <div class="card-location flex">
                    <span>حمص،الوعر</span>
                    <img
                      src="./assets/images/locationIcon.png"
                      alt="location dot"
                    />
                  </div>
                  <div class="details flex">
                    <div class="flex">
                      <img
                        src="./assets/images/Shower.png"
                        alt="shower icon"
                      />
                      <span>2</span>
                    </div>
                    <div class="flex">
                      <img src="./assets/images/bed.png" alt="bed icon" />
                      <span>6</span>
                    </div>
                  </div>
                  <div class="area flex">
                    <img src="./assets/images/triangle.png" alt="ruler" />
                    <span>240 متر مربع</span>
                  </div>
                  <div class="card-btn flex">
                    <a href="./details.html">التفاصيل</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card">
                <div class="card-img">
                  <img
                    src="assets/images/card1.png"
                    alt="Two-storey house"
                  />
                  <i class="fa-regular fa-heart heart-icon"></i>
                  <span>للبيع</span>
                </div>
                <div class="card-content">
                  <p>900,000,00 ل.س</p>
                  <h4>منزل طابقين مع طاقة شمسية</h4>
                  <div class="card-location flex">
                    <span>حمص،الوعر</span>
                    <img
                      src="./assets/images/locationIcon.png"
                      alt="location dot"
                    />
                  </div>
                  <div class="details flex">
                    <div class="flex">
                      <img
                        src="./assets/images/Shower.png"
                        alt="shower icon"
                      />
                      <span>2</span>
                    </div>
                    <div class="flex">
                      <img src="./assets/images/bed.png" alt="bed icon" />
                      <span>6</span>
                    </div>
                  </div>
                  <div class="area flex">
                    <img src="./assets/images/triangle.png" alt="ruler" />
                    <span>240 متر مربع</span>
                  </div>
                  <div class="card-btn flex">
                    <a href="./details.html">التفاصيل</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <div class="swiper-scrollbar"></div>
      </div>
      <div class="btn-box">
        <button class="btn-effect">المزيد</button>
      </div>
    </section>

    <!-- end of second section -->

    <!-- start of third section -->
    <section id="team" class="our-team container">
      <div class="section-header">
        <h3 class="title">قابل وكلائنا</h3>
        <p class="desc flex">
          <span>
            لقد قام فريقنا باختيار مجموعة من أفضل العقارات السكنية والتجارية
            من حيث البناء والسعر للشراء أو الإيجار.
          </span>
          <span> معًا سنجد منزل أحلامك...! </span>
        </p>
      </div>

      <div class="team-slider">
        <div class="slider-container">
          <div class="wrapper">
            <div class="team-item">
              <img src="./assets/images/teammember 2.png" alt="team-member" />
              <h5>ماريا ابراهيم</h5>
            </div>
            <div class="team-item">
              <img src="./assets/images/teammember 1.png" alt="team-member" />
              <h5>لمى محمد</h5>
            </div>
            <div class="team-item">
              <img src="./assets/images/teammember 3.png" alt="team-member" />
              <h5>رامز الأسود</h5>
            </div>
            <div class="team-item">
              <img src="./assets/images/teammember 1.png" alt="team-member" />
              <h5>لمى محمد</h5>
            </div>
            <div class="team-item">
              <img src="./assets/images/teammember 3.png" alt="team-member" />
              <h5>رامز الأسود</h5>
            </div>
            <div class="team-item">
              <img src="./assets/images/teammember 1.png" alt="team-member" />
              <h5>لمى محمد</h5>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end of third section -->

    <!-- start of fourth section -->
    <section id="services" class="container">
      <div class="section-header">
        <h3 class="title">خدماتنا</h3>
      </div>
      <div class="services flex">
        <div class="services-item flex">
          <div class="services-icon">
            <img src="./assets/images/Handshake.png" alt="hand-shake" />
          </div>
          <div class="services-text">
            <h5>خدمات الوكالة</h5>
            <p>
              تقدم شركة الوساطة العقارية الذكية خدمات الوكالة للملاك أو
              المستثمرين أو المؤسسات أو الشركات تحت شعار موحد السرعة والثقة في
              التعامل.
            </p>
          </div>
        </div>
        <div class="services-item flex">
          <div>
            <img src="./assets/images/Property Growth.png" alt="Property" />
          </div>
          <div class="services-text">
            <h5>إدارة الممتلكات</h5>
            <p>
              نحن نقدم حزمة الإدارة الكاملة، حيث يمكنك نقل ملكيتك إلى استثمار
              دون أي متاعب.
            </p>
          </div>
        </div>
        <div class="services-item flex">
          <div>
            <img
              src="./assets/images/Market Research.png"
              alt="market-research"
            />
          </div>
          <div class="services-text">
            <h5>أبحاث السوق</h5>
            <p>
              يقوم قسم أبحاث السوق في شركة الوساطة العقارية الذكية بمراقبة سوق
              العقارات عن كثب، والبقاء على اتصال بالظروف السائدة وتحديد
              الاتجاهات.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- end of fourth section -->
  </main>
  <!-- end of main -->

@endsection
