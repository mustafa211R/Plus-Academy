<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>منصة A+ - الرئيسية</title>
    
    <!-- الروابط -->
    <link href="package/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="webfonts/fontawesome-free-6.5.2-web/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="home.css">
    <link rel="icon" type="image/x-icon" href="logo.jpg">

</head>
<body class="min-h-screen font-cairo transition-all duration-300">

    <!-- الشريط العلوي -->
    <header  class="header-bar fixed top-0 left-0 right-0 z-50 py-3 px-6 flex justify-between items-center">
        <div class="flex items-center space-x-4 space-x-reverse">
            <!-- زر القائمة الجانبية -->
            <button id="menuBtn" class="menu-btn">
                <i class="fas fa-bars"></i>
            </button>
            
            <!-- زر حول المنصة -->
            <button id="aboutBtn" class="text-white hover:text-purple-200 transition-colors flex items-center gap-2">
                <i class="fas fa-info-circle text-lg"></i> حول
            </button>
        </div>

        <div class="flex items-center space-x-4 space-x-reverse">
            <!-- الإشعارات -->
            <div class="notification-badge">
                <i class="fas fa-bell text-white text-xl"></i>
                <span class="badge">3</span>
            </div>
            
            <!-- Toggle Switch -->
            <label class="switch">
                <input type="checkbox" id="themeSwitch">
                <span class="slider round"></span>
            </label>
        </div>
    </header>

    <!-- القائمة الجانبية -->
    <div id="sidebarOverlay" class="sidebar-overlay"></div>
    
    <aside id="sidebar" class="sidebar">
        <!-- قسم البروفايل -->
        <div class="profile-section">
            <img src="logo.jpg" alt="صورة البروفايل" class="profile-image" id="profileImage">
            <div class="profile-name" id="userName">أحمد محمد</div>
            <div class="profile-role" id="userRole">طالب</div>
        </div>
        
        <!-- عناصر القائمة -->
        <a href="#" class="menu-item active" data-section="profile">
            <i class="fas fa-user"></i>
            <span>الملف الشخصي</span>
        </a>
        
        <a href="#" class="menu-item" data-section="settings">
            <i class="fas fa-cog"></i>
            <span>ضبط الإعدادات</span>
        </a>
        
        <a href="#" class="menu-item" data-section="terms">
            <i class="fas fa-file-contract"></i>
            <span>الشروط والأحكام</span>
        </a>
        
        <a href="#" class="menu-item" data-section="privacy">
            <i class="fas fa-shield-alt"></i>
            <span>الخصوصية</span>
        </a>
        
        <a href="#" class="menu-item" data-section="courses">
            <i class="fas fa-graduation-cap"></i>
            <span>كورساتي</span>
        </a>
        
        <a href="#" class="menu-item" data-section="challenges">
            <i class="fas fa-trophy"></i>
            <span>تحدياتي</span>
        </a>
        
        <a href="#" class="menu-item" data-section="ratings">
            <i class="fas fa-chart-line"></i>
            <span>تقيمي وتصنيفي</span>
        </a>
        
        <div class="mt-8 px-5">
            <button id="logoutBtn" class="w-full py-3 bg-gradient-to-r from-red-500 to-pink-500 text-white font-bold rounded-xl hover:opacity-90 transition-opacity">
                <i class="fas fa-sign-out-alt ml-2"></i> تسجيل الخروج
            </button>
        </div>
    </aside>

    <!-- المحتوى الرئيسي -->
    <main  style="margin-top:25%;"  class="main-content pt-20 pb-16">
        <div class="max-w-7xl mx-auto">
            <!-- قسم الترحيب -->
            <div class="welcome-section">
                <h1 class="welcome-title">مرحباً بك، أحمد! 👋</h1>
                <p class="welcome-subtitle">استمر في رحلة التعلم والتفوق مع منصة A+ التعليمية</p>
                
                <div class="progress-section mt-6">
                    <div class="flex justify-between items-center mb-2">
                        <span>تقدمك في المسار التعليمي</span>
                        <span class="font-bold">65%</span>
                    </div>
                    <div class="progress-bar">
                        <div class="progress-fill"></div>
                    </div>
                </div>
            </div>
            
            <!-- العناوين الرئيسية -->
            <h2 class="text-2xl font-bold text-gray-800 mb-6 mt-10">أقسام المنصة التعليمية</h2>
            <p class="text-gray-600 mb-8">استكشف جميع الخدمات والمميزات المتاحة لك في منصة A+</p>
            
            <!-- كروت المحتوى -->
            <div class="card-container">
                <!-- كورسات -->
