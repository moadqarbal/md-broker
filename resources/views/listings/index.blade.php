<x-layout>
    
    <!-- slider --> 
    @include('partials._sliders')

    <div class="popular-stores py-5" style="background-color: #F4F5F5;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="mb-0">المدن الأشهر</h2>
                    <hr class="small-gray-divider">
                    <p>
                        استكشف قائمة المدن التي تصدرت قائمة الإيجارات وعمليات الشراء في السوق العقاري. في هذا القسم، نقدم لك تحليلاً مفصلاً لأكثر المدن طلباً للكراء والشراء
                    </p>
                    <div class="stores-grp row">
                        <div class="col-md-2 col-6">
                            <a href="#">
                                <img src="https://via.placeholder.com/150" class="img-fluid rounded mb-3 shadow-sm" style="width: 150px; height: 130px;" alt="">
                            </a>
                        </div>
                        <div class="col-md-2 col-6">
                            <a href="#">
                                <img src="https://via.placeholder.com/150" class="img-fluid rounded mb-3 shadow-sm" style="width: 150px; height: 130px;" alt="">
                            </a>
                        </div>
                        <div class="col-md-2 col-6">
                            <a href="#">
                                <img src="https://via.placeholder.com/150" class="img-fluid rounded mb-3 shadow-sm" style="width: 150px; height: 130px;" alt="">
                            </a>
                        </div>
                        <div class="col-md-2 col-6">
                            <a href="#">
                                <img src="https://via.placeholder.com/150" class="img-fluid rounded mb-3 shadow-sm" style="width: 150px; height: 130px;" alt="">
                            </a>
                        </div>
                        <div class="col-md-2 col-6">
                            <a href="#">
                                <img src="https://via.placeholder.com/150" class="img-fluid rounded mb-3 shadow-sm" style="width: 150px; height: 130px;" alt="">
                            </a>
                        </div>
                        <div class="col-md-2 col-6">
                            <a href="#">
                                <img src="https://via.placeholder.com/150" class="img-fluid rounded mb-3 shadow-sm" style="width: 150px; height: 130px;" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="all-stores-btn text-center mt-4">
                        <a href="#" class="text-dark text-decoration-none fw-bolder">
                            كل المدن  
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-narrow-left"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M5 12l4 4" /><path d="M5 12l4 -4" /></svg>
                        </a>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
    
    <div class="today-copouns py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="mb-0">اكتشف العقارات الجديدة في المغرب</h2>
                    <hr class="small-gray-divider">
                    <p>
                        هل تبحث عن منزل للإيجار أو حتى للشراء في المغرب؟ إليك أحدث العقارات التي تمت إضافتها حديثاً على موقعنا! نعرض لك مجموعة مميزة من البيوت والمنازل التي تلبي جميع احتياجاتك وتطلعاتك. سواء كنت تبحث عن عقار في المدينة أو في الأرياف، لدينا ما يناسب ذوقك وميزانيتك. استعرض أحدث العروض اليوم وابدأ رحلتك نحو العثور على منزل أحلامك بكل سهولة ويسر.
                    </p>
                </div>
            </div>
            <div class="row mt-3">
                
                <div class="col-md-12">
                    <div class="card mb-3 border border-0 shadow">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <a href="#">
                                    <img src="{{ asset('images/img-card.jpg') }}" class="img-fluid rounded-start w-100 h-100" style="height: 130px;" alt="...">
                                </a>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <a href="#" class="text-decoration-none text-dark">
                                        <h5 class="card-title fw-bolder mb-3">شقة للإيجار بمساحة 100 متر مربع</h5>
                                    </a>
                                    <p class="card-text">شقة للإيجار بمساحة 100 متر مربع، تضم 3 غرف نوم، 2 حمام، ومطبخ مجهز، تقع في موقع ممتاز مع سهولة الوصول إلى الخدمات والمرافق.</p>
                                    <!-- Modified Row -->
                                    <div class="row">
                                        <div class="col-md-6 d-flex flex-column text-center text-md-start justify-content-end mb-3 mb-md-0">
                                            <div class="d-flex justify-content-center justify-content-md-start align-items-start">
                                                <span class="badge text-white p-2 m-0" style="background-color: #4C246E;">الثمن 200 درهم في اليوم</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="text-center text-md-end">
                                                <a href="#" class="btn text-white rounded-pill px-4 py-2 mb-3" style="background-color: #4C246E;">
                                                    عرض التفاصيل
                                                </a>
                                            </div>
                                            <p class="card-text text-center text-md-end"><small class="text-body-secondary">آخر تحديث قبل 3 دقائق</small></p>
                                        </div>
                                    </div>
                                    <!-- End Modified Row -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-12">
                    <div class="card mb-3 border border-0 shadow">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <a href="#">
                                    <img src="{{ asset('images/img-card.jpg') }}" class="img-fluid rounded-start w-100 h-100" style="height: 130px;" alt="...">
                                </a>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <a href="#" class="text-decoration-none text-dark">
                                        <h5 class="card-title fw-bolder mb-3">شقة للإيجار بمساحة 100 متر مربع</h5>
                                    </a>
                                    <p class="card-text">شقة للإيجار بمساحة 100 متر مربع، تضم 3 غرف نوم، 2 حمام، ومطبخ مجهز، تقع في موقع ممتاز مع سهولة الوصول إلى الخدمات والمرافق.</p>
                                    <!-- Modified Row -->
                                    <div class="row">
                                        <div class="col-md-6 d-flex flex-column text-center text-md-start justify-content-end mb-3 mb-md-0">
                                            <div class="d-flex justify-content-center justify-content-md-start align-items-start">
                                                <span class="badge text-white p-2 m-0" style="background-color: #4C246E;">الثمن 200 درهم في اليوم</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="text-center text-md-end">
                                                <a href="#" class="btn text-white rounded-pill px-4 py-2 mb-3" style="background-color: #4C246E;">
                                                    عرض التفاصيل
                                                </a>
                                            </div>
                                            <p class="card-text text-center text-md-end"><small class="text-body-secondary">آخر تحديث قبل 3 دقائق</small></p>
                                        </div>
                                    </div>
                                    <!-- End Modified Row -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card mb-3 border border-0 shadow">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <a href="#">
                                    <img src="{{ asset('images/img-card.jpg') }}" class="img-fluid rounded-start w-100 h-100" style="height: 130px;" alt="...">
                                </a>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <a href="#" class="text-decoration-none text-dark">
                                        <h5 class="card-title fw-bolder mb-3">شقة للإيجار بمساحة 100 متر مربع</h5>
                                    </a>
                                    <p class="card-text">شقة للإيجار بمساحة 100 متر مربع، تضم 3 غرف نوم، 2 حمام، ومطبخ مجهز، تقع في موقع ممتاز مع سهولة الوصول إلى الخدمات والمرافق.</p>
                                    <!-- Modified Row -->
                                    <div class="row">
                                        <div class="col-md-6 d-flex flex-column text-center text-md-start justify-content-end mb-3 mb-md-0">
                                            <div class="d-flex justify-content-center justify-content-md-start align-items-start">
                                                <span class="badge text-white p-2 m-0" style="background-color: #4C246E;">الثمن 200 درهم في اليوم</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="text-center text-md-end">
                                                <a href="#" class="btn text-white rounded-pill px-4 py-2 mb-3" style="background-color: #4C246E;">
                                                    عرض التفاصيل
                                                </a>
                                            </div>
                                            <p class="card-text text-center text-md-end"><small class="text-body-secondary">آخر تحديث قبل 3 دقائق</small></p>
                                        </div>
                                    </div>
                                    <!-- End Modified Row -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card mb-3 border border-0 shadow">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <a href="#">
                                    <img src="{{ asset('images/img-card.jpg') }}" class="img-fluid rounded-start w-100 h-100" style="height: 130px;" alt="...">
                                </a>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <a href="#" class="text-decoration-none text-dark">
                                        <h5 class="card-title fw-bolder mb-3">شقة للإيجار بمساحة 100 متر مربع</h5>
                                    </a>
                                    <p class="card-text">شقة للإيجار بمساحة 100 متر مربع، تضم 3 غرف نوم، 2 حمام، ومطبخ مجهز، تقع في موقع ممتاز مع سهولة الوصول إلى الخدمات والمرافق.</p>
                                    <!-- Modified Row -->
                                    <div class="row">
                                        <div class="col-md-6 d-flex flex-column text-center text-md-start justify-content-end mb-3 mb-md-0">
                                            <div class="d-flex justify-content-center justify-content-md-start align-items-start">
                                                <span class="badge text-white p-2 m-0" style="background-color: #4C246E;">الثمن 200 درهم في اليوم</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="text-center text-md-end">
                                                <a href="#" class="btn text-white rounded-pill px-4 py-2 mb-3" style="background-color: #4C246E;">
                                                    عرض التفاصيل
                                                </a>
                                            </div>
                                            <p class="card-text text-center text-md-end"><small class="text-body-secondary">آخر تحديث قبل 3 دقائق</small></p>
                                        </div>
                                    </div>
                                    <!-- End Modified Row -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card mb-3 border border-0 shadow">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <a href="#">
                                    <img src="{{ asset('images/img-card.jpg') }}" class="img-fluid rounded-start w-100 h-100" style="height: 130px;" alt="...">
                                </a>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <a href="#" class="text-decoration-none text-dark">
                                        <h5 class="card-title fw-bolder mb-3">شقة للإيجار بمساحة 100 متر مربع</h5>
                                    </a>
                                    <p class="card-text">شقة للإيجار بمساحة 100 متر مربع، تضم 3 غرف نوم، 2 حمام، ومطبخ مجهز، تقع في موقع ممتاز مع سهولة الوصول إلى الخدمات والمرافق.</p>
                                    <!-- Modified Row -->
                                    <div class="row">
                                        <div class="col-md-6 d-flex flex-column text-center text-md-start justify-content-end mb-3 mb-md-0">
                                            <div class="d-flex justify-content-center justify-content-md-start align-items-start">
                                                <span class="badge text-white p-2 m-0" style="background-color: #4C246E;">الثمن 200 درهم في اليوم</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="text-center text-md-end">
                                                <a href="#" class="btn text-white rounded-pill px-4 py-2 mb-3" style="background-color: #4C246E;">
                                                    عرض التفاصيل
                                                </a>
                                            </div>
                                            <p class="card-text text-center text-md-end"><small class="text-body-secondary">آخر تحديث قبل 3 دقائق</small></p>
                                        </div>
                                    </div>
                                    <!-- End Modified Row -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card mb-3 border border-0 shadow">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <a href="#">
                                    <img src="{{ asset('images/img-card.jpg') }}" class="img-fluid rounded-start w-100 h-100" style="height: 130px;" alt="...">
                                </a>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <a href="#" class="text-decoration-none text-dark">
                                        <h5 class="card-title fw-bolder mb-3">شقة للإيجار بمساحة 100 متر مربع</h5>
                                    </a>
                                    <p class="card-text">شقة للإيجار بمساحة 100 متر مربع، تضم 3 غرف نوم، 2 حمام، ومطبخ مجهز، تقع في موقع ممتاز مع سهولة الوصول إلى الخدمات والمرافق.</p>
                                    <!-- Modified Row -->
                                    <div class="row">
                                        <div class="col-md-6 d-flex flex-column text-center text-md-start justify-content-end mb-3 mb-md-0">
                                            <div class="d-flex justify-content-center justify-content-md-start align-items-start">
                                                <span class="badge text-white p-2 m-0" style="background-color: #4C246E;">الثمن 200 درهم في اليوم</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="text-center text-md-end">
                                                <a href="#" class="btn text-white rounded-pill px-4 py-2 mb-3" style="background-color: #4C246E;">
                                                    عرض التفاصيل
                                                </a>
                                            </div>
                                            <p class="card-text text-center text-md-end"><small class="text-body-secondary">آخر تحديث قبل 3 دقائق</small></p>
                                        </div>
                                    </div>
                                    <!-- End Modified Row -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card mb-3 border border-0 shadow">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <a href="#">
                                    <img src="{{ asset('images/img-card.jpg') }}" class="img-fluid rounded-start w-100 h-100" style="height: 130px;" alt="...">
                                </a>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <a href="#" class="text-decoration-none text-dark">
                                        <h5 class="card-title fw-bolder mb-3">شقة للإيجار بمساحة 100 متر مربع</h5>
                                    </a>
                                    <p class="card-text">شقة للإيجار بمساحة 100 متر مربع، تضم 3 غرف نوم، 2 حمام، ومطبخ مجهز، تقع في موقع ممتاز مع سهولة الوصول إلى الخدمات والمرافق.</p>
                                    <!-- Modified Row -->
                                    <div class="row">
                                        <div class="col-md-6 d-flex flex-column text-center text-md-start justify-content-end mb-3 mb-md-0">
                                            <div class="d-flex justify-content-center justify-content-md-start align-items-start">
                                                <span class="badge text-white p-2 m-0" style="background-color: #4C246E;">الثمن 200 درهم في اليوم</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="text-center text-md-end">
                                                <a href="#" class="btn text-white rounded-pill px-4 py-2 mb-3" style="background-color: #4C246E;">
                                                    عرض التفاصيل
                                                </a>
                                            </div>
                                            <p class="card-text text-center text-md-end"><small class="text-body-secondary">آخر تحديث قبل 3 دقائق</small></p>
                                        </div>
                                    </div>
                                    <!-- End Modified Row -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
    
            <div class="row">
                <div class="col">
                    <div class="all-copouns-btn text-center mt-4">
                        <a href="#" class="text-dark text-decoration-none fw-bolder">
                            عرض الكل
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-narrow-left"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M5 12l4 4" /><path d="M5 12l4 -4" /></svg>
                        </a>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    
    <div class="newsletter py-5" style="background-color: #F4F5F5;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-2">
                            <svg xmlns="http://www.w3.org/2000/svg"  width="70"  height="70"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-bell-ringing"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path d="M9 17v1a3 3 0 0 0 6 0v-1" /><path d="M21 6.727a11.05 11.05 0 0 0 -2.794 -3.727" /><path d="M3 6.727a11.05 11.05 0 0 1 2.792 -3.727" /></svg>
                        </div>
                        <div class="col-md-10 newsletter-text">
                            <h4>اشترك الآن</h4>
                            <p>
                                انضم لاكثر من 30,000 مشترك وتوصل بأحدث العروض 
                            </p>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-6">
                    <form action="#" class="newsletter-form mt-4">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control rounded-pill py-2 px-4" 
                                   style="border: 1px solid #e5e5e5; outline: none;" 
                                   placeholder="&#x2709; أدخل بريدك الإلكتروني" 
                                   aria-label="Email"
                                   onfocus="this.style.borderColor='#4C246E';" 
                                   onblur="this.style.borderColor='#e5e5e5';">
                            <button class="btn rounded-pill ms-2 text-white py-2 px-4" style="background-color: #4C246E;">اشترك</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    
    <div class="about-short py-5">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h3 class="mb-0 fw-bolder">لماذا ماروكر أسهل منصة للكراء والشراء </h3>
                    <hr class="small-gray-divider">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p> مرحبًا بك في ماروكر، المنصة المثالية لشراء وكراء العقارات بكل سهولة ويسر! ماروكر يقدم لك تجربة استثنائية في البحث عن المنزل المثالي أو المساحة التجارية التي تحتاجها. بفضل واجهتها البسيطة والودية، يمكنك تصفح العديد من الخيارات المتاحة بسرعة وفعالية. نحن نحرص على تقديم معلومات دقيقة وشاملة حول كل عقار، مما يسهل عليك اتخاذ القرار المناسب بناءً على احتياجاتك وتفضيلاتك الشخصية. </p>
                    <p> في عالمنا اليوم، يصبح العثور على العقار المثالي مهمة معقدة بسبب تعدد الخيارات والبحث المستمر. هنا يأتي دور ماروكر ليبسط لك العملية ويجعلها أكثر سلاسة. مع نظام البحث المتقدم والتصفية، يمكنك العثور بسرعة على العقارات التي تتناسب مع ميزانيتك وموقعك المفضل. كما نقدم لك أيضًا معلومات حول الأسعار، المرافق، والموقع الجغرافي لتتمكن من اتخاذ قرارات مستنيرة. فريق ماروكر ملتزم بتقديم أفضل خدمة عملاء لدعمك في كل خطوة من خطوات عملية الشراء أو الكراء. </p>
                </div>
                <div class="col-md-6">
                    <p> لماذا تختار ماروكر؟ لأننا نقدم لك منصة متكاملة تسهّل عليك كل جوانب عملية شراء وكراء العقارات. سواء كنت تبحث عن منزل جديد أو مكتب تجاري، فإن ماروكر هو الحل الأمثل لك. نحن نعمل على توفير قائمة محدثة من الخيارات المتاحة، ونحرص على تقديم جميع التفاصيل التي تحتاجها لتجربة سلسة وناجحة. استمتع بالبحث عن عقارك الجديد مع ماروكر، حيث نقدم لك كل ما تحتاجه في مكان واحد، مما يوفر عليك الوقت والجهد. </p>
                    <p> كما أن ماروكر يوفر لك خدمات إضافية تساعدك على تحقيق أهدافك بسرعة. مع أدواتنا المتقدمة وميزة التصفية، يمكنك العثور على ما تبحث عنه بدقة. تابع عقاراتك المفضلة واحصل على إشعارات حول التحديثات المهمة. ماروكر هو شريكك المثالي في رحلة البحث عن العقار، ويضمن لك تجربة مريحة وفعالة، لتكون دائمًا على اطلاع بأحدث العروض وأفضل الفرص المتاحة. </p>
                </div>
            </div>
        </div>
    </div>
</x-layout>