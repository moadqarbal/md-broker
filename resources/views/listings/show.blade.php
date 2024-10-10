<x-layout>
    
    <div class="show-single">
        <div class="container">

            <main class="single-container p-4 mt-4 mb-5 border border-light rounded">
                <div class="row gallery mt-4">
                    <div class="col-md-12">
                        <div class="main-slider bg-success mb-5 rounded" style="overflow: hidden;">
                            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <a data-fancybox="gallery" href="{{ asset('storage/img1.jpg') }}">
                                            <img src="{{ asset('storage/img1.jpg') }}" style="height: 500px; border-radius: 5px;" class="d-block w-100" alt="...">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a data-fancybox="gallery" href="{{ asset('storage/img2.jpg') }}">
                                            <img src="{{ asset('storage/img2.jpg') }}" style="height: 500px; border-radius: 5px;" class="d-block w-100" alt="...">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a data-fancybox="gallery" href="https://via.placeholder.com/800x400">
                                            <img src="https://via.placeholder.com/800x400" style="height: 500px; border-radius: 5px;" class="d-block w-100" alt="...">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a data-fancybox="gallery" href="https://via.placeholder.com/800x400">
                                            <img src="https://via.placeholder.com/800x400" style="height: 500px; border-radius: 5px;" class="d-block w-100" alt="...">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a data-fancybox="gallery" href="https://via.placeholder.com/800x400">
                                            <img src="https://via.placeholder.com/800x400" style="height: 500px; border-radius: 5px;" class="d-block w-100" alt="...">
                                        </a>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="listing-title mb-3">
                            <h1 class="fs-2 fw-semibold">شقة للكراء 70 متر </h1>
                            <span class="listing-location me-4">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-map-pin"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /><path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" /></svg>
                                الدارالبيضاء 
                            </span>
                            <span class="listing-date">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-clock"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" /><path d="M12 7v5l3 3" /></svg>
                                 حوالي 5 أيام 
                            </span>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="listing-price text-center text-md-end mb-3">
                            <h3 class="fs-4 fw-semibold badge bg-purple text-white p-2">3000 درهم</h3>
                        </div>
                    </div>
                </div>

                <hr style="border-color: #E7E7E8;" class="my-4">

                <div class="row">
                    <div class="col-md-6">
                        <div class="listing-user mb-3 d-flex align-items-center">
                            <img src="{{ asset('storage/img1.jpg') }}" style="width: 50px; height: 50px; border-radius: 50%" alt="">
                            <div class="ms-3">
                                <h5 class="fs-6 fw-semibold mb-1">LUXURIOUS SUITES HO</h5>
                                <span class="badge bg-purple"> البائع</span>
                            </div>
                        </div>                        
                    </div>
                    
                    <div class="col-md-6">
                        <div class="listing-user mb-3 mt-2 d-flex align-items-center justify-content-end gap-2 flex-wrap">
                            <!-- WhatsApp Link -->
                            <a href="https://api.whatsapp.com/send?phone=212617427555" class="user-wtsp d-flex align-items-center justify-content-center text-white bg-success rounded-circle" style="width: 40px; height: 40px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-whatsapp">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                                    <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
                                </svg>
                            </a>
                            
                            <!-- Phone Link -->
                            <a href="tel:+212617427555" class="user-phn text-decoration-none d-flex align-items-center justify-content-center text-white bg-purple rounded-pill py-2 px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-phone">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                                </svg>
                                إتصل من هنا
                            </a>
                        </div>                        
                                             
                    </div>
                </div>

                <hr style="border-color: #E7E7E8;" class="my-4">

                <div class="row">
                    <div class="col-md-4">
                        <div class="person-icon text-center d-flex flex-column align-items-center justify-content-center">
                            <div class="bg-light rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                </svg>
                            </div>
                            <h5 class="mt-2 fw-semibold">4</h5>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="person-icon text-center d-flex flex-column align-items-center justify-content-center">
                            <div class="bg-light rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-home">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                </svg>
                            </div>
                            <h5 class="mt-2 fw-semibold">2</h5>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="person-icon text-center d-flex flex-column align-items-center justify-content-center">
                            <div class="bg-light rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-building-skyscraper">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M3 21l18 0" />
                                    <path d="M5 21v-14l8 -4v18" />
                                    <path d="M19 21v-10l-6 -4" />
                                    <path d="M9 9l0 .01" />
                                    <path d="M9 12l0 .01" />
                                    <path d="M9 15l0 .01" />
                                    <path d="M9 18l0 .01" />
                                </svg>
                            </div>
                            <h5 class="mt-2 fw-semibold">شقة</h5>
                        </div>
                    </div>
                </div>

                <hr style="border-color: #E7E7E8;" class="my-4">

                <div class="row description">
                    <div class="col-md-12">
                        <div class="listing-description">
                            <h3 class="fw-bold mb-3"> الوصف</h3>
                            <p>
                                أهلاً بكم في موقعنا. نحن متواجدون في مكان متين ومناسب لك جداً للشراء والاستخدام من خلال خدماتنا المتكاملة والمتوفرة على مستوى المنطقة. نحن نعرف بأن موقعنا هو موقع متكامل ويتمكن من توفير خدمات متنوعة وأفضل العروض للمستهلكين. للحصول على المزيد من المعلومات والاستخدام من خلال مو
                            </p>
                        </div>                        
                    </div>
                </div>

                <hr style="border-color: #E7E7E8;" class="my-4">

                <div class="row equipment">
                    <div class="col-md-12">
                        <div class="listing-equipment">
                            <h3 class="fw-bold mb-3"> معدات</h3>
                        </div>                        
                    </div>

                    <div class="col-md-2">
                        <div class="person-icon text-center d-flex flex-column align-items-center justify-content-center mb-3">
                            <div class="bg-light rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-man"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 16v5" /><path d="M14 16v5" /><path d="M9 9h6l-1 7h-4z" /><path d="M5 11c1.333 -1.333 2.667 -2 4 -2" /><path d="M19 11c-1.333 -1.333 -2.667 -2 -4 -2" /><path d="M12 4m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /></svg>
                            </div>
                            <h6 class="mt-2 fw-semibold">حارس العمارة</h6>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="person-icon text-center d-flex flex-column align-items-center justify-content-center mb-3">
                            <div class="bg-light rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-fence"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 12v4h16v-4z" /><path d="M6 16v4h4v-4m0 -4v-6l-2 -2l-2 2v6" /><path d="M14 16v4h4v-4m0 -4v-6l-2 -2l-2 2v6" /></svg>
                            </div>
                            <h6 class="mt-2 fw-semibold">شرفة</h6>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="person-icon text-center d-flex flex-column align-items-center justify-content-center mb-3">
                            <div class="bg-light rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-parking"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 5a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-14z" /><path d="M10 16v-8h2.667c.736 0 1.333 .895 1.333 2s-.597 2 -1.333 2h-2.667" /></svg>
                            </div>
                            <h6 class="mt-2 fw-semibold">موقف سيارة</h6>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="person-icon text-center d-flex flex-column align-items-center justify-content-center mb-3">
                            <div class="bg-light rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-elevator"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 4m0 1a1 1 0 0 1 1 -1h12a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-12a1 1 0 0 1 -1 -1z" /><path d="M10 10l2 -2l2 2" /><path d="M10 14l2 2l2 -2" /></svg>
                            </div>
                            <h6 class="mt-2 fw-semibold">مصعد</h6>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="person-icon text-center d-flex flex-column align-items-center justify-content-center mb-3">
                            <div class="bg-light rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-snowflake"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 4l2 1l2 -1" /><path d="M12 2v6.5l3 1.72" /><path d="M17.928 6.268l.134 2.232l1.866 1.232" /><path d="M20.66 7l-5.629 3.25l.01 3.458" /><path d="M19.928 14.268l-1.866 1.232l-.134 2.232" /><path d="M20.66 17l-5.629 -3.25l-2.99 1.738" /><path d="M14 20l-2 -1l-2 1" /><path d="M12 22v-6.5l-3 -1.72" /><path d="M6.072 17.732l-.134 -2.232l-1.866 -1.232" /><path d="M3.34 17l5.629 -3.25l-.01 -3.458" /><path d="M4.072 9.732l1.866 -1.232l.134 -2.232" /><path d="M3.34 7l5.629 3.25l2.99 -1.738" /></svg>
                            </div>
                            <h6 class="mt-2 fw-semibold">تكييف</h6>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="person-icon text-center d-flex flex-column align-items-center justify-content-center mb-3">
                            <div class="bg-light rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-home-shield"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 21v-6a2 2 0 0 1 2 -2h1.341" /><path d="M19.682 10.682l-7.682 -7.682l-9 9h2v7a2 2 0 0 0 2 2h5" /><path d="M22 16c0 4 -2.5 6 -3.5 6s-3.5 -2 -3.5 -6c1 0 2.5 -.5 3.5 -1.5c1 1 2.5 1.5 3.5 1.5z" /></svg>
                            </div>
                            <h6 class="mt-2 fw-semibold">مراقبة ومحمية</h6>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="person-icon text-center d-flex flex-column align-items-center justify-content-center mb-3">
                            <div class="bg-light rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-microwave"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 6m0 1a1 1 0 0 1 1 -1h16a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-16a1 1 0 0 1 -1 -1z" /><path d="M15 6v12" /><path d="M18 12h.01" /><path d="M18 15h.01" /><path d="M18 9h.01" /><path d="M6.5 10.5c1 -.667 1.5 -.667 2.5 0c.833 .347 1.667 .926 2.5 0" /><path d="M6.5 13.5c1 -.667 1.5 -.667 2.5 0c.833 .347 1.667 .926 2.5 0" /></svg>
                            </div>
                            <h6 class="mt-2 fw-semibold">مطبخ مجهز</h6>
                        </div>
                    </div>
                </div>

                <hr style="border-color: #E7E7E8;" class="my-4">

                <div class="row adress-map">
                    <div class="col-md-12">
                        <div class="listing-map">
                            <h3 class="fw-bold mb-3"> عنوان</h3>
                            <p>
                                عين الشق
                            </p>
                            <iframe class="mt-4 w-100" style="height: 450px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6651.327204939282!2d-7.575812190771086!3d33.53613082163289!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda6330036057389%3A0xcbae98b1e28f759a!2z2YXZhtiq2LLZhyDYs9io2KfYqtip!5e0!3m2!1sen!2sma!4v1725353316419!5m2!1sen!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>                        
                    </div>
                </div>

                <hr style="border-color: #E7E7E8;" class="my-4">

                <div class="row mt-3">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <div class="admin-private-phn">
                            <span class="fw-semibold">الهاتف :</span> <a href="tel:+212654578796" class="text-purple">0654578796</a>
                        </div>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="admin-private-adress">
                            <span class="fw-semibold">عنوان</span> : حي الأمان زنقة 7 رقم الدار 5
                        </div>
                    </div>
                </div>
                
            </main>
            
            

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
    
    
</x-layout>