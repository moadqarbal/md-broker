<footer class="bg-white border-top" style="padding-top: 8rem; padding-bottom: 5rem;">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer-about">
                    <h4 class="fw-bolder pb-4">Maroker</h4>
                    <p>
                        ماروكر، المنصة المثالية لشراء وكراء العقارات بكل سهولة ويسر! ماروكر يقدم لك تجربة استثنائية في البحث عن المنزل المثالي أو المساحة التجارية التي تحتاجها.                    
                    </p>

                    <h4 class="fw-bolder pt-4 pb-1">تواصل</h4>
                    <p class="fw-bolder">
                        contact@maroker.com
                    </p>
                    
                    
                </div>
            </div>
            <div class="col-md-2">
                <div class="footer-important-links">
                    <h4 class="fw-bolder pb-4">روابط سريعة</h4>
                    <a href="#" class="d-block text-decoration-none text-dark mb-2">من نحن</a>
                    <a href="#" class="d-block text-decoration-none text-dark mb-2">الرئيسية</a>
                    <a href="#" class="d-block text-decoration-none text-dark mb-2">الأحكام والشروط</a>
                    <a href="#" class="d-block text-decoration-none text-dark mb-2">سياسة الخصوصة</a>
                    <a href="#" class="d-block text-decoration-none text-dark mb-2">اتصل بنا</a>
                    <a href="#" class="d-block text-decoration-none text-dark mb-2">روابط سريعة</a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="footer-category-links">
                    <h4 class="fw-bolder pb-4">اشهر الروابط</h4>
                    <a href="#" class="d-block text-decoration-none text-dark mb-2">من نحن</a>
                    <a href="#" class="d-block text-decoration-none text-dark mb-2">الرئيسية</a>
                    <a href="#" class="d-block text-decoration-none text-dark mb-2">الأحكام والشروط</a>
                    <a href="#" class="d-block text-decoration-none text-dark mb-2">سياسة الخصوصة</a>
                    <a href="#" class="d-block text-decoration-none text-dark mb-2">اتصل بنا</a>
                    <a href="#" class="d-block text-decoration-none text-dark mb-2">روابط سريعة</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer-subscribe text-end">
                    <h4 class="fw-bolder pb-4">تابعنا لمزيد من التحديثات</h4>
                    <a href="#" class="d-inline-block text-center" style="width: 50px; height: 50px; line-height: 50px; background-color: #4C246E; color: #F4F5F5; border-radius: 50%;">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-facebook"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" /></svg>
                    </a>
                    <a href="#" class="d-inline-block text-center" style="width: 50px; height: 50px; line-height: 50px; background-color: #4C246E; color: #F4F5F5; border-radius: 50%;">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4l11.733 16h4.267l-11.733 -16z" /><path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772" /></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
<footer class="copyright">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <p class="fs-6 fw-light text-dark">
                    كوبونات | جميع الحقوق محفوضة © 2024
                </p>
            </div>
        </div>
    </div>
</footer>




 <!-- jQuery -->
 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
 <!-- Select2 JS -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
 <!-- fancy -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>


 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 <!-- Your custom script -->
 <script>
    $(document).ready(function() {
        // Initialize Select2
        $('#city-select').select2({
            placeholder: 'Select a city',
            allowClear: true,
            width: '100%' // Ensure Select2 takes full width
        });

        // List of cities in Morocco
        const cities = [
            'الدار البيضاء', 'الرباط', 'فاس', 'طنجة', 'مراكش', 'أغادير', 'وجدة', 'تطوان',
            'الخريبݣة', 'الجديدة', 'القنيطرة', 'المحمدية', 'الناظور', 'سلا', 'بني ملال',
            'تازة', 'إفران', 'الرشيدية', 'الگلميم', 'العيون', 'الداخلة', 'ورزازات',
            'سطات', 'تارودانت', 'أزيلال', 'الحاجب', 'خميسات', 'آسفي', 'سيدي قاسم',
            'سيدي سليمان', 'ميدلت', 'أولاد تايمة', 'بركان', 'مكناس', 'سيدي إفني', 'تنغير'
        ];

        // Add cities to the select element
        cities.forEach(city => {
            $('#city-select').append(new Option(city, city));
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('[data-fancybox]').fancybox({
            loop: true, // Enables swiping through images in a loop
        });
    });
</script>

</body>
</html>