<div class="category-card card-courses" onclick="window.location.href='courses/list.php'">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h3 class="card-title">الكورسات التعليمية</h3>
                        <p class="card-desc">دروس وشروحات متكاملة في جميع المواد الدراسية مع أفضل الأساتذة</p>
                    </div>
                    <div class="card-stats">
                        <div class="stat-item">
                            <span class="stat-number">12</span>
                            <span class="stat-label">كورس متاح</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">5</span>
                            <span class="stat-label">مكتملة</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">87%</span>
                            <span class="stat-label">نسبة الإنجاز</span>
                        </div>
                    </div>
                </div>
                
                <!-- التحديات -->
                <div class="category-card card-challenges" onclick="openSection('challenges')">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <h3 class="card-title">التحديات والمسابقات</h3>
                        <p class="card-desc">تحديات تعليمية تنافسية مع جوائز ومكافآت للطلاب المتميزين</p>
                    </div>
                    <div class="card-stats">
                        <div class="stat-item">
                            <span class="stat-number">8</span>
                            <span class="stat-label">تحدي نشط</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">3</span>
                            <span class="stat-label">مراكز أولى</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">150</span>
                            <span class="stat-label">نقطة</span>
                        </div>
                    </div>
                </div>
                
                <!-- الكتب والملازم -->
                <div class="category-card card-books" onclick="openSection('books')">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <h3 class="card-title">الكتب والملازم</h3>
                        <p class="card-desc">مكتبة شاملة تحتوي على كتب وملازم دراسية للتحميل والمطالعة</p>
                    </div>
                    <div class="card-stats">
                        <div class="stat-item">
                            <span class="stat-number">45</span>
                            <span class="stat-label">كتاب إلكتروني</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">120</span>
                            <span class="stat-label">ملزمة</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">+500</span>
                            <span class="stat-label">صفحة</span>
                        </div>
                    </div>
                </div>
                
                <!-- البث المباشر -->
                <div class="category-card card-live" onclick="openSection('live')">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-video"></i>
                        </div>
                        <h3 class="card-title">البث المباشر</h3>
                        <p class="card-desc">حلقات تعليمية مباشرة مع الأساتذة للأسئلة والمناقشات</p>
                    </div>
                    <div class="card-stats">
                        <div class="stat-item">
                            <span class="stat-number">2</span>
                            <span class="stat-label">بث نشط</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">18</span>
                            <span class="stat-label">بث مكتمل</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">95%</span>
                            <span class="stat-label">رضا الطلاب</span>
                        </div>
                    </div>
                </div>
                
                <!-- اختبارات -->
                <div class="category-card card-tests" onclick="openSection('tests')">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-clipboard-check"></i>
                        </div>
                        <h3 class="card-title">الاختبارات</h3>
                        <p class="card-desc">اختبارات تقييمية ذكية مع نتائج فورية وتحليل للأداء</p>
                    </div>
                    <div class="card-stats">
                        <div class="stat-item">
                            <span class="stat-number">24</span>
                            <span class="stat-label">اختبار متاح</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">92%</span>
                            <span class="stat-label">متوسط النجاح</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">15</span>
                            <span class="stat-label">اختبار مكتمل</span>
                        </div>
                    </div>
                </div>
                
                <!-- الأساتذة -->
                <div class="category-card card-teachers" onclick="openSection('teachers')">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <h3 class="card-title">الأساتذة</h3>
                        <p class="card-desc">التواصل مع أفضل الأساتذة والخبراء في التخصصات المختلفة</p>
                    </div>
                    <div class="card-stats">
                        <div class="stat-item">
                            <span class="stat-number">35</span>
                            <span class="stat-label">أستاذ نشط</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">4.8</span>
                            <span class="stat-label">متوسط التقييم</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">98%</span>
                            <span class="stat-label">نسبة الرضا</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- آخر النشاطات -->
<div class="mt-16 activity-section">
    <h2>آخر النشاطات</h2>
    <div class="activity-container">
        <div class="space-y-3">
            <!-- نشاط 1 -->
            <div class="activity-item activity-purple">
                <div class="activity-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <div class="activity-content">
                    <p class="activity-title">أكملت كورس الرياضيات المتقدم</p>
                    <p class="activity-desc">منذ 2 ساعة • 95% درجة النجاح</p>
                </div>
                <div class="new-indicator" title="نشاط جديد"></div>
            </div>
            
            <!-- نشاط 2 -->
            <div class="activity-item activity-blue">
                <div class="activity-icon">
                    <i class="fas fa-trophy"></i>
                </div>
                <div class="activity-content">
                    <p class="activity-title">فزت في تحدي اللغة العربية الأسبوعي</p>
                    <p class="activity-desc">منذ يوم • المركز الأول</p>
                </div>
                <span class="activity-badge">🏆 فائز</span>
            </div>
            
            <!-- نشاط 3 -->
            <div class="activity-item activity-green">
                <div class="activity-icon">
                    <i class="fas fa-video"></i>
                </div>
                <div class="activity-content">
                    <p class="activity-title">بث مباشر جديد: شرح منهج الفيزياء</p>
                    <p class="activity-desc">غداً الساعة 5:00 مساءً • أ. محمد علي</p>
                </div>
                <span class="activity-badge">قادم</span>
            </div>
            
            <!-- نشاط 4 -->
            <div class="activity-item activity-orange">
                <div class="activity-icon">
                    <i class="fas fa-book"></i>
                </div>
                <div class="activity-content">
                    <p class="activity-title">تمت إضافة ملزمة جديدة للكيمياء</p>
                    <p class="activity-desc">منذ 3 أيام • الفصل الثالث</p>
                </div>
                <button class="download-btn">
                    <i class="fas fa-download ml-1"></i> تحميل
                </button>
            </div>
            
            <!-- نشاط 5 -->
            <div class="activity-item activity-red">
                <div class="activity-icon">
                    <i class="fas fa-exclamation-circle"></i>
                </div>
                <div class="activity-content">
                    <p class="activity-title">اختبار قادم: مادة التاريخ</p>
                    <p class="activity-desc">بعد غد • 30 سؤال • 60 دقيقة</p>
                </div>
                <span class="activity-badge">⚠️ مهم</span>
            </div>
        </div>
        
        <!-- زر عرض المزيد -->
        <div class="activity-divider text-center">
            <button class="view-all-btn">
                <i class="fas fa-history ml-2"></i>
                عرض جميع النشاطات
                <i class="fas fa-chevron-left mr-2"></i>
            </button>
        </div>
    </div>
</div>
        
        <!-- زر عرض المزيد -->
        <div class="text-center mt-6 pt-4 border-t border-gray-200 dark:border-gray-700">
            <button class="text-purple-600 dark:text-purple-400 hover:text-purple-800 dark:hover:text-purple-300 font-medium text-sm">
                <i class="fas fa-history ml-2"></i>
                عرض جميع النشاطات
                <i class="fas fa-chevron-left mr-2"></i>
            </button>
        </div>
    </div>
</div>
        </div>
    </main>

    <!-- الشريط السفلي -->
    <footer class="footer-bar">
        جميع الحقوق محفوظة © 2025 | مطور بواسطة A+
    </footer>

    <!-- نافذة حول المنصة -->
    <div id="aboutModal" class="modal-overlay fixed inset-0 z-50 flex items-center justify-center p-4 hidden">
        <div class="modal-content">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold">حول منصة A+</h2>
                <button id="closeModal" class="text-gray-500 hover:text-gray-700 text-2xl">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <p class="mb-4 leading-relaxed">
                منصة A+ هي بيئة تعليمية متكاملة تهدف إلى مساعدة الطلاب على تحقيق التفوق الأكاديمي من خلال تقديم محتوى تعليمي متميز واختبارات تقييمية ذكية.
            </p>
            <div class="flex justify-center mt-6">
                <button id="closeModalBtn" class="px-6 py-3 bg-gradient-to-r from-purple-500 to-blue-500 text-white font-bold rounded-xl hover:opacity-90 transition-opacity">
                    فهمت، شكراً!
                </button>
            </div>
        </div>
    </div>

    <!-- ملفات JS -->
    <script src="theme.js"></script>
    <script>
        // التحكم بالقائمة الجانبية
        const menuBtn = document.getElementById('menuBtn');
        const sidebar = document.getElementById('sidebar');
        const sidebarOverlay = document.getElementById('sidebarOverlay');
        const mainContent = document.querySelector('.main-content');
        
        menuBtn.addEventListener('click', () => {
            sidebar.classList.toggle('active');
            sidebarOverlay.classList.toggle('active');
            mainContent.classList.toggle('sidebar-open');
        });
        
        sidebarOverlay.addEventListener('click', () => {
            sidebar.classList.remove('active');
            sidebarOverlay.classList.remove('active');
            mainContent.classList.remove('sidebar-open');
        });
        
        // إغلاق القائمة عند النقر على رابط
        document.querySelectorAll('.menu-item').forEach(item => {
            item.addEventListener('click', (e) => {
                e.preventDefault();
                
                // إزالة النشاط من جميع العناصر
                document.querySelectorAll('.menu-item').forEach(el => {
                    el.classList.remove('active');
                });
                
                // إضافة النشاط للعنصر الحالي
                item.classList.add('active');
                
                // هنا يمكنك إضافة كود لتحميل المحتوى المناسب
                const section = item.dataset.section;
                console.log('تم اختيار قسم:', section);
                
                // إغلاق القائمة على الهواتف
                if (window.innerWidth < 768) {
                    sidebar.classList.remove('active');
                    sidebarOverlay.classList.remove('active');
                    mainContent.classList.remove('sidebar-open');
                }
            });
        });
        
        // زر تسجيل الخروج
        document.getElementById('logoutBtn').addEventListener('click', () => {
            if (confirm('هل أنت متأكد من تسجيل الخروج؟')) {
                window.location.href = 'index.html';
            }
        });
        
        // فتح الأقسام عند النقر على الكروت
        function openSection(section) {
            alert(`سيتم فتح قسم: ${section}`);
            // هنا يمكنك إضافة كود لتحميل المحتوى المناسب
        }
        
        // تحميل بيانات المستخدم (يمكن استبدالها ببيانات حقيقية)
        function loadUserData() {
            // هنا يمكنك جلب بيانات المستخدم من قاعدة البيانات
            const userData = {
                name: 'أحمد محمد',
                role: 'طالب',
                image: 'logo.jpg'
            };
            
            document.getElementById('userName').textContent = userData.name;
            document.getElementById('userRole').textContent = userData.role;
            document.getElementById('profileImage').src = userData.image;
        }
        
        // تحميل بيانات المستخدم عند فتح الصفحة
        document.addEventListener('DOMContentLoaded', loadUserData);
        
        // إضافة تأثير عند التمرير
        window.addEventListener('scroll', () => {
            const header = document.querySelector('.header-bar');
            if (window.scrollY > 50) {
                header.style.boxShadow = '0 4px 20px rgba(0,0,0,0.15)';
            } else {
                header.style.boxShadow = 'none';
            }
        });
        
        // محاكاة الإشعارات
        document.querySelector('.notification-badge').addEventListener('click', () => {
            alert('لديك 3 إشعارات جديدة:\n1. اختبار جديد متاح\n2. رد على سؤالك\n3. تحديث في المنصة');
        });
    </script>
</body>
</html>